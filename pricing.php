<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Digital Presence Packages & Transparent Pricing';
$pageDesc = 'Clear, predictable pricing for custom websites, CMS platforms, monthly social media growth, and mobile apps from The Blue Hour Studios in Guwahati & New Delhi, India.';
$activePage = 'pricing';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Subpage Architectural Hero Header -->
<section class="subpage-hero">
  <div class="container">
    <div class="subpage-hero-inner">
      <div class="subpage-breadcrumb">
        <a href="index.php">Home</a>
        <span class="sep">/</span>
        <span class="current">Digital Presence Packages</span>
      </div>
      <h1 class="subpage-title">
        Predictable Pricing. <br>
        <span class="text-gradient-champagne">Zero Hidden Surprises.</span>
      </h1>
      <p class="subpage-lead">
        Clear, outcome-focused packages engineered for emerging founders and scaling brands. Built with transparent
        deliverables, full intellectual property transfer, and zero bloated agency retainers.
      </p>

      <div style="margin-top: 1.35rem; margin-bottom: 0.5rem;">
        <a href="brochure.php" class="btn btn-secondary magnetic-btn">
          <i class="fa-regular fa-file-pdf" style="color: var(--accent-champagne);"></i>
          <span>View / Download Official Rate Card (PDF)</span>
        </a>
      </div>

      <div class="subpage-quick-stats">
        <div class="subpage-stat-item">
          <span class="subpage-stat-num">₹8K–₹10K</span>
          <span class="subpage-stat-lbl">Starter Website</span>
        </div>
        <div class="subpage-stat-item">
          <span class="subpage-stat-num">₹10K/mo</span>
          <span class="subpage-stat-lbl">Social Media Growth</span>
        </div>
        <div class="subpage-stat-item">
          <span class="subpage-stat-num">100%</span>
          <span class="subpage-stat-lbl">Code & Asset Ownership</span>
        </div>
        <div class="subpage-stat-item">
          <span class="subpage-stat-num">30 Days</span>
          <span class="subpage-stat-lbl">Free Post-Launch SLA</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
       PRICING & DIGITAL PRESENCE PACKAGES
       ======================================================================== -->
<section class="pricing-section" id="pricing">
  <div class="container">

    <div class="section-header-editorial reveal-on-scroll">
      <div class="section-kicker">
        <span class="kicker-line"></span>
        <span>01 // Selected Tier Architecture</span>
      </div>
      <h2 class="section-headline">
        Structured for Every Stage <br><span class="text-gradient-mercury">of Brand Acceleration.</span>
      </h2>
      <p class="section-lead">
        Filter packages by discipline or view all options. Every package includes direct founder oversight and turnkey
        handover.
      </p>

      <!-- Category Filter Tabs -->
      <div class="pricing-filter-tabs" id="pricingFilterTabs">
        <button type="button" class="pricing-tab-btn active" data-filter="all">All Packages</button>
        <button type="button" class="pricing-tab-btn" data-filter="website"><i class="fa-solid fa-laptop-code"></i>
          Website (One-Time)</button>
        <button type="button" class="pricing-tab-btn" data-filter="growth"><i class="fa-solid fa-arrow-trend-up"></i>
          Social & Growth (Monthly)</button>
        <button type="button" class="pricing-tab-btn" data-filter="mobile"><i
            class="fa-solid fa-mobile-screen-button"></i> Mobile App (Android + iOS)</button>
      </div>
    </div>

    <!-- Pricing Cards Grid -->
    <div class="pricing-cards-grid" id="pricingCardsGrid">
      <?php foreach ($pricingCategories as $category): ?>
        <?php foreach ($category['plans'] as $plan): ?>
          <div
            class="pricing-card-editorial spotlight-card reveal-on-scroll <?= !empty($plan['highlight']) ? 'is-flagship' : '' ?>"
            data-category="<?= htmlspecialchars($category['id']) ?>">
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

    <!-- Additional Costs & Key Terms Dual Architecture Grid -->
    <div class="pricing-transparency-grid reveal-on-scroll">
      <!-- Transparent Actual Costs Card -->
      <div class="transparency-card spotlight-card">
        <div class="transparency-card-header">
          <div class="transparency-icon"><i class="fa-solid fa-receipt"></i></div>
          <div>
            <h4 class="transparency-title">Paid Separately, At Actual Cost</h4>
            <p class="transparency-sub">Zero hidden margins. You pay third-party vendors directly at true cost.</p>
          </div>
        </div>
        <ul class="transparency-list">
          <?php foreach ($transparentCosts as $cost): ?>
            <li>
              <div class="cost-item-name"><i class="fa-solid fa-shield-halved"></i> <?= htmlspecialchars($cost['item']) ?>
              </div>
              <div class="cost-item-note"><?= htmlspecialchars($cost['note']) ?></div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Key Terms & Client Ownership Card -->
      <div class="transparency-card spotlight-card">
        <div class="transparency-card-header">
          <div class="transparency-icon"><i class="fa-solid fa-handshake-simple"></i></div>
          <div>
            <h4 class="transparency-title">Engagement Terms & Guarantees</h4>
            <p class="transparency-sub">Fair, straightforward governance for peace of mind.</p>
          </div>
        </div>
        <ul class="transparency-list">
          <?php foreach ($keyTerms as $term): ?>
            <li>
              <div class="cost-item-name"><i class="fa-solid fa-circle-check"></i> <?= htmlspecialchars($term['title']) ?>
              </div>
              <div class="cost-item-note"><?= htmlspecialchars($term['desc']) ?></div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <!-- Custom Scope Enterprise Banner -->
    <div class="launchpad-card spotlight-card reveal-on-scroll"
      style="margin-top: 3.5rem; text-align: center; padding: 2.5rem 1.5rem;">
      <span class="index-num" style="display: block; margin-bottom: 0.5rem;">BESPOKE REQUIREMENTS //</span>
      <h3
        style="font-family: var(--font-display); font-size: 1.8rem; font-weight: 700; margin-bottom: 0.75rem; color: var(--text-primary);">
        Need a Custom Architecture or Enterprise Retainer?
      </h3>
      <p style="color: var(--text-secondary); max-width: 600px; margin: 0 auto 1.5rem auto; font-size: 0.95rem;">
        We build custom enterprise solutions, microservice backends, multi-region cloud infrastructures, and high-volume
        performance marketing retainers.
      </p>
      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="team.php" class="btn btn-secondary magnetic-btn">
          <i class="fa-solid fa-user-group"></i>
          <span>Consult Our Team</span>
        </a>
        <a href="contact.php?custom=enterprise" class="btn btn-primary magnetic-btn">
          <span>Request Custom Scope</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>