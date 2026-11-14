<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Faculty Profile | Department of Ship Technology, CUSAT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Faculty Profile, Naval Architecture, Ship Technology, CUSAT" name="keywords">
    <meta content="Detailed academic, research, and publication profile of faculty at the Department of Ship Technology, Cochin University of Science and Technology." name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css?v=7" rel="stylesheet">

    <style>
        .fac-detail-sidebar-card {
            background: #ffffff;
            border-radius: 24px;
            border: 1px solid rgba(14, 165, 233, 0.22);
            box-shadow: 0 20px 45px -18px rgba(9, 21, 47, 0.14);
            overflow: hidden;
            position: relative;
        }
        .fac-detail-sidebar-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #09152f 0%, #0284c7 55%, #38bdf8 100%);
            z-index: 2;
        }
        .fac-detail-photo-wrap {
            position: relative;
            background: linear-gradient(145deg, #07132c 0%, #0d2856 55%, #0284c7 100%);
            padding: 28px 28px 22px;
            text-align: center;
        }
        .fac-detail-avatar {
            width: 210px;
            height: 235px;
            object-fit: cover;
            object-position: top center;
            border-radius: 20px;
            border: 4px solid rgba(255, 255, 255, 0.92);
            box-shadow: 0 18px 36px -12px rgba(2, 8, 23, 0.55);
            background: #ffffff;
        }
        .fac-detail-role-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 6px 14px;
            border-radius: 999px;
            background: rgba(56, 189, 248, 0.18);
            border: 1px solid rgba(125, 211, 252, 0.45);
            color: #e0f2fe;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.4px;
            margin-top: 14px;
        }
        .fac-detail-qual-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 12px;
            border-radius: 999px;
            background: #f0f9ff;
            border: 1px solid rgba(2, 132, 199, 0.24);
            color: #0369a1;
            font-size: 0.78rem;
            font-weight: 700;
        }
        .fac-stat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            padding: 16px 20px;
            background: #f8fafc;
            border-top: 1px solid rgba(15, 23, 42, 0.07);
            border-bottom: 1px solid rgba(15, 23, 42, 0.07);
        }
        .fac-stat-box {
            text-align: center;
            padding: 8px 6px;
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid rgba(14, 165, 233, 0.16);
        }
        .fac-stat-num {
            font-size: 1.25rem;
            font-weight: 800;
            color: #09152f;
            line-height: 1.1;
        }
        .fac-stat-label {
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #64748b;
            margin-top: 3px;
        }
        .fac-contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .fac-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px dashed rgba(15, 23, 42, 0.09);
            font-size: 0.9rem;
            color: #334155;
        }
        .fac-contact-item:last-child {
            border-bottom: none;
        }
        .fac-contact-icon {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
            color: #0284c7;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 0.9rem;
        }
        .fac-contact-label {
            display: block;
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: #64748b;
            margin-bottom: 2px;
        }
        .fac-contact-val {
            font-weight: 600;
            color: #09152f;
            word-break: break-word;
            text-decoration: none;
        }
        a.fac-contact-val:hover {
            color: #0284c7;
        }
        .fac-external-btn {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            width: 100%;
            padding: 11px 16px;
            border-radius: 14px;
            font-size: 0.86rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s ease;
            margin-bottom: 8px;
        }
        .fac-external-btn.primary {
            background: linear-gradient(135deg, #09152f 0%, #0284c7 100%);
            color: #ffffff;
            box-shadow: 0 10px 22px -8px rgba(2, 132, 199, 0.45);
        }
        .fac-external-btn.primary:hover {
            transform: translateY(-2px);
            color: #ffffff;
            box-shadow: 0 14px 26px -8px rgba(2, 132, 199, 0.6);
        }
        .fac-external-btn.secondary {
            background: #f0f9ff;
            color: #09152f;
            border: 1px solid rgba(2, 132, 199, 0.28);
        }
        .fac-external-btn.secondary:hover {
            background: #e0f2fe;
            color: #0284c7;
            transform: translateY(-1px);
        }
        .fac-section-card {
            background: #ffffff;
            border-radius: 22px;
            border: 1px solid rgba(14, 165, 233, 0.2);
            box-shadow: 0 16px 38px -18px rgba(9, 21, 47, 0.1);
            padding: 28px 30px;
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
        }
        .fac-section-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #09152f 0%, #0284c7 55%, #38bdf8 100%);
        }
        .fac-section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(15, 23, 42, 0.08);
        }
        .fac-section-title-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .fac-section-orb {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, #09152f 0%, #0284c7 100%);
            color: #38bdf8;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.05rem;
            box-shadow: 0 8px 18px -6px rgba(2, 132, 199, 0.45);
            flex-shrink: 0;
        }
        .fac-section-title {
            font-size: 1.3rem;
            font-weight: 800;
            color: #09152f;
            margin: 0;
        }
        .fac-interest-chip {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 10px 16px;
            border-radius: 14px;
            background: linear-gradient(135deg, #f8fafc 0%, #f0f9ff 100%);
            border: 1px solid rgba(2, 132, 199, 0.24);
            color: #09152f;
            font-weight: 700;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }
        .fac-interest-chip i {
            color: #0284c7;
            font-size: 0.88rem;
        }
        .fac-interest-chip:hover {
            transform: translateY(-2px);
            border-color: #0284c7;
            box-shadow: 0 10px 20px -10px rgba(2, 132, 199, 0.28);
        }
        .fac-timeline-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        .fac-timeline-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 16px 18px;
            border-radius: 16px;
            background: #f8fafc;
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-left: 4px solid #0284c7;
            transition: all 0.2s ease;
        }
        .fac-timeline-item:hover {
            background: #f0f9ff;
            border-color: rgba(2, 132, 199, 0.3);
            border-left: 4px solid #09152f;
        }
        .fac-timeline-icon {
            width: 38px;
            height: 38px;
            border-radius: 11px;
            background: #e0f2fe;
            color: #0284c7;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 0.95rem;
        }
        .fac-timeline-role {
            font-size: 1rem;
            font-weight: 800;
            color: #09152f;
            margin-bottom: 3px;
        }
        .fac-timeline-sub {
            font-size: 0.9rem;
            color: #475569;
            margin: 0;
            line-height: 1.55;
        }
        .fac-pub-category {
            font-size: 0.95rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            color: #0284c7;
            background: #f0f9ff;
            border-left: 4px solid #0284c7;
            padding: 9px 14px;
            border-radius: 0 10px 10px 0;
            margin: 18px 0 12px;
        }
        .fac-pub-category:first-child {
            margin-top: 0;
        }
        .fac-pub-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 13px 16px;
            border-radius: 14px;
            background: #f8fafc;
            border: 1px solid rgba(15, 23, 42, 0.07);
            margin-bottom: 10px;
            transition: all 0.18s ease;
        }
        .fac-pub-item:hover {
            background: #f0f9ff;
            border-color: rgba(2, 132, 199, 0.28);
        }
        .fac-pub-num {
            min-width: 32px;
            height: 32px;
            padding: 0 8px;
            border-radius: 9px;
            background: linear-gradient(135deg, #09152f 0%, #0284c7 100%);
            color: #ffffff;
            font-size: 0.78rem;
            font-weight: 800;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 1px;
        }
        .fac-pub-text {
            font-size: 0.92rem;
            color: #1e293b;
            line-height: 1.62;
            margin: 0;
        }
        .fac-jump-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 22px;
        }
        .fac-jump-pill {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 15px;
            border-radius: 999px;
            background: #ffffff;
            border: 1px solid rgba(14, 165, 233, 0.28);
            color: #09152f;
            font-size: 0.84rem;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 6px 16px -8px rgba(9, 21, 47, 0.12);
            transition: all 0.2s ease;
        }
        .fac-jump-pill:hover {
            background: #09152f;
            color: #ffffff;
            border-color: #09152f;
            transform: translateY(-1px);
        }
        .fac-jump-pill i {
            color: #0284c7;
        }
        .fac-jump-pill:hover i {
            color: #38bdf8;
        }
        .fac-switcher-item {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 9px 12px;
            border-radius: 12px;
            text-decoration: none;
            color: #1e293b;
            font-size: 0.86rem;
            font-weight: 600;
            transition: all 0.18s ease;
            border: 1px solid transparent;
        }
        .fac-switcher-item:hover {
            background: #f0f9ff;
            color: #0284c7;
            border-color: rgba(2, 132, 199, 0.22);
        }
        .fac-switcher-item.active {
            background: linear-gradient(135deg, #09152f 0%, #0284c7 100%);
            color: #ffffff;
            font-weight: 700;
        }
        .fac-switcher-avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            object-fit: cover;
            object-position: top center;
            border: 2px solid rgba(56, 189, 248, 0.45);
            flex-shrink: 0;
            background: #ffffff;
        }
        .fac-pub-search {
            max-width: 280px;
            border-radius: 999px;
            padding: 7px 15px;
            font-size: 0.85rem;
            border: 1.5px solid rgba(2, 132, 199, 0.3);
        }
        .fac-pub-search:focus {
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.18);
            border-color: #0284c7;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" style="display:none;" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <?php include('partials/header.php') ?>
    <!-- Navbar End -->

    <!-- Maritime Subpage Hero Start -->
    <section class="maritime-subpage-hero">
        <svg class="maritime-hero-Ship-bg" viewBox="0 0 600 260" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M40 190 L550 190 L500 235 L90 235 Z" stroke="#38bdf8" stroke-width="2.5" fill="rgba(14,165,233,0.08)"/>
            <path d="M130 190 L165 115 L370 115 L400 190" stroke="#7dd3fc" stroke-width="2" fill="rgba(56,189,248,0.06)"/>
            <path d="M220 115 L240 60 L315 60 L330 115" stroke="#38bdf8" stroke-width="2"/>
            <line x1="275" y1="20" x2="275" y2="60" stroke="#38bdf8" stroke-width="2.5"/>
            <circle cx="275" cy="18" r="5" fill="#38bdf8"/>
        </svg>
        <div class="container position-relative" style="z-index: 2;">
            <span class="maritime-hero-eyebrow"><i class="fa fa-user-tie"></i> Department of Ship Technology, CUSAT</span>
            <h1 id="fac-hero-name" class="maritime-hero-title">Faculty Profile</h1>
            <p id="fac-hero-designation" class="maritime-hero-subtitle">Academic qualifications, research specializations, publications, and sponsored projects.</p>
            <ul class="maritime-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home me-1"></i> Home</a></li>
                <li class="sep">/</li>
                <li><a href="faculty.php">Faculty</a></li>
                <li class="sep">/</li>
                <li id="fac-breadcrumb-name" class="active">Profile</li>
            </ul>
        </div>
        <!-- 4-Layer GPU Ocean Wave Horizon -->
        <div class="subpage-ocean-horizon">
            <svg class="subpage-ocean-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="subpage-wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="subpage-wave-parallax">
                    <use xlink:href="#subpage-wave-path" x="48" y="0" fill="rgba(14, 165, 233, 0.25)" />
                    <use xlink:href="#subpage-wave-path" x="48" y="3" fill="rgba(56, 189, 248, 0.40)" />
                    <use xlink:href="#subpage-wave-path" x="48" y="5" fill="rgba(224, 242, 254, 0.65)" />
                    <use xlink:href="#subpage-wave-path" x="48" y="7" fill="#f4f8fc" />
                </g>
            </svg>
        </div>
    </section>
    <!-- Maritime Subpage Hero End -->

    <!-- Faculty Detail Bento Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div id="faculty-detail-root" class="row g-4">
                <!-- Dynamically rendered by js/site-data.js from window.__SHIPTECH_DATA__.faculty -->
            </div>
        </div>
    </div>
    <!-- Faculty Detail Bento Content End -->

    <!-- Footer Start -->
    <?php include('partials/footer.php') ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
