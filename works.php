<?php
require_once __DIR__ . '/includes/init.php';

$pageTitle = 'Selected Works & Digital Blueprints';
$pageDesc = 'Explore the complete production archive of 20+ software platforms, e-commerce storefronts, mobile apps, and brand campaigns built by Blue Hour Creative Studios in Guwahati & New Delhi, India.';
$activePage = 'works';

require_once __DIR__ . '/includes/header.php';
?>

  <!-- Subpage Hero Header (Root Barrel Style) -->
  <section style="background: var(--bg-dark); padding: 4.5rem 0 3.5rem; position: relative;">
    <div class="container">
      <div style="max-width: 760px;">
        <div class="script-kicker" style="font-size: 1.45rem; margin-bottom: 0.4rem;">
          <a href="index.php" style="color: var(--text-muted);">Home</a>
          <span style="color: var(--accent-orange);">&bull;</span>
          <span>Complete Production Archive</span>
        </div>

        <h1 style="font-family: var(--font-hand); font-size: clamp(3rem, 5.5vw, 4.4rem); font-weight: 700; color: #FFFDF9; line-height: 1.08; margin-bottom: 1rem;">
          Selected Works &amp; Digital Blueprints.
          <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon" style="width: 38px; height: 28px; vertical-align: middle; margin-left: 6px;">
        </h1>

        <p style="font-family: var(--font-body); font-size: 1.08rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 2rem;">
          Explore our complete archive of 20+ production-grade software platforms, commerce engines, mobile applications, and enterprise systems built with zero compromises for high-growth partners.
        </p>

        <!-- Quick Metrics -->
        <div style="display: flex; gap: 2rem; flex-wrap: wrap; border-top: 1px dashed rgba(255,255,255,0.12); padding-top: 1.25rem;">
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">50+</strong>
            <span style="font-family: var(--font-hand); font-size: 1.1rem; color: var(--accent-orange); font-weight: 700;">Shipped Builds</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">99.9%</strong>
            <span style="font-family: var(--font-hand); font-size: 1.1rem; color: var(--accent-orange); font-weight: 700;">System SLA</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">10M+</strong>
            <span style="font-family: var(--font-hand); font-size: 1.1rem; color: var(--accent-orange); font-weight: 700;">Social Reach</span>
          </div>
          <div>
            <strong style="font-family: var(--font-display); font-size: 1.5rem; color: #FFFDF9; display: block; line-height: 1;">0%</strong>
            <span style="font-family: var(--font-hand); font-size: 1.1rem; color: var(--accent-orange); font-weight: 700;">Page-Builder Bloat</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Torn Paper Divider Top -->
  <div class="torn-divider torn-dark-bottom" aria-hidden="true"></div>

  <!-- Main Archive Section with Filter Tabs & Polaroid Grid -->
  <section style="background: var(--bg-dark-elevated); padding: 4.5rem 0 6rem; position: relative;">
    <div class="container">

      <!-- Filter Tabs Strip -->
      <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.25rem; margin-bottom: 3.5rem;">
        <div style="display: flex; gap: 0.65rem; flex-wrap: wrap;">
          <button type="button" class="btn-craft-outline work-filter-btn active" data-filter="all" style="padding: 0.5rem 1.2rem; font-size: 0.88rem;">[ All 20+ Projects ]</button>
          <button type="button" class="btn-craft-outline work-filter-btn" data-filter="ecommerce" style="padding: 0.5rem 1.2rem; font-size: 0.88rem;">[ E-Commerce ]</button>
          <button type="button" class="btn-craft-outline work-filter-btn" data-filter="web" style="padding: 0.5rem 1.2rem; font-size: 0.88rem;">[ Web &amp; SaaS ]</button>
          <button type="button" class="btn-craft-outline work-filter-btn" data-filter="enterprise" style="padding: 0.5rem 1.2rem; font-size: 0.88rem;">[ Enterprise ERP ]</button>
          <button type="button" class="btn-craft-outline work-filter-btn" data-filter="marketing" style="padding: 0.5rem 1.2rem; font-size: 0.88rem;">[ Social Growth ]</button>
        </div>

        <span class="script-kicker" style="font-size: 1.35rem; color: var(--accent-orange);">
          <i class="fa-solid fa-camera-retro"></i>
          <span><?= count($projects) ?> Polaroids Pinned</span>
        </span>
      </div>

      <!-- Polaroid Cards Grid -->
      <div class="polaroids-grid" id="projectsContainer">
        <?php foreach ($projects as $idx => $proj): ?>
          <div class="polaroid-card project-card"
               data-category="<?= htmlspecialchars($proj['category'] ?? '') ?>"
               data-filter-tag="<?= htmlspecialchars($proj['filter_tag'] ?? '') ?>"
               data-project-open="<?= htmlspecialchars($proj['id']) ?>"
               id="projCard_<?= htmlspecialchars($proj['id']) ?>">
            
            <!-- Translucent Washi Tape at Top -->
            <span class="washi-tape washi-tape-top"></span>

            <!-- Polaroid Photo Frame -->
            <div class="polaroid-photo-frame">
              <img src="<?= htmlspecialchars($proj['image']) ?>?v=<?= file_exists($proj['image']) ? filemtime($proj['image']) : time() ?>" alt="<?= htmlspecialchars($proj['title']) ?>" loading="lazy">
              <span class="polaroid-badge"><?= htmlspecialchars($proj['category_label'] ?? 'Solution') ?></span>
              <span class="polaroid-stamp">PRJ // <?= sprintf('%02d', $idx + 1) ?></span>
            </div>

            <!-- Polaroid Lower Chin -->
            <div class="polaroid-chin">
              <span class="polaroid-client"><?= htmlspecialchars($proj['client'] ?? 'Client Confidential') ?></span>
              <h3 class="polaroid-title"><?= htmlspecialchars($proj['title']) ?></h3>
              <p class="polaroid-desc"><?= htmlspecialchars($proj['description']) ?></p>

              <div class="polaroid-tags">
                <?php foreach (array_slice($proj['tags'], 0, 3) as $tag): ?>
                  <span class="polaroid-tag"><?= htmlspecialchars($tag) ?></span>
                <?php endforeach; ?>
              </div>

              <div class="polaroid-actions">
                <button type="button" class="btn-open-case" data-project-open="<?= htmlspecialchars($proj['id']) ?>">
                  <span>Inspect Blueprint</span>
                  <i class="fa-solid fa-arrow-right" style="font-size: 0.8rem; margin-left: 4px;"></i>
                </button>

                <?php if (!empty($proj['live']) && $proj['live'] !== '#'): ?>
                  <a href="<?= htmlspecialchars($proj['live']) ?>" target="_blank" rel="noopener noreferrer" class="btn-live-circle" title="Open Live Site" aria-label="Open Live Site" onclick="event.stopPropagation();">
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

  <!-- Filter Filtering Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const filterBtns = document.querySelectorAll('.work-filter-btn');
      const cards = document.querySelectorAll('.project-card');

      filterBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
          filterBtns.forEach(function(b) { b.classList.remove('active'); b.style.borderColor = 'rgba(232, 141, 56, 0.5)'; b.style.background = 'transparent'; });
          btn.classList.add('active');
          btn.style.borderColor = 'var(--accent-orange)';
          btn.style.background = 'var(--accent-orange)';

          const filter = btn.getAttribute('data-filter');

          cards.forEach(function(card) {
            const cat = (card.getAttribute('data-category') || '').toLowerCase();
            const tag = (card.getAttribute('data-filter-tag') || '').toLowerCase();

            if (filter === 'all' || cat.includes(filter) || tag === filter) {
              card.style.display = 'flex';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });
    });
  </script>

  <!-- Torn Paper Divider 3 (Dark to Kraft) -->
  <div class="torn-divider torn-kraft-top" aria-hidden="true"></div>

  <!-- "Reserve Your Build" CTA Section -->
  <section class="reserve-table-section">
    <div class="container">
      <div class="reserve-table-card">
        <span class="washi-tape washi-tape-top"></span>

        <div class="reserve-copy">
          <div class="script-kicker" style="color: var(--accent-orange-deep); margin-bottom: 0.35rem;">
            <span>Custom Engineering &amp; Marketing</span>
            <img src="assets/images/doodle_crown.svg" alt="Crown" class="doodle-crown-icon" style="width: 28px; height: 22px;">
          </div>
          <h2>Ready to Launch Your Next Flagship?</h2>
          <p>
            Whether you need a bespoke luxury e-commerce maison, high-concurrency web app, or hyper-growth social media campaigns, we architect turnkey systems with 1 year free maintenance.
          </p>
        </div>

        <div class="reserve-actions">
          <a href="contact.php" class="btn-orange-solid" style="padding: 1rem 2.25rem;">
            <span>Reserve a Strategic Brief</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
          <a href="https://wa.me/917002201534?text=Hi%20Blue%20Hour%20Studios,%20I%20would%20like%20to%20discuss%20a%20project" target="_blank" rel="noopener noreferrer" class="btn-craft-outline" style="color: #2B2118; border-color: rgba(90,70,50,0.45); padding: 0.95rem 1.85rem;">
            <i class="fa-brands fa-whatsapp" style="color: #25d366; font-size: 1.15rem;"></i>
            <span>Chat with Founder</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Torn Paper Divider 4 (Kraft to Dark) -->
  <div class="torn-divider torn-dark-top" aria-hidden="true"></div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
