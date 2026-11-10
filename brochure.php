<?php
require_once __DIR__ . '/includes/init.php';

// Group plans by domain for clean 2-page executive distribution
$webPlans = [];
$growthPlans = [];
$mobilePlans = [];

foreach ($pricingCategories as $cat) {
    if ($cat['id'] === 'website') {
        $webPlans = $cat['plans'];
    } elseif ($cat['id'] === 'growth') {
        $growthPlans = $cat['plans'];
    } elseif ($cat['id'] === 'mobile') {
        $mobilePlans = $cat['plans'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Official Rate Card &amp; Capabilities Quotation (2026) | Blue Hour Creative Studios</title>
  <meta name="description" content="Official Rate Card, Deliverables & Quotation for Website Development, E-Commerce, Mobile Apps & Social Media Growth by Blue Hour Creative Studios." />
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <style>
    :root {
      --ink: #0b1120;
      --ink-soft: #1e293b;
      --muted: #475569;
      --muted-light: #64748b;
      --gold: #b48a3e;
      --gold-dark: #926c27;
      --gold-light: #fef9ee;
      --gold-border: #d4af37;
      --border: #e2e8f0;
      --border-dark: #cbd5e1;
      --surface: #f8fafc;
      --surface-card: #ffffff;
      --green: #15803d;
      --green-bg: #f0fdf4;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
      background: #0f172a;
      color: var(--ink);
      line-height: 1.4;
      padding: 1.5rem 1rem 4rem;
      -webkit-font-smoothing: antialiased;
    }

    /* Screen Toolbar */
    .toolbar-actions {
      max-width: 1040px;
      margin: 0 auto 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 0.85rem;
      background: rgba(30, 41, 59, 0.8);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 0.85rem 1.25rem;
      border-radius: 14px;
    }

    .toolbar-left, .toolbar-right {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      flex-wrap: wrap;
    }

    .btn-action {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.6rem 1.15rem;
      border-radius: 999px;
      font-family: 'Space Grotesk', sans-serif;
      font-size: 0.84rem;
      font-weight: 700;
      text-decoration: none;
      cursor: pointer;
      border: 1px solid rgba(255, 255, 255, 0.15);
      background: rgba(255, 255, 255, 0.08);
      color: #ffffff;
      transition: all 0.2s ease;
    }

    .btn-action:hover {
      background: rgba(255, 255, 255, 0.18);
      transform: translateY(-1px);
    }

    .btn-action.gold-cta {
      background: linear-gradient(135deg, #d4af37, #b48a3e);
      color: #0b1120;
      border-color: #d4af37;
      box-shadow: 0 4px 14px rgba(212, 175, 55, 0.35);
    }

    .btn-action.gold-cta:hover {
      background: linear-gradient(135deg, #e6c555, #c59846);
    }

    .btn-action.whatsapp-btn {
      background: #25d366;
      color: #0b1120;
      border-color: #25d366;
      box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
    }

    /* Document Container */
    .document-wrapper {
      max-width: 1040px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    /* Individual A4 Page Container */
    .rate-card-page {
      background: #ffffff;
      border-radius: 16px;
      padding: 2.25rem 2.5rem;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 1100px;
    }

    /* Top Decorative Accent Line */
    .rate-card-page::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #0b1120 0%, #b48a3e 50%, #0b1120 100%);
    }

    /* Page Header */
    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 1.25rem;
      padding-bottom: 0.95rem;
      border-bottom: 2px solid var(--ink);
      margin-bottom: 0.95rem;
      flex-wrap: wrap;
    }

    .brand-identity {
      display: flex;
      align-items: center;
      gap: 0.9rem;
    }

    .brand-identity img {
      width: 50px;
      height: 50px;
      object-fit: contain;
      filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
    }

    .brand-titles h1 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.48rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      color: var(--ink);
      line-height: 1.1;
    }

    .brand-titles p {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.7rem;
      text-transform: uppercase;
      letter-spacing: 0.14em;
      color: var(--gold-dark);
      font-weight: 700;
      margin-top: 0.2rem;
    }

    .header-contacts {
      text-align: right;
      font-size: 0.76rem;
      color: var(--muted);
      line-height: 1.4;
    }

    .header-badge {
      display: inline-block;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.68rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      background: var(--ink);
      color: #ffffff;
      padding: 0.2rem 0.6rem;
      border-radius: 4px;
      margin-bottom: 0.35rem;
    }

    .header-contacts a {
      color: var(--ink);
      text-decoration: none;
      font-weight: 600;
    }

    /* Mini Header for Page 2 */
    .mini-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-bottom: 0.75rem;
      border-bottom: 1.5px solid var(--border);
      margin-bottom: 1.1rem;
    }

    .mini-header-title {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1rem;
      font-weight: 700;
      color: var(--ink);
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .mini-header-meta {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.7rem;
      color: var(--muted);
      font-weight: 600;
    }

    /* Section Headings */
    .section-kicker {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.65rem;
      text-transform: uppercase;
      letter-spacing: 0.14em;
      color: var(--gold-dark);
      font-weight: 700;
      margin-bottom: 0.2rem;
      display: flex;
      align-items: center;
      gap: 0.4rem;
    }

    .section-kicker::before {
      content: '';
      display: inline-block;
      width: 12px;
      height: 2px;
      background: var(--gold);
    }

    .section-headline {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.12rem;
      font-weight: 800;
      color: var(--ink);
      margin-bottom: 0.75rem;
      letter-spacing: -0.01em;
    }

    /* Grid Layouts */
    .grid-three-col {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.85rem;
      margin-bottom: 0.95rem;
    }

    .grid-two-col {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.1rem;
      margin-bottom: 1.1rem;
    }

    /* Package Cards */
    .pkg-card {
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 0.95rem 0.95rem;
      background: var(--surface);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
    }

    .pkg-card.is-flagship {
      border: 2px solid var(--gold-border);
      background: var(--gold-light);
      box-shadow: 0 6px 20px rgba(212, 175, 55, 0.12);
    }

    .pkg-flagship-pill {
      position: absolute;
      top: -9px;
      right: 10px;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.56rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      background: linear-gradient(135deg, #d4af37, #926c27);
      color: #ffffff;
      padding: 0.18rem 0.5rem;
      border-radius: 999px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }

    .pkg-badge-strip {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.6rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--gold-dark);
      font-weight: 700;
    }

    .pkg-name {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.02rem;
      font-weight: 800;
      color: var(--ink);
      margin: 0.15rem 0 0.3rem;
      line-height: 1.2;
    }

    .pkg-price-row {
      display: flex;
      align-items: baseline;
      gap: 0.35rem;
      margin-bottom: 0.2rem;
    }

    .pkg-price {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.35rem;
      font-weight: 800;
      color: var(--ink);
      line-height: 1;
    }

    .pkg-billing {
      font-size: 0.72rem;
      font-weight: 600;
      color: var(--muted);
    }

    .pkg-timeline {
      font-size: 0.69rem;
      color: var(--muted);
      margin-bottom: 0.6rem;
      padding-bottom: 0.5rem;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 0.35rem;
    }

    .pkg-features {
      list-style: none;
      font-size: 0.72rem;
      color: var(--ink-soft);
      display: flex;
      flex-direction: column;
      gap: 0.32rem;
      flex-grow: 1;
    }

    .pkg-features li {
      display: flex;
      align-items: flex-start;
      gap: 0.4rem;
      line-height: 1.3;
    }

    .pkg-features li i {
      color: var(--green);
      font-size: 0.68rem;
      margin-top: 0.18rem;
      flex-shrink: 0;
    }

    .pkg-note {
      margin-top: 0.65rem;
      padding: 0.45rem 0.55rem;
      border-radius: 6px;
      background: rgba(0, 0, 0, 0.03);
      border-left: 2px solid var(--muted-light);
      font-size: 0.66rem;
      color: var(--muted);
      line-height: 1.3;
    }

    /* ========================================================================
       EXPANDED TIMELINE PIPELINE (REPLACES ADD-ONS COMPLETELY)
       ======================================================================== */
    .pipeline-section-wrap {
      margin-top: 0.75rem;
      padding-top: 0.85rem;
      border-top: 1.5px solid var(--border);
    }

    .pipeline-header-row {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      margin-bottom: 0.75rem;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    .pipeline-meta-pill {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.68rem;
      font-weight: 700;
      background: var(--surface);
      border: 1px solid var(--border-dark);
      color: var(--ink-soft);
      padding: 0.25rem 0.65rem;
      border-radius: 999px;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
    }

    .pipeline-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0.8rem;
      margin-bottom: 0.85rem;
    }

    .pipeline-card {
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 0.85rem 0.9rem;
      background: #ffffff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
    }

    .pipeline-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: var(--border-dark);
      border-radius: 10px 10px 0 0;
    }

    .pipeline-card.active-phase::before {
      background: linear-gradient(90deg, #d4af37, #b48a3e);
    }

    .pipeline-card-top {
      margin-bottom: 0.5rem;
    }

    .pipeline-phase-badge {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.62rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--gold-dark);
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 0.25rem;
    }

    .pipeline-phase-days {
      font-size: 0.59rem;
      background: rgba(180, 138, 62, 0.12);
      color: var(--gold-dark);
      padding: 0.12rem 0.4rem;
      border-radius: 4px;
      font-weight: 700;
    }

    .pipeline-phase-title {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 0.92rem;
      font-weight: 800;
      color: var(--ink);
      line-height: 1.2;
    }

    .pipeline-focus {
      font-size: 0.68rem;
      font-weight: 600;
      color: var(--muted);
      margin-top: 0.15rem;
      line-height: 1.3;
    }

    .pipeline-checklist {
      list-style: none;
      font-size: 0.67rem;
      color: var(--ink-soft);
      display: flex;
      flex-direction: column;
      gap: 0.35rem;
      margin-top: 0.45rem;
      padding-top: 0.45rem;
      border-top: 1px dashed var(--border);
    }

    .pipeline-checklist li {
      display: flex;
      align-items: flex-start;
      gap: 0.35rem;
      line-height: 1.32;
    }

    .pipeline-checklist li i {
      color: var(--gold);
      font-size: 0.62rem;
      margin-top: 0.18rem;
      flex-shrink: 0;
    }

    /* Page 1 Bottom Guarantee Bar */
    .page-guarantee-banner {
      background: #f1f5f9;
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 0.65rem 0.95rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.85rem;
      margin-top: 0.65rem;
    }

    .page-guarantee-banner p {
      font-size: 0.72rem;
      color: var(--ink-soft);
      line-height: 1.35;
    }

    .page-guarantee-banner strong {
      color: var(--green);
    }

    /* Terms Section on Page 2 */
    .terms-box {
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 0.95rem 1.05rem;
      background: var(--surface);
    }

    .terms-box h3 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 0.94rem;
      font-weight: 700;
      margin-bottom: 0.55rem;
      color: var(--ink);
    }

    .terms-list {
      list-style: none;
      font-size: 0.72rem;
      color: var(--muted);
      display: flex;
      flex-direction: column;
      gap: 0.4rem;
    }

    .terms-list li {
      line-height: 1.35;
      padding-left: 0.8rem;
      position: relative;
    }

    .terms-list li::before {
      content: '▪';
      position: absolute;
      left: 0;
      color: var(--gold);
      font-size: 0.85rem;
      top: -0.05rem;
    }

    .terms-list li strong {
      color: var(--ink);
      font-weight: 700;
    }

    /* Founders Strip */
    .founders-strip {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1.2rem;
      padding: 1rem 1.35rem;
      border-radius: 10px;
      background: #0b1120;
      color: #ffffff;
      margin-top: 0.85rem;
    }

    .founders-strip h4 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 0.98rem;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 0.3rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .founders-strip h4 span {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.65rem;
      background: rgba(212, 175, 55, 0.2);
      color: #fde68a;
      padding: 0.12rem 0.45rem;
      border-radius: 4px;
      border: 1px solid rgba(212, 175, 55, 0.4);
    }

    .founder-contacts-grid {
      display: flex;
      gap: 1.35rem;
      flex-wrap: wrap;
      font-size: 0.75rem;
      color: #cbd5e1;
    }

    .founder-item {
      display: flex;
      flex-direction: column;
    }

    .founder-item span.role {
      font-size: 0.64rem;
      color: #94a3b8;
      font-family: 'JetBrains Mono', monospace;
      text-transform: uppercase;
    }

    .founder-item a {
      color: #f8fafc;
      text-decoration: none;
      font-weight: 700;
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      margin-top: 0.1rem;
    }

    .founder-item a:hover {
      color: #fde68a;
    }

    .studio-url-box {
      text-align: right;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.72rem;
      color: #fde68a;
    }

    /* Page Number Footer */
    .page-footer-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 0.65rem;
      border-top: 1px solid var(--border);
      margin-top: 0.85rem;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.64rem;
      color: var(--muted-light);
      text-transform: uppercase;
      letter-spacing: 0.08em;
    }

    /* ========================================================================
       PRINT MEDIA RULES (LOCKED 2 A4 PAGES, ZERO VERTICAL SPILLOVER)
       ======================================================================== */
    @page {
      size: A4 portrait;
      margin: 7mm 8mm 7mm 8mm;
    }

    @media print {
      html, body {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        background: #ffffff !important;
        color: #0b1120 !important;
        font-size: 8.8pt !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }

      .toolbar-actions {
        display: none !important;
      }

      .document-wrapper {
        gap: 0 !important;
        max-width: 100% !important;
      }

      .rate-card-page {
        width: 100% !important;
        max-width: 100% !important;
        border-radius: 0 !important;
        border: none !important;
        box-shadow: none !important;
        padding: 5mm 6mm 5mm 6mm !important;
        min-height: auto !important;
        height: 283mm !important; /* Exact A4 locked height */
        max-height: 283mm !important;
        box-sizing: border-box !important;
        overflow: hidden !important;
        page-break-after: always !important;
        break-after: page !important;
        page-break-inside: avoid !important;
        break-inside: avoid !important;
      }

      .rate-card-page:last-child {
        page-break-after: auto !important;
        break-after: auto !important;
      }

      .pkg-card, .terms-box, .founders-strip, .pipeline-card, .page-header, .mini-header {
        page-break-inside: avoid !important;
        break-inside: avoid !important;
      }

      .pkg-card.is-flagship {
        background: #fdfbf5 !important;
        border: 1.5pt solid #d4af37 !important;
      }

      .founders-strip {
        background: #0b1120 !important;
        color: #ffffff !important;
      }

      .founders-strip * {
        color: #ffffff !important;
      }

      .founders-strip h4 span, .studio-url-box {
        color: #fde68a !important;
      }

      .pkg-card {
        padding: 2.5mm 3mm !important;
      }

      .pkg-price {
        font-size: 1.2rem !important;
      }

      .pkg-name {
        font-size: 0.92rem !important;
      }

      .pkg-features {
        font-size: 6.5pt !important;
        gap: 0.2rem !important;
      }

      .pipeline-card {
        padding: 2.2mm 2.6mm !important;
      }

      .pipeline-phase-title {
        font-size: 7.8pt !important;
      }

      .pipeline-focus {
        font-size: 6.4pt !important;
      }

      .pipeline-checklist {
        font-size: 6.2pt !important;
        gap: 0.18rem !important;
      }

      .terms-box {
        padding: 2.8mm 3.2mm !important;
      }

      .terms-list {
        font-size: 6.6pt !important;
        gap: 0.22rem !important;
      }

      .founders-strip {
        padding: 3mm 4mm !important;
      }
    }
  </style>
</head>
<body>

  <!-- Screen Floating Toolbar -->
  <aside class="toolbar-actions" aria-label="Toolbar">
    <div class="toolbar-left">
      <a href="pricing.php" class="btn-action">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Back to Website</span>
      </a>
      <span style="font-family: 'JetBrains Mono', monospace; font-size: 0.78rem; color: #94a3b8;">
        2-Page Executive Rate Card &amp; Capabilities (2026)
      </span>
    </div>

    <div class="toolbar-right">
      <a href="https://wa.me/917002201534?text=Hi%20Blue%20Hour%20Creative%20Studios,%20I%20reviewed%20your%20Rate%20Card%20and%20would%20like%20to%20discuss%20a%20package" target="_blank" rel="noopener noreferrer" class="btn-action whatsapp-btn">
        <i class="fa-brands fa-whatsapp"></i>
        <span>Discuss on WhatsApp</span>
      </a>
      <button type="button" onclick="window.print()" class="btn-action gold-cta">
        <i class="fa-solid fa-file-pdf"></i>
        <span>Download / Save as PDF</span>
      </button>
    </div>
  </aside>

  <!-- Printable 2-Page Executive Rate Card Document -->
  <main class="document-wrapper">

    <!-- ====================================================================
         PAGE 1: CORE SOFTWARE & PLATFORM ARCHITECTURE + TIME PIPELINE
         ==================================================================== -->
    <article class="rate-card-page" id="rateCardPage1">
      <div>
        <!-- Executive Header -->
        <header class="page-header">
          <div class="brand-identity">
            <img src="assets/images/blue_hour_symbol.png?v=20261101d" alt="Blue Hour Creative Studios Emblem">
            <div class="brand-titles">
              <h1>BLUE HOUR CREATIVE STUDIOS</h1>
              <p>Engineering Excellence &bull; Creative Dominance</p>
            </div>
          </div>
          <div class="header-contacts">
            <span class="header-badge">Official Rate Card &bull; 2026</span><br>
            <span>Guwahati, Assam &amp; New Delhi, India</span><br>
            <span>Email: <a href="mailto:bluehourcreativestudio8@gmail.com">bluehourcreativestudio8@gmail.com</a></span><br>
            <span>Direct Desk: <a href="tel:+917002201534">+91 7002201534</a> / <a href="tel:+918473891457">+91 84738 91457</a></span>
          </div>
        </header>

        <!-- Section 01 Heading -->
        <div class="section-kicker">01 // PLATFORM &amp; SOFTWARE ARCHITECTURE</div>
        <h2 class="section-headline">Website Development, E-Commerce &amp; Native Mobile App Packages</h2>

        <!-- 3-Column Engineering Grid -->
        <div class="grid-three-col">

          <!-- Plan 1: Website Starter -->
          <?php $p1 = $webPlans[0] ?? []; ?>
          <div class="pkg-card">
            <div>
              <div class="pkg-badge-strip">Website &bull; <?= htmlspecialchars($p1['badge'] ?? 'Fast Launch') ?></div>
              <h3 class="pkg-name"><?= htmlspecialchars($p1['name'] ?? 'Website Starter') ?></h3>
              <div class="pkg-price-row">
                <span class="pkg-price"><?= htmlspecialchars($p1['price'] ?? '₹8,000 – ₹10,000') ?></span>
                <span class="pkg-billing">/ one-time</span>
              </div>
              <div class="pkg-timeline">
                <i class="fa-regular fa-clock"></i> Timeline: <?= htmlspecialchars($p1['timeline'] ?? '7–10 days') ?>
              </div>
              <ul class="pkg-features">
                <?php foreach (($p1['features'] ?? []) as $feat): ?>
                  <li>
                    <i class="fa-solid fa-circle-check"></i>
                    <span><?= htmlspecialchars($feat) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php if (!empty($p1['not_included'])): ?>
              <div class="pkg-note">
                <strong>Scope Boundary:</strong> <?= htmlspecialchars(implode(' • ', $p1['not_included'])) ?>
              </div>
            <?php endif; ?>
          </div>

          <!-- Plan 2: Website + CMS & Payments (FLAGSHIP) -->
          <?php $p2 = $webPlans[1] ?? []; ?>
          <div class="pkg-card is-flagship">
            <span class="pkg-flagship-pill">★ Most Popular</span>
            <div>
              <div class="pkg-badge-strip">Website &bull; <?= htmlspecialchars($p2['badge'] ?? 'Most Popular') ?></div>
              <h3 class="pkg-name"><?= htmlspecialchars($p2['name'] ?? 'Website + CMS & Payments') ?></h3>
              <div class="pkg-price-row">
                <span class="pkg-price"><?= htmlspecialchars($p2['price'] ?? '₹16,000') ?></span>
                <span class="pkg-billing">/ one-time</span>
              </div>
              <div class="pkg-timeline">
                <i class="fa-regular fa-clock"></i> Timeline: <?= htmlspecialchars($p2['timeline'] ?? '3–4 weeks') ?>
              </div>
              <ul class="pkg-features">
                <?php foreach (($p2['features'] ?? []) as $feat): ?>
                  <li>
                    <i class="fa-solid fa-circle-check"></i>
                    <span><?= htmlspecialchars($feat) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php if (!empty($p2['not_included'])): ?>
              <div class="pkg-note">
                <strong>Scope Boundary:</strong> <?= htmlspecialchars(implode(' • ', $p2['not_included'])) ?>
              </div>
            <?php endif; ?>
          </div>

          <!-- Plan 3: Mobile App (Android + iOS) -->
          <?php $p3 = $mobilePlans[0] ?? []; ?>
          <div class="pkg-card">
            <div>
              <div class="pkg-badge-strip">Mobile &bull; <?= htmlspecialchars($p3['badge'] ?? 'Cross-Platform') ?></div>
              <h3 class="pkg-name"><?= htmlspecialchars($p3['name'] ?? 'Mobile App (Android + iOS)') ?></h3>
              <div class="pkg-price-row">
                <span class="pkg-price"><?= htmlspecialchars($p3['price'] ?? 'From ₹25,000') ?></span>
                <span class="pkg-billing">/ indicative</span>
              </div>
              <div class="pkg-timeline">
                <i class="fa-regular fa-clock"></i> Timeline: <?= htmlspecialchars($p3['timeline'] ?? '4–6 weeks') ?>
              </div>
              <ul class="pkg-features">
                <?php foreach (($p3['features'] ?? []) as $feat): ?>
                  <li>
                    <i class="fa-solid fa-circle-check"></i>
                    <span><?= htmlspecialchars($feat) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php if (!empty($p3['not_included'])): ?>
              <div class="pkg-note">
                <strong>Scope Boundary:</strong> <?= htmlspecialchars(implode(' • ', $p3['not_included'])) ?>
              </div>
            <?php endif; ?>
          </div>

        </div>

        <!-- Section 02: Expanded Production & Shipment Time Pipeline -->
        <div class="pipeline-section-wrap">
          <div class="pipeline-header-row">
            <div>
              <div class="section-kicker">02 // PRODUCTION &amp; SHIPMENT TIME PIPELINE</div>
              <h2 class="section-headline" style="margin-bottom: 0;">
                Our Structured 10-Day Engineering &amp; Deployment Roadmap
              </h2>
            </div>
            <div class="pipeline-meta-pill">
              <i class="fa-solid fa-bolt" style="color: var(--gold);"></i>
              <span>Milestone-Verified Checkpoints &bull; 100% IP Handover</span>
            </div>
          </div>

          <!-- 4-Card Detailed Pipeline Grid -->
          <div class="pipeline-grid">

            <!-- Phase 1 -->
            <div class="pipeline-card active-phase">
              <div class="pipeline-card-top">
                <div class="pipeline-phase-badge">
                  <span>Phase 01</span>
                  <span class="pipeline-phase-days">Days 1–2</span>
                </div>
                <h3 class="pipeline-phase-title">Discovery &amp; Wireframing</h3>
                <p class="pipeline-focus">Information architecture &amp; scope alignment.</p>
              </div>
              <ul class="pipeline-checklist">
                <li><i class="fa-solid fa-circle-check"></i> Direct founder discovery session</li>
                <li><i class="fa-solid fa-circle-check"></i> Sitemap &amp; user journey blueprint</li>
                <li><i class="fa-solid fa-circle-check"></i> Brand asset &amp; content onboarding</li>
                <li><i class="fa-solid fa-circle-check"></i> Competitor &amp; market positioning</li>
              </ul>
            </div>

            <!-- Phase 2 -->
            <div class="pipeline-card active-phase">
              <div class="pipeline-card-top">
                <div class="pipeline-phase-badge">
                  <span>Phase 02</span>
                  <span class="pipeline-phase-days">Days 3–5</span>
                </div>
                <h3 class="pipeline-phase-title">Bespoke UI/UX Design</h3>
                <p class="pipeline-focus">Editorial aesthetics &amp; interactive layouts.</p>
              </div>
              <ul class="pipeline-checklist">
                <li><i class="fa-solid fa-circle-check"></i> Custom responsive mobile/desktop UI</li>
                <li><i class="fa-solid fa-circle-check"></i> Curated typography &amp; color system</li>
                <li><i class="fa-solid fa-circle-check"></i> Interactive prototype walkthrough</li>
                <li><i class="fa-solid fa-circle-check"></i> Client review &amp; design milestone lock</li>
              </ul>
            </div>

            <!-- Phase 3 -->
            <div class="pipeline-card active-phase">
              <div class="pipeline-card-top">
                <div class="pipeline-phase-badge">
                  <span>Phase 03</span>
                  <span class="pipeline-phase-days">Days 6–8</span>
                </div>
                <h3 class="pipeline-phase-title">Full-Stack Engineering</h3>
                <p class="pipeline-focus">100% custom code &amp; sub-second performance.</p>
              </div>
              <ul class="pipeline-checklist">
                <li><i class="fa-solid fa-circle-check"></i> Handcrafted PHP 8 / Laravel / React</li>
                <li><i class="fa-solid fa-circle-check"></i> Zero page-builder dependencies</li>
                <li><i class="fa-solid fa-circle-check"></i> Database, APIs &amp; payment webhooks</li>
                <li><i class="fa-solid fa-circle-check"></i> WhatsApp routing &amp; lead capture desk</li>
              </ul>
            </div>

            <!-- Phase 4 -->
            <div class="pipeline-card active-phase">
              <div class="pipeline-card-top">
                <div class="pipeline-phase-badge">
                  <span>Phase 04</span>
                  <span class="pipeline-phase-days">Days 9–10</span>
                </div>
                <h3 class="pipeline-phase-title">Domain, SSL &amp; Launch</h3>
                <p class="pipeline-focus">Final QA, security audit &amp; complete handoff.</p>
              </div>
              <ul class="pipeline-checklist">
                <li><i class="fa-solid fa-circle-check"></i> Free domain (.com / .in) DNS routing</li>
                <li><i class="fa-solid fa-circle-check"></i> Free SSL security certificate active</li>
                <li><i class="fa-solid fa-circle-check"></i> Technical SEO audit &amp; XML sitemap</li>
                <li><i class="fa-solid fa-circle-check"></i> 100% legal codebase ownership handoff</li>
              </ul>
            </div>

          </div>
        </div>

        <!-- Inclusive Value Banner -->
        <div class="page-guarantee-banner">
          <p>
            <i class="fa-solid fa-shield-halved" style="color: var(--gold); margin-right: 0.35rem;"></i>
            <strong>All Website Builds Include:</strong> 1 Year Free Domain (.com / .in) + 1 Year Free Bug Solving, Server Monitoring &amp; Security Maintenance.
          </p>
          <span style="font-family: 'JetBrains Mono', monospace; font-size: 0.69rem; font-weight: 700; color: var(--ink); white-space: nowrap;">
            100% Client Codebase Ownership
          </span>
        </div>
      </div>

      <!-- Page 1 Bottom Footer -->
      <footer class="page-footer-bar">
        <span>Blue Hour Creative Studios &bull; Official Quotation Brief (2026)</span>
        <span>Page 01 of 02 &bull; Software &amp; Platform Architecture</span>
      </footer>
    </article>

    <!-- ====================================================================
         PAGE 2: GROWTH RETAINERS, COMMERCIAL TERMS & FOUNDER GUARANTEE
         ==================================================================== -->
    <article class="rate-card-page" id="rateCardPage2">
      <div>
        <!-- Mini Header -->
        <div class="mini-header">
          <div class="mini-header-title">
            <img src="assets/images/blue_hour_symbol.png?v=20261101d" alt="Symbol" style="width: 24px; height: 24px; object-fit: contain;">
            <span>BLUE HOUR CREATIVE STUDIOS // COMMERCIAL SPECIFICATION</span>
          </div>
          <div class="mini-header-meta">
            CONFIDENTIAL CLIENT QUOTATION &bull; VALID 2026
          </div>
        </div>

        <!-- Section 02 Heading -->
        <div class="section-kicker">03 // VIRAL MARKETING &amp; HYPER-GROWTH RETAINERS</div>
        <h2 class="section-headline">Social Media Management &amp; Full-Funnel Digital Growth Retainers</h2>

        <!-- 2-Column Social Media Grid -->
        <div class="grid-two-col">

          <!-- Plan 4: Social Media Management -->
          <?php $p4 = $growthPlans[0] ?? []; ?>
          <div class="pkg-card">
            <div>
              <div class="pkg-badge-strip">Growth &bull; <?= htmlspecialchars($p4['badge'] ?? 'Essential Authority') ?></div>
              <h3 class="pkg-name"><?= htmlspecialchars($p4['name'] ?? 'Social Media Management') ?></h3>
              <div class="pkg-price-row">
                <span class="pkg-price"><?= htmlspecialchars($p4['price'] ?? '₹10,000') ?></span>
                <span class="pkg-billing">/ per month</span>
              </div>
              <div class="pkg-timeline">
                <i class="fa-regular fa-clock"></i> Timeline: <?= htmlspecialchars($p4['timeline'] ?? 'Monthly retainer') ?>
              </div>
              <ul class="pkg-features">
                <?php foreach (($p4['features'] ?? []) as $feat): ?>
                  <li>
                    <i class="fa-solid fa-circle-check"></i>
                    <span><?= htmlspecialchars($feat) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php if (!empty($p4['not_included'])): ?>
              <div class="pkg-note">
                <strong>Scope Boundary:</strong> <?= htmlspecialchars(implode(' • ', $p4['not_included'])) ?>
              </div>
            <?php endif; ?>
          </div>

          <!-- Plan 5: Complete Digital Growth (FLAGSHIP RETAINER) -->
          <?php $p5 = $growthPlans[1] ?? []; ?>
          <div class="pkg-card is-flagship">
            <span class="pkg-flagship-pill">★ Dominance Engine</span>
            <div>
              <div class="pkg-badge-strip">Growth &bull; <?= htmlspecialchars($p5['badge'] ?? 'Dominance Engine') ?></div>
              <h3 class="pkg-name"><?= htmlspecialchars($p5['name'] ?? 'Complete Digital Growth') ?></h3>
              <div class="pkg-price-row">
                <span class="pkg-price"><?= htmlspecialchars($p5['price'] ?? '₹20,000') ?></span>
                <span class="pkg-billing">/ per month</span>
              </div>
              <div class="pkg-timeline">
                <i class="fa-regular fa-clock"></i> Timeline: <?= htmlspecialchars($p5['timeline'] ?? '3-month commitment recommended') ?>
              </div>
              <ul class="pkg-features">
                <?php foreach (($p5['features'] ?? []) as $feat): ?>
                  <li>
                    <i class="fa-solid fa-circle-check"></i>
                    <span><?= htmlspecialchars($feat) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php if (!empty($p5['not_included'])): ?>
              <div class="pkg-note">
                <strong>Scope Boundary:</strong> <?= htmlspecialchars(implode(' • ', $p5['not_included'])) ?>
              </div>
            <?php endif; ?>
          </div>

        </div>

        <!-- 2-Column Terms & Governance Grid -->
        <div class="grid-two-col">

          <!-- Box 1: Third-Party Costs -->
          <div class="terms-box">
            <div class="section-kicker">04 // TRANSPARENT THIRD-PARTY COSTS</div>
            <h3>Direct Infrastructure at Actual Cost</h3>
            <ul class="terms-list">
              <?php foreach ($transparentCosts as $cost): ?>
                <li><strong><?= htmlspecialchars($cost['item']) ?>:</strong> <?= htmlspecialchars($cost['note']) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!-- Box 2: Engagement Terms & SLA -->
          <div class="terms-box">
            <div class="section-kicker">05 // ENGAGEMENT TERMS &amp; SLA</div>
            <h3>100% Client Ownership &amp; Guarantees</h3>
            <ul class="terms-list">
              <?php foreach ($keyTerms as $term): ?>
                <li><strong><?= htmlspecialchars($term['title']) ?>:</strong> <?= htmlspecialchars($term['desc']) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>

        </div>

        <!-- Founder Consultation Desk -->
        <div class="founders-strip">
          <div>
            <h4>
              <span>Direct Founder Access</span>
              Direct Founder Consultation — Zero Agency Bureaucracy
            </h4>
            <div class="founder-contacts-grid">
              <div class="founder-item">
                <span class="role">Software &amp; Web Architect</span>
                <a href="tel:+917002201534"><i class="fa-solid fa-phone" style="font-size: 0.7rem;"></i> Himon Bhuyan: +91 7002201534</a>
              </div>
              <div class="founder-item">
                <span class="role">Client Growth &amp; Social Lead</span>
                <a href="tel:+918473891457"><i class="fa-solid fa-phone" style="font-size: 0.7rem;"></i> Darshana Das: +91 84738 91457</a>
              </div>
              <div class="founder-item">
                <span class="role">Studio Inquiries</span>
                <a href="mailto:bluehourcreativestudio8@gmail.com"><i class="fa-solid fa-envelope" style="font-size: 0.7rem;"></i> bluehourcreativestudio8@gmail.com</a>
              </div>
            </div>
          </div>
          <div class="studio-url-box">
            <i class="fa-solid fa-globe" style="margin-right: 0.25rem;"></i> theblue-hour-studios.vercel.app
          </div>
        </div>
      </div>

      <!-- Page 2 Bottom Footer -->
      <footer class="page-footer-bar">
        <span>Blue Hour Creative Studios &bull; Guwahati, Assam &amp; New Delhi</span>
        <span>Page 02 of 02 &bull; Client Terms &amp; Founder Guarantee</span>
      </footer>
    </article>

  </main>

</body>
</html>
