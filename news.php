<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>News &amp; Press Releases | Department of Ship Technology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css?v=6" rel="stylesheet">

    <style>
        .newsroom-card {
            display: flex;
            align-items: center;
            gap: 18px;
            background: #ffffff;
            border: 1px solid rgba(15, 23, 42, 0.09);
            border-radius: 22px;
            padding: 18px;
            height: 100%;
            text-decoration: none !important;
            box-shadow: 0 12px 30px -12px rgba(10, 25, 56, 0.08);
            transition: all 0.28s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            overflow: hidden;
        }

        .newsroom-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(180deg, #0a1938 0%, #0284c7 50%, #38bdf8 100%);
            opacity: 0;
            transition: opacity 0.25s ease;
        }

        .newsroom-card:hover {
            transform: translateY(-4px);
            border-color: rgba(2, 132, 199, 0.38);
            box-shadow: 0 22px 44px -14px rgba(10, 25, 56, 0.16);
            background: linear-gradient(90deg, #ffffff 0%, #f0f9ff 100%);
        }

        .newsroom-card:hover::before {
            opacity: 1;
        }

        .newsroom-thumb-box {
            width: 112px;
            min-width: 112px;
            height: 112px;
            border-radius: 16px;
            background: #f8fafc;
            border: 1px solid rgba(15, 23, 42, 0.1);
            padding: 5px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .newsroom-thumb-box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 11px;
            transition: transform 0.35s ease;
        }

        .newsroom-card:hover .newsroom-thumb-box img {
            transform: scale(1.06);
        }

        .newsroom-body {
            flex: 1;
            min-width: 0;
        }

        .newsroom-meta {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 8px;
            flex-wrap: wrap;
        }

        .newsroom-tag {
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.07em;
            text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 999px;
            background: rgba(225, 29, 72, 0.1);
            color: #be123c;
        }

        .newsroom-date {
            font-size: 12px;
            font-weight: 600;
            color: #64748b;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .newsroom-date i {
            color: #ff3e41;
        }

        .newsroom-title {
            font-size: 16px;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.42;
            margin: 0 0 6px;
            transition: color 0.2s ease;
        }

        .newsroom-card:hover .newsroom-title {
            color: #0369a1;
        }

        .newsroom-excerpt {
            font-size: 13px;
            color: #64748b;
            margin: 0;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .newsroom-arrow {
            width: 38px;
            min-width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #f1f5f9;
            color: #0f172a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            transition: all 0.25s ease;
        }

        .newsroom-card:hover .newsroom-arrow {
            background: #0284c7;
            color: #ffffff;
            transform: translateX(3px);
        }

        @media (max-width: 575.98px) {
            .newsroom-card {
                padding: 13px;
                gap: 13px;
                border-radius: 16px;
            }
            .newsroom-thumb-box {
                width: 78px;
                min-width: 78px;
                height: 78px;
                border-radius: 12px;
            }
            .newsroom-title {
                font-size: 14.2px;
                line-height: 1.38;
            }
            .newsroom-arrow {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" style="display:none;"
        class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
            <span class="maritime-hero-eyebrow"><i class="fa fa-newspaper"></i> Press Releases &amp; Media Clippings</span>
            <h1 class="maritime-hero-title">Department Newsroom</h1>
            <p class="maritime-hero-subtitle">Media coverage, national awards, research milestones, placement highlights, and official notices from the Department of Ship Technology, CUSAT.</p>
            <ul class="maritime-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home me-1"></i> Home</a></li>
                <li class="sep">/</li>
                <li class="active">Newsroom</li>
            </ul>
        </div>
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

    <!-- News Archive Start -->
    <div class="container py-4 mb-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <span class="badge rounded-pill px-3 py-2 mb-2" style="background: rgba(2, 132, 199, 0.1); color: #0284c7; font-weight: 800; letter-spacing: 0.08em; text-transform: uppercase;">
                <i class="fa-regular fa-newspaper me-1"></i> Press Releases &amp; Official Bulletins
            </span>
            <h1 class="fw-bold mb-2" style="color: #0f172a;">Department Newsroom</h1>
            <p class="text-muted mx-auto mb-0" style="max-width: 660px;">
                Media coverage, research milestones, placement highlights, and official notices from the Department of Ship Technology, CUSAT.
            </p>
        </div>

        <div id="newsroom-grid" class="row g-4">
            <!-- Populated from uploads/news_archive.json -->
        </div>
    </div>
    <!-- News Archive End -->

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
    <script>
        (function () {
            function esc(s) {
                return String(s || '')
                    .replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/"/g, '&quot;');
            }
            var grid = document.getElementById('newsroom-grid');
            if (!grid) return;

            fetch('uploads/news_archive.json')
                .then(function (r) { return r.json(); })
                .then(function (items) {
                    var isStatic = location.hostname !== 'localhost' && location.hostname !== '127.0.0.1';
                    grid.innerHTML = items.map(function (it) {
                        var bodyPreview = it.body ? esc(it.body) : 'Click to view full press clipping / official department notice.';
                        var rawHref = it.href || ('news-view.php?id=' + it.id);
                        if (isStatic) rawHref = rawHref.replace(/news-view\.php/g, 'news-view.html');
                        return (
                            '<div class="col-lg-6">' +
                            '  <a class="newsroom-card" href="' + esc(rawHref) + '">' +
                            '    <div class="newsroom-thumb-box">' +
                            '      <img src="' + esc(it.image) + '" loading="lazy" alt="' + esc(it.title) + '">' +
                            '    </div>' +
                            '    <div class="newsroom-body">' +
                            '      <div class="newsroom-meta">' +
                            '        <span class="newsroom-tag">Press &amp; Notice</span>' +
                            '        <span class="newsroom-date"><i class="fa-regular fa-calendar"></i> ' + esc(it.date) + '</span>' +
                            '      </div>' +
                            '      <h5 class="newsroom-title">' + esc(it.title) + '</h5>' +
                            '      <p class="newsroom-excerpt">' + bodyPreview + '</p>' +
                            '    </div>' +
                            '    <div class="newsroom-arrow">' +
                            '      <i class="fa fa-arrow-right"></i>' +
                            '    </div>' +
                            '  </a>' +
                            '</div>'
                        );
                    }).join('');
                })
                .catch(function (err) {
                    console.error('Failed to load news archive:', err);
                });
        })();
    </script>
</body>

</html>
