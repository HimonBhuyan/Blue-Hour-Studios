<?php
/**
 * Blue Hour Creative Studios - Dedicated SEO Service Page Renderer
 *
 * Expects $servicePage array with:
 * - slug, title, pageTitle, pageDesc, kicker, headline_main, headline_accent,
 * - lead, overview_title, overview_paragraphs (array), local_focus_title, local_focus_text,
 * - deliverables (array of [icon, title, desc]),
 * - ideal_for (array of strings),
 * - faqs (array of [q, a]),
 * - related_project_ids (array)
 */

require_once __DIR__ . '/init.php';

$pageTitle = $servicePage['pageTitle'];
$pageDesc = $servicePage['pageDesc'];
$pageOgDesc = $servicePage['pageDesc'];
$activePage = 'services';
$customCanonicalPath = '/' . trim($servicePage['slug'], '/') . '/';

require_once __DIR__ . '/header.php';

// Filter related projects
$relatedProjects = [];
if (!empty($servicePage['related_project_ids'])) {
    foreach ($projects as $proj) {
        if (in_array($proj['id'], $servicePage['related_project_ids'], true)) {
            $relatedProjects[] = $proj;
        }
    }
}
if (empty($relatedProjects)) {
    $relatedProjects = array_slice($projects, 0, 3);
}
?>

  <!-- Subpage Architectural Hero Header -->
  <section class="subpage-hero">
    <div class="container">
      <div class="subpage-hero-inner">
        <div class="subpage-breadcrumb">
          <a href="index.php">Home</a>
          <span class="sep">/</span>
          <a href="services.php">Services</a>
          <span class="sep">/</span>
          <span class="current"><?= htmlspecialchars($servicePage['title']) ?></span>
        </div>

        <div class="section-kicker" style="margin-top: 0.75rem;">
          <span class="kicker-line"></span>
          <span><?= htmlspecialchars($servicePage['kicker']) ?></span>
        </div>

        <h1 class="subpage-title">
          <?= htmlspecialchars($servicePage['headline_main']) ?> <br>
          <span class="text-gradient-champagne"><?= htmlspecialchars($servicePage['headline_accent']) ?></span>
        </h1>

        <p class="subpage-lead">
          <?= htmlspecialchars($servicePage['lead']) ?>
        </p>

        <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.75rem;">
          <a href="contact.php?service=<?= urlencode($servicePage['title']) ?>" class="btn btn-primary magnetic-btn">
            <span>Request a Free Consultation</span>
            <i class="fa-solid fa-arrow-right" style="font-size: 0.75rem;"></i>
          </a>
          <a href="https://wa.me/917002201534?text=<?= rawurlencode('Hi Blue Hour Creative Studios, I am interested in ' . $servicePage['title'] . ' services.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary magnetic-btn">
            <i class="fa-brands fa-whatsapp" style="color: #25d366;"></i>
            <span>Chat on WhatsApp</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Service Overview & Local Guwahati / Assam Relevance -->
  <section class="services-section" style="padding-top: 2.5rem;">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(310px, 1fr)); gap: 2rem; align-items: start; margin-bottom: 3.5rem;">
        
        <div class="service-card-editorial spotlight-card reveal-on-scroll" style="padding: 2.25rem;">
          <div class="section-kicker" style="margin-bottom: 0.6rem;">
            <span class="kicker-line"></span>
            <span>01 // Service Overview</span>
          </div>
          <h2 style="font-family: var(--font-display); font-size: 1.65rem; font-weight: 700; margin-bottom: 1rem; color: var(--text-primary);">
            <?= htmlspecialchars($servicePage['overview_title']) ?>
          </h2>
          <?php foreach ($servicePage['overview_paragraphs'] as $para): ?>
            <p style="color: var(--text-secondary); line-height: 1.75; margin-bottom: 1rem; font-size: 0.96rem;">
              <?= htmlspecialchars($para) ?>
            </p>
          <?php endforeach; ?>
        </div>

        <div class="service-card-editorial spotlight-card reveal-on-scroll delay-1" style="padding: 2.25rem;">
          <div class="section-kicker" style="margin-bottom: 0.6rem;">
            <span class="kicker-line"></span>
            <span>02 // Local & Regional Impact</span>
          </div>
          <h2 style="font-family: var(--font-display); font-size: 1.65rem; font-weight: 700; margin-bottom: 1rem; color: var(--text-primary);">
            <?= htmlspecialchars($servicePage['local_focus_title']) ?>
          </h2>
          <p style="color: var(--text-secondary); line-height: 1.75; margin-bottom: 1.25rem; font-size: 0.96rem;">
            <?= htmlspecialchars($servicePage['local_focus_text']) ?>
          </p>

          <h3 style="font-family: var(--font-mono); font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.08em; color: var(--accent-champagne); margin-bottom: 0.75rem;">
            Who We Serve:
          </h3>
          <ul class="service-deliverables-list">
            <?php foreach ($servicePage['ideal_for'] as $audience): ?>
              <li>
                <i class="fa-solid fa-check"></i>
                <span><?= htmlspecialchars($audience) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>

      <!-- Key Deliverables Bento Grid -->
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>03 // What We Deliver</span>
        </div>
        <h2 class="section-headline">
          Core Deliverables & <span class="text-gradient-mercury">Capabilities</span>
        </h2>
      </div>

      <div class="services-bento-grid" style="margin-bottom: 3.5rem;">
        <?php foreach ($servicePage['deliverables'] as $idx => $item): ?>
          <div class="service-card-editorial spotlight-card tilt-card reveal-on-scroll delay-<?= ($idx % 3) + 1 ?>">
            <div class="service-top-row">
              <div class="service-icon-box">
                <i class="<?= htmlspecialchars($item['icon']) ?>"></i>
              </div>
              <span class="service-badge-mono">0<?= $idx + 1 ?></span>
            </div>
            <h3 class="service-card-title"><?= htmlspecialchars($item['title']) ?></h3>
            <p class="service-card-desc"><?= htmlspecialchars($item['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Related Case Studies -->
      <div class="section-header-editorial reveal-on-scroll">
        <div class="section-kicker">
          <span class="kicker-line"></span>
          <span>04 // Proven Track Record</span>
        </div>
        <h2 class="section-headline">
          Recent <span class="text-gradient-champagne"><?= htmlspecialchars($servicePage['title']) ?></span> Work
        </h2>
      </div>

      <div class="projects-editorial-grid" style="margin-bottom: 3.5rem;">
        <?php foreach ($relatedProjects as $idx => $proj): ?>
          <div class="project-card-editorial project-card spotlight-card tilt-card reveal-on-scroll delay-<?= ($idx % 3) + 1 ?>"
               data-project-card="<?= htmlspecialchars($proj['id']) ?>">
            <div class="project-preview-frame">
              <img src="<?= htmlspecialchars($proj['image']) ?>" alt="<?= htmlspecialchars($proj['title']) ?>" loading="lazy">
              <span class="project-index-pill">PRJ // <?= sprintf('%02d', $idx + 1) ?></span>
              <span class="project-category-badge"><?= htmlspecialchars($proj['category_label'] ?? 'Solution') ?></span>
            </div>
            <div class="project-body-editorial">
              <span class="project-client-kicker"><?= htmlspecialchars($proj['client'] ?? 'Client') ?></span>
              <h3 class="project-title-editorial"><?= htmlspecialchars($proj['title']) ?></h3>
              <p class="project-desc-editorial"><?= htmlspecialchars($proj['description']) ?></p>
              <div class="project-actions-footer">
                <button type="button" class="btn-open-case-study" data-project-open="<?= htmlspecialchars($proj['id']) ?>">
                  <span>Read Case Study</span>
                  <i class="fa-solid fa-arrow-right" style="font-size: 0.72rem;"></i>
                </button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Frequently Asked Questions (SEO Rich Content) -->
      <?php if (!empty($servicePage['faqs'])): ?>
        <div class="section-header-editorial reveal-on-scroll">
          <div class="section-kicker">
            <span class="kicker-line"></span>
            <span>05 // Frequently Asked Questions</span>
          </div>
          <h2 class="section-headline">
            Common Questions About <span class="text-gradient-mercury"><?= htmlspecialchars($servicePage['title']) ?></span>
          </h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 3rem;">
          <?php foreach ($servicePage['faqs'] as $faq): ?>
            <div class="service-card-editorial spotlight-card reveal-on-scroll" style="padding: 1.75rem;">
              <h3 style="font-family: var(--font-display); font-size: 1.1rem; font-weight: 700; margin-bottom: 0.65rem; color: var(--text-primary);">
                <?= htmlspecialchars($faq['q']) ?>
              </h3>
              <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.65;">
                <?= htmlspecialchars($faq['a']) ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- Internal Links to All Dedicated Service Pages -->
      <div class="service-card-editorial spotlight-card reveal-on-scroll" style="padding: 2rem; margin-bottom: 2rem;">
        <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; margin-bottom: 1rem; color: var(--text-primary);">
          Explore All Specialized Services at Blue Hour Creative Studios
        </h3>
        <div style="display: flex; flex-wrap: wrap; gap: 0.75rem;">
          <a href="/website-development/" class="btn btn-ghost-editorial btn-sm">Website Development</a>
          <a href="/ecommerce-development/" class="btn btn-ghost-editorial btn-sm">E-Commerce Development</a>
          <a href="/social-media-management/" class="btn btn-ghost-editorial btn-sm">Social Media Management</a>
          <a href="/branding-design/" class="btn btn-ghost-editorial btn-sm">Branding & Graphic Design</a>
          <a href="/seo-digital-marketing/" class="btn btn-ghost-editorial btn-sm">SEO & Digital Marketing</a>
          <a href="/portfolio/" class="btn btn-ghost-editorial btn-sm">Portfolio</a>
          <a href="/pricing" class="btn btn-ghost-editorial btn-sm">Pricing Packages</a>
          <a href="/contact/" class="btn btn-ghost-editorial btn-sm">Contact Us</a>
        </div>
      </div>

    </div>
  </section>

  <!-- CTA Banner -->
  <section class="contact-section" style="padding-top: 10px;">
    <div class="container">
      <div class="launchpad-card spotlight-card reveal-on-scroll" style="text-align: center; padding: 3rem 1.5rem;">
        <span class="index-num" style="display: block; margin-bottom: 0.5rem;">START YOUR PROJECT</span>
        <h2 style="font-family: var(--font-display); font-size: clamp(1.85rem, 3.2vw, 2.6rem); font-weight: 700; margin-bottom: 0.85rem; color: var(--text-primary);">
          Ready to Elevate Your Brand with <span class="text-gradient-champagne"><?= htmlspecialchars($servicePage['title']) ?>?</span>
        </h2>
        <p style="color: var(--text-secondary); max-width: 620px; margin: 0 auto 1.8rem auto; font-size: 1rem; line-height: 1.6;">
          Speak directly with our founders in Guwahati & New Delhi. Call or WhatsApp <strong>+91 7002201534</strong> or submit your project brief online.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="https://wa.me/917002201534?text=<?= rawurlencode('Hi Blue Hour Creative Studios, I would like to discuss ' . $servicePage['title']) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary magnetic-btn">
            <i class="fa-brands fa-whatsapp" style="color: #25d366;"></i>
            <span>WhatsApp Instant Desk</span>
          </a>
          <a href="/contact/" class="btn btn-primary magnetic-btn">
            <span>Contact Us Today</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/footer.php'; ?>
