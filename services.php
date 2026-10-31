<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Capabilities & Engineering Disciplines';
$pageDesc = 'Explore Blue Hour Creative Studios capabilities across bespoke software engineering, enterprise ERP/CRM, mobile apps, viral social media marketing, and high-ROAS ads.';
$activePage = 'services';

require_once __DIR__ . '/includes/header.php';
?>

  <!-- Subpage Architectural Hero Header -->
  <section class="subpage-hero">
    <div class="container">
      <div class="subpage-hero-inner">
        <div class="subpage-breadcrumb">
          <a href="index.php">Home</a>
          <span class="sep">/</span>
          <span class="current">Capabilities & Disciplines</span>
        </div>
        <h1 class="subpage-title">
          Engineering Digital Supremacy. <br>
          <span class="text-gradient-mercury">Scaling Cultural Relevance.</span>
        </h1>
        <p class="subpage-lead">
          We eliminate the friction between engineering and marketing. One unified studio delivering turnkey enterprise code, bespoke architecture, and hyper-growth audience acquisition for modern market leaders.
        </p>

        <div class="subpage-quick-stats">
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">06</span>
            <span class="subpage-stat-lbl">Core Disciplines</span>
          </div>
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">100%</span>
            <span class="subpage-stat-lbl">Bespoke Architecture</span>
          </div>
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">&lt;200ms</span>
            <span class="subpage-stat-lbl">Edge Latency Standard</span>
          </div>
          <div class="subpage-stat-item">
            <span class="subpage-stat-num">4.8X</span>
            <span class="subpage-stat-lbl">Average Client ROAS</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       SERVICES & CAPABILITIES - ARCHITECTURAL BENTO GRID
       ======================================================================== -->
  <section class="services-section" id="services">
    <div class="container">
      
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>01 // Core Capabilities</span>
        </div>
        <h2 class="section-headline">
          Two Unified Disciplines. <br><span class="text-gradient-mercury">Exponential Market Impact.</span>
        </h2>
        <p class="section-lead">
          From zero-latency backend systems to viral social feeds, each capability is engineered with uncompromising craft.
        </p>
      </div>

      <!-- Services Category Filter Tabs -->
      <div class="filter-bar-editorial reveal-on-scroll">
        <button class="filter-pill-btn service-filter-tab active" data-filter="all">[ All Disciplines ]</button>
        <button class="filter-pill-btn service-filter-tab" data-filter="Engineering">[ Software & Web Development ]</button>
        <button class="filter-pill-btn service-filter-tab" data-filter="Creative Marketing">[ Social & Creative Growth ]</button>
      </div>

      <!-- Bento Grid of Capabilities with Spotlight Card Shaders -->
      <div class="services-bento-grid" id="servicesGrid">
        <?php foreach ($services as $idx => $srv): ?>
          <div class="service-card-editorial service-card spotlight-card tilt-card reveal-on-scroll delay-<?= ($idx % 3) + 1 ?>" 
               data-category="<?= htmlspecialchars($srv['category']) ?>" 
               id="service_<?= htmlspecialchars($srv['id']) ?>">
            
            <div class="service-top-row">
              <div class="service-icon-box">
                <i class="<?= htmlspecialchars($srv['icon']) ?>"></i>
              </div>
              <span class="service-badge-mono"><?= htmlspecialchars($srv['badge']) ?></span>
            </div>

            <h3 class="service-card-title"><?= htmlspecialchars($srv['title']) ?></h3>
            <p class="service-card-desc"><?= htmlspecialchars($srv['short_desc']) ?></p>

            <ul class="service-deliverables-list">
              <?php foreach ($srv['deliverables'] as $feat): ?>
                <li>
                  <i class="fa-solid fa-chevron-right"></i>
                  <span><?= htmlspecialchars($feat) ?></span>
                </li>
              <?php endforeach; ?>
            </ul>

            <div style="margin-top: 1.25rem; padding-top: 1rem; border-top: 1px solid var(--border-subtle); display: flex; justify-content: space-between; align-items: center;">
              <span style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--text-muted); text-transform: uppercase;">
                <?= htmlspecialchars($srv['category']) ?>
              </span>
              <a href="contact.php?service=<?= urlencode($srv['title']) ?>" class="btn-team-consult" style="color: var(--accent-champagne); text-decoration: none;">
                <span>Inquire Service</span>
                <i class="fa-solid fa-arrow-right" style="font-size: 0.65rem;"></i>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       THE BLUE HOUR DIFFERENCE - ARCHITECTURAL COMPARISON MATRIX
       ======================================================================== -->
  <section class="interactive-matrix-section" id="comparison">
    <div class="container">
      
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>02 // The Architectural Difference</span>
        </div>
        <h2 class="section-headline">
          Traditional Agency Bloat <br><span class="text-gradient-mercury">vs Engineered Dominance.</span>
        </h2>
        <p class="section-lead">
          See why fast-scaling brands migrate from sluggish generic agencies to Blue Hour Creative Studios.
        </p>
      </div>

      <div class="matrix-split-grid reveal-on-scroll">
        
        <!-- Column 1: Generic Traditional Agency -->
        <div class="matrix-column-card column-generic">
          <div class="column-header">
            <h4>Traditional Agency Route</h4>
            <span class="column-tag-generic">OUTDATED MODEL</span>
          </div>

          <ul class="matrix-bullets-list">
            <li>
              <i class="fa-solid fa-xmark"></i>
              <div>
                <strong>Bloated Page Load (3.8s — 5.2s)</strong>
                <span>Generic WordPress/Shopify templates with 40+ plugins dragging conversion rates down.</span>
              </div>
            </li>
            <li>
              <i class="fa-solid fa-xmark"></i>
              <div>
                <strong>Uncoordinated Ad Funnels (1.2X — 1.6X ROAS)</strong>
                <span>Marketing teams don't understand engineering; zero custom pixel pipelines or event telemetry.</span>
              </div>
            </li>
            <li>
              <i class="fa-solid fa-xmark"></i>
              <div>
                <strong>Frustrating Hand-offs & Excuses</strong>
                <span>Developers blame the marketers, marketers blame the slow website. Zero unified accountability.</span>
              </div>
            </li>
          </ul>
        </div>

        <!-- Column 2: Blue Hour Creative Studios -->
        <div class="matrix-column-card column-bluehour spotlight-card">
          <div class="column-header">
            <h4>Blue Hour Creative Studios</h4>
            <span class="column-tag-bluehour">ENGINEERED SUPREMACY</span>
          </div>

          <ul class="matrix-bullets-list">
            <li>
              <i class="fa-solid fa-check"></i>
              <div>
                <strong>Sub-Second Edge Execution (0.18s — 0.35s)</strong>
                <span>100% Bespoke Laravel, React, and Node.js code with global edge caching and zero bloat.</span>
              </div>
            </li>
            <li>
              <i class="fa-solid fa-check"></i>
              <div>
                <strong>Data-Driven Ad Mastery (4.8X Average Client ROAS)</strong>
                <span>Direct integration between server-side Meta Conversions API and viral short-form creative direction.</span>
              </div>
            </li>
            <li>
              <i class="fa-solid fa-check"></i>
              <div>
                <strong>Single Turnkey Studio Partner Desk</strong>
                <span>One elite squad delivering full-stack engineering, luxury design systems, and viral growth simultaneously.</span>
              </div>
            </li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================================================
       GROWTH ENGINE - SOCIAL MEDIA, CONTENT & VIRAL ACQUISITION
       ======================================================================== -->
  <section class="growth-section" id="growth">
    <div class="container">
      
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>03 // Brand Acceleration</span>
        </div>
        <h2 class="section-headline">
          The Viral Growth Engine. <br><span class="text-gradient-champagne">Cultivating Organic Obsession.</span>
        </h2>
        <p class="section-lead">
          Great software needs relentless distribution. We orchestrate short-form video, high-converting paid funnels, and narrative-driven social media management that commands attention.
        </p>
      </div>

      <!-- Growth Pillars Grid -->
      <div class="growth-pillars-grid">
        <?php foreach ($pillars as $idx => $pillar): ?>
          <div class="growth-pillar-card spotlight-card reveal-on-scroll delay-<?= $idx + 1 ?>">
            <div class="pillar-num-header">
              <span class="pillar-num"><?= sprintf('%02d', $idx + 1) ?> //</span>
              <i class="fa-solid fa-bolt" style="color: var(--accent-champagne); font-size: 0.8rem;"></i>
            </div>
            <h3 class="pillar-title"><?= htmlspecialchars($pillar['title']) ?></h3>
            <p class="pillar-desc"><?= htmlspecialchars($pillar['desc']) ?></p>

            <div class="pillar-stat-pill">
              <span class="stat-highlight"><?= htmlspecialchars($pillar['stat']) ?></span>
              <span class="stat-caption"><?= htmlspecialchars($pillar['stat_label']) ?></span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Interactive Call to Action Banner -->
      <div class="launchpad-card spotlight-card reveal-on-scroll" style="margin-top: 3.5rem; text-align: center; padding: 2.5rem 1.5rem;">
        <span class="index-num" style="display: block; margin-bottom: 0.5rem;">READY TO SCALE //</span>
        <h3 style="font-family: var(--font-display); font-size: 1.8rem; font-weight: 700; margin-bottom: 0.75rem; color: var(--text-primary);">
          Ready to engineer your unfair digital advantage?
        </h3>
        <p style="color: var(--text-secondary); max-width: 600px; margin: 0 auto 1.5rem auto; font-size: 0.95rem;">
          Whether you need a bespoke web platform, an enterprise ERP, or a full-scale viral marketing campaign, we have the architecture to deliver.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="pricing.php" class="btn btn-secondary magnetic-btn">
            <i class="fa-solid fa-tag"></i>
            <span>Explore Pricing Packages</span>
          </a>
          <a href="contact.php" class="btn btn-primary magnetic-btn">
            <span>Initiate Project Brief</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
