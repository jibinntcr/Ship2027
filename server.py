import base64
import hashlib
import http.server
import json
import os
import re
import socketserver
import sqlite3
import threading
import time
import urllib.parse

BASE_DIR = os.path.dirname(os.path.abspath(__file__))
DB_PATH = os.path.join(BASE_DIR, "database", "shiptech.db")
UPLOAD_DIR = os.path.join(BASE_DIR, "img", "uploads")

ALLOWED_TABLES = {
    "faculty": ["name", "designation", "specialization", "email", "phone", "image", "profile_url", "facebook", "twitter", "linkedin", "sort_order"],
    "technical_staff": ["name", "designation", "email", "phone", "image", "sort_order"],
    "research_guides": ["name", "designation", "research_areas", "image", "profile_url", "sort_order"],
    "phd_awarded": ["name", "thesis_title", "supervisor", "year_of_award", "sort_order"],
    "phd_students": ["name", "thesis_title", "supervisor", "year_of_registration", "sort_order"],
    "mous": ["title", "year", "description", "image", "sort_order"],
    "courses": ["title", "description", "duration", "image", "link", "sort_order"],
    "events": ["title", "event_date", "description", "image", "link"],
    "gallery": ["title", "category", "image"],
    "announcements": ["title", "link", "is_active"],
    "testimonials": ["name", "role", "content", "image"],
    "placement_brochures": ["title", "file_path", "image", "sort_order"],
    "placement_coordinators": ["name", "role_type", "email", "phone", "sort_order"],
    "inquiries": ["type", "name", "email", "subject_or_batch", "category", "message"],
}

# In-memory cache for fast public reads (< 1ms response time)
_CACHE_LOCK = threading.Lock()
_PUBLIC_DATA_CACHE = None


def invalidate_cache():
    global _PUBLIC_DATA_CACHE
    with _CACHE_LOCK:
        _PUBLIC_DATA_CACHE = None


def get_db():
    conn = sqlite3.connect(DB_PATH, timeout=10.0)
    conn.row_factory = sqlite3.Row
    conn.execute("PRAGMA journal_mode = WAL;")
    conn.execute("PRAGMA synchronous = NORMAL;")
    conn.execute("PRAGMA foreign_keys = ON;")
    conn.execute("PRAGMA temp_store = MEMORY;")
    conn.execute("PRAGMA cache_size = -20000;")
    return conn


def fetch_table(conn, query, params=()):
    cur = conn.execute(query, params)
    return [dict(r) for r in cur.fetchall()]


def fetch_settings(conn):
    cur = conn.execute("SELECT key, value FROM settings")
    return {r["key"]: r["value"] for r in cur.fetchall()}


def get_public_data_payload():
    global _PUBLIC_DATA_CACHE
    with _CACHE_LOCK:
        if _PUBLIC_DATA_CACHE is not None:
            return _PUBLIC_DATA_CACHE

    conn = get_db()
    try:
        data = {
            "settings": fetch_settings(conn),
            "announcements": fetch_table(conn, "SELECT * FROM announcements WHERE is_active = 1 ORDER BY id DESC"),
            "faculty": fetch_table(conn, "SELECT * FROM faculty ORDER BY sort_order ASC, id ASC"),
            "technical_staff": fetch_table(conn, "SELECT * FROM technical_staff ORDER BY sort_order ASC, id ASC"),
            "research_guides": fetch_table(conn, "SELECT * FROM research_guides ORDER BY sort_order ASC, id ASC"),
            "phd_awarded": fetch_table(conn, "SELECT * FROM phd_awarded ORDER BY sort_order ASC, id ASC"),
            "phd_students": fetch_table(conn, "SELECT * FROM phd_students ORDER BY sort_order ASC, id ASC"),
            "mous": fetch_table(conn, "SELECT * FROM mous ORDER BY sort_order ASC, id ASC"),
            "courses": fetch_table(conn, "SELECT * FROM courses ORDER BY sort_order ASC, id ASC"),
            "events": fetch_table(conn, "SELECT * FROM events ORDER BY event_date DESC, id DESC"),
            "gallery": fetch_table(conn, "SELECT * FROM gallery ORDER BY id DESC"),
            "testimonials": fetch_table(conn, "SELECT * FROM testimonials ORDER BY id ASC"),
            "placement_brochures": fetch_table(conn, "SELECT * FROM placement_brochures ORDER BY sort_order ASC, id ASC"),
            "placement_coordinators": fetch_table(conn, "SELECT * FROM placement_coordinators ORDER BY sort_order ASC, id ASC"),
        }
        payload = json.dumps(data).encode("utf-8")
        with _CACHE_LOCK:
            _PUBLIC_DATA_CACHE = payload
        return payload
    finally:
        conn.close()


def fetch_db_meta(conn):
    indexes = fetch_table(
        conn,
        "SELECT name, tbl_name FROM sqlite_master WHERE type='index' AND name NOT LIKE 'sqlite_%' ORDER BY tbl_name, name",
    )
    journal_mode = conn.execute("PRAGMA journal_mode;").fetchone()[0]
    size_bytes = os.path.getsize(DB_PATH) if os.path.isfile(DB_PATH) else 0
    return {
        "journal_mode": journal_mode.upper(),
        "size_kb": round(size_bytes / 1024.0, 1),
        "index_count": len(indexes),
        "indexes": indexes,
    }


import socket

class ThreadedHTTPServer(socketserver.ThreadingMixIn, socketserver.TCPServer):
    allow_reuse_address = True
    daemon_threads = True
    address_family = socket.AF_INET6

    def server_bind(self):
        self.socket.setsockopt(socket.IPPROTO_IPV6, socket.IPV6_V6ONLY, 0)
        super().server_bind()


class ShiptechServerHandler(http.server.SimpleHTTPRequestHandler):
    protocol_version = "HTTP/1.1"

    def log_message(self, format, *args):
        # Suppress noisy per-asset console logging for faster I/O
        pass

    def end_headers(self):
        path = urllib.parse.urlparse(self.path).path
        if any(path.endswith(ext) for ext in (".jpg", ".jpeg", ".png", ".webp", ".gif", ".ico", ".woff", ".woff2", ".ttf", ".min.css", ".min.js")):
            self.send_header("Cache-Control", "public, max-age=86400")
        super().end_headers()

    def send_json_bytes(self, body, status=200):
        self.send_response(status)
        self.send_header("Content-Type", "application/json; charset=utf-8")
        self.send_header("Content-Length", str(len(body)))
        self.send_header("Cache-Control", "no-store")
        self.end_headers()
        self.wfile.write(body)

    def send_json(self, data, status=200):
        self.send_json_bytes(json.dumps(data).encode("utf-8"), status=status)

    def read_json(self):
        length = int(self.headers.get("Content-Length", 0))
        if length <= 0:
            return {}
        raw = self.rfile.read(length)
        return json.loads(raw.decode("utf-8"))

    def do_GET(self):
        parsed = urllib.parse.urlparse(self.path)
        path = parsed.path

        if path == "/api/public-data":
            self.send_json_bytes(get_public_data_payload())
            return

        if path == "/api/admin/all":
            conn = get_db()
            try:
                data = {
                    "settings": fetch_settings(conn),
                    "announcements": fetch_table(conn, "SELECT * FROM announcements ORDER BY id DESC"),
                    "faculty": fetch_table(conn, "SELECT * FROM faculty ORDER BY sort_order ASC, id ASC"),
                    "technical_staff": fetch_table(conn, "SELECT * FROM technical_staff ORDER BY sort_order ASC, id ASC"),
                    "research_guides": fetch_table(conn, "SELECT * FROM research_guides ORDER BY sort_order ASC, id ASC"),
                    "phd_awarded": fetch_table(conn, "SELECT * FROM phd_awarded ORDER BY sort_order ASC, id ASC"),
                    "phd_students": fetch_table(conn, "SELECT * FROM phd_students ORDER BY sort_order ASC, id ASC"),
                    "mous": fetch_table(conn, "SELECT * FROM mous ORDER BY sort_order ASC, id ASC"),
                    "courses": fetch_table(conn, "SELECT * FROM courses ORDER BY sort_order ASC, id ASC"),
                    "events": fetch_table(conn, "SELECT * FROM events ORDER BY event_date DESC, id DESC"),
                    "gallery": fetch_table(conn, "SELECT * FROM gallery ORDER BY id DESC"),
                    "testimonials": fetch_table(conn, "SELECT * FROM testimonials ORDER BY id ASC"),
                    "placement_brochures": fetch_table(conn, "SELECT * FROM placement_brochures ORDER BY sort_order ASC, id ASC"),
                    "placement_coordinators": fetch_table(conn, "SELECT * FROM placement_coordinators ORDER BY sort_order ASC, id ASC"),
                    "inquiries": fetch_table(conn, "SELECT * FROM inquiries ORDER BY created_at DESC, id DESC"),
                    "db_meta": fetch_db_meta(conn),
                }
                self.send_json(data)
            finally:
                conn.close()
            return

        if path in ("/shipadmin", "/shipadmin/", "/shipadmin/index.php", "/shipadmin/index.html"):
            admin_file = os.path.join(BASE_DIR, "shipadmin", "index.html")
            if os.path.isfile(admin_file):
                with open(admin_file, "rb") as f:
                    data = f.read()
                self.send_response(200)
                self.send_header("Content-Type", "text/html; charset=utf-8")
                self.send_header("Content-Length", str(len(data)))
                self.send_header("Cache-Control", "no-cache")
                self.end_headers()
                self.wfile.write(data)
                return

        if path in ("/", "/index.html"):
            path = "/index.php"
        elif path.endswith(".html") and not path.startswith("/shipadmin"):
            php_candidate = os.path.join(BASE_DIR, path.lstrip("/")[:-5] + ".php")
            if os.path.isfile(php_candidate):
                path = path[:-5] + ".php"

        filepath = os.path.join(BASE_DIR, path.lstrip("/"))
        if filepath.endswith(".php") and os.path.isfile(filepath):
            with open(filepath, "r", encoding="utf-8", errors="replace") as f:
                content = f.read()

            def repl(m):
                inc = os.path.join(BASE_DIR, m.group(1))
                if os.path.isfile(inc):
                    with open(inc, "r", encoding="utf-8", errors="replace") as inf:
                        return inf.read()
                return ""

            for _ in range(3):
                content = re.sub(r"<\?php\s+include\(\x27([^\x27]+)\x27\)\s*;?\s*\?>", repl, content)
            # Inject preloaded public data inline so pages render with zero extra API round-trip
            public_json = get_public_data_payload().decode("utf-8")
            inline_script = f"<script>window.__SHIPTECH_DATA__ = {public_json};</script>\n"
            content = content.replace("<script src=\"js/site-data.js\"></script>", inline_script + "<script src=\"js/site-data.js\"></script>", 1)

            data = content.encode("utf-8")
            self.send_response(200)
            self.send_header("Content-Type", "text/html; charset=utf-8")
            self.send_header("Content-Length", str(len(data)))
            self.send_header("Cache-Control", "no-cache")
            self.end_headers()
            self.wfile.write(data)
            return

        super().do_GET()

    def do_POST(self):
        parsed = urllib.parse.urlparse(self.path)
        path = parsed.path

        if path == "/api/login":
            body = self.read_json()
            username = body.get("username", "")
            password = body.get("password", "")
            pw_hash = hashlib.sha256(password.encode("utf-8")).hexdigest()
            conn = get_db()
            try:
                cur = conn.execute(
                    "SELECT id, username FROM admins WHERE username = ? AND password_hash = ?",
                    (username, pw_hash),
                )
                row = cur.fetchone()
                if row:
                    self.send_json({"ok": True, "token": "shipadmin-session-" + str(row["id"]), "username": row["username"]})
                else:
                    self.send_json({"ok": False, "error": "Invalid username or password"}, status=401)
            finally:
                conn.close()
            return

        if path == "/api/admin/change-password":
            body = self.read_json()
            username = body.get("username", "admin")
            current_password = body.get("current_password", "")
            new_password = body.get("new_password", "")
            if not new_password or len(new_password) < 4:
                self.send_json({"ok": False, "error": "New password must be at least 4 characters"}, status=400)
                return
            curr_hash = hashlib.sha256(current_password.encode("utf-8")).hexdigest()
            new_hash = hashlib.sha256(new_password.encode("utf-8")).hexdigest()
            conn = get_db()
            try:
                cur = conn.execute(
                    "SELECT id FROM admins WHERE username = ? AND password_hash = ?",
                    (username, curr_hash),
                )
                row = cur.fetchone()
                if not row:
                    self.send_json({"ok": False, "error": "Current password is incorrect"}, status=400)
                    return
                conn.execute(
                    "UPDATE admins SET password_hash = ? WHERE id = ?",
                    (new_hash, row["id"]),
                )
                conn.commit()
                self.send_json({"ok": True})
            finally:
                conn.close()
            return

        if path == "/api/admin/optimize":
            conn = get_db()
            try:
                conn.execute("PRAGMA analyze;")
                conn.execute("PRAGMA optimize;")
                conn.commit()
                invalidate_cache()
                self.send_json({"ok": True, "db_meta": fetch_db_meta(conn)})
            finally:
                conn.close()
            return

        if path == "/api/inquiries":
            body = self.read_json()
            conn = get_db()
            try:
                conn.execute(
                    """INSERT INTO inquiries (type, name, email, subject_or_batch, category, message)
                       VALUES (?, ?, ?, ?, ?, ?)""",
                    (
                        body.get("type", "contact"),
                        body.get("name", ""),
                        body.get("email", ""),
                        body.get("subject_or_batch", ""),
                        body.get("category", ""),
                        body.get("message", ""),
                    ),
                )
                conn.commit()
                self.send_json({"ok": True})
            finally:
                conn.close()
            return

        if path == "/api/admin/settings":
            body = self.read_json()
            conn = get_db()
            try:
                for k, v in body.items():
                    conn.execute(
                        "INSERT INTO settings (key, value) VALUES (?, ?) ON CONFLICT(key) DO UPDATE SET value = excluded.value",
                        (k, str(v)),
                    )
                conn.commit()
                invalidate_cache()
                self.send_json({"ok": True})
            finally:
                conn.close()
            return

        if path == "/api/admin/upload":
            body = self.read_json()
            filename = os.path.basename(body.get("filename", "upload.jpg"))
            tab = body.get("tab", "")
            safe_name = re.sub(r"[^a-zA-Z0-9._-]", "_", filename)
            safe_name = f"{int(time.time())}_{safe_name}"
            data_url = body.get("data", "")
            if "," in data_url:
                data_url = data_url.split(",", 1)[1]
            raw_bytes = base64.b64decode(data_url)
            max_bytes = 25 * 1024 * 1024  # 25 MB max (supports 5 MB+ placement brochures)
            if len(raw_bytes) > max_bytes:
                self.send_json({"ok": False, "error": "File exceeds maximum allowed size of 25 MB"}, status=400)
                return
            folder_map = {
                "gallery": "gallery_data/images",
                "faculty": "faculty_data/images",
                "technical_staff": "technical_staff_data/images",
                "research_guides": "uploads",
                "testimonials": "testimonials_data/images",
                "placement_brochures": "placement_data/brochures",
            }
            if safe_name.lower().endswith(".pdf"):
                rel_dir = "placement_data/brochures"
            else:
                rel_dir = folder_map.get(tab, "uploads")
            target_dir = os.path.join(BASE_DIR, rel_dir)
            os.makedirs(target_dir, exist_ok=True)
            out_path = os.path.join(target_dir, safe_name)
            with open(out_path, "wb") as f:
                f.write(raw_bytes)
            self.send_json({"ok": True, "path": f"{rel_dir}/{safe_name}", "size_kb": round(len(raw_bytes) / 1024.0, 1)})
            return

        m = re.match(r"^/api/admin/([a-z_]+)$", path)
        if m:
            table = m.group(1)
            if table not in ALLOWED_TABLES:
                self.send_json({"error": "Invalid table"}, status=400)
                return
            body = self.read_json()
            cols = [c for c in ALLOWED_TABLES[table] if c in body]
            conn = get_db()
            try:
                if body.get("id"):
                    set_clause = ", ".join([f"{c} = ?" for c in cols])
                    vals = [body[c] for c in cols] + [body["id"]]
                    conn.execute(f"UPDATE {table} SET {set_clause} WHERE id = ?", vals)
                else:
                    col_names = ", ".join(cols)
                    placeholders = ", ".join(["?" for _ in cols])
                    vals = [body[c] for c in cols]
                    conn.execute(f"INSERT INTO {table} ({col_names}) VALUES ({placeholders})", vals)
                conn.commit()
                invalidate_cache()
                self.send_json({"ok": True})
            finally:
                conn.close()
            return

        self.send_json({"error": "Not found"}, status=404)

    def do_DELETE(self):
        parsed = urllib.parse.urlparse(self.path)
        m = re.match(r"^/api/admin/([a-z_]+)/(\d+)$", parsed.path)
        if m:
            table = m.group(1)
            rec_id = int(m.group(2))
            if table not in ALLOWED_TABLES:
                self.send_json({"error": "Invalid table"}, status=400)
                return
            conn = get_db()
            try:
                conn.execute(f"DELETE FROM {table} WHERE id = ?", (rec_id,))
                conn.commit()
                invalidate_cache()
                self.send_json({"ok": True})
            finally:
                conn.close()
            return

        self.send_json({"error": "Not found"}, status=404)


if __name__ == "__main__":
    os.chdir(BASE_DIR)
    if not os.path.isfile(DB_PATH):
        from database.init_db import init_db
        init_db()
    # Warm up cache on startup
    get_public_data_payload()
    port = int(os.environ.get("PORT", 8000))
    with ThreadedHTTPServer(("::", port), ShiptechServerHandler) as httpd:
        print(f"Dual-stack IPv6/IPv4 HTTP/1.1 Shiptech server running at http://localhost:{port}", flush=True)
        httpd.serve_forever()
