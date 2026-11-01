<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Blue Hour Creative Studios | Web Development & Digital Marketing';
$pageDesc = 'Blue Hour Creative Studios (The Blue Hour Studios) offers website development, e-commerce websites, social media management, branding, graphic design and digital marketing services for businesses in Guwahati, Assam & New Delhi.';
$pageOgDesc = 'Blue Hour Creative Studios offers website development, e-commerce websites, social media management, branding, graphic design and digital marketing services in Guwahati, Assam & New Delhi.';
$activePage = 'home';

require_once __DIR__ . '/includes/header.php';
?>

  <!-- ========================================================================
       HERO SECTION - MONUMENTAL EDITORIAL ARCHITECTURE
       ======================================================================== -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-grid">
        
        <div class="hero-content reveal-on-scroll">
          <div class="hero-editorial-badge">
            <span class="index-num">01 //</span>
            <span class="badge-text">Software Engineering & Brand Acceleration</span>
          </div>

          <h1 class="hero-title">
            Engineering <span class="text-gradient-mercury">Digital Supremacy.</span> <br>
            Scaling <span class="text-gradient-champagne">Iconic Brands.</span>
          </h1>

          <p class="hero-description">
            <?= htmlspecialchars($agency['description'] ?? 'Blue Hour Creative Studios is a hybrid creative and technology powerhouse. We bridge the gap between deep software engineering and viral brand marketing — delivering scalable enterprise web applications, mobile platforms, and high-converting social campaigns that dominate modern digital markets.') ?>
          </p>

          <div class="hero-cta-group">
            <a href="works.php" class="btn btn-primary magnetic-btn" id="heroExploreWorksBtn">
              <span>Explore Selected Works</span>
              <i class="fa-solid fa-arrow-right" style="font-size: 0.75rem;"></i>
            </a>
            <a href="pricing.php" class="btn btn-secondary magnetic-btn" id="heroPricingBtn">
              <i class="fa-solid fa-tags" style="color: var(--accent-champagne);"></i>
              <span>Pricing &amp; Packages</span>
            </a>
            <a href="brochure.php" class="btn btn-ghost-editorial magnetic-btn" id="heroBrochureBtn">
              <i class="fa-regular fa-file-pdf" style="color: var(--accent-champagne);"></i>
              <span>Rate Card (PDF)</span>
            </a>
          </div>

          <!-- Key Metrics Strip with Hairline Dividers & Kinetic Counters -->
          <div class="hero-metrics-strip">
            <div class="metric-strip-item">
              <span class="metric-val counter-val" data-target="50" data-suffix="+">50+</span>
              <span class="metric-lbl">Digital Projects Shipped</span>
            </div>
            <div class="metric-divider" aria-hidden="true"></div>
            <div class="metric-strip-item">
              <span class="metric-val counter-val" data-target="10" data-suffix="M+">10M+</span>
              <span class="metric-lbl">Social Reach Generated</span>
            </div>
            <div class="metric-divider" aria-hidden="true"></div>
            <div class="metric-strip-item">
              <span class="metric-val counter-val" data-target="4.8" data-decimals="1" data-suffix="x">4.8x</span>
              <span class="metric-lbl">Average Client Ad ROAS</span>
            </div>
            <div class="metric-divider" aria-hidden="true"></div>
            <div class="metric-strip-item">
              <span class="metric-val counter-val" data-target="99.9" data-decimals="1" data-suffix="%">99.9%</span>
              <span class="metric-lbl">System Uptime & SLA</span>
            </div>
          </div>
        </div>

        <!-- Architectural Visual Stage with Interactive Simulation Console -->
        <div class="hero-stage reveal-on-scroll delay-2">
          
          <div class="architectural-frame spotlight-card tilt-card" id="heroHardwareFrame">
            <div class="frame-topbar">
              <div class="frame-window-controls">
                <span class="window-pip pip-active"></span>
                <span class="window-pip"></span>
                <span class="window-pip"></span>
              </div>

              <!-- Interactive Dual-Mode Switcher: GUI vs Code Blueprint -->
              <div class="showcase-mode-tabs" id="heroShowcaseTabs">
                <button type="button" class="showcase-tab-btn active" data-view="gui" id="tabGuiBtn">
                  <i class="fa-regular fa-image"></i> GUI Preview
                </button>
                <button type="button" class="showcase-tab-btn" data-view="code" id="tabCodeBtn">
                  <i class="fa-solid fa-terminal"></i> Architecture Blueprint
                </button>
              </div>

              <div class="frame-telemetry">
                <i class="fa-solid fa-signal"></i>
                <span>STUDIO LIVE</span>
              </div>
            </div>

            <!-- View 1: GUI Preview -->
            <div class="frame-viewport" id="heroGuiView">
              <img src="assets/images/upload_1792598927_Gulbani_G.png?v=20261101c" alt="Blue Hour Creative Studios Featured Project Showcase" id="heroFeaturedImg">
            </div>

            <!-- View 2: Architecture Blueprint Code Terminal with Live Simulation Bar -->
            <div class="frame-viewport-code" id="heroCodeView">
              
              <!-- Interactive Terminal Commands for Client Testing -->
              <div class="terminal-interactive-toolbar">
                <span style="font-size: 0.65rem; color: var(--text-muted);"><i class="fa-solid fa-play"></i> Client Interactive Console:</span>
                <div class="terminal-cmd-group">
                  <button type="button" class="terminal-action-btn" id="btnRunDeploy">
                    <i class="fa-solid fa-cloud-arrow-up"></i> Simulate Deploy
                  </button>
                  <button type="button" class="terminal-action-btn" id="btnRunRoas">
                    <i class="fa-solid fa-chart-line"></i> Meta ROAS Engine
                  </button>
                  <button type="button" class="terminal-action-btn" id="btnResetCode">
                    <i class="fa-solid fa-code"></i> Reset View
                  </button>
                </div>
              </div>

              <div class="code-telemetry-strip">
                <span class="telemetry-chip-latency"><i class="fa-solid fa-bolt"></i> Latency: 14ms (Edge Cache Hit: 99.4%)</span>
                <span>TLS 1.3 // HTTP/3 Ready</span>
              </div>

              <!-- Live Execution Output Screen -->
              <div class="terminal-output-console" id="terminalLiveConsole"></div>

              <div id="codeStaticLines">
                <div class="code-line"><span class="code-num">01</span><span><span class="code-comment">// Blue Hour Creative Studios — High-Performance Commerce & Telemetry Pipeline</span></span></div>
                <div class="code-line"><span class="code-num">02</span><span><span class="code-kw">namespace</span> App\Http\Pipelines\Commerce;</span></div>
                <div class="code-line"><span class="code-num">03</span><span></span></div>
                <div class="code-line"><span class="code-num">04</span><span><span class="code-kw">final readonly class</span> <span class="code-fn">OrderOrchestrator</span></span></div>
                <div class="code-line"><span class="code-num">05</span><span>{</span></div>
                <div class="code-line"><span class="code-num">06</span><span>    <span class="code-kw">public function</span> <span class="code-fn">dispatchCheckout</span>(CheckoutPayload <span class="code-prop">$payload</span>): OrderReceipt</span></div>
                <div class="code-line"><span class="code-num">07</span><span>    {</span></div>
                <div class="code-line"><span class="code-num">08</span><span>        <span class="code-comment">// Sub-second inventory lock & zero-latency edge verification</span></span></div>
                <div class="code-line"><span class="code-num">09</span><span>        <span class="code-prop">$inventory</span> = <span class="code-fn">Redis::pipeline</span>(<span class="code-kw">fn</span>(<span class="code-prop">$pipe</span>) => <span class="code-prop">$pipe</span>->decrWithGuard(<span class="code-prop">$payload</span>->sku));</span></div>
                <div class="code-line"><span class="code-num">10</span><span>        <span class="code-prop">$telemetry</span> = <span class="code-fn">MetaPixelDispatcher::syncConversionsApi</span>(<span class="code-prop">$payload</span>);</span></div>
                <div class="code-line"><span class="code-num">11</span><span>        </span></div>
                <div class="code-line"><span class="code-num">12</span><span>        <span class="code-kw">return new</span> <span class="code-fn">OrderReceipt</span>(</span></div>
                <div class="code-line"><span class="code-num">13</span><span>            status: <span class="code-str">'DISPATCHED_INSTANT'</span>,</span></div>
                <div class="code-line"><span class="code-num">14</span><span>            latency_ms: 14.2,</span></div>
                <div class="code-line"><span class="code-num">15</span><span>            ad_roas_multiplier: 4.8</span></div>
                <div class="code-line"><span class="code-num">16</span><span>        );</span></div>
                <div class="code-line"><span class="code-num">17</span><span>    }</span></div>
                <div class="code-line"><span class="code-num">18</span><span>}</span></div>
              </div>
            </div>

            <div class="frame-meta-footer">
              <div class="frame-project-header">
                <div>
                  <h4 class="frame-project-title">Gulbani & Prasuna Ecosystem</h4>
                  <p class="frame-project-sub">Full-Stack Luxury Commerce & Brand Authority</p>
                </div>
                <span class="frame-badge-flagship">FLAGSHIP BUILD</span>
              </div>

              <div class="frame-specs-pills">
                <span class="spec-pill">Laravel 8.x</span>
                <span class="spec-pill">Blade Engine</span>
                <span class="spec-pill">Meta Growth Funnel</span>
                <span class="spec-pill">4.8X ROAS</span>
                <span class="spec-pill">Sub-Second Load</span>
              </div>
            </div>
          </div>

          <!-- Precision Floating Telemetry Badge -->
          <div class="floating-spec-card pos-bottom-left">
            <div class="spec-card-icon">
              <i class="fa-solid fa-microchip"></i>
            </div>
            <div class="spec-card-text">
              <strong>100% Bespoke Code</strong>
              <span>Zero bloated page-builder dependencies</span>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       INFINITE CONTINUOUS MOVING TICKER LINE (CAPABILITIES & SLAS)
       ======================================================================== -->
  <div class="moving-ticker-band" aria-hidden="true">
    <div class="moving-ticker-track">
      <!-- Set 1 -->
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">HIGH-CONCURRENCY</strong> WEB PLATFORMS</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">VIRAL REELS</strong> & SOCIAL GROWTH ENGINE</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">BESPOKE LARAVEL & REACT</strong> CODE</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">4.8X AVERAGE</strong> CLIENT META ROAS</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">ENTERPRISE ERP & CRM</strong> ARCHITECTURE</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">SUB-SECOND LATENCY</strong> ZERO BLOAT</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">100% INTELLECTUAL PROPERTY</strong> TRANSFERRED</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">GUWAHATI & NEW DELHI</strong> STUDIO HUBS</span></div>

      <!-- Set 2 (Seamless Infinite Duplicate) -->
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">HIGH-CONCURRENCY</strong> WEB PLATFORMS</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">VIRAL REELS</strong> & SOCIAL GROWTH ENGINE</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">BESPOKE LARAVEL & REACT</strong> CODE</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">4.8X AVERAGE</strong> CLIENT META ROAS</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">ENTERPRISE ERP & CRM</strong> ARCHITECTURE</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">SUB-SECOND LATENCY</strong> ZERO BLOAT</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">100% INTELLECTUAL PROPERTY</strong> TRANSFERRED</span></div>
      <div class="ticker-item"><i class="fa-solid fa-star-of-life ticker-sparkle"></i> <span><strong class="ticker-highlight">GUWAHATI & NEW DELHI</strong> STUDIO HUBS</span></div>
    </div>
  </div>

  <!-- ========================================================================
       SERVICES & CAPABILITIES PREVIEW
       ======================================================================== -->
  <section class="services-section" id="services">
    <div class="container">
      
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>02 // Core Capabilities & Disciplines</span>
        </div>
        <h2 class="section-headline">
          Two Unified Disciplines. <br><span class="text-gradient-mercury">Exponential Market Impact.</span>
        </h2>
        <p class="section-lead">
          We eliminate the friction between engineering and marketing. One integrated studio delivering turnkey enterprise code and hyper-growth audience acquisition.
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
        <?php foreach (array_slice($services, 0, 6) as $idx => $srv): ?>
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
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Compact Quick-Explore Bar & Dedicated Service Links -->
      <div class="reveal-on-scroll" style="margin-top: 2.25rem; padding-top: 1.75rem; border-top: 1px solid var(--border-subtle); display: flex; flex-direction: column; align-items: center; gap: 1.25rem; text-align: center;" id="localServicesOverview">
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 0.65rem;">
          <a href="/website-development/" class="filter-pill-btn" style="text-decoration: none;">
            <i class="fa-solid fa-laptop-code" style="color: var(--accent-champagne); margin-right: 0.35rem;"></i> Website Development
          </a>
          <a href="/ecommerce-development/" class="filter-pill-btn" style="text-decoration: none;">
            <i class="fa-solid fa-bag-shopping" style="color: var(--accent-champagne); margin-right: 0.35rem;"></i> E-Commerce Stores
          </a>
          <a href="/social-media-management/" class="filter-pill-btn" style="text-decoration: none;">
            <i class="fa-brands fa-instagram" style="color: var(--accent-champagne); margin-right: 0.35rem;"></i> Social Media Management
          </a>
          <a href="/branding-design/" class="filter-pill-btn" style="text-decoration: none;">
            <i class="fa-solid fa-wand-magic-sparkles" style="color: var(--accent-champagne); margin-right: 0.35rem;"></i> Branding &amp; Design
          </a>
          <a href="/seo-digital-marketing/" class="filter-pill-btn" style="text-decoration: none;">
            <i class="fa-solid fa-magnifying-glass-chart" style="color: var(--accent-champagne); margin-right: 0.35rem;"></i> SEO &amp; Paid Ads
          </a>
        </div>

        <a href="services.php" class="btn btn-secondary magnetic-btn">
          <span>Explore Detailed Capabilities &amp; Architecture</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       SELECTED WORKS / PORTFOLIO PREVIEW
       ======================================================================== -->
  <section class="works-section" id="works">
    <div class="container">
      
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>03 // Selected Portfolio & Blueprints</span>
        </div>
        <h2 class="section-headline">
          Architected for Speed. <br><span class="text-gradient-champagne">Engineered for Scale.</span>
        </h2>
        <p class="section-lead">
          Explore real-world software platforms, commerce systems, mobile applications, and enterprise ERPs built for market leaders.
        </p>
      </div>

      <!-- Flagship Preview Bar -->
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;" class="reveal-on-scroll">
        <span class="filter-pill-btn active" style="pointer-events: none; cursor: default;">[ Top 3 Flagship Builds ]</span>
        <a href="works.php" class="btn btn-ghost-editorial btn-sm magnetic-btn">
          <span>Browse Complete Archive</span>
          <i class="fa-solid fa-arrow-right" style="font-size: 0.72rem;"></i>
        </a>
      </div>

      <!-- Projects Grid with Spotlight Shaders (First 3 Only) -->
      <div class="projects-editorial-grid" id="projectsContainer">
        <?php foreach (array_slice($projects, 0, 3) as $idx => $proj): ?>
          <div class="project-card-editorial project-card spotlight-card tilt-card reveal-on-scroll delay-<?= ($idx % 3) + 1 ?>" 
               data-category="<?= htmlspecialchars($proj['category']) ?>"
               data-filter-tag="<?= htmlspecialchars($proj['filter_tag'] ?? '') ?>"
               data-project-card="<?= htmlspecialchars($proj['id']) ?>"
               id="projCard_<?= htmlspecialchars($proj['id']) ?>">
            
            <div class="project-preview-frame">
              <img src="<?= htmlspecialchars($proj['image']) ?>?v=20261101c" alt="<?= htmlspecialchars($proj['title']) ?>" loading="lazy">
              <span class="project-index-pill">PRJ // <?= sprintf('%02d', $idx + 1) ?></span>
              <span class="project-category-badge"><?= htmlspecialchars($proj['category_label'] ?? 'Solution') ?></span>
            </div>

            <div class="project-body-editorial">
              <span class="project-client-kicker"><?= htmlspecialchars($proj['client'] ?? 'Client Confidential') ?></span>
              <h3 class="project-title-editorial"><?= htmlspecialchars($proj['title']) ?></h3>
              <p class="project-desc-editorial"><?= htmlspecialchars($proj['description']) ?></p>

              <div class="project-tags-wrap">
                <?php foreach (array_slice($proj['tags'], 0, 4) as $tag): ?>
                  <span class="project-tag-pill"><?= htmlspecialchars($tag) ?></span>
                <?php endforeach; ?>
              </div>

              <div class="project-actions-footer">
                <button type="button" class="btn-open-case-study" data-project-open="<?= htmlspecialchars($proj['id']) ?>" id="openProj_<?= htmlspecialchars($proj['id']) ?>">
                  <span>Read Case Study</span>
                  <i class="fa-solid fa-arrow-right" style="font-size: 0.72rem;"></i>
                </button>

                <?php if (!empty($proj['live']) && $proj['live'] !== '#'): ?>
                  <a href="<?= htmlspecialchars($proj['live']) ?>" target="_blank" rel="noopener noreferrer" class="project-direct-link" title="Open Live Site" aria-label="Open Live Site">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                  </a>
                <?php endif; ?>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>

      <!-- Prominent Button to Go to the Works Page to View All -->
      <div style="text-align: center; margin-top: 2.75rem; padding-top: 1.75rem; border-top: 1px solid var(--border-subtle);" class="reveal-on-scroll">
        <a href="works.php" class="btn btn-primary magnetic-btn" id="btnViewAllWorks" style="padding: 0.9rem 2.4rem; font-size: 0.96rem; font-weight: 700; display: inline-flex; gap: 0.75rem; align-items: center; border-radius: var(--radius-pill); box-shadow: 0 4px 20px rgba(255, 255, 255, 0.18);">
          <span>Go to Works Page to View All</span>
          <span style="font-family: var(--font-mono); font-size: 0.72rem; padding: 0.2rem 0.55rem; border-radius: var(--radius-pill); background: rgba(0, 0, 0, 0.18); font-weight: 600;">6 Blueprints</span>
          <i class="fa-solid fa-arrow-right" style="font-size: 0.8rem;"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       PRICING & PACKAGES PREVIEW
       ======================================================================== -->
  <section class="pricing-section" id="pricing">
    <div class="container">
      
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>04 // Transparent Investment & Packages</span>
        </div>
        <h2 class="section-headline">
          Predictable Pricing. <br><span class="text-gradient-champagne">Zero Hidden Surprises.</span>
        </h2>
        <p class="section-lead">
          Clear, outcome-focused packages engineered for emerging founders and scaling brands. Built with transparent deliverables and zero bloated agency retainers.
        </p>

        <!-- Category Filter Tabs -->
        <div class="pricing-filter-tabs" id="pricingFilterTabs">
          <button type="button" class="pricing-tab-btn active" data-filter="all">All Packages</button>
          <button type="button" class="pricing-tab-btn" data-filter="website"><i class="fa-solid fa-laptop-code"></i> Website (One-Time)</button>
          <button type="button" class="pricing-tab-btn" data-filter="growth"><i class="fa-solid fa-arrow-trend-up"></i> Social & Growth (Monthly)</button>
          <button type="button" class="pricing-tab-btn" data-filter="mobile"><i class="fa-solid fa-mobile-screen-button"></i> Mobile App (Android + iOS)</button>
        </div>
      </div>

      <!-- Pricing Cards Grid -->
      <div class="pricing-cards-grid" id="pricingCardsGrid">
        <?php foreach ($pricingCategories as $category): ?>
          <?php foreach ($category['plans'] as $plan): ?>
            <div class="pricing-card-editorial spotlight-card reveal-on-scroll <?= !empty($plan['highlight']) ? 'is-flagship' : '' ?>" data-category="<?= htmlspecialchars($category['id']) ?>">
              <?php if (!empty($plan['highlight'])): ?>
                <div class="pricing-badge-popular">
                  <i class="fa-solid fa-bolt"></i> <?= htmlspecialchars($plan['badge']) ?>
                </div>
              <?php else: ?>
                <div class="pricing-badge-subtle">
                  <?= htmlspecialchars($plan['badge']) ?>
                </div>
              <?php endif; ?>

              <div class="pricing-card-header">
                <span class="pricing-category-pill"><?= htmlspecialchars($category['name']) ?></span>
                <h3 class="pricing-plan-title"><?= htmlspecialchars($plan['name']) ?></h3>
                <p class="pricing-plan-tagline"><?= htmlspecialchars($plan['tagline']) ?></p>
              </div>

              <div class="pricing-amount-wrap">
                <div class="pricing-price-val"><?= htmlspecialchars($plan['price']) ?></div>
                <div class="pricing-billing-cycle"><?= htmlspecialchars($plan['billing']) ?></div>
              </div>

              <div class="pricing-timeline-pill">
                <i class="fa-regular fa-clock"></i> Timeline: <?= htmlspecialchars($plan['timeline']) ?>
              </div>

              <div class="pricing-divider"></div>

              <div class="pricing-features-section">
                <span class="features-label">Deliverables Included:</span>
                <ul class="features-checklist">
                  <?php foreach ($plan['features'] as $feat): ?>
                    <li>
                      <i class="fa-solid fa-check"></i>
                      <span><?= htmlspecialchars($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>

                <?php if (!empty($plan['not_included'])): ?>
                  <span class="features-label muted-label">Scope Boundaries:</span>
                  <ul class="features-not-included">
                    <?php foreach ($plan['not_included'] as $notInc): ?>
                      <li>
                        <i class="fa-solid fa-minus"></i>
                        <span><?= htmlspecialchars($notInc) ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </div>

              <div class="pricing-card-footer">
                <a href="<?= htmlspecialchars(getPackageWhatsAppUrl($plan)) ?>" target="_blank" rel="noopener noreferrer" 
                   class="btn <?= !empty($plan['highlight']) ? 'btn-primary' : 'btn-ghost-editorial' ?> btn-select-package magnetic-btn" 
                   data-plan-name="<?= htmlspecialchars($plan['name']) ?>" 
                   data-plan-price="<?= htmlspecialchars($plan['price']) ?> (<?= htmlspecialchars($plan['billing']) ?>)"
                   data-plan-id="<?= htmlspecialchars($plan['id']) ?>"
                   data-whatsapp-url="<?= htmlspecialchars(getPackageWhatsAppUrl($plan)) ?>"
                   aria-label="Select <?= htmlspecialchars($plan['name']) ?> via WhatsApp">
                  <span>Select Package</span>
                  <i class="fa-brands fa-whatsapp"></i>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </div>

      <!-- Link to Dedicated Pricing Page -->
      <div style="text-align: center; margin-top: 2.5rem;" class="reveal-on-scroll">
        <a href="pricing.php" class="btn btn-secondary magnetic-btn">
          <span>View Transparent Costs Breakdown & Terms</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       STUDIO LEADERSHIP & TEAM PREVIEW
       ======================================================================== -->
  <section class="team-section" id="team">
    <div class="container">
      
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>05 // Studio Leadership & Core Collective</span>
        </div>
        <h2 class="section-headline">
          The Minds Behind <br><span class="text-gradient-champagne">Blue Hour Studios</span>
        </h2>
        <p class="section-lead">
          Direct founder access. Zero bloated agency bureaucracy or junior hand-offs. We architect the digital systems and scale the market narratives.
        </p>
      </div>

      <div class="team-editorial-grid">
        <?php foreach ($team as $member): ?>
          <div class="team-card-editorial spotlight-card reveal-on-scroll">
            <div class="team-card-inner">
              
              <!-- Portrait Image Container -->
              <div class="team-photo-wrap">
                <img src="<?= htmlspecialchars($member['image']) ?>?v=20261101c" alt="<?= htmlspecialchars($member['name']) ?>" class="team-photo-img" loading="lazy">
                <div class="team-photo-vignette"></div>
                <div class="team-status-chip">
                  <span class="status-dot-pulse"></span>
                  <span>ONLINE &bull; DIRECT ACCESS</span>
                </div>
                <div class="team-badge-floating">
                  <i class="fa-solid fa-certificate"></i> <?= htmlspecialchars($member['badge']) ?>
                </div>
              </div>

              <!-- Content Meta -->
              <div class="team-details-wrap">
                <div class="team-role-pill"><?= htmlspecialchars($member['role']) ?></div>
                <h3 class="team-name-title"><?= htmlspecialchars($member['name']) ?></h3>
                <?php if (!empty($member['socials']['phone'])): ?>
                  <div style="margin-bottom: 0.65rem; font-family: var(--font-mono); font-size: 0.78rem; color: var(--accent-champagne);">
                    <i class="fa-solid fa-phone" style="font-size: 0.7rem; margin-right: 0.35rem;"></i>
                    <a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $member['socials']['phone'])) ?>" style="color: inherit; text-decoration: none;"><?= htmlspecialchars($member['socials']['phone']) ?></a>
                  </div>
                <?php endif; ?>
                <p class="team-bio-text"><?= htmlspecialchars($member['bio']) ?></p>

                <!-- Skill Chips -->
                <div class="team-skills-row">
                  <?php foreach ($member['skills'] as $skill): ?>
                    <span class="team-skill-chip"><?= htmlspecialchars($skill) ?></span>
                  <?php endforeach; ?>
                </div>

                <!-- Footer Actions & Direct Socials -->
                <div class="team-card-footer">
                  <div class="team-social-links">
                    <?php if (!empty($member['socials']['github'])): ?>
                      <a href="<?= htmlspecialchars($member['socials']['github']) ?>" target="_blank" rel="noopener noreferrer" class="team-social-btn" title="GitHub"><i class="fa-brands fa-github"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($member['socials']['linkedin'])): ?>
                      <a href="<?= htmlspecialchars($member['socials']['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="team-social-btn" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($member['socials']['instagram'])): ?>
                      <a href="<?= htmlspecialchars($member['socials']['instagram']) ?>" target="_blank" rel="noopener noreferrer" class="team-social-btn" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($member['socials']['whatsapp'])): ?>
                      <a href="<?= htmlspecialchars($member['socials']['whatsapp']) ?>" target="_blank" rel="noopener noreferrer" class="team-social-btn" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($member['socials']['email'])): ?>
                      <a href="mailto:<?= htmlspecialchars($member['socials']['email']) ?>" class="team-social-btn" title="Email"><i class="fa-solid fa-envelope"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($member['socials']['phone'])): ?>
                      <a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $member['socials']['phone'])) ?>" class="team-social-btn" title="Call <?= htmlspecialchars($member['socials']['phone']) ?>"><i class="fa-solid fa-phone"></i></a>
                    <?php endif; ?>
                  </div>

                  <a href="contact.php?consult=<?= urlencode($member['name']) ?>" class="btn btn-ghost-editorial btn-sm magnetic-btn btn-team-consult" data-member-name="<?= htmlspecialchars($member['name']) ?>" data-member-role="<?= htmlspecialchars($member['badge']) ?>">
                    <span>Consult with <?= htmlspecialchars(explode(' ', $member['name'])[0]) ?></span>
                    <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>

              </div>

            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Link to Dedicated Team Page -->
      <div style="text-align: center; margin-top: 2.5rem;" class="reveal-on-scroll">
        <a href="team.php" class="btn btn-secondary magnetic-btn">
          <span>Read Studio Philosophy & Founders' Credentials</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       OUR CLIENTS LIVE CAROUSEL & TESTIMONIALS SECTION
       ======================================================================== -->
  <section class="testimonials-section" id="testimonials">
    <div class="container">

      <!-- OUR CLIENTS LIVE CAROUSEL (LARGE LOGOS) -->
      <div class="our-clients-showcase reveal-on-scroll" id="ourClients">
        <div class="trusted-clients-header">
          <div class="trusted-clients-kicker">
            <span class="pulse-dot"></span>
            <span>OUR CLIENTS &amp; PARTNER BRANDS</span>
          </div>
          <a href="works.php" style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--accent-champagne); text-decoration: none;">
            VIEW ALL CASE STUDIES &rarr;
          </a>
        </div>

        <div class="clients-carousel-viewport">
          <div class="clients-carousel-track">
            <?php for ($loop = 0; $loop < 2; $loop++): ?>
              <a href="works.php" class="trusted-client-card">
                <div class="trusted-logo-box">
                  <img src="assets/images/client_pragjyotishpur.png?v=20261101e" alt="Pragjyotishpur University" loading="lazy">
                </div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Pragjyotishpur University</span>
                  <span class="trusted-client-sector">Campus ERP &amp; Portal</span>
                </div>
              </a>

              <a href="works.php" class="trusted-client-card">
                <div class="trusted-logo-box">
                  <img src="assets/images/client_omkaar.jpg?v=20261101e" alt="Omkaar Trans Logistics" loading="lazy">
                </div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Omkaar Trans Logistics</span>
                  <span class="trusted-client-sector">Enterprise Fleet ERP</span>
                </div>
              </a>

              <a href="works.php" class="trusted-client-card">
                <div class="trusted-logo-box" style="background: #0a0a0a;">
                  <img src="assets/images/client_kharidlo.jpg?v=20261101e" alt="Kharidlo.in Assam" loading="lazy">
                </div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Kharidlo.in (Assam)</span>
                  <span class="trusted-client-sector">E-Commerce &amp; Retail</span>
                </div>
              </a>

              <a href="https://gulbani.vercel.app/" target="_blank" rel="noopener noreferrer" class="trusted-client-card">
                <div class="trusted-logo-monogram">GULBANI</div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Gulbani Luxury Concierge</span>
                  <span class="trusted-client-sector">Luxury Gifting &amp; Social Ads</span>
                </div>
              </a>

              <a href="https://chaudhary-associates.vercel.app/" target="_blank" rel="noopener noreferrer" class="trusted-client-card">
                <div class="trusted-logo-monogram">CA</div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Chaudhary Associates</span>
                  <span class="trusted-client-sector">Architecture Web &amp; Growth</span>
                </div>
              </a>

              <a href="https://prasunaclothing.vercel.app/" target="_blank" rel="noopener noreferrer" class="trusted-client-card">
                <div class="trusted-logo-monogram">PRASUNA</div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Prasuna Clothing</span>
                  <span class="trusted-client-sector">D2C Fashion &amp; Viral Reels</span>
                </div>
              </a>

              <a href="works.php" class="trusted-client-card">
                <div class="trusted-logo-monogram">BHUYAN</div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Bhuyan Commercial Group</span>
                  <span class="trusted-client-sector">Commercial Property SaaS</span>
                </div>
              </a>
            <?php endfor; ?>
          </div>
        </div>
      </div>
      
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>06 // Verified Client Trust</span>
        </div>
        <h2 class="section-headline">
          Validated by Visionary <br><span class="text-gradient-champagne">Founders & Enterprises</span>
        </h2>
        <p class="section-lead">
          See how our software architecture and viral marketing directly move the needle for client bottom lines.
        </p>
      </div>

      <div class="testimonials-editorial-grid">
        <?php foreach ($testimonials as $idx => $t): ?>
          <div class="testimonial-card-editorial spotlight-card tilt-card reveal-on-scroll delay-<?= ($idx % 3) + 1 ?>">
            <div class="quote-stars-row">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            
            <p class="testimonial-quote-editorial">"<?= htmlspecialchars($t['text']) ?>"</p>
            
            <div class="testimonial-client-meta">
              <div class="client-monogram-circle" style="background: <?= htmlspecialchars($t['avatar_color']) ?>;">
                <?= strtoupper(substr($t['name'], 0, 1)) ?>
              </div>
              <div class="client-info-editorial">
                <h5><?= htmlspecialchars($t['name']) ?></h5>
                <span><?= htmlspecialchars($t['role']) ?> &bull; <?= htmlspecialchars($t['company']) ?></span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       CALL TO ACTION & INITIATION BANNER
       ======================================================================== -->
  <section class="contact-section" id="contact" style="padding-top: 20px;">
    <div class="container">
      <div class="launchpad-card spotlight-card reveal-on-scroll" style="text-align: center; padding: 3rem 1.5rem;">
        <span class="index-num" style="display: block; margin-bottom: 0.5rem;">07 // INITIATE YOUR INITIATIVE</span>
        <h2 style="font-family: var(--font-display); font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 700; margin-bottom: 0.85rem; color: var(--text-primary); line-height: 1.15;">
          Ready to Build Something <span class="text-gradient-champagne">Truly Iconic?</span>
        </h2>
        <p style="color: var(--text-secondary); max-width: 620px; margin: 0 auto 1.8rem auto; font-size: 1rem; line-height: 1.6;">
          Submit your brief directly to our founders or connect instantly on WhatsApp. We respond within 4 hours with an actionable roadmap.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="https://wa.me/917002201534?text=Hi%20Blue%20Hour%20Studios,%20I%20would%20like%20to%20discuss%20a%20project" target="_blank" rel="noopener noreferrer" class="btn btn-secondary magnetic-btn">
            <i class="fa-brands fa-whatsapp" style="color: #25d366;"></i>
            <span>Instant WhatsApp Desk</span>
          </a>
          <a href="contact.php" class="btn btn-primary magnetic-btn">
            <span>Open Strategic Intake Desk</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
