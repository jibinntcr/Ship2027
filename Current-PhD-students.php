<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Current Ph.D. Students | Department of Ship Technology, CUSAT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Current PhD Students, Research Scholars, Naval Architecture, Ship Technology, CUSAT" name="keywords">
    <meta content="Current Ph.D. Research Scholars and ongoing doctoral research topics at the Department of Ship Technology, CUSAT." name="description">

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
        .phd-nav-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 2rem;
        }
        .phd-nav-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 20px;
            border-radius: 999px;
            font-size: 0.92rem;
            font-weight: 700;
            text-decoration: none;
            background: #ffffff;
            color: #09152f;
            border: 1.5px solid rgba(14, 165, 233, 0.28);
            box-shadow: 0 8px 20px -10px rgba(9, 21, 47, 0.12);
            transition: all 0.2s ease;
        }
        .phd-nav-pill:hover {
            background: #f0f9ff;
            color: #0284c7;
            transform: translateY(-2px);
        }
        .phd-nav-pill.active {
            background: linear-gradient(135deg, #09152f 0%, #0284c7 100%);
            color: #ffffff;
            border-color: transparent;
            box-shadow: 0 12px 26px -8px rgba(2, 132, 199, 0.45);
        }
        .phd-search-bar {
            position: relative;
            max-width: 420px;
            width: 100%;
        }
        .phd-search-bar input {
            width: 100%;
            padding: 11px 16px 11px 42px;
            border-radius: 14px;
            border: 1.5px solid #cbd5e1;
            background: #f8fafc;
            font-size: 0.92rem;
            color: #0f172a;
            transition: all 0.2s ease;
        }
        .phd-search-bar input:focus {
            outline: none;
            border-color: #0284c7;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.12);
        }
        .phd-search-bar i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
        }
        .phd-supervisor-badge {
            display: inline-flex;
            align-items: center;
            padding: 5px 11px;
            border-radius: 8px;
            background: #f0f9ff;
            color: #0369a1;
            font-weight: 600;
            font-size: 0.84rem;
            border: 1px solid rgba(14, 165, 233, 0.2);
            white-space: nowrap;
        }
        .phd-year-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 999px;
            background: #09152f;
            color: #38bdf8;
            font-weight: 700;
            font-size: 0.84rem;
        }
        @media (max-width: 767.98px) {
            .phd-nav-pill {
                width: 100%;
                justify-content: center;
            }
            .phd-supervisor-badge {
                white-space: normal;
            }
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
            <span class="maritime-hero-eyebrow"><i class="fa fa-user-graduate"></i> Doctoral Scholars &bull; DoST CUSAT</span>
            <h1 class="maritime-hero-title">Current Ph.D. Students</h1>
            <p class="maritime-hero-subtitle">Active doctoral research scholars pursuing frontier maritime, hydrodynamic, structural, and ocean engineering research at CUSAT.</p>
            <ul class="maritime-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home me-1"></i> Home</a></li>
                <li class="sep">/</li>
                <li><a href="phd.php">Research</a></li>
                <li class="sep">/</li>
                <li class="active">Current Ph.D. Students</li>
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

    <!-- Current Ph.D. Students Table Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Quick Navigation Tabs -->
            <div class="phd-nav-pills">
                <a href="phd.php" class="phd-nav-pill"><i class="fa fa-microscope"></i> Ph.D. Overview &amp; Research Guides</a>
                <a href="Current-PhD-students.php" class="phd-nav-pill active"><i class="fa fa-user-graduate"></i> Current Ph.D. Students</a>
                <a href="PhD-awarded.php" class="phd-nav-pill"><i class="fa fa-award"></i> Ph.D. Awarded</a>
            </div>

            <div class="maritime-bento-panel">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                    <div>
                        <span class="maritime-section-pill"><i class="fa fa-user-graduate"></i> Ongoing Doctoral Research</span>
                        <h3 class="mb-1" style="color:#09152f; font-weight:800;">Current Ph.D. Research Scholars (<span id="phd-students-count">30</span>)</h3>
                        <p class="text-muted mb-0 small">Search by scholar name, research topic, supervisor, or year of registration.</p>
                    </div>
                    <div class="phd-search-bar">
                        <i class="fa fa-search"></i>
                        <input type="text" id="phd-students-search" placeholder="Search scholar, thesis title, supervisor, or year..." oninput="filterPhdTable('phd-students-tbody', this.value)">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table maritime-table align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 75px;">Sl. No</th>
                                <th style="min-width: 180px;">Name</th>
                                <th style="min-width: 320px;">Thesis Title</th>
                                <th style="min-width: 210px;">Supervisor</th>
                                <th class="text-center" style="width: 155px;">Year of Registration</th>
                            </tr>
                        </thead>
                        <tbody id="phd-students-tbody">
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">1</td>
                                <td class="fw-bold" style="color:#09152f;">Anju Mathew</td>
                                <td style="color:#334155; line-height:1.55;">Electric and Hybrid Propulsion in Marine Vessels</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Haseena K A</span></td>
                                <td class="text-center"><span class="phd-year-badge">2025</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">2</td>
                                <td class="fw-bold" style="color:#09152f;">Anusree Variyar</td>
                                <td style="color:#334155; line-height:1.55;">Dynamic response analysis of fixed offshore wind turbines considering wave, wind loadings and soil structure interaction</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.Beena Mary John</span></td>
                                <td class="text-center"><span class="phd-year-badge">2024</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">3</td>
                                <td class="fw-bold" style="color:#09152f;">Rejith G Krishnan</td>
                                <td style="color:#334155; line-height:1.55;">Physical model strudies on Wave energy converters</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.Beena Mary John</span></td>
                                <td class="text-center"><span class="phd-year-badge">2024</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">4</td>
                                <td class="fw-bold" style="color:#09152f;">Sankar G Nath</td>
                                <td style="color:#334155; line-height:1.55;">Improvements in Ship propulsion by numerical methods</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.Senthil Prakash M N</span></td>
                                <td class="text-center"><span class="phd-year-badge">2024</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">5</td>
                                <td class="fw-bold" style="color:#09152f;">Shaji P J</td>
                                <td style="color:#334155; line-height:1.55;">Inland Water Transportation</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.Satheesh Babu P K</span></td>
                                <td class="text-center"><span class="phd-year-badge">2024</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">6</td>
                                <td class="fw-bold" style="color:#09152f;">Anilekha Thampi V V</td>
                                <td style="color:#334155; line-height:1.55;">Formal verification/methods &amp; software testing in Ship Technology</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. K Sivaprasad</span></td>
                                <td class="text-center"><span class="phd-year-badge">2024</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">7</td>
                                <td class="fw-bold" style="color:#09152f;">Cethal Mary</td>
                                <td style="color:#334155; line-height:1.55;">Predicting corrosion in marine materials using artificial intelligence</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.Satheesh Babu P K</span></td>
                                <td class="text-center"><span class="phd-year-badge">2024</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">8</td>
                                <td class="fw-bold" style="color:#09152f;">Sruthy Raj S</td>
                                <td style="color:#334155; line-height:1.55;">Optimization of ship hull using numerical techniques.</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.Beena Mary John</span></td>
                                <td class="text-center"><span class="phd-year-badge">2024</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">9</td>
                                <td class="fw-bold" style="color:#09152f;">Parvathy S Pillai</td>
                                <td style="color:#334155; line-height:1.55;">Design and Optimisation for Energy Efficient House-Boats</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.Rajesh P Nair</span></td>
                                <td class="text-center"><span class="phd-year-badge">2024</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">10</td>
                                <td class="fw-bold" style="color:#09152f;">Charles Paul K J</td>
                                <td style="color:#334155; line-height:1.55;">Enhancing dimensional accuracy in Ship building</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.Satheesh Babu P K</span></td>
                                <td class="text-center"><span class="phd-year-badge">2024</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">11</td>
                                <td class="fw-bold" style="color:#09152f;">Jesna P H</td>
                                <td style="color:#334155; line-height:1.55;">Vibration Control of Composites for Marine Applications</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Rajesh P Nair</span></td>
                                <td class="text-center"><span class="phd-year-badge">2023</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">12</td>
                                <td class="fw-bold" style="color:#09152f;">Aswith R Shenoy</td>
                                <td style="color:#334155; line-height:1.55;">Design and Analysis of Hydrokinetic Turbines</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Manoj T Issac</span></td>
                                <td class="text-center"><span class="phd-year-badge">2023</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">13</td>
                                <td class="fw-bold" style="color:#09152f;">Shija C</td>
                                <td style="color:#334155; line-height:1.55;">CFD Analysis of a self - propelled AUV</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Manoj T. Isac</span></td>
                                <td class="text-center"><span class="phd-year-badge">2023</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">14</td>
                                <td class="fw-bold" style="color:#09152f;">RAZMIA P ALI</td>
                                <td style="color:#334155; line-height:1.55;">Numerical Investigation of Open water characteristics of marine propeller</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Satheesh Babu P K</span></td>
                                <td class="text-center"><span class="phd-year-badge">2022</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">15</td>
                                <td class="fw-bold" style="color:#09152f;">RESMI P L</td>
                                <td style="color:#334155; line-height:1.55;">Optimization Of Reconfigurable Antennas In Marine Applications</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Satheesh Babu P K</span></td>
                                <td class="text-center"><span class="phd-year-badge">2022</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">16</td>
                                <td class="fw-bold" style="color:#09152f;">THAJUDEEN A K</td>
                                <td style="color:#334155; line-height:1.55;">CHARACTERIZATION AND EVALUATION OF REPAIR WELDED ALUMINIUM ALLOY</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Satheesh Babu P K</span></td>
                                <td class="text-center"><span class="phd-year-badge">2022</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">17</td>
                                <td class="fw-bold" style="color:#09152f;">SONY T L</td>
                                <td style="color:#334155; line-height:1.55;">&quot;The Performance Analysis of Inland Vessels using Computational Fluid Dynamics&quot;</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. K Sivaprasad</span></td>
                                <td class="text-center"><span class="phd-year-badge">2022</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">18</td>
                                <td class="fw-bold" style="color:#09152f;">Akram P A</td>
                                <td style="color:#334155; line-height:1.55;">CFD based surrogate model development for the analysis of under water radidated noise due to ship board machineries</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. A Mathiazhagan</span></td>
                                <td class="text-center"><span class="phd-year-badge">2021</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">19</td>
                                <td class="fw-bold" style="color:#09152f;">Renju Raj</td>
                                <td style="color:#334155; line-height:1.55;">Numerical study of heat and fluid flow for fire safety applications</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Beena Mary John</span></td>
                                <td class="text-center"><span class="phd-year-badge">2021</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">20</td>
                                <td class="fw-bold" style="color:#09152f;">James Kattady</td>
                                <td style="color:#334155; line-height:1.55;">Development of river infromation system for inland water transport</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. K Sivaprasad</span></td>
                                <td class="text-center"><span class="phd-year-badge">2021</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">21</td>
                                <td class="fw-bold" style="color:#09152f;">Bini Rani Jose</td>
                                <td style="color:#334155; line-height:1.55;">Study on implementation of advanced power electronics switches to hybrid electrical power systems on board ships</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Mariamma Chacko</span></td>
                                <td class="text-center"><span class="phd-year-badge">2020</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">22</td>
                                <td class="fw-bold" style="color:#09152f;">Angela Susan Tonio</td>
                                <td style="color:#334155; line-height:1.55;">Development of dynamic simulation model of AUV using system identification techniques</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Manoj T Issac</span></td>
                                <td class="text-center"><span class="phd-year-badge">2020</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">23</td>
                                <td class="fw-bold" style="color:#09152f;">Teena Sara John</td>
                                <td style="color:#334155; line-height:1.55;">Development of inward waterway network systems for inter model transportation catering to the hinder lands of Kerala</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. C B Sudheer</span></td>
                                <td class="text-center"><span class="phd-year-badge">2020</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">24</td>
                                <td class="fw-bold" style="color:#09152f;">Shefeena C A</td>
                                <td style="color:#334155; line-height:1.55;">Investigations on economics and technical aspects subsea pipeline system for the effective and efficient utilization</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. C.B.Sudheer</span></td>
                                <td class="text-center"><span class="phd-year-badge">2020</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">25</td>
                                <td class="fw-bold" style="color:#09152f;">Deepak Sebastian</td>
                                <td style="color:#334155; line-height:1.55;">Development of Strategies for life cycle control of marine vessels and structures</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.K.Sivaprasad</span></td>
                                <td class="text-center"><span class="phd-year-badge">2019</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">26</td>
                                <td class="fw-bold" style="color:#09152f;">Anish Kumar M.N</td>
                                <td style="color:#334155; line-height:1.55;">Resistance study and optimization catamaran hulls for inland water navigation solutions considering shallow water and wash effects</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr K Sivaprasad</span></td>
                                <td class="text-center"><span class="phd-year-badge">2019</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">27</td>
                                <td class="fw-bold" style="color:#09152f;">Mahesh C</td>
                                <td style="color:#334155; line-height:1.55;">Impact analysis of composite hull structures</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.Rajesh P Nair</span></td>
                                <td class="text-center"><span class="phd-year-badge">2017</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">28</td>
                                <td class="fw-bold" style="color:#09152f;">Meera G</td>
                                <td style="color:#334155; line-height:1.55;">A nine switch converter application on electric ship propulsion</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Senthil Prakash</span></td>
                                <td class="text-center"><span class="phd-year-badge">2017</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">29</td>
                                <td class="fw-bold" style="color:#09152f;">Geethu R Babu</td>
                                <td style="color:#334155; line-height:1.55;">Numerical analysis of a building under blast loading</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr.Rajesh P Nair</span></td>
                                <td class="text-center"><span class="phd-year-badge">2017</span></td>
                            </tr>
                            <tr>
                                <td class="text-center fw-bold" style="color:#0284c7;">30</td>
                                <td class="fw-bold" style="color:#09152f;">Hareesh Y.S</td>
                                <td style="color:#334155; line-height:1.55;">NUMERICAL INVESTIGATION ON PERFORMANCE OF WELLS TURBINE WITH VARIABLE GEOMETRY AND CONFIGURATION OF GURNEY FLAP</td>
                                <td><span class="phd-supervisor-badge"><i class="fa fa-user-tie me-1"></i>Dr. Senthil Prakash M N</span></td>
                                <td class="text-center"><span class="phd-year-badge">2015</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Current Ph.D. Students Table Section End -->

    <script>
        function filterPhdTable(tbodyId, query) {
            var tbody = document.getElementById(tbodyId);
            if (!tbody) return;
            var q = (query || "").toLowerCase().trim();
            var rows = tbody.getElementsByTagName("tr");
            for (var i = 0; i < rows.length; i++) {
                var text = (rows[i].textContent || "").toLowerCase();
                rows[i].style.display = (!q || text.indexOf(q) !== -1) ? "" : "none";
            }
        }
    </script>

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
