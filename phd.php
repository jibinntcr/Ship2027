<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Research &amp; Ph.D. | Department of Ship Technology, CUSAT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="PhD, Research, Research Guides, Naval Architecture, Ship Technology, CUSAT" name="keywords">
    <meta content="Doctoral research areas and approved Ph.D. Research Guides at the Department of Ship Technology, Cochin University of Science and Technology." name="description">

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
        .phd-area-chip {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 11px 14px;
            border-radius: 14px;
            background: #f8fafc;
            border: 1px solid rgba(14, 165, 233, 0.18);
            border-left: 3.5px solid #0284c7;
            color: #0f172a;
            font-size: 0.9rem;
            font-weight: 600;
            line-height: 1.45;
            height: 100%;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .phd-area-chip:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px -8px rgba(2, 132, 199, 0.18);
            background: #f0f9ff;
        }
        .phd-area-chip i {
            color: #0284c7;
            margin-top: 3px;
            flex-shrink: 0;
        }
        .research-guide-areas {
            list-style: none;
            padding-left: 0;
            margin-bottom: 1rem;
            flex-grow: 1;
        }
        .research-guide-areas li {
            position: relative;
            padding: 6px 10px 6px 28px;
            margin-bottom: 6px;
            border-radius: 10px;
            background: #f8fafc;
            border: 1px solid rgba(15, 23, 42, 0.06);
            color: #334155;
            font-size: 0.86rem;
            font-weight: 500;
            line-height: 1.45;
        }
        .research-guide-areas li i {
            position: absolute;
            left: 10px;
            top: 9px;
            color: #0284c7;
            font-size: 0.78rem;
        }
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
        @media (max-width: 767.98px) {
            .phd-nav-pill {
                width: 100%;
                justify-content: center;
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
            <span class="maritime-hero-eyebrow"><i class="fa fa-microscope"></i> Doctoral Programme &amp; Maritime R&amp;D</span>
            <h1 class="maritime-hero-title">Research</h1>
            <p class="maritime-hero-subtitle">Advancing frontier research in Naval Architecture, Ship Hydrodynamics, Marine Structures, Corrosion Engineering, and Green Maritime Technology.</p>
            <ul class="maritime-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home me-1"></i> Home</a></li>
                <li class="sep">/</li>
                <li class="active">Research</li>
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

    <!-- Research Overview & Categories Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Quick Navigation Tabs -->
            <div class="phd-nav-pills">
                <a href="phd.php" class="phd-nav-pill active"><i class="fa fa-microscope"></i> Ph.D. Overview &amp; Research Guides</a>
                <a href="Current-PhD-students.php" class="phd-nav-pill"><i class="fa fa-user-graduate"></i> Current Ph.D. Students</a>
                <a href="PhD-awarded.php" class="phd-nav-pill"><i class="fa fa-award"></i> Ph.D. Awarded</a>
            </div>

            <div class="maritime-bento-panel mb-5">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-5">
                        <div class="programme-img-wrap h-100" style="min-height: 360px;">
                            <span class="programme-badge-top"><i class="fa fa-compass"></i> Doctoral Research &amp; DESCON</span>
                            <img id="phd-main-image" src="img/phd_image.jpg" alt="Research at Department of Ship Technology, CUSAT" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center">
                        <div>
                            <span class="maritime-section-pill"><i class="fa fa-anchor"></i> Research</span>
                            <h2 id="phd-main-title" class="mb-3" style="color:#09152f; font-weight:800;">Dept. of Ship Technology, CUSAT</h2>
                            <p id="phd-main-description" class="justify-para mb-4" style="color:#334155; line-height:1.75;">
                                Research is central to the progress of any academic department. It improves the teaching effectiveness and helps to make a difference to business, industry and society as a whole thereby transforming the way academics, business, industry and the public sector collaborate. The department’s research mission is to utilize its core strengths to maximize impact and help the maritime communities (research and industrial) and the society to address global challenges. The Department provides a thriving research environment with collaborations with leading shipyards, Classification Societies, R &amp; D organizations, etc. Further, all faculty members are consultants of DESCON (Consultancy wing of department) and carry out consultancy assignments for several Public/ Private organizations.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-4 border-top">
                    <h5 class="fw-bold mb-3" style="color:#09152f;">
                        <i class="fa fa-layer-group text-info me-2"></i>Our research areas by and large fall under the following categories:
                    </h5>
                    <div id="phd-areas-grid" class="row g-3">
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Naval Architecture (Ship Design, Ship Building, Computer Applications)</span></div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Structures (Marine / Civil)</span></div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Ship hydrodynamics</span></div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Ship stability and hydrostatics</span></div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Ship recycling</span></div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Manoeuvring and motion stability of marine vehicles</span></div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Marine materials and corrosion</span></div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Offshore and subsea structures</span></div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Numerical and experimental hydrodynamics</span></div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Ship electrical systems</span></div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="phd-area-chip"><i class="fa fa-ship"></i><span>Offshore renewable energy</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Research Guides Section -->
            <div id="research-guides" class="text-center mb-5 pt-2">
                <span class="maritime-section-pill"><i class="fa fa-user-graduate"></i> Doctoral Supervision</span>
                <h2 class="maritime-section-heading">Research Guides</h2>
                <p class="maritime-section-lead">Approved Ph.D. Research Supervisors and their specialized research domains at the Department of Ship Technology, CUSAT.</p>
            </div>

            <div id="research-guides-grid" class="row g-4">
                <!-- 1. Dr. K. SIVAPRASAD -->
                <div class="col-lg-4 col-md-6">
                    <div class="person-bento-card">
                        <div class="person-photo-frame">
                            <img loading="lazy" src="uploads/Untitled design (7).png" alt="Dr. K. SIVAPRASAD">
                        </div>
                        <div class="person-card-body">
                            <span class="person-role-pill"><i class="fa fa-user-tie"></i> Professor</span>
                            <h5 class="person-name"><a href="https://shiptech.cusat.ac.in/faculty-details.php?id=15&amp;name=dr-sivaprasad-kodungalloor" target="_blank">Dr. K. SIVAPRASAD</a></h5>
                            <ul class="research-guide-areas">
                                <li><i class="fa fa-ship"></i>Ship Recycling</li>
                                <li><i class="fa fa-ship"></i>Inland Waterway Transport</li>
                                <li><i class="fa fa-ship"></i>Green Energy in Maritime Technology</li>
                            </ul>
                            <div class="person-card-footer">
                                <span class="person-email-chip"><i class="fa fa-microscope"></i> Research Guide</span>
                                <a class="person-profile-btn" href="https://shiptech.cusat.ac.in/faculty-details.php?id=15&amp;name=dr-sivaprasad-kodungalloor" target="_blank">Profile <i class="fa fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Dr. P.K. SATHEESH BABU -->
                <div class="col-lg-4 col-md-6">
                    <div class="person-bento-card">
                        <div class="person-photo-frame">
                            <img loading="lazy" src="uploads/Untitled design (8).png" alt="Dr. P.K. SATHEESH BABU">
                        </div>
                        <div class="person-card-body">
                            <span class="person-role-pill"><i class="fa fa-user-tie"></i> Associate Professor</span>
                            <h5 class="person-name"><a href="https://shiptech.cusat.ac.in/faculty-details.php?id=3&amp;name=dr-satheesh-babu-pk" target="_blank">Dr. P.K. SATHEESH BABU</a></h5>
                            <ul class="research-guide-areas">
                                <li><i class="fa fa-ship"></i>Ship Design</li>
                                <li><i class="fa fa-ship"></i>Hydrodynamics</li>
                                <li><i class="fa fa-ship"></i>Material Science</li>
                                <li><i class="fa fa-ship"></i>Corrosion Engineering</li>
                            </ul>
                            <div class="person-card-footer">
                                <span class="person-email-chip"><i class="fa fa-microscope"></i> Research Guide</span>
                                <a class="person-profile-btn" href="https://shiptech.cusat.ac.in/faculty-details.php?id=3&amp;name=dr-satheesh-babu-pk" target="_blank">Profile <i class="fa fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Dr. A. MATHIAZHAGAN -->
                <div class="col-lg-4 col-md-6">
                    <div class="person-bento-card">
                        <div class="person-photo-frame">
                            <img loading="lazy" src="uploads/Untitled design (6).png" alt="Dr. A. MATHIAZHAGAN">
                        </div>
                        <div class="person-card-body">
                            <span class="person-role-pill"><i class="fa fa-user-tie"></i> Professor</span>
                            <h5 class="person-name"><a href="https://shiptech.cusat.ac.in/faculty-details.php?id=14&amp;name=dr-a-mathiazhakan" target="_blank">Dr. A. MATHIAZHAGAN</a></h5>
                            <ul class="research-guide-areas">
                                <li><i class="fa fa-ship"></i>Materials Technology</li>
                                <li><i class="fa fa-ship"></i>Corrosion Engineering</li>
                            </ul>
                            <div class="person-card-footer">
                                <span class="person-email-chip"><i class="fa fa-microscope"></i> Research Guide</span>
                                <a class="person-profile-btn" href="https://shiptech.cusat.ac.in/faculty-details.php?id=14&amp;name=dr-a-mathiazhakan" target="_blank">Profile <i class="fa fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Dr. MANOJ T ISSAC -->
                <div class="col-lg-4 col-md-6">
                    <div class="person-bento-card">
                        <div class="person-photo-frame">
                            <img loading="lazy" src="uploads/Untitled design (5).png" alt="Dr. MANOJ T ISSAC">
                        </div>
                        <div class="person-card-body">
                            <span class="person-role-pill"><i class="fa fa-user-tie"></i> Assistant Professor</span>
                            <h5 class="person-name"><a href="https://shiptech.cusat.ac.in/faculty-details.php?id=13&amp;name=manoj-t-issac" target="_blank">Dr. MANOJ T ISSAC</a></h5>
                            <ul class="research-guide-areas">
                                <li><i class="fa fa-ship"></i>Numerical Investigation Of Hydrodynamics and Underwater Vehicles</li>
                                <li><i class="fa fa-ship"></i>Dynamics Modelling of Underwater Vehicles Using Identification Techniques</li>
                                <li><i class="fa fa-ship"></i>CFD Analysis of A SELF-PROPELLED AUV With Ducted Propeller</li>
                            </ul>
                            <div class="person-card-footer">
                                <span class="person-email-chip"><i class="fa fa-microscope"></i> Research Guide</span>
                                <a class="person-profile-btn" href="https://shiptech.cusat.ac.in/faculty-details.php?id=13&amp;name=manoj-t-issac" target="_blank">Profile <i class="fa fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Dr. RAJESH P NAIR -->
                <div class="col-lg-4 col-md-6">
                    <div class="person-bento-card">
                        <div class="person-photo-frame">
                            <img loading="lazy" src="uploads/Untitled design (15).png" alt="Dr. RAJESH P NAIR">
                        </div>
                        <div class="person-card-body">
                            <span class="person-role-pill"><i class="fa fa-user-tie"></i> Assistant Professor</span>
                            <h5 class="person-name"><a href="https://shiptech.cusat.ac.in/faculty-details.php?id=7&amp;name=rajesh-p-nair" target="_blank">Dr. RAJESH P NAIR</a></h5>
                            <ul class="research-guide-areas">
                                <li><i class="fa fa-ship"></i>Finite Element Method</li>
                                <li><i class="fa fa-ship"></i>Descrete Element Method</li>
                                <li><i class="fa fa-ship"></i>Blast Analysis</li>
                                <li><i class="fa fa-ship"></i>Numerical Simulation of Impact Mechanism</li>
                                <li><i class="fa fa-ship"></i>Composite Structures</li>
                                <li><i class="fa fa-ship"></i>Biomechanics</li>
                            </ul>
                            <div class="person-card-footer">
                                <span class="person-email-chip"><i class="fa fa-microscope"></i> Research Guide</span>
                                <a class="person-profile-btn" href="https://shiptech.cusat.ac.in/faculty-details.php?id=7&amp;name=rajesh-p-nair" target="_blank">Profile <i class="fa fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. Dr. FAVAS T K -->
                <div class="col-lg-4 col-md-6">
                    <div class="person-bento-card">
                        <div class="person-photo-frame">
                            <img loading="lazy" src="uploads/Untitled design (16).png" alt="Dr. FAVAS T K">
                        </div>
                        <div class="person-card-body">
                            <span class="person-role-pill"><i class="fa fa-user-tie"></i> Assistant Professor</span>
                            <h5 class="person-name"><a href="https://shiptech.cusat.ac.in/faculty-details.php?id=9&amp;name=dr-favas-t-k" target="_blank">Dr. FAVAS T K</a></h5>
                            <ul class="research-guide-areas">
                                <li><i class="fa fa-ship"></i>Computational Fluid Dynamics</li>
                                <li><i class="fa fa-ship"></i>Numerical Heat Transfer</li>
                                <li><i class="fa fa-ship"></i>Entropy Generation Analysis</li>
                            </ul>
                            <div class="person-card-footer">
                                <span class="person-email-chip"><i class="fa fa-microscope"></i> Research Guide</span>
                                <a class="person-profile-btn" href="https://shiptech.cusat.ac.in/faculty-details.php?id=9&amp;name=dr-favas-t-k" target="_blank">Profile <i class="fa fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Research Overview & Categories End -->

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
