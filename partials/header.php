<!-- Topbar Start -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
<style>
/* ==========================================================================
   GLOBAL MARITIME BENTO + SHIP-BOW HERO + GPU OCEAN WAVE DESIGN SYSTEM
   ========================================================================== */
body {
    background-color: #f4f8fc;
    color: #0f172a;
}
.fw-semibold {
    font-weight: 600 !important;
}
.rounded-4 {
    border-radius: 1rem !important;
}

/* 1. Ship-Bow Maritime Subpage Hero + 4-Layer GPU Ocean Waves */
.maritime-subpage-hero {
    position: relative;
    background:
        radial-gradient(circle at 82% 22%, rgba(14, 165, 233, 0.24) 0%, transparent 48%),
        radial-gradient(circle at 18% 78%, rgba(56, 189, 248, 0.16) 0%, transparent 50%),
        linear-gradient(135deg, #030917 0%, #0a1936 48%, #07294d 100%);
    padding: 4.5rem 0 6.75rem;
    overflow: hidden;
    color: #ffffff;
    border-bottom: 1px solid rgba(56, 189, 248, 0.22);
    margin-bottom: 1.5rem;
}
.maritime-subpage-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(56, 189, 248, 0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(56, 189, 248, 0.05) 1px, transparent 1px);
    background-size: 44px 44px;
    mask-image: radial-gradient(ellipse at center, rgba(0,0,0,0.85) 20%, transparent 80%);
    -webkit-mask-image: radial-gradient(ellipse at center, rgba(0,0,0,0.85) 20%, transparent 80%);
    pointer-events: none;
}
.maritime-hero-Ship-bg {
    position: absolute;
    right: -2%;
    bottom: 18px;
    width: 480px;
    max-width: 46vw;
    opacity: 0.18;
    pointer-events: none;
    z-index: 1;
}
.maritime-hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 16px;
    border-radius: 999px;
    background: rgba(14, 165, 233, 0.16);
    border: 1px solid rgba(56, 189, 248, 0.42);
    color: #7dd3fc;
    font-size: 0.76rem;
    font-weight: 700;
    letter-spacing: 1.3px;
    text-transform: uppercase;
    margin-bottom: 1rem;
    backdrop-filter: blur(8px);
}
.maritime-hero-title {
    font-size: clamp(2.15rem, 3.8vw, 3.35rem);
    font-weight: 800;
    letter-spacing: -0.025em;
    color: #ffffff;
    line-height: 1.15;
    margin-bottom: 0.9rem;
}
.maritime-hero-subtitle {
    font-size: 1.05rem;
    color: rgba(226, 232, 240, 0.88);
    max-width: 680px;
    line-height: 1.68;
    margin-bottom: 1.35rem;
}
.maritime-breadcrumb {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 8px 18px;
    border-radius: 999px;
    background: rgba(8, 23, 52, 0.68);
    border: 1px solid rgba(148, 163, 184, 0.25);
    font-size: 0.85rem;
    font-weight: 600;
    margin: 0;
    list-style: none;
}
.maritime-breadcrumb a {
    color: #7dd3fc;
    text-decoration: none;
    transition: color 0.2s ease;
}
.maritime-breadcrumb a:hover {
    color: #ffffff;
}
.maritime-breadcrumb .sep {
    color: rgba(148, 163, 184, 0.5);
}
.maritime-breadcrumb .active {
    color: #ffffff;
}

/* Subpage Hero Ocean Waves */
.subpage-ocean-horizon {
    position: absolute;
    left: 0;
    right: 0;
    bottom: -1px;
    height: 76px;
    overflow: hidden;
    pointer-events: none;
    z-index: 3;
    line-height: 0;
}
.subpage-ocean-svg {
    position: relative;
    display: block;
    width: 100%;
    height: 76px;
}
.subpage-wave-parallax > use {
    animation: subpageWaveMove 22s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
    will-change: transform;
}
.subpage-wave-parallax > use:nth-child(1) { animation-delay: -2s; animation-duration: 9s; }
.subpage-wave-parallax > use:nth-child(2) { animation-delay: -4s; animation-duration: 13s; }
.subpage-wave-parallax > use:nth-child(3) { animation-delay: -3s; animation-duration: 17s; }
.subpage-wave-parallax > use:nth-child(4) { animation-delay: -5s; animation-duration: 24s; }
@keyframes subpageWaveMove {
    0% { transform: translate3d(-90px, 0, 0); }
    100% { transform: translate3d(85px, 0, 0); }
}

/* 2. Unified Maritime Section Headers & Bento Containers */
.maritime-section-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 16px;
    border-radius: 999px;
    background: #e0f2fe;
    border: 1px solid #bae6fd;
    color: #0369a1;
    font-size: 0.76rem;
    font-weight: 800;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
}
.maritime-section-heading {
    font-size: clamp(1.85rem, 3vw, 2.55rem);
    font-weight: 800;
    color: #09152f;
    letter-spacing: -0.02em;
    margin-bottom: 0.65rem;
}
.maritime-section-lead {
    color: #475569;
    font-size: 1rem;
    max-width: 680px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.65;
}

.maritime-bento-panel {
    position: relative;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    border-radius: 26px;
    padding: 2.5rem;
    border: 1px solid rgba(14, 165, 233, 0.18);
    box-shadow: 0 22px 50px -18px rgba(8, 22, 56, 0.1);
    overflow: hidden;
}
.maritime-bento-panel::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #09152f 0%, #150754 40%, #0284c7 80%, #38bdf8 100%);
}

/* 3. Programme / Course / Event Bento Cards */
.programme-bento-card {
    position: relative;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    border-radius: 24px;
    padding: 14px 14px 24px 14px;
    border: 1px solid rgba(14, 165, 233, 0.18);
    box-shadow: 0 18px 42px -15px rgba(8, 22, 56, 0.09);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    flex-direction: column;
    height: 100%;
    overflow: hidden;
}
.programme-bento-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #09152f 0%, #150754 45%, #0284c7 85%, #38bdf8 100%);
    z-index: 3;
}
.programme-bento-card:hover {
    transform: translateY(-7px);
    border-color: rgba(14, 165, 233, 0.42);
    box-shadow: 0 26px 54px -14px rgba(14, 165, 233, 0.2);
}
.programme-img-wrap {
    position: relative;
    height: 215px;
    overflow: hidden;
    border-radius: 16px;
    background: #09152f;
    border: 1px solid rgba(15, 23, 42, 0.08);
}
.programme-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.programme-bento-card:hover .programme-img-wrap img {
    transform: scale(1.06);
}
.programme-img-wrap::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(6, 14, 34, 0.25) 0%, rgba(6, 14, 34, 0.05) 45%, rgba(6, 14, 34, 0.68) 100%);
    pointer-events: none;
}
.programme-badge-top {
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 2;
    background: rgba(8, 20, 48, 0.84);
    backdrop-filter: blur(10px);
    color: #38bdf8;
    border: 1px solid rgba(56, 189, 248, 0.42);
    font-size: 0.7rem;
    font-weight: 800;
    letter-spacing: 0.7px;
    text-transform: uppercase;
    padding: 5px 12px;
    border-radius: 999px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.programme-icon-orb {
    width: 46px;
    height: 46px;
    border-radius: 13px;
    background: linear-gradient(135deg, #09152f 0%, #150754 55%, #0284c7 100%);
    color: #38bdf8;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.05rem;
    box-shadow: 0 10px 22px -6px rgba(9, 21, 47, 0.42);
    border: 2px solid #ffffff;
    position: relative;
    z-index: 3;
    margin-top: -23px;
    margin-left: 14px;
    margin-bottom: 8px;
}
.programme-card-body {
    padding: 0.25rem 0.9rem 0;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.programme-card-body h4 {
    color: #09152f;
    font-weight: 800;
    font-size: 1.28rem;
    margin-bottom: 0.55rem;
    line-height: 1.32;
}
.programme-desc-box {
    background: #ffffff;
    border: 1px solid rgba(226, 232, 240, 0.95);
    border-left: 3.5px solid #0284c7;
    border-radius: 11px;
    padding: 0.8rem 0.95rem;
    color: #334155;
    font-size: 0.91rem;
    line-height: 1.62;
    margin-bottom: 0.95rem;
    flex-grow: 1;
}
.programme-card-footer {
    padding-top: 0.85rem;
    border-top: 1px solid rgba(226, 232, 240, 0.9);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
}
.programme-level-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.74rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.7px;
    color: #0369a1;
    background: #e0f2fe;
    border: 1px solid #bae6fd;
    padding: 5px 11px;
    border-radius: 999px;
}
.programme-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: 999px;
    background: linear-gradient(135deg, #09152f 0%, #150754 55%, #0284c7 100%);
    color: #ffffff !important;
    font-size: 0.81rem;
    font-weight: 700;
    text-decoration: none !important;
    transition: all 0.25s ease;
    box-shadow: 0 8px 18px -6px rgba(9, 21, 47, 0.35);
}
.programme-cta-btn:hover {
    transform: translateX(3px);
    box-shadow: 0 12px 24px -6px rgba(2, 132, 199, 0.5);
    color: #7dd3fc !important;
}

/* 4. Faculty & Technical Staff Bento Profile Cards */
.person-bento-card {
    position: relative;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    border-radius: 24px;
    padding: 14px 14px 20px;
    border: 1px solid rgba(14, 165, 233, 0.18);
    box-shadow: 0 16px 38px -14px rgba(8, 22, 56, 0.09);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    flex-direction: column;
    height: 100%;
    overflow: hidden;
}
.person-bento-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #09152f 0%, #150754 45%, #0284c7 85%, #38bdf8 100%);
    z-index: 3;
}
.person-bento-card:hover {
    transform: translateY(-7px);
    border-color: rgba(14, 165, 233, 0.45);
    box-shadow: 0 24px 50px -14px rgba(14, 165, 233, 0.2);
}
.person-photo-frame {
    position: relative;
    height: 310px;
    border-radius: 16px;
    overflow: hidden;
    background: linear-gradient(145deg, #09152f 0%, #112a5c 100%);
    margin-bottom: 14px;
    border: 1px solid rgba(14, 165, 233, 0.16);
}
.person-photo-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
    transition: transform 0.55s ease;
}
.person-bento-card:hover .person-photo-frame img {
    transform: scale(1.04);
}
.person-role-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    align-self: flex-start;
    padding: 4px 11px;
    border-radius: 999px;
    background: #e0f2fe;
    border: 1px solid #bae6fd;
    color: #0369a1;
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-bottom: 8px;
}
.person-card-body {
    padding: 0 6px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.person-name {
    font-size: 1.18rem;
    font-weight: 800;
    color: #09152f;
    margin-bottom: 4px;
    line-height: 1.3;
}
.person-name a {
    color: inherit;
    text-decoration: none;
    transition: color 0.2s ease;
}
.person-name a:hover {
    color: #0284c7;
}
.person-qual {
    font-size: 0.82rem;
    font-weight: 700;
    color: #0284c7;
    margin-bottom: 8px;
}
.person-spec-box {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-left: 3px solid #0284c7;
    border-radius: 10px;
    padding: 8px 11px;
    font-size: 0.82rem;
    color: #475569;
    line-height: 1.5;
    margin-bottom: 12px;
    flex-grow: 1;
}
.person-card-footer {
    margin-top: auto;
    padding-top: 10px;
    border-top: 1px solid #e2e8f0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    flex-wrap: wrap;
}
.person-email-chip {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.8rem;
    font-weight: 600;
    color: #334155;
    text-decoration: none;
    word-break: break-all;
}
.person-email-chip i {
    color: #0284c7;
}
.person-email-chip:hover {
    color: #0284c7;
}
.person-profile-btn {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 12px;
    border-radius: 999px;
    background: linear-gradient(135deg, #09152f 0%, #0284c7 100%);
    color: #ffffff !important;
    font-size: 0.74rem;
    font-weight: 700;
    text-decoration: none !important;
}

/* 5. Coordinator & Document Bento Cards (Placement / Approvals) */
.coord-bento-card {
    position: relative;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    border-radius: 22px;
    padding: 1.65rem;
    border: 1px solid rgba(14, 165, 233, 0.2);
    box-shadow: 0 16px 36px -14px rgba(8, 22, 56, 0.08);
    transition: all 0.3s ease;
    height: 100%;
    overflow: hidden;
}
.coord-bento-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #09152f 0%, #0284c7 65%, #38bdf8 100%);
}
.coord-bento-card:hover {
    transform: translateY(-5px);
    border-color: rgba(14, 165, 233, 0.45);
    box-shadow: 0 22px 44px -14px rgba(14, 165, 233, 0.18);
}
.coord-icon-avatar {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: linear-gradient(135deg, #09152f 0%, #150754 55%, #0284c7 100%);
    color: #38bdf8;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.15rem;
    flex-shrink: 0;
    box-shadow: 0 8px 18px -6px rgba(9, 21, 47, 0.35);
}
.coord-contact-row {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 12px;
    border-radius: 10px;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    margin-bottom: 8px;
    font-size: 0.86rem;
}
.coord-contact-row i {
    color: #0284c7;
    width: 16px;
    text-align: center;
}
.coord-contact-row a {
    color: #1e293b;
    font-weight: 600;
    text-decoration: none;
    word-break: break-all;
}
.coord-contact-row a:hover {
    color: #0284c7;
}

.doc-bento-card {
    position: relative;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    border-radius: 22px;
    padding: 1.65rem 1.4rem;
    border: 1px solid rgba(14, 165, 233, 0.2);
    box-shadow: 0 15px 34px -14px rgba(8, 22, 56, 0.08);
    transition: all 0.32s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    flex-direction: column;
    height: 100%;
    overflow: hidden;
    text-decoration: none !important;
}
.doc-bento-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #09152f 0%, #150754 45%, #0284c7 85%, #38bdf8 100%);
}
.doc-bento-card:hover {
    transform: translateY(-6px);
    border-color: rgba(14, 165, 233, 0.45);
    box-shadow: 0 24px 48px -14px rgba(14, 165, 233, 0.2);
}
.doc-bento-icon {
    width: 52px;
    height: 52px;
    border-radius: 15px;
    background: linear-gradient(135deg, #09152f 0%, #150754 55%, #0284c7 100%);
    color: #38bdf8;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.35rem;
    box-shadow: 0 10px 22px -6px rgba(9, 21, 47, 0.35);
}

/* 6. Shared Maritime Pills, Badges, Buttons & Panel Utilities Across All Pages */
.maritime-panel-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
    padding-bottom: 20px;
    margin-bottom: 20px;
    border-bottom: 1px solid rgba(15, 23, 42, 0.08);
}
.maritime-panel-title-group {
    display: flex;
    align-items: center;
    gap: 14px;
}
.maritime-panel-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: linear-gradient(135deg, #0a1938 0%, #150754 55%, #0369a1 100%);
    color: #38bdf8;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    box-shadow: 0 10px 20px -6px rgba(10, 25, 56, 0.35);
    flex-shrink: 0;
}
.maritime-panel-eyebrow {
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #0284c7;
    margin-bottom: 2px;
    display: block;
}
.maritime-panel-heading {
    font-size: 24px;
    font-weight: 800;
    color: #0f172a;
    margin: 0;
    letter-spacing: -0.02em;
}
.maritime-header-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    font-weight: 700;
    color: #0369a1;
    background: rgba(2, 132, 199, 0.09);
    border: 1px solid rgba(2, 132, 199, 0.2);
    padding: 6px 13px;
    border-radius: 999px;
    text-decoration: none !important;
    transition: all 0.22s ease;
}
.maritime-header-pill:hover {
    background: #0a1938;
    color: #ffffff !important;
    border-color: #0a1938;
    transform: translateY(-1px);
}
.maritime-panel-footer {
    margin-top: 22px;
    padding-top: 16px;
    border-top: 1px solid rgba(15, 23, 42, 0.07);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
}
.maritime-footer-note {
    font-size: 12.5px;
    color: #64748b;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.maritime-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #0a1938 0%, #150754 55%, #0369a1 100%);
    color: #ffffff !important;
    font-size: 13px;
    font-weight: 700;
    padding: 10px 20px;
    border-radius: 999px;
    text-decoration: none !important;
    box-shadow: 0 10px 20px -8px rgba(10, 25, 56, 0.45);
    transition: all 0.25s ease;
}
.maritime-cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 26px -8px rgba(2, 132, 199, 0.55);
    background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%);
    color: #ffffff !important;
}
.section-eyebrow-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #0284c7;
    background: rgba(2, 132, 199, 0.09);
    border: 1px solid rgba(2, 132, 199, 0.2);
    padding: 6px 14px;
    border-radius: 999px;
    margin-bottom: 14px;
}
.vision-tag-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 10.5px;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 3px 10px;
    border-radius: 999px;
    background: #ffffff;
    color: #0369a1;
    border: 1px solid rgba(2, 132, 199, 0.25);
}
.programme-degree-pill {
    position: absolute;
    top: 14px;
    left: 14px;
    background: rgba(255, 255, 255, 0.94);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    color: #0369a1;
    border: 1px solid rgba(2, 132, 199, 0.25);
    box-shadow: 0 8px 18px rgba(10, 22, 54, 0.18);
    font-size: 10.5px;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 5px 13px;
    border-radius: 999px;
    z-index: 2;
}
.programme-title-row {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 14px;
}
.programme-title-row .programme-icon-orb {
    margin: 0 !important;
    flex-shrink: 0;
}
.programme-spec-row {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 18px;
}
.programme-spec-chip {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 5px 11px;
    border-radius: 10px;
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
    border: 1px solid rgba(2, 132, 199, 0.2);
    font-size: 11.5px;
    font-weight: 700;
    color: #0369a1;
}
.ticker-item-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: #f8fafc !important;
    text-decoration: none !important;
    font-size: 14px;
    font-weight: 500;
    padding: 6px 16px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.07);
    border: 1px solid rgba(255, 255, 255, 0.12);
    transition: all 0.22s ease;
}
.ticker-chip-tag {
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    padding: 2px 8px;
    border-radius: 999px;
    background: rgba(56, 189, 248, 0.22);
    color: #7dd3fc;
    border: 1px solid rgba(56, 189, 248, 0.35);
}

/* ==========================================================================
   7. COMPREHENSIVE MOBILE & TABLET RESPONSIVE OPTIMIZATION (ALL DEVICES)
   ========================================================================== */
html, body {
    overflow-x: hidden;
    max-width: 100%;
}

/* Reset legacy css/style.css and css/index.css layout conflicts */
section {
    float: none !important;
    background: transparent;
    padding: 0;
}
.about-text,
.feature-text {
    padding-left: calc(var(--bs-gutter-x, 1.5rem) * 0.5) !important;
    padding-right: calc(var(--bs-gutter-x, 1.5rem) * 0.5) !important;
}
.navbar.sticky-top {
    top: 0 !important;
}

/* Placement Partner Logos Carousel (Slick Slider) */
.customer-logos {
    position: relative;
    overflow: hidden;
}
.customer-logos .slick-list {
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 8px 0;
}
.customer-logos .slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: flex !important;
    align-items: center !important;
}
.customer-logos .slick-slide {
    display: flex !important;
    align-items: center;
    justify-content: center;
    height: auto !important;
    float: none !important;
    padding: 0 10px;
}
.customer-logos .slick-slide img {
    max-height: 70px;
    width: auto;
    max-width: 150px;
    object-fit: contain;
    margin: 0 auto;
    border-radius: 10px;
    background: #ffffff;
    padding: 8px 12px;
    border: 1px solid rgba(14, 165, 233, 0.16);
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.04);
}

/* Desktop default: hide mobile-only Read More buttons */
.mobile-readmore-btn {
    display: none !important;
}

/* Tablet & Mobile Collapsible Long Content ("Read More / Show Less") (< 991.98px) */
@media (max-width: 991.98px) {
    .mobile-collapsible-text {
        position: relative;
        transition: max-height 0.35s ease;
    }
    .mobile-collapsible-text:not(.is-expanded) {
        max-height: 6.8em;
        overflow: hidden;
        -webkit-mask-image: linear-gradient(180deg, #000000 55%, rgba(0, 0, 0, 0.05) 100%);
        mask-image: linear-gradient(180deg, #000000 55%, rgba(0, 0, 0, 0.05) 100%);
    }
    .mobile-collapsible-text.hod-collapsible:not(.is-expanded) {
        max-height: 7.8em;
    }
    .mobile-collapsible-text.is-expanded {
        max-height: none !important;
        overflow: visible !important;
        -webkit-mask-image: none !important;
        mask-image: none !important;
    }
    .mobile-collapsible-list:not(.is-expanded) > li:nth-child(n+3) {
        display: none !important;
    }
    .mobile-readmore-btn {
        display: inline-flex !important;
        align-items: center;
        gap: 6px;
        margin-top: 10px;
        padding: 6px 14px;
        border-radius: 999px;
        background: linear-gradient(135deg, rgba(2, 132, 199, 0.11) 0%, rgba(56, 189, 248, 0.16) 100%);
        border: 1px solid rgba(2, 132, 199, 0.3);
        color: #0369a1 !important;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.02em;
        cursor: pointer;
        text-decoration: none !important;
        transition: all 0.22s ease;
        box-shadow: 0 2px 8px rgba(2, 132, 199, 0.08);
    }
    .mobile-readmore-btn:hover,
    .mobile-readmore-btn:active {
        background: #0284c7;
        color: #ffffff !important;
        border-color: #0284c7;
    }
    .mobile-readmore-btn i {
        font-size: 10px;
        transition: transform 0.25s ease;
    }
    .mobile-readmore-btn.is-expanded i {
        transform: rotate(180deg);
    }
}

/* Tablet & Mobile Navigation + Layout (< 991.98px) */
@media (max-width: 991.98px) {
    .upper-header .row {
        justify-content: center !important;
        row-gap: 4px;
    }
    .upper-header .col-auto {
        justify-content: center !important;
        text-align: center;
    }
    .navbar.sticky-top {
        padding: 10px 16px !important;
    }
    .navbar-brand {
        max-width: calc(100vw - 88px);
        margin-right: 0 !important;
    }
    .navbar .navbar-brand img {
        max-height: 40px !important;
        width: auto;
        max-width: 100%;
        object-fit: contain;
        margin-right: 0 !important;
    }
    .navbar-toggler {
        padding: 6px 10px;
        border-radius: 10px;
        border: 1px solid rgba(15, 23, 42, 0.16);
        box-shadow: none !important;
    }
    .navbar-collapse {
        margin-top: 10px;
    }
    .navbar-nav.bg-new-nav,
    .fac-img-curv {
        border-radius: 18px !important;
        padding: 12px 16px !important;
        width: 100%;
        max-height: 76vh;
        overflow-y: auto;
    }
    .navbar-light .navbar-nav .nav-link {
        margin-left: 0 !important;
        padding: 11px 12px !important;
        border-radius: 10px;
        font-size: 14.5px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link:focus {
        background: rgba(255, 255, 255, 0.08);
    }
    .navbar-nav .dropdown-menu {
        width: 100% !important;
        min-width: 0 !important;
        margin: 4px 0 8px 0 !important;
        border-radius: 12px !important;
        padding: 6px !important;
        background: rgba(255, 255, 255, 0.96) !important;
        box-shadow: inset 0 2px 6px rgba(15, 23, 42, 0.06);
    }
    .navbar-nav .dropdown-item {
        padding: 9px 14px;
        border-radius: 8px;
        font-size: 13.5px;
        font-weight: 600;
        white-space: normal;
    }
    .maritime-subpage-hero {
        padding: 3.25rem 0 5.25rem;
    }
    .subpage-ocean-horizon,
    .subpage-ocean-svg {
        height: 54px;
    }
    .maritime-bento-panel {
        padding: 1.75rem;
        border-radius: 22px;
    }
}

/* Mobile Landscape & Standard Phones (< 767.98px) */
@media (max-width: 767.98px) {
    .upper-header {
        padding: 6px 0 !important;
    }
    .upper-header span,
    .upper-header a {
        font-size: 11.5px !important;
    }
    .upper-header .gap-3 {
        gap: 0.55rem !important;
    }
    .maritime-subpage-hero {
        padding: 2.35rem 0 4.25rem;
    }
    .maritime-breadcrumb {
        flex-wrap: wrap;
        max-width: 100%;
        padding: 0.35rem 0.85rem;
        gap: 0.35rem;
        font-size: 0.68rem;
        margin-bottom: 0.9rem;
    }
    .maritime-hero-title {
        font-size: clamp(1.65rem, 6.5vw, 2.25rem);
        line-height: 1.18;
        margin-bottom: 0.65rem;
    }
    .maritime-hero-subtitle {
        font-size: 0.92rem;
        line-height: 1.55;
    }
    .subpage-ocean-horizon,
    .subpage-ocean-svg {
        height: 42px;
    }
    .maritime-section {
        padding: 2.5rem 0;
    }
    .maritime-bento-panel {
        padding: 1.35rem 1.15rem;
        border-radius: 20px;
    }
    .maritime-section-title,
    .maritime-section-heading {
        font-size: clamp(1.4rem, 5.5vw, 1.85rem);
    }
    .maritime-section-lead {
        font-size: 0.92rem;
    }
    .maritime-panel-header {
        padding-bottom: 14px;
        margin-bottom: 16px;
        gap: 10px;
    }
    .maritime-panel-heading {
        font-size: 19px;
    }
    .maritime-panel-icon {
        width: 42px;
        height: 42px;
        font-size: 17px;
        border-radius: 12px;
    }
    .programme-bento-card {
        padding: 12px 12px 18px 12px;
        border-radius: 20px;
    }
    .programme-card-body {
        padding: 0.35rem 0.45rem 0;
    }
    .programme-card-body h4 {
        font-size: 1.15rem;
    }
    .programme-img-wrap,
    .programme-img-frame {
        height: 195px;
    }
    .person-bento-card {
        padding: 12px 12px 16px;
        border-radius: 20px;
    }
    .person-photo-frame {
        height: 265px;
    }
    .person-card-body {
        padding: 0 0.35rem;
    }
    .coord-bento-card,
    .doc-bento-card {
        padding: 1.35rem 1.15rem;
        border-radius: 18px;
    }
    /* Subpage inline fixed-height image & map containers (Libraries, Academics, Contact) */
    .maritime-bento-panel div[style*="height: 410px"],
    .maritime-bento-panel div[style*="height: 390px"],
    .maritime-bento-panel div[style*="height: 310px"] {
        height: 235px !important;
    }
    .maritime-bento-panel div[style*="min-height: 400px"] {
        min-height: 260px !important;
    }
    .back-to-top {
        right: 16px !important;
        bottom: 18px !important;
        width: 42px !important;
        height: 42px !important;
        border-radius: 12px !important;
        display: flex !important;
        align-items: center;
        justify-content: center;
        padding: 0 !important;
    }
}

/* Small & Standard Smartphones (< 575.98px, down to 320px) */
@media (max-width: 575.98px) {
    .upper-header .col-auto:first-child {
        width: 100%;
        justify-content: center !important;
    }
    .upper-header .col-auto:last-child {
        width: 100%;
        justify-content: center !important;
        padding-top: 2px;
    }
    .navbar.sticky-top {
        padding: 8px 12px !important;
    }
    .navbar .navbar-brand img {
        max-height: 35px !important;
    }
    .maritime-bento-panel {
        padding: 1.15rem 1rem;
        border-radius: 18px;
    }
    .maritime-panel-footer {
        flex-direction: column;
        align-items: stretch;
        gap: 12px;
    }
    .maritime-cta-btn {
        width: 100%;
        justify-content: center;
        padding: 11px 18px;
    }
    .justify-para {
        text-align: left !important;
    }
    .programme-title-row {
        gap: 11px;
    }
    .programme-icon-orb {
        width: 44px;
        height: 44px;
        font-size: 1.1rem;
        border-radius: 12px;
    }
    .programme-card-footer {
        flex-wrap: wrap;
        gap: 8px;
    }
    .person-photo-frame {
        height: 245px;
    }
    .maritime-table thead th,
    .maritime-table tbody td {
        padding: 0.75rem 0.85rem;
        font-size: 0.85rem;
    }
}
</style>
<div class="wrap bg-upper-nav upper-header py-2 px-0" style="background: linear-gradient(90deg, #040b1d 0%, #0d1f47 50%, #07284a 100%); border-bottom: 1px solid rgba(56, 189, 248, 0.2);">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto d-flex align-items-center flex-wrap gap-3 py-1">
                <span class="mb-0 text-white d-inline-flex align-items-center gap-2" style="font-size: 13px; font-weight: 500;">
                    <span class="fa fa-envelope text-info"></span>
                    <a id="header-email" class="text-white text-decoration-none" href="mailto:ship@cusat.ac.in">ship@cusat.ac.in</a>
                </span>
                <span style="color: rgba(255,255,255,0.25);">|</span>
                <span class="mb-0 text-white d-inline-flex align-items-center gap-2" style="font-size: 13px; font-weight: 500;">
                    <span class="fa fa-phone-alt text-info"></span>
                    <a id="header-phone" class="text-white text-decoration-none" href="tel:+914842575714">0484-2575714</a>
                </span>
            </div>
            <div class="col-auto d-flex justify-content-end align-items-center">
                <div class="social-media">
                    <div class="mb-0 d-flex align-items-center gap-3" style="font-size: 13px; font-weight: 600;">
                        <a class="text-white text-decoration-none d-inline-flex align-items-center gap-1" href="https://www.cusat.ac.in/" target="_blank">
                            <i class="fa fa-university text-info" style="font-size: 11px;"></i> CUSAT Website
                        </a>
                        <span style="color: rgba(255,255,255,0.25);">|</span>
                        <a class="text-white text-decoration-none d-inline-flex align-items-center gap-1" style="background: rgba(56, 189, 248, 0.16); border: 1px solid rgba(56, 189, 248, 0.35); padding: 3px 12px; border-radius: 999px;" href="https://admissions.cusat.ac.in/" target="_blank">
                            <i class="fa fa-graduation-cap text-info" style="font-size: 11px;"></i> Admissions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5" style="box-shadow: 0 10px 30px -10px rgba(8, 18, 44, 0.12); border-bottom: 1px solid rgba(15, 23, 42, 0.06);">
    <a href="index.php" class="navbar-brand d-flex align-items-center">
        <img class="img-fluid me-3 m-0" src="img/logo.png" alt="Department of Ship Technology, CUSAT">
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-new-nav pe-4 py-3 py-lg-0 fac-img-curv" style="background: linear-gradient(135deg, #09152f 0%, #150754 55%, #0b2954 100%); box-shadow: 0 12px 28px -8px rgba(15, 23, 62, 0.45); border: 1px solid rgba(56, 189, 248, 0.25);">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Academics</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="academics.php" class="dropdown-item">Courses</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">People </a>
                <div class="dropdown-menu bg-light border-0 m-0" style="width: 220px;">
                    <a href="faculty.php" class="dropdown-item">Faculty</a>
                    <a href="technical-staff.php" class="dropdown-item">Technical Staff</a>
                </div>
            </div>
            <div class=" nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Research &amp;
                    Facilities</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="phd.php" class="dropdown-item">Ph.D.</a>
                    <a href="department-library.php" class="dropdown-item">Facilities</a>
                    <a href="mou.php" class="dropdown-item">MoU</a>
                    <a href="events.php" class="dropdown-item">Achievements</a>
                    <a href="Current-PhD-students.php" class="dropdown-item">Current Ph.D. Students</a>
                    <a href="PhD-awarded.php" class="dropdown-item">Ph.D. Awarded</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Library </a>
                <div class="dropdown-menu bg-light border-0 m-0" style="width: 270px;">
                    <a href="university-library.php" class="dropdown-item">Library</a>
                    <a href="https://sites.google.com/view/shiptechnologylibrarycusat/home" target="_blank" class="dropdown-item">Department Library</a>
                </div>
            </div>

            <a href="gallery.php" class="nav-item nav-link">Gallery</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Connect </a>
                <div class="dropdown-menu bg-light border-0 m-0" style="width: 270px;">
                    <a href="https://snas.in/" target="_blank" class="dropdown-item">SNAS</a>
                    <a href="https://descon.cusat.ac.in/" target="_blank" class="dropdown-item">DESCON</a>
                    <a href="Approvals-and-Affiliations.php" class="dropdown-item">Approvals &amp; Affiliations</a>
                    <a href="placement.php" class="dropdown-item">Placement</a>
                    <a href="https://estudents.cusat.ac.in/" target="_blank" class="dropdown-item">Exam
                        Registration</a>
                    <a href="https://ugcsct.cusat.ac.in/" target="_blank" class="dropdown-item">Equal Opportunity
                        cell</a>
                    <a href="https://cusat.ac.in/student/antiragging.php" target="_blank" class="dropdown-item">Anti
                        Ragging Cell</a>
                    <a href="https://cusatech.cusat.ac.in/" target="_blank" class="dropdown-item">CUSAT
                        Tech</a>
                    <a href="https://swayam.gov.in/nc_details/NPTEL" target="_blank" class="dropdown-item">Swayam</a>
                    <a href="https://www.dostas.org/" target="_blank" class="dropdown-item">Department
                        Alumni (DOSTAS)</a>
                    <a href="https://alumni.cusat.ac.in/" target="_blank" class="dropdown-item">University Alumni</a>
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
