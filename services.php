<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Capabilities & Handcrafted Disciplines';
$pageDesc = 'Explore Blue Hour Creative Studios capabilities in Guwahati & New Delhi, India: bespoke web & SaaS development, enterprise ERP/CRM systems, iOS & Android mobile apps, social media marketing, and high-ROAS paid ads.';
$activePage = 'services';

require_once __DIR__ . '/includes/header.php';
?>

  <!-- ========================================================================
       1. SUBPAGE HERO HEADER (ROOT BARREL SCRAPBOOK STYLE)
       ======================================================================== -->
  <section style="padding: 4.5rem 0 3.5rem; position: relative; z-index: 2;">
    <div class="container">
      <div style="max-width: 780px;">
        <div class="script-kicker" style="font-size: 1.45rem; margin-bottom: 0.4rem;">
          <a href="index.php" style="color: var(--text-muted);">Home</a>
          <span style="color: var(--accent-orange);">&bull;</span>
          <span>Studio Menu &amp; Disciplines</span>
        </div>

        <h1 style="font-family: var(--font-hand); font-size: clamp(3rem, 5.5vw, 4.5rem); font-weight: 700; color: #FFFDF9; line-height: 1.06; margin-bottom: 1rem;">
          Engineering Digital Supremacy. <br>
          <span class="script-highlight">Scaling Cultural Relevance.</span>
          <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon" style="margin-left: 8px;">
        </h1>

        <p style="font-family: var(--font-body); font-size: 1.08rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 2rem;">
          We eliminate the friction between full-stack software engineering and viral brand marketing. One unified artisanal studio delivering turnkey enterprise code, luxury design systems, and hyper-growth audience acquisition.
        </p>

        <!-- Quick Metrics -->
        <div style="display: flex; gap: 2.25rem; flex-wrap: wrap; border-top: 1px dashed rgba(255,255,255,0.12); padding-top: 1.25rem;">
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">06</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Core Disciplines</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">100%</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Bespoke Code</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">&lt;200ms</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Edge Latency</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">4.8X</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Average ROAS</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Torn Paper Divider (Dark to Kraft) -->
  <div class="torn-divider torn-kraft-top" aria-hidden="true"></div>

  <!-- ========================================================================
       2. CORE CAPABILITIES MENU (KRAFT PAPER SCRAPBOOK SECTION)
       ======================================================================== -->
  <section class="kraft-disciplines-section" id="services">
    <div class="container">
      
      <div class="section-head-kraft" style="margin-bottom: 2.25rem;">
        <div>
          <div class="script-kicker" style="color: var(--accent-orange-deep); margin-bottom: 0.25rem;">
            <span>01 // Handcrafted Studio Menu</span>
          </div>
          <h2 class="disciplines-headline">
            <span>Two Unified Wings. Six Crafts.</span>
            <img src="assets/images/doodle_arrow.svg" alt="Arrow" class="doodle-arrow-icon">
          </h2>
        </div>

        <!-- Filter Buttons on Kraft -->
        <div style="display: flex; gap: 0.6rem; flex-wrap: wrap;">
          <button type="button" class="srv-filter-btn active" data-filter="all" style="background: var(--accent-orange); color: #FFFDF9; border: 1.5px solid var(--accent-orange); padding: 0.45rem 1.1rem; border-radius: 999px; font-weight: 700; font-size: 0.85rem;">[ All Disciplines ]</button>
          <button type="button" class="srv-filter-btn" data-filter="Engineering" style="background: transparent; color: #2B2118; border: 1.5px solid rgba(90,70,50,0.35); padding: 0.45rem 1.1rem; border-radius: 999px; font-weight: 600; font-size: 0.85rem;">[ Software &amp; Web ]</button>
          <button type="button" class="srv-filter-btn" data-filter="Creative Marketing" style="background: transparent; color: #2B2118; border: 1.5px solid rgba(90,70,50,0.35); padding: 0.45rem 1.1rem; border-radius: 999px; font-weight: 600; font-size: 0.85rem;">[ Social &amp; Growth ]</button>
        </div>
      </div>

      <!-- 6 Pinned Craft Cards Grid -->
      <div class="scrapbook-cards-grid">
        <?php foreach ($services as $idx => $srv): ?>
          <div class="srv-scrap-card" data-category="<?= htmlspecialchars($srv['category']) ?>" id="service_<?= htmlspecialchars($srv['id']) ?>" style="position: relative; background: #FFFDF9; border: 1px solid var(--bg-kraft-border); border-radius: 8px; padding: 2rem 1.75rem 1.65rem; box-shadow: 0 12px 28px rgba(80,60,40,0.10); display: flex; flex-direction: column; justify-content: space-between; transform: rotate(<?= ($idx % 2 === 0) ? '-0.6deg' : '0.6deg' ?>); transition: transform 0.25s ease, box-shadow 0.25s ease;">
            <span class="washi-tape washi-tape-top"></span>

            <div>
              <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.1rem;">
                <div class="discipline-icon-box" style="margin-bottom: 0;">
                  <i class="<?= htmlspecialchars($srv['icon']) ?>"></i>
                </div>
                <span style="font-family: var(--font-mono); font-size: 0.7rem; font-weight: 600; background: #F4E8D3; color: var(--accent-orange-deep); padding: 0.25rem 0.65rem; border-radius: 4px; border: 1px dashed rgba(160,120,70,0.4);">
                  <?= htmlspecialchars($srv['badge']) ?>
                </span>
              </div>

              <h3 style="font-family: var(--font-hand); font-size: 1.85rem; font-weight: 700; color: #211913; line-height: 1.15; margin-bottom: 0.5rem;">
                <?= htmlspecialchars($srv['title']) ?>
              </h3>
              <p style="font-family: var(--font-body); font-size: 0.92rem; color: #5C4B3A; line-height: 1.55; margin-bottom: 1.25rem;">
                <?= htmlspecialchars($srv['short_desc']) ?>
              </p>

              <ul style="display: flex; flex-direction: column; gap: 0.5rem; margin-bottom: 1.5rem; border-top: 1px dashed #E2D4BE; padding-top: 1rem;">
                <?php foreach ($srv['deliverables'] as $feat): ?>
                  <li style="font-family: var(--font-body); font-size: 0.86rem; color: #36291E; display: flex; align-items: center; gap: 0.55rem; font-weight: 500;">
                    <i class="fa-solid fa-check" style="color: var(--accent-orange-deep); font-size: 0.78rem;"></i>
                    <span><?= htmlspecialchars($feat) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <div style="display: flex; align-items: center; justify-content: space-between; padding-top: 0.9rem; border-top: 1px dashed #E2D4BE;">
              <span style="font-family: var(--font-mono); font-size: 0.68rem; font-weight: 600; color: #7D6B58; text-transform: uppercase;">
                <?= htmlspecialchars($srv['category']) ?>
              </span>
              <a href="contact.php?service=<?= urlencode($srv['title']) ?>" style="font-family: var(--font-hand); font-size: 1.25rem; font-weight: 700; color: var(--accent-orange-deep); display: inline-flex; align-items: center; gap: 0.4rem;">
                <span>Reserve This Craft</span>
                <i class="fa-solid fa-arrow-right" style="font-size: 0.8rem;"></i>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Torn Paper Divider (Kraft to Dark) -->
  <div class="torn-divider torn-kraft-bottom" aria-hidden="true"></div>

  <!-- ========================================================================
       3. THE ARCHITECTURAL DIFFERENCE & VIRAL GROWTH PILLARS (DARK SECTION)
       ======================================================================== -->
  <section class="polaroids-showcase-section" id="comparison">
    <div class="container">
      
      <div class="specials-head-row">
        <div class="specials-title-wrap">
          <div class="script-kicker">
            <span>02 // Why Partner With Blue Hour</span>
          </div>
          <div class="specials-main-title">
            <span>Agency Bloat vs Handcrafted Code</span>
            <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon">
          </div>
        </div>
      </div>

      <!-- Comparison Split Cards -->
      <div class="timeline-grid" style="margin-bottom: 4.5rem;">
        <!-- Traditional Route -->
        <div style="background: rgba(32, 27, 23, 0.88); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 2.2rem;">
          <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px dashed rgba(255,255,255,0.12); padding-bottom: 1rem; margin-bottom: 1.4rem;">
            <h3 style="font-family: var(--font-hand); font-size: 2rem; color: #A89D8F;">Traditional Agency Route</h3>
            <span class="polaroid-tag" style="background: rgba(239,68,68,0.15); color: #f87171; border-color: rgba(239,68,68,0.3);">OUTDATED MODEL</span>
          </div>
          <ul style="display: flex; flex-direction: column; gap: 1.2rem;">
            <li style="display: flex; gap: 0.85rem; align-items: flex-start;">
              <i class="fa-solid fa-xmark" style="color: #f87171; margin-top: 5px;"></i>
              <div>
                <strong style="display: block; color: #FFFDF9; font-size: 1rem;">Bloated Page Load (3.8s &mdash; 5.2s)</strong>
                <span style="font-size: 0.88rem; color: var(--text-muted);">Generic templates with 40+ heavy plugins dragging conversion rates down.</span>
              </div>
            </li>
            <li style="display: flex; gap: 0.85rem; align-items: flex-start;">
              <i class="fa-solid fa-xmark" style="color: #f87171; margin-top: 5px;"></i>
              <div>
                <strong style="display: block; color: #FFFDF9; font-size: 1rem;">Uncoordinated Ad Funnels (1.2X ROAS)</strong>
                <span style="font-size: 0.88rem; color: var(--text-muted);">Marketers don't understand engineering; zero server-side pixel telemetry.</span>
              </div>
            </li>
            <li style="display: flex; gap: 0.85rem; align-items: flex-start;">
              <i class="fa-solid fa-xmark" style="color: #f87171; margin-top: 5px;"></i>
              <div>
                <strong style="display: block; color: #FFFDF9; font-size: 1rem;">Junior Hand-offs &amp; Excuses</strong>
                <span style="font-size: 0.88rem; color: var(--text-muted);">Developers blame marketers, marketers blame the slow website.</span>
              </div>
            </li>
          </ul>
        </div>

        <!-- Blue Hour Pinned Kraft Sheet -->
        <div class="pinned-event-sheet" style="transform: rotate(1deg);">
          <img src="assets/images/doodle_pushpin.svg" alt="Pin" class="pinned-pushpin">
          <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1.5px dashed rgba(160,130,90,0.45); padding-bottom: 0.75rem; margin-bottom: 1.35rem;">
            <span class="pinned-title" style="margin-bottom: 0; border-bottom: none; padding-bottom: 0;">Blue Hour Creative Studios</span>
            <span class="polaroid-tag" style="background: var(--accent-orange); color: #FFFDF9; border: none;">ARTISANAL CODE</span>
          </div>
          <ul style="display: flex; flex-direction: column; gap: 1.15rem;">
            <li style="display: flex; gap: 0.85rem; align-items: flex-start;">
              <i class="fa-solid fa-check" style="color: var(--accent-orange-deep); margin-top: 5px;"></i>
              <div>
                <strong style="display: block; color: #2B2118; font-size: 1.02rem;">Sub-Second Edge Execution (0.18s &mdash; 0.35s)</strong>
                <span style="font-size: 0.88rem; color: #5C4B3A;">100% Bespoke Laravel, React, Node.js &amp; PHP 8+ code with global edge caching.</span>
              </div>
            </li>
            <li style="display: flex; gap: 0.85rem; align-items: flex-start;">
              <i class="fa-solid fa-check" style="color: var(--accent-orange-deep); margin-top: 5px;"></i>
              <div>
                <strong style="display: block; color: #2B2118; font-size: 1.02rem;">Data-Driven Ad Mastery (4.8X Average ROAS)</strong>
                <span style="font-size: 0.88rem; color: #5C4B3A;">Direct integration between server-side Meta Conversions API and viral reels.</span>
              </div>
            </li>
            <li style="display: flex; gap: 0.85rem; align-items: flex-start;">
              <i class="fa-solid fa-check" style="color: var(--accent-orange-deep); margin-top: 5px;"></i>
              <div>
                <strong style="display: block; color: #2B2118; font-size: 1.02rem;">Direct Founder Partnership + 1 Yr Free SLA</strong>
                <span style="font-size: 0.88rem; color: #5C4B3A;">One elite squad delivering full-stack engineering and viral growth simultaneously.</span>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <!-- Torn Paper Divider (Dark to Kraft) -->
  <div class="torn-divider torn-kraft-top" aria-hidden="true"></div>

  <!-- ========================================================================
       4. RESERVE YOUR BRIEF CTA (KRAFT SECTION)
       ======================================================================== -->
  <section class="reserve-table-section">
    <div class="container">
      <div class="reserve-table-card">
        <span class="washi-tape washi-tape-top"></span>
        <div class="reserve-copy">
          <div class="script-kicker" style="color: var(--accent-orange-deep); margin-bottom: 0.35rem;">
            <span>Ready to Scale</span>
            <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon" style="width: 28px; height: 22px;">
          </div>
          <h2>Ready to Engineer Your Unfair Advantage?</h2>
          <p>Explore our transparent one-time website packages and monthly social growth retainers, or book a direct discovery session with our founders.</p>
        </div>
        <div class="reserve-actions">
          <a href="pricing.php" class="btn-orange-solid">
            <span>Explore Pricing Packages</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
          <a href="contact.php" class="btn-craft-outline" style="color: #2B2118; border-color: rgba(90,70,50,0.45);">
            <span>Reserve a Brief</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Torn Paper Divider (Kraft to Dark) -->
  <div class="torn-divider torn-dark-top" aria-hidden="true"></div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const btns = document.querySelectorAll('.srv-filter-btn');
      const cards = document.querySelectorAll('.srv-scrap-card');
      btns.forEach(function(btn) {
        btn.addEventListener('click', function() {
          btns.forEach(function(b) {
            b.style.background = 'transparent';
            b.style.color = '#2B2118';
            b.style.borderColor = 'rgba(90,70,50,0.35)';
          });
          btn.style.background = 'var(--accent-orange)';
          btn.style.color = '#FFFDF9';
          btn.style.borderColor = 'var(--accent-orange)';
          const filter = btn.getAttribute('data-filter');
          cards.forEach(function(card) {
            const cat = card.getAttribute('data-category');
            card.style.display = (filter === 'all' || cat === filter) ? 'flex' : 'none';
          });
        });
      });
    });
  </script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
