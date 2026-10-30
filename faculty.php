<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Faculty Directory | Department of Ship Technology, CUSAT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Faculty, Professors, Naval Architecture, Ship Technology, CUSAT" name="keywords">
    <meta content="Academic faculty and researchers of the Department of Ship Technology, Cochin University of Science and Technology." name="description">

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
            <span class="maritime-hero-eyebrow"><i class="fa fa-user-tie"></i> Academic Leadership &amp; Research</span>
            <h1 class="maritime-hero-title">Our Faculty</h1>
            <p class="maritime-hero-subtitle">Distinguished professors, naval architects, and researchers driving innovation in hydrodynamics, marine structures, ship design, and ocean engineering.</p>
            <ul class="maritime-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home me-1"></i> Home</a></li>
                <li class="sep">/</li>
                <li class="active">Faculty</li>
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

    <!-- Faculty Bento Grid Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="maritime-section-pill"><i class="fa fa-compass"></i> Department of Ship Technology, CUSAT</span>
                <h2 class="maritime-section-heading">Faculty Directory</h2>
                <p class="maritime-section-lead">Connect with our faculty members and explore their academic qualifications, research specializations, and scholarly profiles.</p>
            </div>
            <div id="faculty-grid" class="row g-4">
                <!-- Populated dynamically from SQLite database via window.__SHIPTECH_DATA__.faculty -->
            </div>
        </div>
    </div>
    <!-- Faculty Bento Grid End -->

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
