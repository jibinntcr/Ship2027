import os
import sqlite3
import hashlib

BASE_DIR = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
DB_PATH = os.path.join(BASE_DIR, "database", "shiptech.db")
SCHEMA_PATH = os.path.join(BASE_DIR, "database", "schema.sql")


def init_db():
    os.makedirs(os.path.dirname(DB_PATH), exist_ok=True)
    conn = sqlite3.connect(DB_PATH)
    cur = conn.cursor()

    with open(SCHEMA_PATH, "r", encoding="utf-8") as f:
        cur.executescript(f.read())

    # Seed default admin (admin / admin@ship)
    pw_hash = hashlib.sha256("admin@ship".encode("utf-8")).hexdigest()
    cur.execute(
        "INSERT OR IGNORE INTO admins (id, username, password_hash) VALUES (1, 'admin', ?)",
        (pw_hash,),
    )

    # Seed default settings
    default_settings = {
        "department_name": "Department of Ship Technology",
        "university_name": "Cochin University of Science and Technology",
        "email": "ship@cusat.ac.in",
        "phone_header": "0484 - 2577602",
        "phone_footer": "+91-484 257-5714",
        "address": "Department of Ship Technology, Cochin University of Science and Technology, Cochin-22, Kerala, India",
        "vision": "To evolve into a globally recognized department in the frontier areas of Naval Architecture and Ship Building.",
        "about_title": "Surging ahead since 1975",
        "about_text": (
            "This Department is one of the pioneers in the field of Naval Architecture education in this country "
            "and was established in 1975 with an aim to create a new and dynamic generation of Naval Architects "
            "to meet the requirements of the Indian Shipbuilding Industry, Ship Classification Societies, R&D "
            "organizations, Indian Navy, and related organisations. This Department maintains active collaboration "
            "and interaction with IITs, foreign Universities, shipyards and other industries. These organizations "
            "have been generous in extending their facilities and expertise to impart training to our students. "
            "The fruitful collaboration of this Department with Rostock University, Germany dates back to 1978 "
            "and remains as an important milestone in the development of this Department. The curriculum was drawn "
            "up and updated in consultation with experts from various academic institutions and industries. This "
            "has brought the course curriculum in conformity with international standards. The quality of education "
            "imparted and the resulting professional competence of the graduates enabled the Department to achieve "
            "a unique record of 100 percent placement of its graduates in India and abroad."
        ),
        "hod_title": "Shiptech CUSAT",
        "hod_message": (
            "Greetings from the Department of Ship Technology (DoST), Cochin University of Science & Technology (CUSAT), Kerala, India!!\n\n"
            "The DoST was established in 1974 and is one of the oldest departments in CUSAT. DoST is a pioneer in the field of Naval Architecture education in the country and has produced global leaders in maritime sector, in diverse fields including design, construction, operation, survey, maintenance, education and research.\n"
            "We are conducting a B.Tech course in Naval Architecture and Ship Building (NASB) whose graduates have a 100% placement record for the past several years, a M.Tech course in Computer Aided Structural Analysis and design (CASAD)whose graduates are well placed mostly in the marine industry, and a Ph.D programme with 41 scholars at present.\n"
            "We are a truly interdisciplinary department with a very strong research atmosphere. Much of the graduate level research is done at the Computational Hydrodynamics and Structural Engineering (CHASE) Lab that software such as STAR-CCM+, CATIA, ABAQUS, ORCAFLEX, MATLAB, and ANSYS. The DoST has collaboration with the Indian Navy, MoUs with leading shipyards, Classification Societies and academic institutions.\n"
            "The support from DOSTAS (Department of Ship Technology Alumni Society) and its various chapters to the overall development is highly encouraging.\n"
            "Student achievements are recognized through RINA (Royal Institution of Naval Architects, London) student Naval Architect award, ClassNK best project award and also awards by PTA. A platform for developing technical and professional leadership among students is provided by the SNAS (Society of Naval Architecture Students). Department training and placement cell provides professional assistance for student placement as well as internship in leading companies.\n"
            "We are also actively participating in industrial projects as well as consultancy services through DESON, the consultancy wing of DoST.\n"
            "I invite you to browse through the web pages for further information"
        ),
        "hod_image": "uploads/mathi.png",
    }
    for k, v in default_settings.items():
        cur.execute("INSERT OR IGNORE INTO settings (key, value) VALUES (?, ?)", (k, v))

    # Seed announcements if empty
    cur.execute("SELECT COUNT(*) FROM announcements")
    if cur.fetchone()[0] == 0:
        cur.executemany(
            "INSERT INTO announcements (title, link, is_active) VALUES (?, ?, ?)",
            [
                ("Admissions open for B.Tech Naval Architecture & Ship Building and M.Tech programmes.", "https://admissions.cusat.ac.in/", 1),
                ("Annual Technical Symposium & Industry Meet scheduled for next month.", "events.php", 1),
            ],
        )

    # Seed faculty if empty
    cur.execute("SELECT COUNT(*) FROM faculty")
    if cur.fetchone()[0] == 0:
        cur.executemany(
            """INSERT INTO faculty (name, designation, specialization, email, phone, image, profile_url, sort_order)
               VALUES (?, ?, ?, ?, ?, ?, ?, ?)""",
            [
                ("Dr. A. Mathiazhagan", "Professor and Head of the Department", "Ph.D. | Materials Technology and Corrosion Engg, Welding Technology, Composite Technology", "alagan@cusat.ac.in", "0484-2575714", "faculty_data/images/mathi.png", "https://shiptech.cusat.ac.in/faculty-details.php?id=22&name=dr-a-mathiazhagan", 1),
                ("Dr. Satheesh Babu P.K", "Associate Professor", "Ph.D. | Naval Architecture, Marine Hydrodynamics, Ship Design", "satheeshbabu@cusat.ac.in", "0484-2575714", "faculty_data/images/satheeshbabu.jpg", "https://shiptech.cusat.ac.in/faculty-details.php?id=23&name=dr-satheesh-babu-pk", 2),
                ("Dr. D. D. Ebenezer", "Adjunct Faculty", "Ph. D. | Computational Fluid Dynamics, Analysis and Design of St, Underwater Electroacousti", "ebenezer@cusat.ac.in", "0484-2575714", "faculty_data/images/fac-6.jpg", "https://shiptech.cusat.ac.in/faculty-details.php?id=11&name=dr-d-d-ebenezer", 3),
                ("Dr. Rajesh P Nair", "Assistant Professor", "Ph.D. | Finite Element method, Impact Mechanics, Blast Analysis", "rajeshpnair@cusat.ac.in", "0484-2575714", "faculty_data/images/fac-2.jpg", "https://shiptech.cusat.ac.in/faculty-details.php?id=7&name=dr-rajesh-p-nair", 4),
                ("Dr. Manoj T. Issac", "Assistant Professor", "Ph.D. | Experimental and Numerical Hydrodynamics of Unmanned Underwater Vehicles, Dynamics Modeling of Underwater Vehicles using Identification Techniques, Dynamics of Floating Offshore Structures", "m.issac@cusat.ac.in", "0484-2575714", "faculty_data/images/Untitled_design__5_.png", "https://shiptech.cusat.ac.in/faculty-details.php?id=13&name=dr-manoj-t-issac", 5),
                ("Dr. Favas T K", "Assistant Professor (Lien)", "Ph.D. | Computational Fluid Dynamics, Numerical Heat Transfer, Computational Methods in", "favastk@cusat.ac.in", "0484-2575714", "faculty_data/images/fac-4.jpg", "https://shiptech.cusat.ac.in/faculty-details.php?id=9&name=dr-favas-t-k", 6),
                ("Akram P. A.", "Assistant Professor (On Leave)", "M. Tech. | Finite Element Analysis, Ship Structural Analysis, Offshore Structures", "akrampa@cusat.ac.in", "0484-2575714", "faculty_data/images/Untitled_design__24_.png", "https://shiptech.cusat.ac.in/faculty-details.php?id=16&name=akram-p-a", 7),
                ("Dr. Aravind K.R", "Assistant Professor", "Ph.D | Inland Waterways Transport, Ship Design, Marine Engineering", "aravind@cusat.ac.in", "0484-2575714", "faculty_data/images/IMG_0154_copy__1_.JPG", "https://shiptech.cusat.ac.in/faculty-details.php?id=18&name=dr-aravind-kr", 8),
                ("Dr. Beena Mary John", "Assistant Professor", "Ph.D | Computational Fluid Dynamics, Physical model studies of marine structures, Fluid structure interaction", "beena.john@cusat.ac.in", "0484-2575714", "faculty_data/images/Beena_MJ2.jpg", "https://shiptech.cusat.ac.in/faculty-details.php?id=20&name=dr-beena-mary-john", 9),
                ("Dr. Haseena K A", "Assistant Professor", "Ph.D | Renewable/Green Energy Systems-Modeling, Optimization and Integration, Electric Propulsion Systems- Dynamics and Control, Machine Learning and AI Techniques for Energy Systems", "haseenaka@cusat.ac.in", "0484-2575714", "faculty_data/images/haseena.jpg", "https://shiptech.cusat.ac.in/faculty-details.php?id=21&name=dr-haseena-k-a", 10),
            ],
        )

    # Seed technical staff if empty
    cur.execute("SELECT COUNT(*) FROM technical_staff")
    if cur.fetchone()[0] == 0:
        cur.executemany(
            """INSERT INTO technical_staff (name, designation, email, phone, image, sort_order)
               VALUES (?, ?, ?, ?, ?, ?)""",
            [
                ("SHIJU S", "Technical Officer Gr I", "", "", "technical_staff_data/images/tech-fac1.jpg", 1),
                ("SANTHOSH KUMAR K", "Technical Assistant", "", "", "technical_staff_data/images/tech-fac2.jpg", 2),
                ("Dr. Sheeja N.K.", "Deputy Librarian", "", "", "technical_staff_data/images/admin_staff_2.jpg", 3),
            ],
        )

    # Seed courses if empty
    cur.execute("SELECT COUNT(*) FROM courses")
    if cur.fetchone()[0] == 0:
        cur.executemany(
            """INSERT INTO courses (title, description, duration, image, link, sort_order)
               VALUES (?, ?, ?, ?, ?, ?)""",
            [
                ("B.Tech in Naval Architecture & Ship Building", "Four-year full-time undergraduate programme covering ship design, hydrodynamics, marine structures, ship production, and marine engineering with 100% placement track record.", "4 Years (8 Semesters)", "uploads/btchnavel.jpg", "academics.php#btech", 1),
                ("M.Tech in Computer Aided Structural Analysis & Design (CASAD)", "Two-year postgraduate programme focusing on finite element analysis, offshore and marine structures, structural dynamics, and CAD.", "2 Years (4 Semesters)", "uploads/mtech.jpg", "academics.php#mtech", 2),
                ("Ph.D. in Naval Architecture & Ocean Engineering", "Doctoral research programme in ship hydrodynamics, structural mechanics, ship recycling, green shipping, and ocean engineering.", "3 - 5 Years", "img/phd_image-thumb.jpg", "academics.php#phd", 3),
                ("Short-Term Industry Training Courses", "Specialized continuing education programmes for shipyard engineers, classification society surveyors, and Indian Navy officers.", "2 - 6 Weeks", "img/service-4.jpg", "academics.php", 4),
                ("CAD/CAM & Ship Design Studio", "Hands-on training in hull surface modeling, stability calculations, and structural design software suites.", "Semester Module", "img/service-5.jpg", "academics.php", 5),
                ("Towing Tank & Model Testing", "Experimental hydrodynamics and ship model testing training for undergraduate and postgraduate researchers.", "Lab Course", "img/service-6.jpg", "academics.php", 6),
            ],
        )

    # Seed events if empty
    cur.execute("SELECT COUNT(*) FROM events")
    if cur.fetchone()[0] == 0:
        cur.executemany(
            """INSERT INTO events (title, event_date, description, image, link)
               VALUES (?, ?, ?, ?, ?)""",
            [
                ("ANCHOR - Annual National Technical Symposium", "2026-11-15", "National-level technical fest and symposium organized by the Society of Naval Architecture Students (SNAS) featuring paper presentations and design competitions.", "img/service-4.jpg", "#"),
                ("International Workshop on Green Shipping & Decarbonization", "2026-12-05", "Two-day workshop in collaboration with industry experts and classification societies on sustainable ship propulsion and IMO regulations.", "img/service-5.jpg", "#"),
                ("Golden Jubilee Alumni & Industry Conclave", "2027-01-20", "Gathering of Shiptech CUSAT alumni from global shipyards, R&D institutes, Indian Navy, and classification societies.", "img/service-6.jpg", "#"),
            ],
        )

    # Seed gallery if empty
    cur.execute("SELECT COUNT(*) FROM gallery")
    if cur.fetchone()[0] == 0:
        cur.executemany(
            """INSERT INTO gallery (title, category, image)
               VALUES (?, ?, ?)""",
            [
                ("Department Video", "Video", "gallery_data/images/department-video.jpg"),
                ("Graduation Ceremony May 3, 2025", "Events", "gallery_data/images/PIC_1.jpg"),
                ("B.Tech. 46th Batch- Achieves 100% Placement", "Events", "gallery_data/images/46TH_BATCH.jpg"),
            ],
        )

    # Seed testimonials if empty
    cur.execute("SELECT COUNT(*) FROM testimonials")
    if cur.fetchone()[0] == 0:
        cur.executemany(
            """INSERT INTO testimonials (name, role, content, image)
               VALUES (?, ?, ?, ?)""",
            [
                ("Madhu S Nair", "Chairman and Managing Director, Cochin Shipyard Ltd. | Btech Naval Architecture& Shipbuilding , 1983-1988", "The Department of Ship Technology, CUSAT, has contributed immensely to the field of Naval Architecture, Shipbuilding and various other allied sectors in the global maritime sector.", "testimonials_data/images/madhu_s.png"),
                ("Abdul Rahim", "Corporate Officer, Class NK. | Btech Naval Architecture & Shipbuilding , 1979-1984", "ClassNK has long been associated with CUSAT and over the years we have recruited more than 26 CUSAT naval architects who work around the world.", "testimonials_data/images/abdhul_rahman.png"),
            ],
        )

    conn.execute("PRAGMA analyze;")
    conn.execute("PRAGMA optimize;")
    conn.commit()
    conn.close()
    print(f"Database initialized and indexed at {DB_PATH}")


if __name__ == "__main__":
    init_db()
