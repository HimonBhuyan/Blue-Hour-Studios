<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Selected Works & Case Studies';
$pageDesc = 'Explore real-world software platforms, e-commerce ecosystems, mobile applications, enterprise ERPs, and brand campaigns built by The Blue Hour Studios in Guwahati & New Delhi, India.';
$activePage = 'works';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Subpage Architectural Hero Header -->
<section class="subpage-hero">
  <div class="container">
    <div class="subpage-hero-inner">
      <div class="subpage-breadcrumb">
        <a href="index.php">Home</a>
        <span class="sep">/</span>
        <span class="current">Selected Works & Case Studies</span>
      </div>
      <h1 class="subpage-title">
        Selected Works & Case Studies. <br>
        <span class="text-gradient-champagne">Complete Production Archive.</span>
      </h1>
      <p class="subpage-lead">
        Explore our complete archive of production-grade software platforms, commerce engines, mobile applications, and
        enterprise ERP systems built with zero compromises for high-growth partners.
      </p>

      <div class="subpage-quick-stats">
        <div class="subpage-stat-item">
          <span class="subpage-stat-num">50+</span>
          <span class="subpage-stat-lbl">Shipped Digital Builds</span>
        </div>
        <div class="subpage-stat-item">
          <span class="subpage-stat-num">99.9%</span>
          <span class="subpage-stat-lbl">System SLA Uptime</span>
        </div>
        <div class="subpage-stat-item">
          <span class="subpage-stat-num">10M+</span>
          <span class="subpage-stat-lbl">Social Audience Reach</span>
        </div>
        <div class="subpage-stat-item">
          <span class="subpage-stat-num">0%</span>
          <span class="subpage-stat-lbl">Page-Builder Bloat</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
       SELECTED WORKS / PORTFOLIO - EDITORIAL GALLERY
       ======================================================================== -->
<section class="works-section" id="works">
  <div class="container">

    <div class="section-header-editorial reveal-on-scroll">
      <div class="section-kicker">
        <span class="kicker-line"></span>
        <span>01 // Flagship Portfolio & Blueprints</span>
      </div>
      <h2 class="section-headline">
        Every Line of Code. <br><span class="text-gradient-mercury">Every Frame of Creative.</span>
      </h2>
      <p class="section-lead">
        Click on any blueprint card below to open the complete architectural breakdown, client metrics, and live
        production endpoints.
      </p>
    </div>

    <!-- Portfolio Category Filter Tabs -->
    <div class="filter-bar-editorial reveal-on-scroll">
      <button class="filter-pill-btn work-filter-btn active" data-filter="all">[ All Projects ]</button>
      <button class="filter-pill-btn work-filter-btn" data-filter="web">[ Web & SaaS ]</button>
      <button class="filter-pill-btn work-filter-btn" data-filter="ecommerce">[ E-Commerce ]</button>
      <button class="filter-pill-btn work-filter-btn" data-filter="enterprise">[ Enterprise ERP ]</button>
      <button class="filter-pill-btn work-filter-btn" data-filter="mobile_ai">[ Mobile & Edge AI ]</button>
    </div>

    <!-- Projects Grid with Spotlight Shaders & Dynamic Cursor Follower Tracking -->
    <div class="projects-editorial-grid" id="projectsContainer">
      <?php foreach ($projects as $idx => $proj): ?>
        <div
          class="project-card-editorial project-card spotlight-card tilt-card reveal-on-scroll delay-<?= ($idx % 3) + 1 ?>"
          data-category="<?= htmlspecialchars($proj['category']) ?>"
          data-filter-tag="<?= htmlspecialchars($proj['filter_tag'] ?? '') ?>"
          data-project-card="<?= htmlspecialchars($proj['id']) ?>" id="projCard_<?= htmlspecialchars($proj['id']) ?>">

          <div class="project-preview-frame">
            <img src="<?= htmlspecialchars($proj['image']) ?>" alt="<?= htmlspecialchars($proj['title']) ?>"
              loading="lazy">
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
              <button type="button" class="btn-open-case-study" data-project-open="<?= htmlspecialchars($proj['id']) ?>"
                id="openProj_<?= htmlspecialchars($proj['id']) ?>">
                <span>Read Case Study</span>
                <i class="fa-solid fa-arrow-right" style="font-size: 0.72rem;"></i>
              </button>

              <?php if (!empty($proj['live']) && $proj['live'] !== '#'): ?>
                <a href="<?= htmlspecialchars($proj['live']) ?>" target="_blank" rel="noopener noreferrer"
                  class="project-direct-link" title="Open Live Site" aria-label="Open Live Site">
                  <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
              <?php endif; ?>
            </div>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ========================================================================
       CLIENT TESTIMONIALS & TRUST METRICS
       ======================================================================== -->
<section class="testimonials-section" id="testimonials">
  <div class="container">

    <div class="section-header-editorial reveal-on-scroll">
      <div class="section-kicker">
        <span class="kicker-line"></span>
        <span>02 // Verified Client Trust</span>
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

    <!-- Call to Action Banner -->
    <div class="launchpad-card spotlight-card reveal-on-scroll"
      style="margin-top: 3.5rem; text-align: center; padding: 2.5rem 1.5rem;">
      <span class="index-num" style="display: block; margin-bottom: 0.5rem;">HAVE A PROJECT IN MIND? //</span>
      <h3
        style="font-family: var(--font-display); font-size: 1.8rem; font-weight: 700; margin-bottom: 0.75rem; color: var(--text-primary);">
        Let's build your next flagship platform.
      </h3>
      <p style="color: var(--text-secondary); max-width: 600px; margin: 0 auto 1.5rem auto; font-size: 0.95rem;">
        From concept architecture to deployment and viral social scaling, we partner with founders ready to lead.
      </p>
      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="pricing.php" class="btn btn-secondary magnetic-btn">
          <i class="fa-solid fa-tags"></i>
          <span>View Transparent Pricing</span>
        </a>
        <a href="contact.php" class="btn btn-primary magnetic-btn">
          <span>Start Your Build</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>