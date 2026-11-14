<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CESST (Tarani) — Centre of Excellence in Sustainable Shipbuilding Technology | CUSAT &amp; CSL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="CESST, Tarani, Centre of Excellence in Sustainable Shipbuilding Technology, Cochin Shipyard Ltd CSR, Department of Ship Technology, CUSAT" name="keywords">
    <meta content="Centre of Excellence in Sustainable Shipbuilding Technology (CESST - Tarani), established at the Department of Ship Technology, CUSAT as a CSR initiative from Cochin Shipyard Limited (CSL)." name="description">

    <!-- Favicon -->
    <link href="images/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css?v=7" rel="stylesheet">

    <style>
        /* ==========================================================================
           CESST (TARANI) — SUSTAINABLE SHIPBUILDING BENTO + 2D ANIMATION DESIGN
           ========================================================================== */
        .cesst-section-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            border-radius: 999px;
            background: rgba(16, 185, 129, 0.12);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #047857;
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .cesst-bento-shell {
            background: #ffffff;
            border-radius: 26px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            box-shadow: 0 20px 50px -18px rgba(9, 21, 47, 0.1);
            padding: 36px;
            position: relative;
            overflow: hidden;
        }
        .cesst-bento-shell::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #09152f 0%, #0284c7 50%, #10b981 100%);
        }

        .cesst-emblem-card {
            background: #ffffff;
            border-radius: 22px;
            border: 1px solid rgba(2, 132, 199, 0.18);
            box-shadow: 0 14px 34px -12px rgba(2, 132, 199, 0.14);
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 22px;
            margin-bottom: 24px;
        }
        .cesst-emblem-img {
            width: 125px;
            height: 125px;
            object-fit: contain;
            border-radius: 16px;
            background: #ffffff;
            border: 1px solid rgba(16, 185, 129, 0.25);
            padding: 6px;
            flex-shrink: 0;
        }

        .cesst-pillar-card {
            background: linear-gradient(145deg, #f8fafc 0%, #f0fdf4 100%);
            border: 1px solid rgba(16, 185, 129, 0.22);
            border-radius: 18px;
            padding: 18px 20px;
            height: 100%;
            transition: all 0.25s ease;
        }
        .cesst-pillar-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 28px -12px rgba(16, 185, 129, 0.22);
            border-color: #10b981;
        }
        .cesst-pillar-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, #09152f 0%, #047857 100%);
            color: #6ee7b7;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.05rem;
            margin-bottom: 12px;
        }

        /* 2D Animated Sustainable Shipbuilding Scene */
        .cesst-anim-stage {
            background: radial-gradient(circle at 75% 20%, rgba(16, 185, 129, 0.24) 0%, transparent 48%),
                        radial-gradient(circle at 20% 80%, rgba(56, 189, 248, 0.22) 0%, transparent 50%),
                        linear-gradient(160deg, #040d21 0%, #081e3f 52%, #063940 100%);
            border-radius: 24px;
            border: 1px solid rgba(52, 211, 153, 0.32);
            box-shadow: 0 24px 55px -16px rgba(4, 13, 33, 0.55);
            padding: 24px;
            position: relative;
            overflow: hidden;
            min-height: 430px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .cesst-anim-grid-overlay {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(56, 189, 248, 0.07) 1px, transparent 1px),
                linear-gradient(90deg, rgba(56, 189, 248, 0.07) 1px, transparent 1px);
            background-size: 28px 28px;
            pointer-events: none;
        }

        @keyframes cesstShipFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-7px) rotate(-0.8deg); }
        }
        @keyframes cesstWaveSlide {
            0% { transform: translateX(0); }
            50% { transform: translateX(-28px); }
            100% { transform: translateX(0); }
        }
        @keyframes cesstTurbineSpin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        @keyframes cesstPulseGlow {
            0%, 100% { opacity: 0.35; transform: scale(0.95); }
            50% { opacity: 1; transform: scale(1.12); }
        }
        @keyframes cesstEnergyFlow {
            to { stroke-dashoffset: -48; }
        }

        .cesst-svg-ship {
            animation: cesstShipFloat 4.2s ease-in-out infinite;
            transform-origin: center;
        }
        .cesst-svg-wave-1 {
            animation: cesstWaveSlide 5s ease-in-out infinite;
        }
        .cesst-svg-wave-2 {
            animation: cesstWaveSlide 7s ease-in-out infinite reverse;
        }
        .cesst-svg-turbine {
            animation: cesstTurbineSpin 5.5s linear infinite;
            transform-box: fill-box;
            transform-origin: center;
        }
        .cesst-svg-energy-line {
            stroke-dasharray: 8 6;
            animation: cesstEnergyFlow 1.6s linear infinite;
        }
        .cesst-svg-node-pulse {
            animation: cesstPulseGlow 2.4s ease-in-out infinite;
            transform-box: fill-box;
            transform-origin: center;
        }

        .cesst-hud-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 6px 13px;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.72);
            border: 1px solid rgba(52, 211, 153, 0.38);
            color: #a7f3d0;
            font-size: 0.75rem;
            font-weight: 700;
            backdrop-filter: blur(8px);
        }

        /* Quick Section Jump Bar */
        .cesst-jump-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            margin-bottom: 2.5rem;
        }
        .cesst-jump-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 24px;
            border-radius: 999px;
            background: #ffffff;
            color: #09152f;
            font-weight: 800;
            font-size: 0.92rem;
            border: 1px solid rgba(2, 132, 199, 0.22);
            box-shadow: 0 10px 24px -10px rgba(9, 21, 47, 0.12);
            text-decoration: none !important;
            transition: all 0.25s ease;
        }
        .cesst-jump-btn:hover {
            background: linear-gradient(135deg, #09152f 0%, #047857 100%);
            color: #ffffff;
            transform: translateY(-2px);
            border-color: transparent;
        }
        .cesst-jump-btn i {
            color: #0284c7;
            transition: color 0.25s ease;
        }
        .cesst-jump-btn:hover i {
            color: #6ee7b7;
        }

        /* 1. Personnel Cards */
        .cesst-person-card {
            background: #ffffff;
            border-radius: 22px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            box-shadow: 0 16px 38px -14px rgba(9, 21, 47, 0.1);
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }
        .cesst-person-card:hover {
            transform: translateY(-6px);
            border-color: rgba(16, 185, 129, 0.45);
            box-shadow: 0 24px 48px -14px rgba(4, 120, 87, 0.18);
        }
        .cesst-person-photo-wrap {
            height: 250px;
            background: linear-gradient(145deg, #09152f 0%, #0b2e4f 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .cesst-person-photo-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            transition: transform 0.4s ease;
        }
        .cesst-person-card:hover .cesst-person-photo-wrap img {
            transform: scale(1.05);
        }
        .cesst-person-body {
            padding: 22px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* 2. Projects Cards (Student Projects & Sponsored Projects) */
        .cesst-proj-filter-btn {
            padding: 9px 22px;
            border-radius: 999px;
            border: 1px solid rgba(2, 132, 199, 0.25);
            background: #ffffff;
            color: #09152f;
            font-weight: 700;
            font-size: 0.88rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .cesst-proj-filter-btn.active,
        .cesst-proj-filter-btn:hover {
            background: linear-gradient(135deg, #09152f 0%, #0284c7 100%);
            color: #ffffff;
            border-color: transparent;
        }
        .cesst-project-item {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid rgba(15, 23, 42, 0.09);
            border-left: 5px solid #0284c7;
            box-shadow: 0 12px 30px -14px rgba(9, 21, 47, 0.09);
            padding: 22px 24px;
            transition: all 0.25s ease;
            height: 100%;
        }
        .cesst-project-item.sponsored {
            border-left-color: #10b981;
        }
        .cesst-project-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -14px rgba(2, 132, 199, 0.18);
        }
        .cesst-project-title-btn {
            background: none;
            border: none;
            padding: 0;
            text-align: left;
            width: 100%;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 14px;
            cursor: pointer;
            color: #09152f;
            font-size: 1.08rem;
            font-weight: 800;
            line-height: 1.45;
        }
        .cesst-project-title-btn:hover {
            color: #0284c7;
        }
        .cesst-project-details-box {
            margin-top: 14px;
            padding-top: 14px;
            border-top: 1px dashed rgba(15, 23, 42, 0.12);
            color: #334155;
            font-size: 0.95rem;
            line-height: 1.75;
            white-space: pre-line;
        }

        /* 3. Events Cards */
        .cesst-event-card {
            background: #ffffff;
            border-radius: 22px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            box-shadow: 0 16px 38px -14px rgba(9, 21, 47, 0.1);
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }
        .cesst-event-card:hover {
            transform: translateY(-6px);
            border-color: rgba(2, 132, 199, 0.4);
            box-shadow: 0 24px 48px -14px rgba(2, 132, 199, 0.2);
        }
        .cesst-event-img-wrap {
            height: 220px;
            background: #09152f;
            position: relative;
            overflow: hidden;
        }
        .cesst-event-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .cesst-event-card:hover .cesst-event-img-wrap img {
            transform: scale(1.06);
        }
        .cesst-event-date-pill {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(9, 21, 47, 0.86);
            color: #6ee7b7;
            border: 1px solid rgba(52, 211, 153, 0.4);
            border-radius: 999px;
            padding: 5px 13px;
            font-size: 0.76rem;
            font-weight: 800;
            backdrop-filter: blur(8px);
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
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="subpage-eyebrow-Shuttle" style="border-color: rgba(52, 211, 153, 0.4); color: #6ee7b7;">
                        <i class="fa fa-leaf"></i> Established as a CSR Initiative from Cochin Shipyard Ltd. (CSL)
                    </span>
                    <h1 class="display-5 text-white mb-2">Centre of Excellence in Sustainable Shipbuilding Technology (CESST)</h1>
                    <p class="fs-5 fw-semibold mb-0" style="color: #bae6fd;">
                        TARANI — CUSAT &amp; Cochin Shipyard Limited (CSL) Collaborative Innovation Hub
                    </p>
                    <nav aria-label="breadcrumb" class="mt-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="text-white-50" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">CESST (Tarani)</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-inline-flex align-items-center gap-3 p-3 rounded-4" style="background: rgba(255,255,255,0.96); box-shadow: 0 20px 45px rgba(0,0,0,0.3);">
                        <img src="img/coe-logo.jpg" alt="Tarani CESST Emblem" style="width: 84px; height: 84px; object-fit: contain; border-radius: 12px;">
                        <div class="text-start">
                            <div class="fw-bold text-uppercase" style="font-size: 0.7rem; letter-spacing: 0.08em; color: #047857;">Official CoE Emblem</div>
                            <div class="fw-extrabold" style="font-size: 1.15rem; color: #09152f; font-weight: 800;">TARANI • CESST</div>
                            <div class="small text-muted" style="font-size: 0.76rem;">CUSAT – CSL Initiative</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4-Layer GPU Ocean Wave Horizon -->
        <div class="subpage-ocean-horizon">
            <svg class="subpage-ocean-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="subpage-wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="subpage-wave-parallax">
                    <use xlink:href="#subpage-wave-path" x="48" y="0" fill="rgba(16, 185, 129, 0.25)" />
                    <use xlink:href="#subpage-wave-path" x="48" y="3" fill="rgba(56, 189, 248, 0.40)" />
                    <use xlink:href="#subpage-wave-path" x="48" y="5" fill="rgba(224, 242, 254, 0.65)" />
                    <use xlink:href="#subpage-wave-path" x="48" y="7" fill="#f4f8fc" />
                </g>
            </svg>
        </div>
    </section>
    <!-- Maritime Subpage Hero End -->

    <!-- Quick Navigation Bar -->
    <div class="container pt-2">
        <div class="cesst-jump-bar">
            <a href="#cesst-overview-section" class="cesst-jump-btn"><i class="fa fa-compass"></i> About CESST &amp; 2D Simulation</a>
            <a href="#cesst-personnel-section" class="cesst-jump-btn"><i class="fa fa-user-tie"></i> 1. Personnel</a>
            <a href="#cesst-projects-section" class="cesst-jump-btn"><i class="fa fa-diagram-project"></i> 2. Student &amp; Sponsored Projects</a>
            <a href="#cesst-events-section" class="cesst-jump-btn"><i class="fa fa-calendar-check"></i> 3. CESST Events</a>
        </div>
    </div>

    <!-- Overview + Interactive 2D Sustainable Shipbuilding Animation Start -->
    <div id="cesst-overview-section" class="container-xxl py-4">
        <div class="container">
            <div class="cesst-bento-shell">
                <div class="row g-4 align-items-center">
                    <!-- Left Column: About CESST (Tarani) -->
                    <div class="col-lg-6">
                        <span class="cesst-section-pill"><i class="fa fa-seedling"></i> CUSAT – Cochin Shipyard Ltd. (CSL) CSR Initiative</span>
                        <h2 class="mb-3" style="color: #09152f; font-weight: 800; font-size: 1.95rem;">
                            Pioneering Zero-Emission &amp; Digital Shipbuilding in India
                        </h2>
                        <div class="cesst-emblem-card">
                            <img src="img/coe-logo.jpg" alt="CUSAT - CSL Centre of Excellence in Sustainable Shipbuilding Technologies (CESST)" class="cesst-emblem-img">
                            <div>
                                <span class="badge rounded-pill mb-1" style="background:#ecfdf5; color:#047857; border:1px solid #a7f3d0; font-size:0.72rem;">CSR Grant • ₹3.53 Crore</span>
                                <h5 class="fw-bold mb-1" style="color:#09152f;">TARANI — CESST</h5>
                                <p class="mb-0 small text-muted" style="line-height: 1.55;">
                                    Established through a landmark Memorandum of Understanding (MoU) between <strong>Cochin University of Science and Technology (CUSAT)</strong> and <strong>Cochin Shipyard Limited (CSL)</strong> under CSL's Corporate Social Responsibility (CSR) programme.
                                </p>
                            </div>
                        </div>
                        <p style="color: #334155; line-height: 1.8; text-align: justify;" class="mb-4">
                            The <strong>Centre of Excellence in Sustainable Shipbuilding Technology (CESST — Tarani)</strong> at the Department of Ship Technology, CUSAT bridges high-impact academic research and industrial shipbuilding innovation. Backed by a ₹3.53 Crore CSR endowment from Cochin Shipyard Limited, CESST spearheads indigenous maritime software development, green vessel propulsion (hydrogen fuel cells, battery-hybrid, and solar-assisted fleets), high-fidelity Computational Fluid Dynamics (CFD) &amp; Finite Element Analysis (FEA), and industry-ready skill development for next-generation naval architects.
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="cesst-pillar-card">
                                    <div class="cesst-pillar-icon"><i class="fa fa-bolt"></i></div>
                                    <h6 class="fw-bold mb-1" style="color:#09152f;">Green Marine Propulsion</h6>
                                    <p class="small text-muted mb-0">Hydrogen fuel cells, hybrid-electric coastal vessels &amp; IMO decarbonization compliance.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="cesst-pillar-card">
                                    <div class="cesst-pillar-icon"><i class="fa fa-laptop-code"></i></div>
                                    <h6 class="fw-bold mb-1" style="color:#09152f;">Shipyard Digitisation</h6>
                                    <p class="small text-muted mb-0">Indigenous naval architecture software, hull digital twins &amp; Smart Shipyard 4.0 tools.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="cesst-pillar-card">
                                    <div class="cesst-pillar-icon"><i class="fa fa-water"></i></div>
                                    <h6 class="fw-bold mb-1" style="color:#09152f;">Advanced CFD &amp; FEA</h6>
                                    <p class="small text-muted mb-0">Hydrodynamic resistance reduction, energy-saving devices &amp; structural optimization.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="cesst-pillar-card">
                                    <div class="cesst-pillar-icon"><i class="fa fa-users-gear"></i></div>
                                    <h6 class="fw-bold mb-1" style="color:#09152f;">Skill &amp; Talent Hub</h6>
                                    <p class="small text-muted mb-0">Hands-on industrial training, student R&amp;D fellowships &amp; sponsored shipyard projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Interactive 2D Animated Sustainable Shipbuilding Scene -->
                    <div class="col-lg-6">
                        <div class="cesst-anim-stage">
                            <div class="cesst-anim-grid-overlay"></div>

                            <!-- Top Telemetry HUD -->
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 position-relative" style="z-index: 2;">
                                <span class="cesst-hud-badge">
                                    <span class="spinner-grow spinner-grow-sm text-success" style="width:8px;height:8px;"></span>
                                    2D DIGITAL TWIN • TARANI ECO-VESSEL
                                </span>
                                <span class="cesst-hud-badge" style="color:#7dd3fc; border-color:rgba(56,189,248,0.4);">
                                    <i class="fa fa-leaf"></i> Net-Zero Propulsion Lab
                                </span>
                            </div>

                            <!-- Center 2D Animated Vector Illustration -->
                            <div class="my-2 position-relative" style="z-index: 2;">
                                <svg viewBox="0 0 640 320" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="2D Animated Sustainable Shipbuilding Vessel">
                                    <defs>
                                        <linearGradient id="hullGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" stop-color="#0ea5e9" />
                                            <stop offset="55%" stop-color="#0284c7" />
                                            <stop offset="100%" stop-color="#10b981" />
                                        </linearGradient>
                                        <linearGradient id="deckGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#f8fafc" />
                                            <stop offset="100%" stop-color="#cbd5e1" />
                                        </linearGradient>
                                        <linearGradient id="energyGlow" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" stop-color="#34d399" />
                                            <stop offset="100%" stop-color="#38bdf8" />
                                        </linearGradient>
                                    </defs>

                                    <!-- Background Radar Circles -->
                                    <circle cx="320" cy="155" r="125" fill="none" stroke="rgba(56, 189, 248, 0.14)" stroke-dasharray="5 5" />
                                    <circle cx="320" cy="155" r="85" fill="none" stroke="rgba(52, 211, 153, 0.18)" stroke-dasharray="3 6" />

                                    <!-- Animated Wind/Green Energy Rotor 1 (Left) -->
                                    <g transform="translate(105, 65)">
                                        <line x1="0" y1="0" x2="0" y2="75" stroke="#64748b" stroke-width="3" />
                                        <g class="cesst-svg-turbine">
                                            <circle cx="0" cy="0" r="5" fill="#34d399" />
                                            <path d="M0,0 L-4,-34 L4,-34 Z" fill="#a7f3d0" opacity="0.88" />
                                            <path d="M0,0 L31,14 L27,21 Z" fill="#a7f3d0" opacity="0.88" />
                                            <path d="M0,0 L-27,21 L-31,14 Z" fill="#a7f3d0" opacity="0.88" />
                                        </g>
                                    </g>

                                    <!-- Animated Floating Sustainable Ship Group -->
                                    <g class="cesst-svg-ship">
                                        <!-- Superstructure / Bridge Decks -->
                                        <polygon points="185,155 415,155 400,118 205,118" fill="url(#deckGrad)" stroke="#38bdf8" stroke-width="1.5" />
                                        <polygon points="235,118 375,118 360,88 250,88" fill="#e2e8f0" stroke="#34d399" stroke-width="1.5" />

                                        <!-- Solar Roof Array on Bridge -->
                                        <rect x="258" y="81" width="94" height="7" rx="3" fill="#0284c7" stroke="#6ee7b7" stroke-width="1.2" />

                                        <!-- Smart Radar & Communication Mast -->
                                        <line x1="310" y1="81" x2="310" y2="48" stroke="#bae6fd" stroke-width="3" />
                                        <line x1="294" y1="60" x2="326" y2="60" stroke="#34d399" stroke-width="2.5" />
                                        <circle class="cesst-svg-node-pulse" cx="310" cy="45" r="6" fill="#34d399" />

                                        <!-- Bridge Windows -->
                                        <rect x="262" y="96" width="22" height="10" rx="2" fill="#09152f" />
                                        <rect x="290" y="96" width="22" height="10" rx="2" fill="#09152f" />
                                        <rect x="318" y="96" width="22" height="10" rx="2" fill="#09152f" />
                                        <rect x="346" y="96" width="16" height="10" rx="2" fill="#09152f" />

                                        <!-- Green H2 & Battery Modules on Main Deck -->
                                        <rect x="215" y="130" width="46" height="16" rx="4" fill="#065f46" stroke="#34d399" stroke-width="1.5" />
                                        <text x="238" y="142" fill="#a7f3d0" font-size="9" font-family="sans-serif" font-weight="bold" text-anchor="middle">GREEN H₂</text>

                                        <rect x="272" y="130" width="54" height="16" rx="4" fill="#0c4a6e" stroke="#38bdf8" stroke-width="1.5" />
                                        <text x="299" y="142" fill="#bae6fd" font-size="9" font-family="sans-serif" font-weight="bold" text-anchor="middle">BATTERY</text>

                                        <rect x="336" y="130" width="52" height="16" rx="4" fill="#065f46" stroke="#34d399" stroke-width="1.5" />
                                        <text x="362" y="142" fill="#a7f3d0" font-size="9" font-family="sans-serif" font-weight="bold" text-anchor="middle">CFD HULL</text>

                                        <!-- Hull Body with Bulbous Bow -->
                                        <path d="M135,155 L495,155 C485,182 465,198 488,205 C504,209 506,222 482,225 L162,225 C148,212 140,185 135,155 Z"
                                              fill="url(#hullGrad)" stroke="#a7f3d0" stroke-width="2" />

                                        <!-- Animated Green Energy Flow Conduit Inside Hull -->
                                        <path class="cesst-svg-energy-line" d="M175,190 L240,190 L295,175 L370,175 L455,195"
                                              fill="none" stroke="#6ee7b7" stroke-width="3" />

                                        <!-- Glowing Digital Twin Sensor Nodes -->
                                        <circle class="cesst-svg-node-pulse" cx="175" cy="190" r="5" fill="#fde047" />
                                        <circle class="cesst-svg-node-pulse" cx="295" cy="175" r="5" fill="#34d399" />
                                        <circle class="cesst-svg-node-pulse" cx="455" cy="195" r="5" fill="#38bdf8" />

                                        <!-- Vessel Name on Hull -->
                                        <text x="255" y="212" fill="#ffffff" font-size="13" font-family="sans-serif" font-weight="800" letter-spacing="2">TARANI • CESST</text>
                                    </g>

                                    <!-- Multi-Layer Animated 2D Ocean Waves -->
                                    <g class="cesst-svg-wave-1">
                                        <path d="M-40,222 Q20,208 80,222 T200,222 T320,222 T440,222 T560,222 T680,222 L680,290 L-40,290 Z"
                                              fill="rgba(14, 165, 233, 0.32)" />
                                    </g>
                                    <g class="cesst-svg-wave-2">
                                        <path d="M-40,234 Q30,220 100,234 T240,234 T380,234 T520,234 T680,234 L680,305 L-40,305 Z"
                                              fill="rgba(16, 185, 129, 0.35)" />
                                    </g>

                                    <!-- CFD Hydrodynamic Wake Streamlines -->
                                    <path class="cesst-svg-energy-line" d="M95,255 Q210,242 330,255 T565,252" fill="none" stroke="rgba(167, 243, 208, 0.7)" stroke-width="2" />
                                    <path class="cesst-svg-energy-line" d="M125,275 Q245,265 365,275 T585,272" fill="none" stroke="rgba(125, 211, 252, 0.6)" stroke-width="1.8" />
                                </svg>
                            </div>

                            <!-- Bottom Telemetry Metrics Bar -->
                            <div class="row g-2 text-center position-relative" style="z-index: 2;">
                                <div class="col-4">
                                    <div class="p-2 rounded-3" style="background: rgba(15, 23, 42, 0.68); border: 1px solid rgba(56, 189, 248, 0.25);">
                                        <div class="fw-bold text-white" style="font-size: 0.95rem;">₹3.53 Cr</div>
                                        <div style="font-size: 0.68rem; color: #7dd3fc; text-transform: uppercase;">CSL CSR Endowment</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-2 rounded-3" style="background: rgba(15, 23, 42, 0.68); border: 1px solid rgba(52, 211, 153, 0.3);">
                                        <div class="fw-bold" style="font-size: 0.95rem; color: #6ee7b7;">Zero-Carbon</div>
                                        <div style="font-size: 0.68rem; color: #a7f3d0; text-transform: uppercase;">Green Ship R&amp;D</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="p-2 rounded-3" style="background: rgba(15, 23, 42, 0.68); border: 1px solid rgba(56, 189, 248, 0.25);">
                                        <div class="fw-bold text-white" style="font-size: 0.95rem;">CFD &amp; FEA</div>
                                        <div style="font-size: 0.68rem; color: #7dd3fc; text-transform: uppercase;">Digital Twin Suite</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Overview + Interactive 2D Sustainable Shipbuilding Animation End -->

    <!-- ======================================================================
         SECTION 1: PERSONNEL (Name, Photo, Designation)
         ====================================================================== -->
    <div id="cesst-personnel-section" class="container-xxl py-5">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-4 gap-3">
                <div>
                    <span class="cesst-section-pill"><i class="fa fa-users"></i> Section 01 • Leadership &amp; Team</span>
                    <h2 class="maritime-section-heading mb-1">CESST Personnel</h2>
                    <p class="text-muted mb-0">Faculty coordinators, research leads, and project personnel driving the CUSAT–CSL Centre of Excellence.</p>
                </div>
                <a href="shipadmin/index.html" class="btn btn-sm rounded-pill px-3 py-2 fw-bold" style="background:#f0fdf4; color:#047857; border:1px solid #a7f3d0;">
                    <i class="fa fa-plus-circle me-1"></i> Add / Edit Personnel in Admin
                </a>
            </div>
            <div id="cesst-personnel-grid" class="row g-4">
                <!-- Populated dynamically by js/site-data.js -->
            </div>
        </div>
    </div>

    <!-- ======================================================================
         SECTION 2: PROJECTS — STUDENT PROJECTS & SPONSORED PROJECTS
         ====================================================================== -->
    <div id="cesst-projects-section" class="container-xxl py-5" style="background: linear-gradient(180deg, rgba(224,242,254,0.35) 0%, rgba(240,253,244,0.4) 100%); border-top: 1px solid rgba(2,132,199,0.1); border-bottom: 1px solid rgba(16,185,129,0.12);">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-4 gap-3">
                <div>
                    <span class="cesst-section-pill"><i class="fa fa-diagram-project"></i> Section 02 • Research Portfolio</span>
                    <h2 class="maritime-section-heading mb-1">Student Projects &amp; Sponsored Projects</h2>
                    <p class="text-muted mb-0">Click on any project title to expand or view its complete technical project details.</p>
                </div>
                <div class="d-flex flex-wrap align-items-center gap-2">
                    <button type="button" class="cesst-proj-filter-btn active" data-cesst-filter="all">All Projects</button>
                    <button type="button" class="cesst-proj-filter-btn" data-cesst-filter="Sponsored Project"><i class="fa fa-building-shield me-1"></i> Sponsored Projects</button>
                    <button type="button" class="cesst-proj-filter-btn" data-cesst-filter="Student Project"><i class="fa fa-user-graduate me-1"></i> Student Projects</button>
                    <a href="shipadmin/index.html" class="btn btn-sm rounded-pill px-3 py-2 fw-bold ms-lg-2" style="background:#eff6ff; color:#0284c7; border:1px solid #bae6fd;">
                        <i class="fa fa-pen-to-square me-1"></i> Manage Projects
                    </a>
                </div>
            </div>

            <div class="row g-4" id="cesst-projects-columns">
                <!-- Sponsored Projects Column -->
                <div class="col-lg-6" id="cesst-sponsored-col">
                    <div class="p-4 rounded-4 bg-white h-100" style="border: 1px solid rgba(16, 185, 129, 0.24); box-shadow: 0 14px 35px -15px rgba(9, 21, 47, 0.08);">
                        <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-inline-flex align-items-center justify-content-center rounded-3" style="width:44px;height:44px;background:linear-gradient(135deg,#065f46,#10b981);color:#fff;font-size:1.1rem;">
                                    <i class="fa fa-handshake"></i>
                                </span>
                                <div>
                                    <h4 class="fw-bold mb-0" style="color:#09152f; font-size:1.25rem;">Sponsored Projects</h4>
                                    <span class="small text-muted">CSL CSR &amp; Industry-Funded R&amp;D Projects</span>
                                </div>
                            </div>
                            <span id="cesst-sponsored-count" class="badge rounded-pill px-3 py-2" style="background:#ecfdf5; color:#047857; border:1px solid #a7f3d0;">0 Projects</span>
                        </div>
                        <div id="cesst-sponsored-projects-list" class="d-flex flex-column gap-3">
                            <!-- Populated dynamically by js/site-data.js -->
                        </div>
                    </div>
                </div>

                <!-- Student Projects Column -->
                <div class="col-lg-6" id="cesst-student-col">
                    <div class="p-4 rounded-4 bg-white h-100" style="border: 1px solid rgba(2, 132, 199, 0.24); box-shadow: 0 14px 35px -15px rgba(9, 21, 47, 0.08);">
                        <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-inline-flex align-items-center justify-content-center rounded-3" style="width:44px;height:44px;background:linear-gradient(135deg,#09152f,#0284c7);color:#fff;font-size:1.1rem;">
                                    <i class="fa fa-graduation-cap"></i>
                                </span>
                                <div>
                                    <h4 class="fw-bold mb-0" style="color:#09152f; font-size:1.25rem;">Student Projects</h4>
                                    <span class="small text-muted">B.Tech, M.Tech &amp; Doctoral Innovation Projects</span>
                                </div>
                            </div>
                            <span id="cesst-student-count" class="badge rounded-pill px-3 py-2" style="background:#f0f9ff; color:#0369a1; border:1px solid #bae6fd;">0 Projects</span>
                        </div>
                        <div id="cesst-student-projects-list" class="d-flex flex-column gap-3">
                            <!-- Populated dynamically by js/site-data.js -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================================================
         SECTION 3: EVENTS (Event Name, Date, Photo)
         ====================================================================== -->
    <div id="cesst-events-section" class="container-xxl py-5">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-4 gap-3">
                <div>
                    <span class="cesst-section-pill"><i class="fa fa-calendar-days"></i> Section 03 • Workshops, MoU &amp; Symposia</span>
                    <h2 class="maritime-section-heading mb-1">CESST Events &amp; Milestones</h2>
                    <p class="text-muted mb-0">Conferences, industry training sessions, and milestones under the Centre of Excellence.</p>
                </div>
                <a href="shipadmin/index.html" class="btn btn-sm rounded-pill px-3 py-2 fw-bold" style="background:#f0fdf4; color:#047857; border:1px solid #a7f3d0;">
                    <i class="fa fa-plus-circle me-1"></i> Add / Edit Events in Admin
                </a>
            </div>
            <div id="cesst-events-grid" class="row g-4">
                <!-- Populated dynamically by js/site-data.js -->
            </div>
        </div>
    </div>

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
