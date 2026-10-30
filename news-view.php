<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>News Article | Department of Ship Technology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
        .article-main-card {
            background: #ffffff;
            border: 1px solid rgba(15, 23, 42, 0.09);
            border-radius: 26px;
            padding: 34px;
            box-shadow: 0 22px 48px -16px rgba(10, 25, 56, 0.12);
        }

        .article-clipping-frame {
            background: #f8fafc;
            border: 1px solid rgba(15, 23, 42, 0.1);
            border-radius: 20px;
            padding: 16px;
            text-align: center;
            margin: 22px 0;
        }

        .article-clipping-frame img {
            max-width: 100%;
            max-height: 760px;
            object-fit: contain;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12);
        }

        .sidebar-news-panel {
            background: #ffffff;
            border: 1px solid rgba(15, 23, 42, 0.09);
            border-radius: 26px;
            padding: 26px;
            box-shadow: 0 20px 44px -16px rgba(10, 25, 56, 0.1);
        }

        .sidebar-news-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px;
            border-radius: 16px;
            border: 1px solid rgba(15, 23, 42, 0.07);
            text-decoration: none !important;
            margin-bottom: 12px;
            transition: all 0.22s ease;
        }

        .sidebar-news-item:hover {
            background: #f0f9ff;
            border-color: rgba(2, 132, 199, 0.35);
            transform: translateX(3px);
        }

        .sidebar-news-item img {
            width: 68px;
            min-width: 68px;
            height: 68px;
            object-fit: contain;
            border-radius: 10px;
            background: #f8fafc;
            border: 1px solid rgba(15, 23, 42, 0.08);
            padding: 3px;
        }

        @media (max-width: 767.98px) {
            .article-main-card {
                padding: 20px 16px;
                border-radius: 20px;
            }
            .article-clipping-frame {
                padding: 10px;
                border-radius: 14px;
                margin: 16px 0;
            }
            .sidebar-news-panel {
                padding: 18px 16px;
                border-radius: 20px;
            }
        }
    </style>
</head>

<body>
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
            <span class="maritime-hero-eyebrow"><i class="fa fa-newspaper"></i> Official Press Release &amp; Clipping</span>
            <h1 class="maritime-hero-title">Department Newsroom</h1>
            <p class="maritime-hero-subtitle">Full press release, media clipping, and archival dispatch from the Department of Ship Technology, CUSAT.</p>
            <ul class="maritime-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home me-1"></i> Home</a></li>
                <li class="sep">/</li>
                <li><a href="news.php">Newsroom</a></li>
                <li class="sep">/</li>
                <li class="active">Article</li>
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

    <section class="container my-5">
        <div class="row g-4">
            <div class="col-lg-7">
                <div id="news-article-container" class="article-main-card">
                    <!-- Populated dynamically by ID -->
                </div>
            </div>

            <div class="col-lg-5">
                <div class="sidebar-news-panel">
                    <div class="d-flex align-items-center justify-content-between pb-3 mb-3" style="border-bottom: 1px solid rgba(15,23,42,0.08);">
                        <h4 class="fw-bold mb-0" style="color: #0f172a;">Other News</h4>
                        <a href="news.php" class="badge rounded-pill px-3 py-2 text-decoration-none" style="background: rgba(2,132,199,0.1); color: #0369a1;">View All &rarr;</a>
                    </div>
                    <div id="other-news-sidebar" style="max-height: 680px; overflow-y: auto; padding-right: 4px;">
                        <!-- Populated dynamically -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <?php include('partials/footer.php') ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
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
            var params = new URLSearchParams(window.location.search);
            var targetId = parseInt(params.get('id') || '38', 10);

            fetch('uploads/news_archive.json')
                .then(function (r) { return r.json(); })
                .then(function (items) {
                    var isStatic = location.hostname !== 'localhost' && location.hostname !== '127.0.0.1';
                    var newsListUrl = isStatic ? 'news.html' : 'news.php';
                    var article = items.find(function (it) { return it.id === targetId; }) || items[0];
                    var mainEl = document.getElementById('news-article-container');
                    if (mainEl && article) {
                        document.title = article.title + ' | Department of Ship Technology';
                        var bodyHtml = article.body
                            ? '<div class="mt-3" style="font-size: 15.5px; line-height: 1.75; color: #334155;">' + esc(article.body).replace(/\n\s*\n/g, '</p><p>').replace(/\n/g, '<br>') + '</div>'
                            : '';
                        mainEl.innerHTML = (
                            '<div class="d-flex align-items-center gap-2 mb-3">' +
                            '  <span class="badge rounded-pill px-3 py-1" style="background: rgba(225, 29, 72, 0.1); color: #be123c; font-weight: 800; font-size: 11px;">OFFICIAL PRESS &amp; NOTICE</span>' +
                            '  <span class="text-muted small fw-bold"><i class="fa-regular fa-clock text-danger me-1"></i> ' + esc(article.date) + '</span>' +
                            '</div>' +
                            '<h2 class="fw-bold mb-3" style="color: #0f172a; line-height: 1.32;">' + esc(article.title) + '</h2>' +
                            '<div class="article-clipping-frame">' +
                            '  <a href="' + esc(article.image) + '" target="_blank" title="Click to open full-resolution image">' +
                            '    <img src="' + esc(article.image) + '" alt="' + esc(article.title) + '">' +
                            '  </a>' +
                            '</div>' +
                            bodyHtml +
                            '<div class="mt-4 pt-3 d-flex justify-content-between align-items-center" style="border-top: 1px solid rgba(15,23,42,0.08);">' +
                            '  <a href="' + newsListUrl + '" class="btn btn-outline-primary rounded-pill px-4"><i class="fa fa-arrow-left me-2"></i>Back to All News</a>' +
                            '  <a href="' + esc(article.image) + '" target="_blank" class="btn btn-primary rounded-pill px-4"><i class="fa fa-expand me-2"></i>View Full Image</a>' +
                            '</div>'
                        );
                    }

                    var sideEl = document.getElementById('other-news-sidebar');
                    if (sideEl) {
                        sideEl.innerHTML = items.filter(function (it) { return !article || it.id !== article.id; }).map(function (it) {
                            var rawHref = it.href || ('news-view.php?id=' + it.id);
                            if (isStatic) rawHref = rawHref.replace(/news-view\.php/g, 'news-view.html');
                            return (
                                '<a class="sidebar-news-item" href="' + esc(rawHref) + '">' +
                                '  <img src="' + esc(it.image) + '" loading="lazy" alt="' + esc(it.title) + '">' +
                                '  <div class="overflow-hidden">' +
                                '    <div class="fw-bold text-dark mb-1" style="font-size: 13.5px; line-height: 1.35;">' + esc(it.title) + '</div>' +
                                '    <div class="small text-muted"><i class="fa-regular fa-calendar text-danger me-1"></i>' + esc(it.date) + '</div>' +
                                '  </div>' +
                                '</a>'
                            );
                        }).join('');
                    }
                });
        })();
    </script>
</body>

</html>
