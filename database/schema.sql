-- Department of Ship Technology (CUSAT) Optimized Database Schema
PRAGMA journal_mode = WAL;
PRAGMA synchronous = NORMAL;
PRAGMA foreign_keys = ON;
PRAGMA temp_store = MEMORY;

CREATE TABLE IF NOT EXISTS admins (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL UNIQUE,
    password_hash TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS settings (
    key TEXT PRIMARY KEY,
    value TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS announcements (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    link TEXT DEFAULT '#',
    is_active INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS faculty (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    designation TEXT NOT NULL,
    specialization TEXT DEFAULT '',
    email TEXT DEFAULT '',
    phone TEXT DEFAULT '',
    image TEXT DEFAULT 'img/team-1.jpg',
    profile_url TEXT DEFAULT '#',
    facebook TEXT DEFAULT '',
    twitter TEXT DEFAULT '',
    linkedin TEXT DEFAULT '',
    sort_order INTEGER DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS technical_staff (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    designation TEXT NOT NULL,
    email TEXT DEFAULT '',
    phone TEXT DEFAULT '',
    image TEXT DEFAULT 'img/team-1.jpg',
    sort_order INTEGER DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS courses (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    description TEXT NOT NULL,
    duration TEXT DEFAULT '',
    image TEXT DEFAULT 'img/service-1.jpg',
    link TEXT DEFAULT '#',
    sort_order INTEGER DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS events (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    event_date TEXT DEFAULT '',
    description TEXT NOT NULL,
    image TEXT DEFAULT 'img/service-4.jpg',
    link TEXT DEFAULT '#',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS gallery (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    category TEXT DEFAULT 'Campus',
    image TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS testimonials (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    role TEXT NOT NULL,
    content TEXT NOT NULL,
    image TEXT DEFAULT 'img/testimonial-1.jpg',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS inquiries (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    type TEXT DEFAULT 'contact',
    name TEXT NOT NULL,
    email TEXT NOT NULL,
    subject_or_batch TEXT DEFAULT '',
    category TEXT DEFAULT '',
    message TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS research_guides (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    designation TEXT NOT NULL,
    research_areas TEXT NOT NULL,
    image TEXT DEFAULT 'uploads/Untitled design (7).png',
    profile_url TEXT DEFAULT '#',
    sort_order INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS phd_awarded (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    thesis_title TEXT NOT NULL,
    supervisor TEXT NOT NULL,
    year_of_award TEXT NOT NULL,
    sort_order INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS phd_students (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    thesis_title TEXT NOT NULL,
    supervisor TEXT NOT NULL,
    year_of_registration TEXT NOT NULL,
    sort_order INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS mous (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    year TEXT DEFAULT '',
    description TEXT DEFAULT '',
    image TEXT DEFAULT 'uploads/Untitled design (12).png',
    sort_order INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS syllabi (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    programme TEXT NOT NULL DEFAULT 'B.Tech',
    title TEXT NOT NULL,
    file_url TEXT NOT NULL,
    sort_order INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS approvals (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    year_badge TEXT NOT NULL,
    description TEXT DEFAULT '',
    file_url TEXT NOT NULL,
    sort_order INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS recognitions (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    designation TEXT NOT NULL,
    achievements TEXT NOT NULL,
    sort_order INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS banners (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    subtitle TEXT DEFAULT '',
    image TEXT NOT NULL,
    sort_order INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS news_items (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    news_date TEXT DEFAULT '',
    summary TEXT DEFAULT '',
    image TEXT DEFAULT '',
    file_url TEXT DEFAULT '#',
    sort_order INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS placement_stats (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    programme TEXT NOT NULL DEFAULT 'B.Tech',
    batch_title TEXT NOT NULL,
    highlights TEXT DEFAULT '',
    image TEXT DEFAULT '',
    sort_order INTEGER DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Performance Indexes for Sorting, Filtering, and Lookups
CREATE INDEX IF NOT EXISTS idx_announcements_active ON announcements(is_active, id DESC);
CREATE INDEX IF NOT EXISTS idx_faculty_sort ON faculty(sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_faculty_name ON faculty(name COLLATE NOCASE);
CREATE INDEX IF NOT EXISTS idx_staff_sort ON technical_staff(sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_courses_sort ON courses(sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_events_date ON events(event_date DESC, id DESC);
CREATE INDEX IF NOT EXISTS idx_gallery_category ON gallery(category, id DESC);
CREATE INDEX IF NOT EXISTS idx_testimonials_id ON testimonials(id ASC);
CREATE INDEX IF NOT EXISTS idx_inquiries_created ON inquiries(created_at DESC, id DESC);
CREATE INDEX IF NOT EXISTS idx_inquiries_type ON inquiries(type, created_at DESC);
CREATE INDEX IF NOT EXISTS idx_research_guides_sort ON research_guides(sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_phd_awarded_sort ON phd_awarded(sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_phd_students_sort ON phd_students(sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_mous_sort ON mous(sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_syllabi_sort ON syllabi(programme, sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_approvals_sort ON approvals(sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_recognitions_sort ON recognitions(sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_banners_sort ON banners(sort_order ASC, id ASC);
CREATE INDEX IF NOT EXISTS idx_news_items_sort ON news_items(sort_order ASC, id DESC);
CREATE INDEX IF NOT EXISTS idx_placement_stats_sort ON placement_stats(programme, sort_order ASC, id ASC);
