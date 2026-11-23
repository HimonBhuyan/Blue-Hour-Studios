<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Digital Presence Packages & Transparent Pricing';
$pageDesc = 'Clear, predictable pricing for custom websites, CMS platforms, monthly social media growth, and mobile apps from Blue Hour Creative Studios in Guwahati & New Delhi, India.';
$activePage = 'pricing';

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
          <span>Transparent Studio Rate Card</span>
        </div>

        <h1 style="font-family: var(--font-hand); font-size: clamp(3rem, 5.5vw, 4.5rem); font-weight: 700; color: #FFFDF9; line-height: 1.06; margin-bottom: 1rem;">
          Predictable Pricing. <br>
          <span class="script-highlight">Zero Hidden Surprises.</span>
          <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon" style="margin-left: 8px;">
        </h1>

        <p style="font-family: var(--font-body); font-size: 1.08rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.75rem;">
          Clear, outcome-focused packages engineered for emerging founders and scaling brands. Built with transparent deliverables, 100% intellectual property transfer, and zero bloated agency retainers.
        </p>

        <div style="margin-bottom: 2rem;">
          <a href="brochure.php" class="btn-craft-outline">
            <i class="fa-regular fa-file-pdf" style="color: var(--accent-orange);"></i>
            <span>View / Download Official Rate Card (PDF)</span>
          </a>
        </div>

        <!-- Quick Metrics -->
        <div style="display: flex; gap: 2.25rem; flex-wrap: wrap; border-top: 1px dashed rgba(255,255,255,0.12); padding-top: 1.25rem;">
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.45rem; color: #FFFDF9; display: block; line-height: 1;">₹8K–₹10K</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Starter Website</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.45rem; color: #FFFDF9; display: block; line-height: 1;">₹10K/mo</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Social Growth</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.45rem; color: #FFFDF9; display: block; line-height: 1;">100%</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Code Ownership</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.45rem; color: #FFFDF9; display: block; line-height: 1;">1 Year</strong>
            <span style="font-family: var(--font-hand); font-size: 1.15rem; color: var(--accent-orange); font-weight: 700;">Free Maintenance</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Torn Paper Divider (Dark to Kraft) -->
  <div class="torn-divider torn-kraft-top" aria-hidden="true"></div>

  <!-- ========================================================================
       2. PRICING TIERS MENU (KRAFT PAPER SCRAPBOOK SECTION)
       ======================================================================== -->
  <section class="kraft-disciplines-section" id="pricing">
    <div class="container">

      <div class="section-head-kraft" style="margin-bottom: 2.5rem;">
        <div>
          <div class="script-kicker" style="color: var(--accent-orange-deep); margin-bottom: 0.25rem;">
            <span>01 // Selected Tier Architecture</span>
          </div>
          <h2 class="disciplines-headline">
            <span>Choose Your Build Package</span>
            <img src="assets/images/doodle_arrow.svg" alt="Arrow" class="doodle-arrow-icon">
          </h2>
        </div>

        <!-- Category Filter Tabs -->
        <div style="display: flex; gap: 0.55rem; flex-wrap: wrap;">
          <button type="button" class="prc-tab-btn active" data-filter="all" style="background: var(--accent-orange); color: #FFFDF9; border: 1.5px solid var(--accent-orange); padding: 0.45rem 1.1rem; border-radius: 999px; font-weight: 700; font-size: 0.84rem;">[ All Packages ]</button>
          <button type="button" class="prc-tab-btn" data-filter="website" style="background: transparent; color: #2B2118; border: 1.5px solid rgba(90,70,50,0.35); padding: 0.45rem 1.1rem; border-radius: 999px; font-weight: 600; font-size: 0.84rem;">[ Websites (One-Time) ]</button>
          <button type="button" class="prc-tab-btn" data-filter="growth" style="background: transparent; color: #2B2118; border: 1.5px solid rgba(90,70,50,0.35); padding: 0.45rem 1.1rem; border-radius: 999px; font-weight: 600; font-size: 0.84rem;">[ Social Growth (Monthly) ]</button>
          <button type="button" class="prc-tab-btn" data-filter="mobile" style="background: transparent; color: #2B2118; border: 1.5px solid rgba(90,70,50,0.35); padding: 0.45rem 1.1rem; border-radius: 999px; font-weight: 600; font-size: 0.84rem;">[ Mobile Apps ]</button>
        </div>
      </div>

      <!-- Pricing Cards Grid -->
      <div class="scrapbook-cards-grid">
        <?php foreach ($pricingCategories as $category): ?>
          <?php foreach ($category['plans'] as $pIdx => $plan): ?>
            <?php $isFlagship = !empty($plan['highlight']); ?>
            <div class="prc-scrap-card" data-category="<?= htmlspecialchars($category['id']) ?>" style="position: relative; background: <?= $isFlagship ? '#FFF9EB' : '#FFFDF9' ?>; border: <?= $isFlagship ? '2px solid var(--accent-orange)' : '1px solid var(--bg-kraft-border)' ?>; border-radius: 8px; padding: 2rem 1.75rem 1.75rem; box-shadow: 0 14px 32px rgba(80,60,40,0.12); display: flex; flex-direction: column; justify-content: space-between;">
              <span class="washi-tape washi-tape-top"></span>

              <div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.8rem;">
                  <span style="font-family: var(--font-mono); font-size: 0.68rem; font-weight: 700; color: #7D6B58; text-transform: uppercase;">
                    <?= htmlspecialchars($category['name']) ?>
                  </span>
                  <span style="font-family: var(--font-mono); font-size: 0.68rem; font-weight: 700; padding: 0.2rem 0.6rem; border-radius: 4px; background: <?= $isFlagship ? 'var(--accent-orange)' : '#F4E8D3' ?>; color: <?= $isFlagship ? '#FFFDF9' : 'var(--accent-orange-deep)' ?>;">
                    <?= htmlspecialchars($plan['badge']) ?>
                  </span>
                </div>

                <h3 style="font-family: var(--font-hand); font-size: 2rem; font-weight: 700; color: #211913; line-height: 1.1; margin-bottom: 0.35rem;">
                  <?= htmlspecialchars($plan['name']) ?>
                </h3>
                <p style="font-family: var(--font-body); font-size: 0.88rem; color: #5C4B3A; margin-bottom: 1.1rem;">
                  <?= htmlspecialchars($plan['tagline']) ?>
                </p>

                <div style="background: #F6EFE3; border: 1px dashed #D6C3A5; border-radius: 6px; padding: 0.9rem 1rem; margin-bottom: 1rem;">
                  <div style="font-family: var(--font-display); font-size: 1.75rem; font-weight: 700; color: #211913; line-height: 1.1;">
                    <?= htmlspecialchars($plan['price']) ?>
                  </div>
                  <div style="font-family: var(--font-hand); font-size: 1.05rem; font-weight: 700; color: var(--accent-orange-deep);">
                    <?= htmlspecialchars($plan['billing']) ?> &bull; Timeline: <?= htmlspecialchars($plan['timeline']) ?>
                  </div>
                </div>

                <span style="display: block; font-family: var(--font-mono); font-size: 0.68rem; font-weight: 700; color: #5C4B3A; text-transform: uppercase; margin-bottom: 0.55rem;">Deliverables Included:</span>
                <ul style="display: flex; flex-direction: column; gap: 0.45rem; margin-bottom: 1.25rem;">
                  <?php foreach ($plan['features'] as $feat): ?>
                    <li style="font-family: var(--font-body); font-size: 0.85rem; color: #2B2118; display: flex; align-items: flex-start; gap: 0.55rem;">
                      <i class="fa-solid fa-check" style="color: var(--accent-orange-deep); margin-top: 4px; font-size: 0.78rem;"></i>
                      <span><?= htmlspecialchars($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>

                <?php if (!empty($plan['not_included'])): ?>
                  <span style="display: block; font-family: var(--font-mono); font-size: 0.66rem; font-weight: 700; color: #8C7A66; text-transform: uppercase; margin-bottom: 0.4rem;">Scope Boundaries:</span>
                  <ul style="display: flex; flex-direction: column; gap: 0.35rem; margin-bottom: 1.25rem;">
                    <?php foreach ($plan['not_included'] as $notInc): ?>
                      <li style="font-family: var(--font-body); font-size: 0.8rem; color: #7D6B58; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <i class="fa-solid fa-minus" style="color: #A89D8F; margin-top: 4px; font-size: 0.7rem;"></i>
                        <span><?= htmlspecialchars($notInc) ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </div>

              <a href="<?= htmlspecialchars(getPackageWhatsAppUrl($plan)) ?>" target="_blank" rel="noopener noreferrer" class="btn-orange-solid" style="width: 100%; justify-content: center; margin-top: 0.5rem;">
                <span>Select Package via WhatsApp</span>
                <i class="fa-brands fa-whatsapp" style="font-size: 1.05rem;"></i>
              </a>
            </div>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Torn Paper Divider (Kraft to Dark) -->
  <div class="torn-divider torn-kraft-bottom" aria-hidden="true"></div>

  <!-- ========================================================================
       3. TRANSPARENCY & ENGAGEMENT TERMS (DARK SECTION WITH PINNED NOTE)
       ======================================================================== -->
  <section class="polaroids-showcase-section">
    <div class="container">
      <div class="timeline-grid">
        
        <div style="background: rgba(32, 27, 23, 0.9); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 2.2rem;">
          <div class="script-kicker"><span>Zero Hidden Margins</span></div>
          <h3 style="font-family: var(--font-hand); font-size: 2.2rem; color: #FFFDF9; margin-bottom: 1.25rem;">Paid Separately, At Actual Cost</h3>
          <ul style="display: flex; flex-direction: column; gap: 1rem;">
            <?php foreach ($transparentCosts as $cost): ?>
              <li style="border-bottom: 1px dashed rgba(255,255,255,0.1); padding-bottom: 0.85rem;">
                <strong style="display: block; color: var(--accent-orange); font-size: 0.95rem;"><i class="fa-solid fa-receipt" style="margin-right: 6px;"></i> <?= htmlspecialchars($cost['item']) ?></strong>
                <span style="font-size: 0.86rem; color: var(--text-muted);"><?= htmlspecialchars($cost['note']) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="pinned-event-sheet">
          <img src="assets/images/doodle_pushpin.svg" alt="Pin" class="pinned-pushpin">
          <div class="pinned-title">Engagement Terms &amp; Guarantees</div>
          <div class="event-timeline-list">
            <?php foreach ($keyTerms as $term): ?>
              <div style="border-bottom: 1px dashed rgba(160,130,90,0.35); padding-bottom: 0.8rem;">
                <strong style="display: block; color: #2B2118; font-size: 0.98rem;"><i class="fa-solid fa-circle-check" style="color: var(--accent-orange-deep); margin-right: 6px;"></i> <?= htmlspecialchars($term['title']) ?></strong>
                <span style="font-size: 0.86rem; color: #5C4B3A;"><?= htmlspecialchars($term['desc']) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Torn Paper Divider (Dark to Kraft) -->
  <div class="torn-divider torn-kraft-top" aria-hidden="true"></div>

  <section class="reserve-table-section">
    <div class="container">
      <div class="reserve-table-card">
        <span class="washi-tape washi-tape-top"></span>
        <div class="reserve-copy">
          <div class="script-kicker" style="color: var(--accent-orange-deep);"><span>Bespoke Enterprise Scope</span></div>
          <h2>Need a Custom Architecture or Retainer?</h2>
          <p>We architect custom enterprise ERPs, multi-region cloud microservices, and high-volume performance marketing campaigns tailored to your exact roadmap.</p>
        </div>
        <div class="reserve-actions">
          <a href="contact.php?custom=enterprise" class="btn-orange-solid">
            <span>Request Custom Scope</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <div class="torn-divider torn-dark-top" aria-hidden="true"></div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const btns = document.querySelectorAll('.prc-tab-btn');
      const cards = document.querySelectorAll('.prc-scrap-card');
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
