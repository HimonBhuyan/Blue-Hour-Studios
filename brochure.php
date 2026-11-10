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
      line-height: 1.45;
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

    /* Screen Document Container */
    .document-wrapper {
      max-width: 1040px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    /* Individual A4 Page Containers */
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
      gap: 1.5rem;
      padding-bottom: 1.25rem;
      border-bottom: 2px solid var(--ink);
      margin-bottom: 1.35rem;
      flex-wrap: wrap;
    }

    .brand-identity {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .brand-identity img {
      width: 54px;
      height: 54px;
      object-fit: contain;
      filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
    }

    .brand-titles h1 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.55rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      color: var(--ink);
      line-height: 1.1;
    }

    .brand-titles p {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.72rem;
      text-transform: uppercase;
      letter-spacing: 0.14em;
      color: var(--gold-dark);
      font-weight: 700;
      margin-top: 0.25rem;
    }

    .header-contacts {
      text-align: right;
      font-size: 0.78rem;
      color: var(--muted);
      line-height: 1.45;
    }

    .header-badge {
      display: inline-block;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.7rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      background: var(--ink);
      color: #ffffff;
      padding: 0.25rem 0.65rem;
      border-radius: 4px;
      margin-bottom: 0.4rem;
    }

    .header-contacts a {
      color: var(--ink);
      text-decoration: none;
      font-weight: 600;
    }

    /* Page 2 Mini Header */
    .mini-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-bottom: 0.85rem;
      border-bottom: 1.5px solid var(--border);
      margin-bottom: 1.25rem;
    }

    .mini-header-title {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--ink);
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }

    .mini-header-meta {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.72rem;
      color: var(--muted);
      font-weight: 600;
    }

    /* Section Headings */
    .section-kicker {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.68rem;
      text-transform: uppercase;
      letter-spacing: 0.14em;
      color: var(--gold-dark);
      font-weight: 700;
      margin-bottom: 0.2rem;
      display: flex;
      align-items: center;
      gap: 0.45rem;
    }

    .section-kicker::before {
      content: '';
      display: inline-block;
      width: 14px;
      height: 2px;
      background: var(--gold);
    }

    .section-headline {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.22rem;
      font-weight: 800;
      color: var(--ink);
      margin-bottom: 1rem;
      letter-spacing: -0.01em;
    }

    /* Grid Layouts */
    .grid-three-col {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1rem;
      margin-bottom: 1.25rem;
    }

    .grid-two-col {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.15rem;
      margin-bottom: 1.25rem;
    }

    /* Package Cards */
    .pkg-card {
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.15rem 1.1rem;
      background: var(--surface);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
    }

    .pkg-card.is-flagship {
      border: 2px solid var(--gold-border);
      background: var(--gold-light);
      box-shadow: 0 8px 24px rgba(212, 175, 55, 0.12);
    }

    .pkg-flagship-pill {
      position: absolute;
      top: -10px;
      right: 12px;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.58rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      background: linear-gradient(135deg, #d4af37, #926c27);
      color: #ffffff;
      padding: 0.2rem 0.55rem;
      border-radius: 999px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }

    .pkg-badge-strip {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.62rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--gold-dark);
      font-weight: 700;
    }

    .pkg-name {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.1rem;
      font-weight: 800;
      color: var(--ink);
      margin: 0.15rem 0 0.35rem;
      line-height: 1.2;
    }

    .pkg-price-row {
      display: flex;
      align-items: baseline;
      gap: 0.35rem;
      margin-bottom: 0.25rem;
    }

    .pkg-price {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.45rem;
      font-weight: 800;
      color: var(--ink);
      line-height: 1;
    }

    .pkg-billing {
      font-size: 0.74rem;
      font-weight: 600;
      color: var(--muted);
    }

    .pkg-timeline {
      font-size: 0.72rem;
      color: var(--muted);
      margin-bottom: 0.75rem;
      padding-bottom: 0.6rem;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 0.35rem;
    }

    .pkg-features {
      list-style: none;
      font-size: 0.76rem;
      color: var(--ink-soft);
      display: flex;
      flex-direction: column;
      gap: 0.4rem;
      flex-grow: 1;
    }

    .pkg-features li {
      display: flex;
      align-items: flex-start;
      gap: 0.45rem;
      line-height: 1.35;
    }

    .pkg-features li i {
      color: var(--green);
      font-size: 0.7rem;
      margin-top: 0.2rem;
      flex-shrink: 0;
    }

    .pkg-note {
      margin-top: 0.75rem;
      padding: 0.5rem 0.65rem;
      border-radius: 6px;
      background: rgba(0, 0, 0, 0.03);
      border-left: 2px solid var(--muted-light);
      font-size: 0.69rem;
      color: var(--muted);
      line-height: 1.35;
    }

    /* Page 1 Bottom Banner */
    .page-guarantee-banner {
      background: #f1f5f9;
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 0.75rem 1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      margin-top: 0.5rem;
    }

    .page-guarantee-banner p {
      font-size: 0.75rem;
      color: var(--ink-soft);
    }

    .page-guarantee-banner strong {
      color: var(--green);
    }

    /* Terms Section */
    .terms-box {
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 1.05rem 1.15rem;
      background: var(--surface);
    }

    .terms-box h3 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 0.96rem;
      font-weight: 700;
      margin-bottom: 0.65rem;
      color: var(--ink);
    }

    .terms-list {
      list-style: none;
      font-size: 0.74rem;
      color: var(--muted);
      display: flex;
      flex-direction: column;
      gap: 0.45rem;
    }

    .terms-list li {
      line-height: 1.38;
      padding-left: 0.85rem;
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
      gap: 1.25rem;
      padding: 1.15rem 1.45rem;
      border-radius: 10px;
      background: #0b1120;
      color: #ffffff;
      margin-top: 0.85rem;
    }

    .founders-strip h4 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.02rem;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 0.35rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .founders-strip h4 span {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.68rem;
      background: rgba(212, 175, 55, 0.2);
      color: #fde68a;
      padding: 0.15rem 0.5rem;
      border-radius: 4px;
      border: 1px solid rgba(212, 175, 55, 0.4);
    }

    .founder-contacts-grid {
      display: flex;
      gap: 1.5rem;
      flex-wrap: wrap;
      font-size: 0.77rem;
      color: #cbd5e1;
    }

    .founder-item {
      display: flex;
      flex-direction: column;
    }

    .founder-item span.role {
      font-size: 0.66rem;
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
      font-size: 0.74rem;
      color: #fde68a;
    }

    /* Page Number Footer */
    .page-footer-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 0.75rem;
      border-top: 1px solid var(--border);
      margin-top: 1rem;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.66rem;
      color: var(--muted-light);
      text-transform: uppercase;
      letter-spacing: 0.08em;
    }

    /* ========================================================================
       PRINT MEDIA SPECIFIC RULES (A4 - EXACTLY 2 PAGES, ZERO SLICING)
       ======================================================================== */
    @page {
      size: A4 portrait;
      margin: 8mm 9mm 8mm 9mm;
    }

    @media print {
      html, body {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        background: #ffffff !important;
        color: #0b1120 !important;
        font-size: 9pt !important;
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
        padding: 6mm 8mm 6mm 8mm !important;
        min-height: auto !important;
        height: 280mm !important; /* Locks exact single A4 sheet height */
        max-height: 280mm !important;
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

      .pkg-card, .terms-box, .founders-strip, .page-header, .mini-header {
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

      /* Tweak padding for print density */
      .pkg-card {
        padding: 3mm 3mm !important;
      }

      .pkg-price {
        font-size: 1.25rem !important;
      }

      .pkg-name {
        font-size: 0.95rem !important;
      }

      .pkg-features {
        font-size: 6.8pt !important;
        gap: 0.25rem !important;
      }

      .terms-box {
        padding: 3mm 3.5mm !important;
      }

      .terms-list {
        font-size: 6.7pt !important;
        gap: 0.25rem !important;
      }

      .founders-strip {
        padding: 3.5mm 4.5mm !important;
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
        2-Page Executive Rate Card (2026)
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
         PAGE 1: CORE SOFTWARE & PLATFORM ARCHITECTURE
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

        <!-- Inclusive Value Banner -->
        <div class="page-guarantee-banner">
          <p>
            <i class="fa-solid fa-shield-halved" style="color: var(--gold); margin-right: 0.35rem;"></i>
            <strong>All Website Builds Include:</strong> 1 Year Domain (.com / .in) + 1 Year Free Bug Solving, Server Monitoring &amp; Security Maintenance.
          </p>
          <span style="font-family: 'JetBrains Mono', monospace; font-size: 0.72rem; font-weight: 700; color: var(--ink);">
            100% Bespoke Code &bull; Zero Page-Builder Bloat
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
        <div class="section-kicker">02 // VIRAL MARKETING &amp; HYPER-GROWTH RETAINERS</div>
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
            <div class="section-kicker">03 // TRANSPARENT THIRD-PARTY COSTS</div>
            <h3>Direct Infrastructure at Actual Cost</h3>
            <ul class="terms-list">
              <?php foreach ($transparentCosts as $cost): ?>
                <li><strong><?= htmlspecialchars($cost['item']) ?>:</strong> <?= htmlspecialchars($cost['note']) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!-- Box 2: Engagement Terms & SLA -->
          <div class="terms-box">
            <div class="section-kicker">04 // ENGAGEMENT TERMS &amp; SLA</div>
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
