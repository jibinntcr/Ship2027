<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Visual Archive &amp; Gallery | Department of Ship Technology, CUSAT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Department of Ship Technology CUSAT Gallery, Naval Architecture Events, Convocation, INS Vikrant Visit, Golden Jubilee" name="keywords">
    <meta content="Explore the official visual archive, event albums, naval visits, convocation ceremonies, and campus life of the Department of Ship Technology at CUSAT." name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="./lib/icons/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css?v=6" rel="stylesheet">

    <style>
        /* ==========================================================================
           INTERNATIONAL MARITIME VISUAL ARCHIVE & BENTO GALLERY
           ========================================================================== */
        body {
            background-color: #f8fafc;
            background-image:
                radial-gradient(at 0% 15%, rgba(56, 189, 248, 0.06) 0px, transparent 48%),
                radial-gradient(at 100% 40%, rgba(2, 132, 199, 0.05) 0px, transparent 50%),
                radial-gradient(at 25% 85%, rgba(21, 7, 84, 0.04) 0px, transparent 50%);
            background-attachment: fixed;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        /* Cinematic Ship-Bow Hero Stage with GPU Ocean Waves */
        .gallery-hero-wrapper {
            position: relative;
            background: linear-gradient(112deg, #030917 0%, #081738 46%, #0c2654 100%);
            overflow: hidden;
            min-height: 410px;
            display: flex;
            align-items: center;
        }

        .gallery-hero-wrapper::before {
            content: "";
            position: absolute;
            top: -20%;
            left: -10%;
            width: 55%;
            height: 140%;
            background: radial-gradient(circle, rgba(56, 189, 248, 0.14) 0%, rgba(2, 132, 199, 0.04) 45%, transparent 70%);
            pointer-events: none;
            z-index: 1;
        }

        /* Diagonal Ship-Prow Light Sweep Line */
        .gallery-hero-wrapper::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 48%;
            width: 14%;
            background: linear-gradient(180deg, rgba(56, 189, 248, 0.08) 0%, rgba(125, 211, 252, 0.55) 50%, rgba(56, 189, 248, 0.08) 100%);
            clip-path: polygon(96.5% 0, 100% 0, 3.5% 100%, 0% 100%);
            z-index: 3;
            pointer-events: none;
        }

        .gallery-hero-visual {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 52%;
            clip-path: polygon(26% 0, 100% 0, 100% 100%, 0% 100%);
            z-index: 2;
            overflow: hidden;
        }

        .gallery-hero-visual img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.88) contrast(1.06);
            transform: scale(1.03);
        }

        .gallery-hero-visual::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(4, 11, 29, 0.55) 0%, rgba(4, 11, 29, 0.15) 40%, rgba(4, 11, 29, 0.25) 100%);
            z-index: 1;
        }

        .gallery-hero-content {
            position: relative;
            z-index: 4;
            padding: 58px 0 88px;
        }

        .gallery-breadcrumb-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 14px;
            border-radius: 999px;
            background: rgba(56, 189, 248, 0.14);
            border: 1px solid rgba(56, 189, 248, 0.32);
            font-size: 11.5px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #7dd3fc;
            margin-bottom: 16px;
        }

        .gallery-breadcrumb-pill a {
            color: #ffffff;
            text-decoration: none;
            opacity: 0.85;
            transition: opacity 0.2s ease;
        }

        .gallery-breadcrumb-pill a:hover {
            opacity: 1;
            color: #38bdf8;
        }

        .gallery-hero-title {
            font-size: clamp(32px, 3.6vw, 48px);
            font-weight: 800;
            color: #ffffff;
            line-height: 1.12;
            letter-spacing: -0.025em;
            margin-bottom: 14px;
        }

        .gallery-hero-title span {
            color: #38bdf8;
            font-weight: 300;
            display: block;
        }

        .gallery-hero-lead {
            font-size: 15.5px;
            line-height: 1.68;
            color: rgba(226, 232, 240, 0.86);
            max-width: 540px;
            margin-bottom: 24px;
        }

        .gallery-hero-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .gallery-hero-stat-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.16);
            backdrop-filter: blur(8px);
            color: #ffffff;
            font-size: 12.5px;
            font-weight: 600;
        }

        .gallery-hero-stat-pill i {
            color: #38bdf8;
        }

        /* 4-Layer GPU Ocean Wave Horizon at Bottom of Hero */
        .hero-ocean-horizon {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 62px;
            overflow: hidden;
            z-index: 6;
            pointer-events: none;
            line-height: 0;
        }

        .hero-ocean-waves {
            position: relative;
            width: 100%;
            height: 62px;
            margin-bottom: -7px;
        }

        .hero-wave-parallax > use {
            animation: oceanWaveMove 25s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
            will-change: transform;
        }

        .hero-wave-parallax > use:nth-child(1) { animation-delay: -2s; animation-duration: 8s; }
        .hero-wave-parallax > use:nth-child(2) { animation-delay: -3s; animation-duration: 12s; }
        .hero-wave-parallax > use:nth-child(3) { animation-delay: -4s; animation-duration: 16s; }
        .hero-wave-parallax > use:nth-child(4) { animation-delay: -5s; animation-duration: 22s; }

        @keyframes oceanWaveMove {
            0% { transform: translate3d(-90px, 0, 0); }
            100% { transform: translate3d(85px, 0, 0); }
        }

        @media (max-width: 991.98px) {
            .gallery-hero-wrapper::after,
            .gallery-hero-visual {
                display: none;
            }
        }

        /* ==========================================================================
           FEATURED DEPARTMENT DOCUMENTARY BENTO BANNER
           ========================================================================== */
        .video-spotlight-bento {
            position: relative;
            background: linear-gradient(135deg, #07122b 0%, #150754 55%, #06396b 100%);
            border-radius: 26px;
            padding: 28px;
            border: 1px solid rgba(56, 189, 248, 0.28);
            box-shadow: 0 24px 52px -16px rgba(8, 18, 44, 0.28);
            color: #ffffff;
            overflow: hidden;
            margin-bottom: 32px;
        }

        .video-spotlight-bento::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #38bdf8 0%, #0284c7 50%, #7dd3fc 100%);
        }

        .video-preview-stage {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            height: 240px;
            border: 2px solid rgba(56, 189, 248, 0.35);
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.4);
            cursor: pointer;
            background: #030917;
        }

        .video-preview-stage img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.84) contrast(1.06);
            transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1), filter 0.4s ease;
        }

        .video-preview-stage:hover img {
            transform: scale(1.06);
            filter: brightness(0.95) contrast(1.08);
        }

        .video-play-orb {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 68px;
            height: 68px;
            border-radius: 50%;
            background: linear-gradient(135deg, #0284c7 0%, #38bdf8 100%);
            color: #041028;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            box-shadow: 0 0 0 10px rgba(56, 189, 248, 0.24), 0 14px 30px rgba(0, 0, 0, 0.45);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
        }

        .video-preview-stage:hover .video-play-orb {
            transform: translate(-50%, -50%) scale(1.12);
            box-shadow: 0 0 0 14px rgba(56, 189, 248, 0.35), 0 18px 36px rgba(56, 189, 248, 0.5);
        }

        /* ==========================================================================
           INTERACTIVE FILTER & SEARCH CONTROL DECK
           ========================================================================== */
        .gallery-control-deck {
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(15, 23, 42, 0.09);
            border-radius: 24px;
            padding: 20px 24px;
            box-shadow: 0 18px 40px -16px rgba(10, 22, 54, 0.09);
            margin-bottom: 32px;
            position: relative;
            overflow: hidden;
        }

        .gallery-control-deck::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #0a1938 0%, #0284c7 50%, #38bdf8 100%);
        }

        .gallery-filter-pills {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .gallery-filter-btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 15px;
            border-radius: 999px;
            background: #ffffff;
            border: 1px solid rgba(15, 23, 42, 0.1);
            color: #334155;
            font-size: 12.5px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.24s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .gallery-filter-btn .count-chip {
            padding: 1px 7px;
            border-radius: 999px;
            background: rgba(2, 132, 199, 0.1);
            color: #0369a1;
            font-size: 11px;
            font-weight: 800;
        }

        .gallery-filter-btn:hover {
            border-color: rgba(2, 132, 199, 0.4);
            background: #f0f9ff;
            color: #0369a1;
            transform: translateY(-1px);
        }

        .gallery-filter-btn.active {
            background: linear-gradient(135deg, #0a1938 0%, #150754 55%, #0369a1 100%);
            color: #ffffff;
            border-color: #0284c7;
            box-shadow: 0 10px 20px -6px rgba(10, 25, 56, 0.32);
        }

        .gallery-filter-btn.active .count-chip {
            background: rgba(56, 189, 248, 0.25);
            color: #7dd3fc;
        }

        .gallery-search-box {
            position: relative;
            min-width: 260px;
        }

        .gallery-search-box i {
            position: absolute;
            top: 50%;
            left: 14px;
            transform: translateY(-50%);
            color: #0284c7;
            font-size: 13px;
        }

        .gallery-search-input {
            width: 100%;
            padding: 9px 14px 9px 38px;
            border-radius: 999px;
            border: 1px solid rgba(15, 23, 42, 0.12);
            background: #ffffff;
            font-size: 13px;
            font-weight: 500;
            color: #0f172a;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .gallery-search-input:focus {
            outline: none;
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.14);
        }

        /* ==========================================================================
           BENTO ALBUM CARDS (UNIFIED PAGE STYLE)
           ========================================================================== */
        .gallery-bento-card {
            position: relative;
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(15, 23, 42, 0.09);
            border-radius: 24px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 20px 44px -16px rgba(10, 22, 54, 0.10), 0 4px 12px -4px rgba(10, 22, 54, 0.04);
            transition: transform 0.32s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.32s ease, border-color 0.32s ease;
            cursor: pointer;
        }

        .gallery-bento-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #0a1938 0%, #0284c7 50%, #38bdf8 100%);
            z-index: 4;
        }

        .gallery-bento-card:hover {
            transform: translateY(-7px);
            border-color: rgba(2, 132, 199, 0.4);
            box-shadow: 0 28px 56px -14px rgba(10, 25, 56, 0.18);
        }

        .gallery-thumb-stage {
            position: relative;
            height: 235px;
            margin: 11px 11px 0;
            border-radius: 17px;
            overflow: hidden;
            background: #0a1938;
        }

        .gallery-thumb-stage img.album-cover-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .gallery-bento-card:hover .gallery-thumb-stage img.album-cover-img {
            transform: scale(1.07);
        }

        .gallery-thumb-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(6, 16, 40, 0.18) 0%, transparent 45%, rgba(6, 16, 40, 0.72) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-bento-card:hover .gallery-thumb-overlay {
            opacity: 1;
        }

        .gallery-zoom-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.95);
            color: #07122b;
            font-size: 12.5px;
            font-weight: 800;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
            transform: translateY(10px);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .gallery-bento-card:hover .gallery-zoom-pill {
            transform: translateY(0);
        }

        .gallery-cat-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            padding: 4px 11px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
            color: #0369a1;
            border: 1px solid rgba(2, 132, 199, 0.25);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.07em;
            text-transform: uppercase;
            z-index: 3;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        }

        .gallery-count-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 11px;
            border-radius: 999px;
            background: rgba(8, 20, 48, 0.84);
            backdrop-filter: blur(8px);
            color: #38bdf8;
            border: 1px solid rgba(56, 189, 248, 0.35);
            font-size: 11px;
            font-weight: 800;
            z-index: 3;
        }

        /* Mini Preview Strip inside Multi-Photo Cards */
        .gallery-mini-strip {
            position: absolute;
            bottom: 10px;
            left: 12px;
            right: 12px;
            display: flex;
            align-items: center;
            gap: 6px;
            z-index: 3;
        }

        .gallery-mini-thumb {
            width: 34px;
            height: 26px;
            border-radius: 6px;
            object-fit: cover;
            border: 1.5px solid rgba(255, 255, 255, 0.85);
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.35);
            background: #0f172a;
        }

        .gallery-card-body {
            padding: 18px 20px 14px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .gallery-card-title {
            font-size: 15.5px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.44;
            margin-bottom: 14px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.2s ease;
        }

        .gallery-bento-card:hover .gallery-card-title {
            color: #0284c7;
        }

        .gallery-card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 12px;
            border-top: 1px solid rgba(15, 23, 42, 0.07);
        }

        .gallery-open-btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 15px;
            border-radius: 999px;
            background: linear-gradient(135deg, #0a1938 0%, #150754 55%, #0369a1 100%);
            color: #ffffff !important;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none !important;
            transition: all 0.25s ease;
        }

        .gallery-bento-card:hover .gallery-open-btn {
            background: linear-gradient(135deg, #0284c7 0%, #38bdf8 100%);
            color: #041028 !important;
            box-shadow: 0 6px 16px rgba(2, 132, 199, 0.35);
        }

        /* ==========================================================================
           FULL-SCREEN INTERACTIVE LIGHTBOX & MULTI-PHOTO ALBUM VIEWER MODAL
           ========================================================================== */
        .maritime-lightbox-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(3, 9, 24, 0.94);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            z-index: 99999;
            display: none;
            flex-direction: column;
            justify-content: space-between;
            opacity: 0;
            transition: opacity 0.28s ease;
        }

        .maritime-lightbox-backdrop.is-open {
            display: flex;
            opacity: 1;
        }

        .lightbox-top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 16px 26px;
            background: rgba(8, 20, 48, 0.78);
            border-bottom: 1px solid rgba(56, 189, 248, 0.2);
        }

        .lightbox-album-info {
            display: flex;
            align-items: center;
            gap: 14px;
            min-width: 0;
        }

        .lightbox-counter-pill {
            padding: 5px 13px;
            border-radius: 999px;
            background: rgba(56, 189, 248, 0.18);
            border: 1px solid rgba(56, 189, 248, 0.4);
            color: #38bdf8;
            font-size: 12px;
            font-weight: 800;
            white-space: nowrap;
        }

        .lightbox-album-title {
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .lightbox-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
        }

        .lightbox-tool-btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.09);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: #ffffff !important;
            font-size: 12.5px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none !important;
            transition: all 0.22s ease;
        }

        .lightbox-tool-btn:hover {
            background: #38bdf8;
            border-color: #38bdf8;
            color: #041028 !important;
        }

        .lightbox-close-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(239, 68, 68, 0.2);
            border: 1px solid rgba(239, 68, 68, 0.45);
            color: #fca5a5;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.22s ease;
        }

        .lightbox-close-btn:hover {
            background: #ef4444;
            color: #ffffff;
            transform: rotate(90deg);
        }

        .lightbox-stage-area {
            position: relative;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 76px;
            overflow: hidden;
            min-height: 0;
        }

        .lightbox-main-img {
            max-width: 100%;
            max-height: calc(100vh - 210px);
            width: auto !important;
            height: auto !important;
            object-fit: contain;
            border-radius: 14px;
            box-shadow: 0 28px 70px rgba(0, 0, 0, 0.65);
            border: 1px solid rgba(255, 255, 255, 0.15);
            background: #071126;
            transition: transform 0.3s cubic-bezier(0.22, 1, 0.36, 1);
            cursor: zoom-in;
        }

        .lightbox-main-img.is-zoomed {
            transform: scale(1.65);
            cursor: zoom-out;
        }

        .lightbox-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: rgba(12, 30, 68, 0.82);
            border: 1px solid rgba(56, 189, 248, 0.38);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
            z-index: 5;
            transition: all 0.25s ease;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.45);
        }

        .lightbox-arrow:hover {
            background: #38bdf8;
            color: #041028;
            border-color: #38bdf8;
            transform: translateY(-50%) scale(1.08);
        }

        .lightbox-arrow.prev { left: 20px; }
        .lightbox-arrow.next { right: 20px; }

        .lightbox-bottom-bar {
            padding: 12px 24px 16px;
            background: rgba(8, 20, 48, 0.85);
            border-top: 1px solid rgba(56, 189, 248, 0.18);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .lightbox-filmstrip {
            display: flex;
            align-items: center;
            gap: 10px;
            overflow-x: auto;
            max-width: 100%;
            padding: 4px 8px;
        }

        .lightbox-thumb-btn {
            width: 68px;
            height: 48px;
            min-width: 68px;
            border-radius: 10px;
            overflow: hidden;
            border: 2px solid rgba(255, 255, 255, 0.2);
            padding: 0;
            background: #0a1938;
            cursor: pointer;
            opacity: 0.55;
            transition: all 0.22s ease;
        }

        .lightbox-thumb-btn img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .lightbox-thumb-btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .lightbox-thumb-btn.active {
            opacity: 1;
            border-color: #38bdf8;
            box-shadow: 0 0 0 2px rgba(56, 189, 248, 0.35);
            transform: scale(1.06);
        }

        @media (max-width: 767.98px) {
            .lightbox-stage-area {
                padding: 12px 16px;
            }
            .lightbox-arrow {
                width: 42px;
                height: 42px;
            }
            .lightbox-album-title {
                font-size: 13.5px;
                max-width: 180px;
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

    <!-- Cinematic Ship-Bow Hero Banner Start -->
    <section class="gallery-hero-wrapper mb-4">
        <div class="container gallery-hero-content">
            <div class="gallery-breadcrumb-pill">
                <a href="index.php"><i class="fa-solid fa-house me-1"></i> Home</a>
                <span>/</span>
                <span>Visual Archive &amp; Gallery</span>
            </div>
            <h1 class="gallery-hero-title">
                <span>Department of Ship Technology</span>
                Visual Archive &amp; Gallery
            </h1>
            <p class="gallery-hero-lead">
                Explore official photographs from naval delegations, convocation ceremonies, international academic visits, alumni jubilees, and student life at CUSAT. Click any album to inspect full-resolution photographs.
            </p>
            <div class="gallery-hero-stats">
                <span class="gallery-hero-stat-pill"><i class="fa-regular fa-folder-open"></i> <strong id="hero-album-count">35</strong> Curated Albums</span>
                <span class="gallery-hero-stat-pill"><i class="fa-regular fa-images"></i> <strong id="hero-photo-count">99</strong> High-Res Photographs</span>
                <span class="gallery-hero-stat-pill"><i class="fa-solid fa-expand"></i> Interactive Lightbox &amp; Zoom</span>
            </div>
        </div>
        <div class="gallery-hero-visual">
            <img src="img/shiptech.jpg" alt="Department of Ship Technology Campus">
        </div>

        <!-- 4-Layer GPU-Accelerated Ocean Wave Horizon -->
        <div class="hero-ocean-horizon">
            <svg class="hero-ocean-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="hero-wave-parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(56, 189, 248, 0.25)" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(14, 165, 233, 0.35)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255, 255, 255, 0.55)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#f8fafc" />
                </g>
            </svg>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Main Gallery Container Start -->
    <div class="container py-4">

        <!-- Featured Department Video Documentary Spotlight -->
        <div class="video-spotlight-bento">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <div class="video-preview-stage" onclick="window.open('https://www.youtube.com/watch?v=ps38qzlaNEA', '_blank')">
                        <img src="gallery_data/images/department-video.jpg" alt="Department of Ship Technology Official Video">
                        <div class="video-play-orb">
                            <i class="fa-solid fa-play ms-1"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                        <span class="badge rounded-pill px-3 py-1" style="background: rgba(56, 189, 248, 0.18); color: #38bdf8; border: 1px solid rgba(56, 189, 248, 0.38); font-size: 11px; letter-spacing: 0.08em; text-transform: uppercase;">
                            <i class="fa-solid fa-film me-1"></i> Featured Documentary
                        </span>
                        <span class="small text-info fw-semibold"><i class="fa-solid fa-anchor me-1"></i> Official Campus &amp; Lab Tour</span>
                    </div>
                    <h2 class="text-white fw-bold mb-2" style="font-size: 28px; letter-spacing: -0.02em;">Department of Ship Technology — Documentary Showcase</h2>
                    <p class="mb-4" style="color: rgba(226, 232, 240, 0.85); font-size: 15px; line-height: 1.68;">
                        Take an inside look at the pioneering legacy of Naval Architecture &amp; Ship Building at CUSAT since 1974 — featuring the CHASE Research Lab, Ship Model Testing, SNAS student innovations, and global industry collaborations.
                    </p>
                    <div class="d-flex align-items-center gap-3 flex-wrap">
                        <a href="https://www.youtube.com/watch?v=ps38qzlaNEA" target="_blank" class="btn rounded-pill px-4 py-2 fw-bold" style="background: #38bdf8; color: #041028; font-size: 13.5px;">
                            <i class="fa-brands fa-youtube me-2"></i> Watch Official Video on YouTube
                        </a>
                        <a href="https://www.youtube.com/@societyofnavalarchitecture1487" target="_blank" class="btn rounded-pill px-4 py-2 fw-bold" style="background: rgba(255,255,255,0.1); color: #ffffff; border: 1px solid rgba(255,255,255,0.22); font-size: 13.5px;">
                            <i class="fa-solid fa-video me-2 text-info"></i> SNAS YouTube Channel
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Interactive Filter & Search Control Bar -->
        <div class="gallery-control-deck">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div class="gallery-filter-pills" id="gallery-filter-bar">
                    <button type="button" class="gallery-filter-btn active" data-filter="all">
                        <i class="fa-solid fa-layer-group"></i> All Albums <span class="count-chip" id="count-all">34</span>
                    </button>
                    <button type="button" class="gallery-filter-btn" data-filter="naval">
                        <i class="fa-solid fa-ship"></i> Naval &amp; VIP Visits <span class="count-chip" id="count-naval">0</span>
                    </button>
                    <button type="button" class="gallery-filter-btn" data-filter="academic">
                        <i class="fa-solid fa-graduation-cap"></i> Convocations &amp; Batches <span class="count-chip" id="count-academic">0</span>
                    </button>
                    <button type="button" class="gallery-filter-btn" data-filter="alumni">
                        <i class="fa-solid fa-users"></i> Alumni &amp; Jubilees <span class="count-chip" id="count-alumni">0</span>
                    </button>
                    <button type="button" class="gallery-filter-btn" data-filter="campus">
                        <i class="fa-solid fa-award"></i> Awards, Workshops &amp; SNAS <span class="count-chip" id="count-campus">0</span>
                    </button>
                </div>

                <div class="gallery-search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="gallery-search-input" class="gallery-search-input" placeholder="Search albums, batches, visits...">
                </div>
            </div>
        </div>

        <!-- Bento Album Grid -->
        <div id="gallery-grid" class="row g-4 m-0 p-0">
            <!-- Populated dynamically with all 34 multi-photo albums -->
        </div>

    </div>
    <!-- Main Gallery Container End -->

    <!-- Full-Screen Interactive Lightbox & Multi-Photo Album Viewer Modal -->
    <div id="maritime-lightbox" class="maritime-lightbox-backdrop" role="dialog" aria-modal="true" aria-label="Album Image Viewer">
        <div class="lightbox-top-bar">
            <div class="lightbox-album-info">
                <span id="lb-counter" class="lightbox-counter-pill">Photo 1 / 1</span>
                <h3 id="lb-title" class="lightbox-album-title">Album Title</h3>
            </div>
            <div class="lightbox-actions">
                <button type="button" id="lb-prev-album" class="lightbox-tool-btn d-none d-md-inline-flex" title="Previous Album">
                    <i class="fa-solid fa-backward-step"></i> Prev Album
                </button>
                <button type="button" id="lb-next-album" class="lightbox-tool-btn d-none d-md-inline-flex" title="Next Album">
                    Next Album <i class="fa-solid fa-forward-step"></i>
                </button>
                <button type="button" id="lb-zoom-btn" class="lightbox-tool-btn" title="Toggle Zoom">
                    <i class="fa-solid fa-magnifying-glass-plus"></i> <span>Zoom</span>
                </button>
                <a id="lb-download-btn" href="#" target="_blank" download class="lightbox-tool-btn" title="Open or Download Original Image">
                    <i class="fa-solid fa-download"></i> <span class="d-none d-sm-inline">Original</span>
                </a>
                <button type="button" id="lb-close-btn" class="lightbox-close-btn" aria-label="Close Viewer">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>

        <div class="lightbox-stage-area" id="lb-stage-area">
            <button type="button" id="lb-prev-photo" class="lightbox-arrow prev" aria-label="Previous Photo">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <img id="lb-main-img" class="lightbox-main-img" src="" alt="Gallery Full View">
            <button type="button" id="lb-next-photo" class="lightbox-arrow next" aria-label="Next Photo">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div class="lightbox-bottom-bar">
            <div id="lb-filmstrip" class="lightbox-filmstrip"></div>
        </div>
    </div>

    <!-- Preloaded Multi-Photo Album Manifest -->
    <script>
        window.__GALLERY_ALBUMS__ = <?php include('gallery_data/albums.json') ?>;
    </script>

    <script>
        (function () {
            var baseAlbums = Array.isArray(window.__GALLERY_ALBUMS__) ? window.__GALLERY_ALBUMS__ : [];
            var allAlbums = [];
            var filteredAlbums = [];
            var activeFilter = 'all';
            var searchQuery = '';

            // Current Lightbox state
            var currentAlbumIdx = 0;
            var currentPhotoIdx = 0;

            function esc(str) {
                if (str === null || str === undefined) return '';
                return String(str)
                    .replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/"/g, '&quot;')
                    .replace(/'/g, '&#39;');
            }

            function classifyAlbum(title, rawCategory) {
                var t = (title || '').toLowerCase();
                if (t.indexOf('department video') !== -1 || (rawCategory && rawCategory.toLowerCase() === 'video')) {
                    return { key: 'video', label: 'Documentary Video' };
                }
                if (
                    t.indexOf('captain') !== -1 ||
                    t.indexOf('cmde') !== -1 ||
                    t.indexOf('vikrant') !== -1 ||
                    t.indexOf('netherlands') !== -1 ||
                    t.indexOf('sri lanka') !== -1 ||
                    t.indexOf('oman') !== -1 ||
                    t.indexOf('ambassador') !== -1 ||
                    t.indexOf('rina ceo') !== -1 ||
                    t.indexOf('nstl') !== -1 ||
                    t.indexOf('visit') !== -1
                ) {
                    return { key: 'naval', label: 'Naval & VIP Visit' };
                }
                if (
                    t.indexOf('graduation') !== -1 ||
                    t.indexOf('batch') !== -1 ||
                    t.indexOf('induction') !== -1 ||
                    t.indexOf('inauguration') !== -1 ||
                    t.indexOf('fresher') !== -1 ||
                    t.indexOf('farewell') !== -1 ||
                    t.indexOf('send off') !== -1 ||
                    t.indexOf('placement') !== -1
                ) {
                    return { key: 'academic', label: 'Batch & Academic' };
                }
                if (
                    t.indexOf('alumni') !== -1 ||
                    t.indexOf('jubilee') !== -1 ||
                    t.indexOf('pta') !== -1 ||
                    t.indexOf('get-together') !== -1 ||
                    t.indexOf('dostas') !== -1
                ) {
                    return { key: 'alumni', label: 'Alumni & Jubilee' };
                }
                return { key: 'campus', label: 'Awards & Campus' };
            }

            function buildUnifiedAlbums(sqliteGallery) {
                var baseByTitle = {};
                var baseByCover = {};

                baseAlbums.forEach(function (a) {
                    if (!a || !a.title) return;
                    var photos = Array.isArray(a.photos) && a.photos.length > 0 ? a.photos.slice() : [a.cover];
                    baseByTitle[a.title.trim().toLowerCase()] = photos;
                    if (a.cover) {
                        baseByCover[a.cover.trim()] = photos;
                    }
                });

                var merged = [];
                if (Array.isArray(sqliteGallery) && sqliteGallery.length > 0) {
                    sqliteGallery.forEach(function (g) {
                        if (!g || !g.title) return;
                        if (g.title.toLowerCase().indexOf('department video') !== -1) return;
                        var key = g.title.trim().toLowerCase();
                        var matchedPhotos = baseByTitle[key] || (g.image ? baseByCover[g.image.trim()] : null);
                        var photos = matchedPhotos ? matchedPhotos.slice() : (g.image ? [g.image] : []);
                        if (g.image && photos.indexOf(g.image) === -1) {
                            photos.unshift(g.image);
                        }
                        var catInfo = classifyAlbum(g.title, g.category);
                        merged.push({
                            title: g.title,
                            cover: g.image || photos[0],
                            photos: photos,
                            catKey: catInfo.key,
                            catLabel: catInfo.label
                        });
                    });
                } else {
                    baseAlbums.forEach(function (a) {
                        if (a.title && a.title.toLowerCase().indexOf('department video') !== -1) return;
                        var catInfo = classifyAlbum(a.title, a.category);
                        var photos = Array.isArray(a.photos) && a.photos.length > 0 ? a.photos.slice() : [a.cover];
                        merged.push({
                            title: a.title,
                            cover: a.cover || photos[0],
                            photos: photos,
                            catKey: catInfo.key,
                            catLabel: catInfo.label
                        });
                    });
                }

                allAlbums = merged;
                updateCategoryCounts();
                applyFilterAndRender();
            }

            function updateCategoryCounts() {
                var counts = { all: allAlbums.length, naval: 0, academic: 0, alumni: 0, campus: 0 };
                var totalPhotos = 1; // +1 for department video cover
                allAlbums.forEach(function (a) {
                    if (counts[a.catKey] !== undefined) counts[a.catKey]++;
                    totalPhotos += a.photos.length;
                });
                var elAll = document.getElementById('count-all');
                var elNaval = document.getElementById('count-naval');
                var elAcad = document.getElementById('count-academic');
                var elAlum = document.getElementById('count-alumni');
                var elCamp = document.getElementById('count-campus');
                if (elAll) elAll.textContent = counts.all;
                if (elNaval) elNaval.textContent = counts.naval;
                if (elAcad) elAcad.textContent = counts.academic;
                if (elAlum) elAlum.textContent = counts.alumni;
                if (elCamp) elCamp.textContent = counts.campus;

                var heroAlbums = document.getElementById('hero-album-count');
                var heroPhotos = document.getElementById('hero-photo-count');
                if (heroAlbums) heroAlbums.textContent = counts.all + 1;
                if (heroPhotos) heroPhotos.textContent = totalPhotos;
            }

            function applyFilterAndRender() {
                var q = searchQuery.trim().toLowerCase();
                filteredAlbums = allAlbums.filter(function (a) {
                    var matchesCat = (activeFilter === 'all') || (a.catKey === activeFilter);
                    var matchesQuery = !q || a.title.toLowerCase().indexOf(q) !== -1 || a.catLabel.toLowerCase().indexOf(q) !== -1;
                    return matchesCat && matchesQuery;
                });

                var grid = document.getElementById('gallery-grid');
                if (!grid) return;

                if (filteredAlbums.length === 0) {
                    grid.innerHTML = (
                        '<div class="col-12 text-center py-5">' +
                        '  <div class="p-5 bg-white rounded-4 border shadow-sm">' +
                        '    <i class="fa-regular fa-images fa-3x text-info mb-3"></i>' +
                        '    <h4 class="fw-bold text-dark">No matching albums found</h4>' +
                        '    <p class="text-muted mb-0">Try clearing your search filter or selecting "All Albums".</p>' +
                        '  </div>' +
                        '</div>'
                    );
                    return;
                }

                grid.innerHTML = filteredAlbums.map(function (album, idx) {
                    var pCount = album.photos.length;
                    var countLabel = pCount > 1 ? (pCount + ' Photos') : '1 Photo';
                    var miniStripHtml = '';
                    if (pCount > 1) {
                        var previewPhotos = album.photos.slice(0, 4);
                        miniStripHtml = (
                            '<div class="gallery-mini-strip">' +
                            previewPhotos.map(function (pUrl) {
                                return '<img class="gallery-mini-thumb" src="' + esc(pUrl) + '" loading="lazy" alt="Thumb">';
                            }).join('') +
                            (pCount > 4 ? '<span class="badge rounded-pill bg-dark text-info fw-bold" style="font-size:10px;">+' + (pCount - 4) + '</span>' : '') +
                            '</div>'
                        );
                    }

                    return (
                        '<div class="col-md-6 col-lg-4 d-flex">' +
                        '  <article class="gallery-bento-card w-100" data-album-idx="' + idx + '">' +
                        '    <div>' +
                        '      <div class="gallery-thumb-stage">' +
                        '        <span class="gallery-cat-badge">' + esc(album.catLabel) + '</span>' +
                        '        <span class="gallery-count-badge"><i class="fa-regular fa-images"></i> ' + countLabel + '</span>' +
                        '        <img class="album-cover-img" src="' + esc(album.cover) + '" loading="lazy" alt="' + esc(album.title) + '">' +
                        miniStripHtml +
                        '        <div class="gallery-thumb-overlay">' +
                        '          <span class="gallery-zoom-pill"><i class="fa-solid fa-expand text-info"></i> View ' + countLabel + '</span>' +
                        '        </div>' +
                        '      </div>' +
                        '      <div class="gallery-card-body">' +
                        '        <h3 class="gallery-card-title">' + esc(album.title) + '</h3>' +
                        '        <div class="gallery-card-footer">' +
                        '          <span class="small fw-bold" style="color: #0284c7; font-size: 12px;"><i class="fa-solid fa-camera-retro me-1"></i> ' + countLabel + '</span>' +
                        '          <span class="gallery-open-btn"><span>Open Album</span> <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 10px;"></i></span>' +
                        '        </div>' +
                        '      </div>' +
                        '    </div>' +
                        '  </article>' +
                        '</div>'
                    );
                }).join('');
            }

            // Lightbox Viewer Functions
            var lbModal = document.getElementById('maritime-lightbox');
            var lbMainImg = document.getElementById('lb-main-img');
            var lbTitle = document.getElementById('lb-title');
            var lbCounter = document.getElementById('lb-counter');
            var lbFilmstrip = document.getElementById('lb-filmstrip');
            var lbDownload = document.getElementById('lb-download-btn');

            function openLightbox(albumIdx, photoIdx) {
                if (!filteredAlbums[albumIdx]) return;
                currentAlbumIdx = albumIdx;
                currentPhotoIdx = photoIdx || 0;
                lbMainImg.classList.remove('is-zoomed');
                updateLightboxView();
                lbModal.classList.add('is-open');
                document.body.style.overflow = 'hidden';
            }

            function closeLightbox() {
                lbModal.classList.remove('is-open');
                lbMainImg.classList.remove('is-zoomed');
                document.body.style.overflow = '';
            }

            function updateLightboxView() {
                var album = filteredAlbums[currentAlbumIdx];
                if (!album) return;
                var photos = album.photos;
                if (currentPhotoIdx < 0) currentPhotoIdx = photos.length - 1;
                if (currentPhotoIdx >= photos.length) currentPhotoIdx = 0;

                var activePhotoUrl = photos[currentPhotoIdx];
                lbMainImg.src = activePhotoUrl;
                lbMainImg.alt = album.title + ' - Photo ' + (currentPhotoIdx + 1);
                lbTitle.textContent = album.title;
                lbCounter.textContent = 'Photo ' + (currentPhotoIdx + 1) + ' of ' + photos.length + '  •  Album ' + (currentAlbumIdx + 1) + '/' + filteredAlbums.length;
                lbDownload.href = activePhotoUrl;

                lbFilmstrip.innerHTML = photos.map(function (url, pIdx) {
                    return (
                        '<button type="button" class="lightbox-thumb-btn' + (pIdx === currentPhotoIdx ? ' active' : '') + '" data-photo-idx="' + pIdx + '">' +
                        '  <img src="' + esc(url) + '" alt="Thumbnail ' + (pIdx + 1) + '">' +
                        '</button>'
                    );
                }).join('');
            }

            // Event Listeners
            document.addEventListener('click', function (e) {
                var card = e.target.closest('.gallery-bento-card');
                if (card) {
                    e.preventDefault();
                    var aIdx = parseInt(card.getAttribute('data-album-idx'), 10);
                    if (!isNaN(aIdx)) openLightbox(aIdx, 0);
                    return;
                }

                var filterBtn = e.target.closest('.gallery-filter-btn');
                if (filterBtn) {
                    document.querySelectorAll('.gallery-filter-btn').forEach(function (b) { b.classList.remove('active'); });
                    filterBtn.classList.add('active');
                    activeFilter = filterBtn.getAttribute('data-filter') || 'all';
                    applyFilterAndRender();
                    return;
                }

                var thumbBtn = e.target.closest('.lightbox-thumb-btn');
                if (thumbBtn) {
                    var pIdx = parseInt(thumbBtn.getAttribute('data-photo-idx'), 10);
                    if (!isNaN(pIdx)) {
                        currentPhotoIdx = pIdx;
                        lbMainImg.classList.remove('is-zoomed');
                        updateLightboxView();
                    }
                    return;
                }
            });

            var searchInput = document.getElementById('gallery-search-input');
            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    searchQuery = this.value || '';
                    applyFilterAndRender();
                });
            }

            document.getElementById('lb-close-btn').addEventListener('click', closeLightbox);
            document.getElementById('lb-prev-photo').addEventListener('click', function () {
                var album = filteredAlbums[currentAlbumIdx];
                if (!album) return;
                if (album.photos.length > 1) {
                    currentPhotoIdx--;
                    lbMainImg.classList.remove('is-zoomed');
                    updateLightboxView();
                } else {
                    // Step to previous album if single photo
                    currentAlbumIdx = (currentAlbumIdx - 1 + filteredAlbums.length) % filteredAlbums.length;
                    currentPhotoIdx = 0;
                    lbMainImg.classList.remove('is-zoomed');
                    updateLightboxView();
                }
            });
            document.getElementById('lb-next-photo').addEventListener('click', function () {
                var album = filteredAlbums[currentAlbumIdx];
                if (!album) return;
                if (album.photos.length > 1) {
                    currentPhotoIdx++;
                    lbMainImg.classList.remove('is-zoomed');
                    updateLightboxView();
                } else {
                    // Step to next album if single photo
                    currentAlbumIdx = (currentAlbumIdx + 1) % filteredAlbums.length;
                    currentPhotoIdx = 0;
                    lbMainImg.classList.remove('is-zoomed');
                    updateLightboxView();
                }
            });

            document.getElementById('lb-prev-album').addEventListener('click', function () {
                currentAlbumIdx = (currentAlbumIdx - 1 + filteredAlbums.length) % filteredAlbums.length;
                currentPhotoIdx = 0;
                lbMainImg.classList.remove('is-zoomed');
                updateLightboxView();
            });
            document.getElementById('lb-next-album').addEventListener('click', function () {
                currentAlbumIdx = (currentAlbumIdx + 1) % filteredAlbums.length;
                currentPhotoIdx = 0;
                lbMainImg.classList.remove('is-zoomed');
                updateLightboxView();
            });

            function toggleZoom() {
                lbMainImg.classList.toggle('is-zoomed');
            }
            document.getElementById('lb-zoom-btn').addEventListener('click', toggleZoom);
            lbMainImg.addEventListener('click', toggleZoom);

            document.getElementById('lb-stage-area').addEventListener('click', function (e) {
                if (e.target === this) closeLightbox();
            });

            document.addEventListener('keydown', function (e) {
                if (!lbModal.classList.contains('is-open')) return;
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') document.getElementById('lb-prev-photo').click();
                if (e.key === 'ArrowRight') document.getElementById('lb-next-photo').click();
            });

            // Expose hook for js/site-data.js
            window.renderMaritimeGallery = function (sqliteGallery) {
                buildUnifiedAlbums(sqliteGallery);
            };

            // Initial render
            buildUnifiedAlbums(window.__SHIPTECH_DATA__ ? window.__SHIPTECH_DATA__.gallery : []);
        })();
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
