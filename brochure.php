<?php
require_once __DIR__ . '/includes/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Official Rate Card &amp; Capabilities Brochure | Blue Hour Creative Studios</title>
  <meta name="description" content="Download or print the official Rate Card & Capabilities Brochure of Blue Hour Creative Studios (Guwahati & New Delhi)." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    :root {
      --ink: #0f172a;
      --muted: #475569;
      --gold: #b48a3e;
      --border: #e2e8f0;
      --surface: #f8fafc;
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: #f1f5f9;
      color: var(--ink);
      line-height: 1.55;
      padding: 2rem 1rem 4rem;
    }
    .toolbar-actions {
      max-width: 960px;
      margin: 0 auto 1.25rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 0.75rem;
    }
    .btn-action {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.65rem 1.25rem;
      border-radius: 999px;
      font-family: 'Space Grotesk', sans-serif;
      font-size: 0.86rem;
      font-weight: 700;
      text-decoration: none;
      cursor: pointer;
      border: 1px solid var(--border);
      background: #ffffff;
      color: var(--ink);
      transition: all 0.2s ease;
    }
    .btn-action.primary {
      background: #0f172a;
      color: #ffffff;
      border-color: #0f172a;
    }
    .btn-action:hover { transform: translateY(-1px); }
    .brochure-sheet {
      max-width: 960px;
      margin: 0 auto;
      background: #ffffff;
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 2.75rem;
      box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
    }
    .sheet-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 1.5rem;
      padding-bottom: 1.75rem;
      border-bottom: 2px solid var(--ink);
      margin-bottom: 2rem;
      flex-wrap: wrap;
    }
    .brand-row {
      display: flex;
      align-items: center;
      gap: 0.9rem;
    }
    .brand-row img {
      width: 52px;
      height: 52px;
      object-fit: contain;
    }
    .brand-row h1 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.55rem;
      letter-spacing: -0.02em;
    }
    .brand-row p {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.72rem;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      color: var(--gold);
      font-weight: 600;
    }
    .header-meta {
      text-align: right;
      font-size: 0.82rem;
      color: var(--muted);
    }
    .header-meta strong { color: var(--ink); display: block; font-size: 0.9rem; }
    .section-label {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.72rem;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      color: var(--gold);
      font-weight: 600;
      margin-bottom: 0.35rem;
    }
    .section-title {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.35rem;
      margin-bottom: 1.15rem;
    }
    .packages-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(265px, 1fr));
      gap: 1.15rem;
      margin-bottom: 2.25rem;
    }
    .pkg-box {
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.35rem;
      background: var(--surface);
    }
    .pkg-box.highlight {
      border: 2px solid var(--gold);
      background: #fffdf9;
    }
    .pkg-cat {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.65rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--gold);
      font-weight: 600;
    }
    .pkg-name {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.12rem;
      margin: 0.2rem 0 0.35rem;
    }
    .pkg-price {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--ink);
    }
    .pkg-price span {
      font-size: 0.78rem;
      font-weight: 500;
      color: var(--muted);
    }
    .pkg-timeline {
      font-size: 0.76rem;
      color: var(--muted);
      margin: 0.35rem 0 0.85rem;
      padding-bottom: 0.65rem;
      border-bottom: 1px solid var(--border);
    }
    .pkg-features {
      list-style: none;
      font-size: 0.8rem;
      color: var(--ink);
    }
    .pkg-features li {
      margin-bottom: 0.4rem;
      display: flex;
      align-items: flex-start;
      gap: 0.45rem;
    }
    .pkg-features li i {
      color: #16a34a;
      margin-top: 0.22rem;
      font-size: 0.72rem;
    }
    .pkg-note {
      margin-top: 0.75rem;
      padding-top: 0.6rem;
      border-top: 1px dashed var(--border);
      font-size: 0.73rem;
      color: var(--muted);
    }
    .two-col-terms {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.25rem;
      margin-bottom: 2rem;
    }
    .terms-box {
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.25rem;
    }
    .terms-box h3 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1rem;
      margin-bottom: 0.75rem;
    }
    .terms-box ul {
      list-style: none;
      font-size: 0.8rem;
      color: var(--muted);
    }
    .terms-box li {
      margin-bottom: 0.5rem;
    }
    .terms-box li strong { color: var(--ink); }
    .founders-strip {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      padding: 1.25rem 1.5rem;
      border-radius: 12px;
      background: #0f172a;
      color: #ffffff;
    }
    .founders-strip h4 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.05rem;
      margin-bottom: 0.2rem;
    }
    .founders-strip p {
      font-size: 0.8rem;
      color: #cbd5e1;
    }
    @media print {
      body { background: #ffffff; padding: 0; }
      .toolbar-actions { display: none !important; }
      .brochure-sheet { box-shadow: none; border: none; padding: 0.5rem; max-width: 100%; }
    }
  </style>
</head>
<body>

  <div class="toolbar-actions">
    <a href="pricing.php" class="btn-action">
      <i class="fa-solid fa-arrow-left"></i>
      <span>Back to Website</span>
    </a>
    <div style="display: flex; gap: 0.65rem; flex-wrap: wrap;">
      <a href="https://wa.me/917002201534?text=Hi%20Blue%20Hour%20Creative%20Studios,%20I%20reviewed%20your%20Rate%20Card%20and%20would%20like%20to%20discuss%20a%20package" target="_blank" rel="noopener noreferrer" class="btn-action">
        <i class="fa-brands fa-whatsapp" style="color: #16a34a;"></i>
        <span>Discuss on WhatsApp</span>
      </a>
      <button type="button" onclick="window.print()" class="btn-action primary">
        <i class="fa-solid fa-download"></i>
        <span>Download / Save as PDF</span>
      </button>
    </div>
  </div>

  <main class="brochure-sheet">
    <header class="sheet-header">
      <div class="brand-row">
        <img src="assets/images/blue_hour_symbol.png?v=20261101d" alt="Blue Hour Creative Studios">
        <div>
          <h1>BLUE HOUR CREATIVE STUDIOS</h1>
          <p>Engineering Excellence &bull; Creative Dominance</p>
        </div>
      </div>
      <div class="header-meta">
        <strong>OFFICIAL RATE CARD &amp; QUOTATION (2026)</strong>
        <span>Guwahati, Assam &amp; New Delhi, India</span><br>
        <span>Email: bluehourcreativestudio8@gmail.com</span><br>
        <span>Phone / WhatsApp: +91 7002201534 / +91 84738 91457</span>
      </div>
    </header>

    <div class="section-label">01 // TRANSPARENT PACKAGES &amp; DELIVERABLES</div>
    <h2 class="section-title">Website Development, Social Media &amp; Mobile App Packages</h2>

    <div class="packages-grid">
      <?php foreach ($pricingCategories as $category): ?>
        <?php foreach ($category['plans'] as $plan): ?>
          <div class="pkg-box <?= !empty($plan['highlight']) ? 'highlight' : '' ?>">
            <div class="pkg-cat"><?= htmlspecialchars($category['name']) ?> &bull; <?= htmlspecialchars($plan['badge']) ?></div>
            <h3 class="pkg-name"><?= htmlspecialchars($plan['name']) ?></h3>
            <div class="pkg-price">
              <?= htmlspecialchars($plan['price']) ?>
              <span>/ <?= htmlspecialchars($plan['billing']) ?></span>
            </div>
            <div class="pkg-timeline">
              <i class="fa-regular fa-clock"></i> Timeline: <?= htmlspecialchars($plan['timeline']) ?>
            </div>
            <ul class="pkg-features">
              <?php foreach ($plan['features'] as $feat): ?>
                <li>
                  <i class="fa-solid fa-check"></i>
                  <span><?= htmlspecialchars($feat) ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
            <?php if (!empty($plan['not_included'])): ?>
              <div class="pkg-note">
                <strong>Note:</strong> <?= htmlspecialchars(implode(' • ', $plan['not_included'])) ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </div>

    <div class="two-col-terms">
      <div class="terms-box">
        <div class="section-label">02 // TRANSPARENT THIRD-PARTY COSTS</div>
        <h3>Paid Separately at Actual Cost</h3>
        <ul>
          <?php foreach ($transparentCosts as $cost): ?>
            <li><strong><?= htmlspecialchars($cost['item']) ?>:</strong> <?= htmlspecialchars($cost['note']) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="terms-box">
        <div class="section-label">03 // ENGAGEMENT TERMS &amp; GUARANTEES</div>
        <h3>Client Ownership &amp; SLA</h3>
        <ul>
          <?php foreach ($keyTerms as $term): ?>
            <li><strong><?= htmlspecialchars($term['title']) ?>:</strong> <?= htmlspecialchars($term['desc']) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="founders-strip">
      <div>
        <h4>Direct Founder Consultation — Zero Agency Bureaucracy</h4>
        <p>Himon Bhuyan (Software &amp; Web Architect): <strong>+91 7002201534</strong> &nbsp;|&nbsp; Darshana Das (Client Growth &amp; Social Media): <strong>+91 84738 91457</strong></p>
      </div>
      <div style="font-family: 'JetBrains Mono', monospace; font-size: 0.78rem; color: #fde68a;">
        theblue-hour-studios.vercel.app
      </div>
    </div>
  </main>

</body>
</html>
