<!-- Footer Start -->
<style>
    /* ==========================================================================
       INTERNATIONAL MARITIME FOOTER — MULTI-CREST OCEAN WAVES & FULL-BLEED MAP
       ========================================================================== */
    .maritime-footer-wrapper {
        position: relative;
        clear: both;
        width: 100%;
        margin-top: 3.5rem;
        background: transparent;
        color: #e2e8f0;
        overflow: hidden;
    }

    /* 1. Multi-Crest Seamless GPU Ocean Wave Horizon (viewBox 0 0 1440 84) */
    .footer-ocean-wave-top {
        position: relative;
        width: 100%;
        height: 76px;
        overflow: hidden;
        line-height: 0;
        background: transparent;
        margin-bottom: -2px;
        z-index: 3;
        pointer-events: none;
    }

    .footer-wave-svg {
        position: relative;
        display: block;
        width: 100%;
        height: 76px;
    }

    .footer-wave-parallax > use {
        will-change: transform;
    }

    .footer-wave-parallax > use:nth-child(1) {
        animation: footerWaveLoop 18s linear infinite;
    }

    .footer-wave-parallax > use:nth-child(2) {
        animation: footerWaveLoop 13s linear infinite reverse;
    }

    .footer-wave-parallax > use:nth-child(3) {
        animation: footerWaveLoop 10s linear infinite;
    }

    .footer-wave-parallax > use:nth-child(4) {
        animation: footerWaveLoop 7.5s ease-in-out infinite alternate;
    }

    @keyframes footerWaveLoop {
        0% {
            transform: translate3d(0, 0, 0);
        }
        100% {
            transform: translate3d(-720px, 0, 0);
        }
    }

    /* 2. Deep-Ocean Footer Stage (#051129 top matches 4th wave fill seamlessly) */
    .maritime-footer-stage {
        position: relative;
        z-index: 2;
        background:
            radial-gradient(circle at 14% 20%, rgba(14, 165, 233, 0.14) 0%, transparent 45%),
            radial-gradient(circle at 86% 25%, rgba(56, 189, 248, 0.12) 0%, transparent 45%),
            linear-gradient(180deg, #051129 0%, #071736 55%, #030917 100%);
        padding: 36px 0 0;
        overflow: hidden;
    }

    .maritime-footer-stage::before {
        content: "";
        position: absolute;
        inset: 0;
        background: url('img/map.png') center center no-repeat;
        background-size: contain;
        opacity: 0.14;
        pointer-events: none;
    }

    /* Water Caustics Shimmer Reflection at Top of Footer Stage */
    .footer-caustic-shimmer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 120px;
        background:
            radial-gradient(ellipse 40% 35% at 25% 0%, rgba(56, 189, 248, 0.18) 0%, transparent 70%),
            radial-gradient(ellipse 45% 35% at 75% 0%, rgba(14, 165, 233, 0.15) 0%, transparent 70%);
        filter: blur(8px);
        pointer-events: none;
        z-index: 1;
    }

    /* 3. Unified Architectural Footer Shell */
    .footer-main-shell {
        position: relative;
        z-index: 2;
        background: rgba(10, 24, 54, 0.62);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(56, 189, 248, 0.2);
        border-radius: 24px;
        padding: 28px 30px;
        box-shadow: 0 22px 48px -18px rgba(0, 0, 0, 0.65);
        position: relative;
        overflow: hidden;
    }

    .footer-main-shell::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #0284c7 0%, #38bdf8 50%, #0284c7 100%);
    }

    .footer-col-divider {
        border-right: 1px solid rgba(255, 255, 255, 0.09);
        padding-right: 24px;
    }

    @media (max-width: 991.98px) {
        .footer-col-divider {
            border-right: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.09);
            padding-right: 12px;
            padding-bottom: 22px;
            margin-bottom: 8px;
        }
    }

    .footer-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 10.5px;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #38bdf8;
        margin-bottom: 3px;
    }

    .footer-heading {
        font-size: 19px;
        font-weight: 800;
        color: #ffffff !important;
        margin-bottom: 14px;
        letter-spacing: -0.015em;
    }

    /* Column 1: Compact Address & Direct Contact */
    .footer-contact-stack {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .footer-contact-row {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 13.5px;
        color: #cbd5e1;
        line-height: 1.5;
    }

    .footer-contact-icon {
        width: 32px;
        height: 32px;
        min-width: 32px;
        border-radius: 9px;
        background: rgba(56, 189, 248, 0.14);
        border: 1px solid rgba(56, 189, 248, 0.32);
        color: #38bdf8;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        margin-top: 1px;
    }

    .footer-social-strip {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 16px;
        padding-top: 14px;
        border-top: 1px solid rgba(255, 255, 255, 0.09);
    }

    .footer-social-btn {
        width: 34px;
        height: 34px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: #ffffff !important;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        text-decoration: none !important;
        transition: all 0.22s ease;
    }

    .footer-social-btn:hover {
        background: #38bdf8;
        border-color: #38bdf8;
        color: #041028 !important;
        transform: translateY(-2px);
    }

    /* Column 2: Clean 2-Column Navigation Grid */
    .footer-links-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px 10px;
    }

    .footer-nav-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 8px 11px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        color: #e2e8f0 !important;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none !important;
        transition: all 0.2s ease;
    }

    .footer-nav-link span {
        display: inline-flex;
        align-items: center;
        gap: 7px;
    }

    .footer-nav-link i.link-bullet {
        color: #38bdf8;
        font-size: 11.5px;
    }

    .footer-nav-link i.link-arrow {
        font-size: 10px;
        color: rgba(148, 163, 184, 0.6);
        transition: transform 0.2s ease, color 0.2s ease;
    }

    .footer-nav-link:hover {
        background: rgba(56, 189, 248, 0.15);
        border-color: rgba(56, 189, 248, 0.4);
        color: #ffffff !important;
        transform: translateX(2px);
    }

    .footer-nav-link:hover i.link-arrow {
        transform: translateX(2px);
        color: #38bdf8;
    }

    .footer-portal-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 6px;
        margin-top: 14px;
        padding-top: 13px;
        border-top: 1px solid rgba(255, 255, 255, 0.09);
    }

    .footer-mini-pill {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 5px 10px;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.12);
        color: #cbd5e1 !important;
        font-size: 11.5px;
        font-weight: 700;
        text-decoration: none !important;
        transition: all 0.2s ease;
    }

    .footer-mini-pill:hover {
        background: rgba(56, 189, 248, 0.18);
        border-color: rgba(56, 189, 248, 0.45);
        color: #ffffff !important;
    }

    .footer-mini-pill.admin-pill {
        background: linear-gradient(90deg, rgba(2, 132, 199, 0.28) 0%, rgba(56, 189, 248, 0.14) 100%);
        border-color: rgba(56, 189, 248, 0.4);
        color: #7dd3fc !important;
    }

    /* Column 3: Edge-to-Edge Full-Fill Map Showcase (Zero Wasted Space!) */
    .footer-map-column {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .footer-map-frame {
        position: relative;
        flex: 1 1 auto;
        width: 100%;
        min-height: 225px;
        height: 100%;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(56, 189, 248, 0.32);
        box-shadow: 0 14px 32px rgba(0, 0, 0, 0.45);
        background: #061229;
    }

    .footer-map-frame iframe {
        position: absolute;
        inset: 0;
        width: 100% !important;
        height: 100% !important;
        border: 0;
        display: block;
    }

    .footer-map-badge-overlay {
        position: absolute;
        bottom: 10px;
        right: 10px;
        z-index: 3;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 5px 12px;
        border-radius: 999px;
        background: rgba(5, 17, 41, 0.88);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(56, 189, 248, 0.4);
        color: #7dd3fc !important;
        font-size: 11px;
        font-weight: 700;
        text-decoration: none !important;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.35);
        transition: all 0.2s ease;
    }

    .footer-map-badge-overlay:hover {
        background: #0284c7;
        color: #ffffff !important;
    }

    /* Bottom Copyright Bar */
    .footer-copyright-bar {
        position: relative;
        z-index: 2;
        margin-top: 26px;
        padding: 16px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.09);
        background: rgba(2, 6, 16, 0.65);
        font-size: 13px;
        color: #94a3b8;
    }

    .footer-copyright-bar a {
        color: #7dd3fc !important;
        font-weight: 600;
        text-decoration: none !important;
        transition: color 0.2s ease;
    }

    .footer-copyright-bar a:hover {
        color: #ffffff !important;
    }
</style>

<footer class="maritime-footer-wrapper">
    <!-- 4-Layer Multi-Crest Ocean Wave Horizon (viewBox 0 0 1440 84 — Seamless Periodic Loop) -->
    <div class="footer-ocean-wave-top">
        <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 1440 84" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="footer-ocean-wave-path"
                    d="M 0 44 Q 180 12 360 44 T 720 44 T 1080 44 T 1440 44 T 1800 44 T 2160 44 T 2520 44 T 2880 44 L 2880 86 L 0 86 Z" />
            </defs>
            <g class="footer-wave-parallax">
                <use xlink:href="#footer-ocean-wave-path" x="0" y="0" fill="rgba(56, 189, 248, 0.26)" />
                <use xlink:href="#footer-ocean-wave-path" x="-180" y="6" fill="rgba(14, 165, 233, 0.45)" />
                <use xlink:href="#footer-ocean-wave-path" x="-360" y="12" fill="rgba(10, 34, 78, 0.80)" />
                <use xlink:href="#footer-ocean-wave-path" x="-90" y="18" fill="#051129" />
            </g>
        </svg>
    </div>

    <div class="maritime-footer-stage">
        <!-- Subtle Water Caustics Shimmer -->
        <div class="footer-caustic-shimmer"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="footer-main-shell">
                <div class="row g-4 align-items-stretch">
                    <!-- COLUMN 1: ADDRESS & DIRECT CONTACT -->
                    <div class="col-lg-4 col-md-6 footer-col-divider d-flex flex-column justify-content-between">
                        <div>
                            <span class="footer-eyebrow"><i class="fa fa-anchor"></i> Est. 1974 • CUSAT</span>
                            <h4 class="footer-heading">Address &amp; Contact</h4>

                            <div class="footer-contact-stack">
                                <div class="footer-contact-row">
                                    <div class="footer-contact-icon">
                                        <i class="fa fa-map-marker-alt"></i>
                                    </div>
                                    <span id="footer-address">Department of Ship Technology,<br>
                                        Cochin University of Science and Technology,<br>
                                        Cochin-22, Kerala, India</span>
                                </div>
                                <div class="footer-contact-row align-items-center">
                                    <div class="footer-contact-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <span id="footer-phone" class="fw-semibold text-white">+91-484 257-5714</span>
                                </div>
                                <div class="footer-contact-row align-items-center">
                                    <div class="footer-contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <span id="footer-email" class="fw-semibold text-white">ship@cusat.ac.in</span>
                                </div>
                            </div>
                        </div>

                        <div class="footer-social-strip">
                            <span class="small fw-bold text-uppercase me-1" style="font-size: 10.5px; letter-spacing: 0.08em; color: #7dd3fc;">Connect:</span>
                            <a target="_blank" class="footer-social-btn" title="DoST CUSAT LinkedIn" href="https://www.linkedin.com/company/dost-cusat/about/"><i class="fab fa-linkedin-in"></i></a>
                            <a target="_blank" class="footer-social-btn" title="Placement Cell LinkedIn" href="https://www.linkedin.com/in/placement-cell-dost-cusat/"><i class="fab fa-linkedin-in"></i></a>
                            <a target="_blank" class="footer-social-btn" title="Facebook" href="https://www.facebook.com/shiptechcusat/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" class="footer-social-btn" title="YouTube" href="https://www.youtube.com/@societyofnavalarchitecture1487"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    <!-- COLUMN 2: 2-COLUMN QUICK LINKS & PORTALS -->
                    <div class="col-lg-4 col-md-6 footer-col-divider d-flex flex-column justify-content-between">
                        <div>
                            <span class="footer-eyebrow"><i class="fa fa-compass"></i> Navigation</span>
                            <h4 class="footer-heading">Quick Links</h4>

                            <div class="footer-links-grid">
                                <a class="footer-nav-link" href="academics.php">
                                    <span><i class="fa fa-graduation-cap link-bullet"></i> Courses</span>
                                    <i class="fa fa-angle-right link-arrow"></i>
                                </a>
                                <a class="footer-nav-link" href="placement.php">
                                    <span><i class="fa fa-briefcase link-bullet"></i> Placement</span>
                                    <i class="fa fa-angle-right link-arrow"></i>
                                </a>
                                <a class="footer-nav-link" href="faculty.php">
                                    <span><i class="fa fa-user-tie link-bullet"></i> Faculty</span>
                                    <i class="fa fa-angle-right link-arrow"></i>
                                </a>
                                <a class="footer-nav-link" href="Approvals-and-Affiliations.php">
                                    <span><i class="fa fa-certificate link-bullet"></i> Affiliations</span>
                                    <i class="fa fa-angle-right link-arrow"></i>
                                </a>
                                <a class="footer-nav-link" href="news.php">
                                    <span><i class="fa fa-newspaper link-bullet"></i> News</span>
                                    <i class="fa fa-angle-right link-arrow"></i>
                                </a>
                                <a class="footer-nav-link" href="events.php">
                                    <span><i class="fa fa-calendar-check link-bullet"></i> Events</span>
                                    <i class="fa fa-angle-right link-arrow"></i>
                                </a>
                                <a class="footer-nav-link" href="gallery.php">
                                    <span><i class="fa fa-images link-bullet"></i> Gallery</span>
                                    <i class="fa fa-angle-right link-arrow"></i>
                                </a>
                                <a class="footer-nav-link" href="contact.php">
                                    <span><i class="fa fa-envelope link-bullet"></i> Contact Us</span>
                                    <i class="fa fa-angle-right link-arrow"></i>
                                </a>
                            </div>
                        </div>

                        <div class="footer-portal-bar">
                            <div class="d-flex align-items-center gap-1 flex-wrap">
                                <a class="footer-mini-pill" target="_blank" href="https://www.dostas.org/">DOSTAS</a>
                                <a class="footer-mini-pill" target="_blank" href="https://descon.cusat.ac.in/">DESCON</a>
                                <a class="footer-mini-pill" target="_blank" href="https://snas.in/">SNAS</a>
                            </div>
                            <a class="footer-mini-pill admin-pill" href="shipadmin/">
                                <i class="fa fa-lock"></i> Admin Portal
                            </a>
                        </div>
                    </div>

                    <!-- COLUMN 3: FULL-BLEED CAMPUS MAP (FILLS ENTIRE COLUMN HEIGHT) -->
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-map-column">
                            <div class="footer-map-frame">
                                <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125724.19392967212!2d76.19946067960882!3d10.026672760305035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c3155555555%3A0x5aa9af2d46753df2!2sDepartment%20of%20Ship%20Technology%2C%20Cochin%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sin!4v1675399969431!5m2!1sen!2sin" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <a target="_blank" href="https://maps.google.com/?q=Department+of+Ship+Technology+CUSAT" class="footer-map-badge-overlay">
                                    <i class="fa fa-location-arrow"></i> South Kalamassery, Kochi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                        &copy; <a href="index.php">Department of Ship Technology, CUSAT</a>. All Rights Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a target="_blank" href="https://infinio.co.in">Infinio Technology Solutions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/site-data.js"></script>
<!-- Footer End -->
