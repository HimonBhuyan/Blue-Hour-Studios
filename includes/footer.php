<?php
/**
 * Blue Hour Creative Studios - Global Footer & Modal Lightbox
 *
 * @var array $agency
 * @var array $projects
 */
?>
  <!-- ========================================================================
       CASE STUDY DETAIL MODAL - LUXURY LIGHTBOX
       ======================================================================== -->
  <div class="project-modal-backdrop" id="projectModal" aria-hidden="true">
    <div class="project-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
      <button class="modal-close-btn" aria-label="Close Case Study Modal">
        <i class="fa-solid fa-xmark"></i>
      </button>

      <div class="modal-hero-cover">
        <img id="modalCoverImg" src="" alt="Case Study Cover">
      </div>

      <div class="modal-inner-content">
        <span class="modal-category-tag" id="modalCategoryTag"></span>
        <h2 class="modal-title" id="modalTitle"></h2>

        <div class="modal-meta-grid">
          <div class="meta-col">
            <strong>Client / Partner</strong>
            <span id="modalClient"></span>
          </div>
          <div class="meta-col">
            <strong>Timeline</strong>
            <span id="modalDuration"></span>
          </div>
          <div class="meta-col">
            <strong>Execution</strong>
            <span>Turnkey Delivery</span>
          </div>
        </div>

        <p class="modal-description" id="modalDesc"></p>

        <h4 class="modal-highlights-header">
          <i class="fa-solid fa-microchip"></i>
          <span>Architecture & Deliverables</span>
        </h4>
        <ul class="modal-highlights-list" id="modalHighlightsList"></ul>

        <h4 class="modal-highlights-header" style="margin-top: 1.5rem;">
          <i class="fa-solid fa-layer-group"></i>
          <span>Technology & Execution Stack</span>
        </h4>
        <div class="modal-tech-pills" id="modalTagsWrapper"></div>

        <div class="modal-footer-cta">
          <a id="modalLiveLink" href="#" target="_blank" rel="noopener noreferrer" class="btn btn-primary magnetic-btn">
            <span>Visit Live Platform</span>
            <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.75rem;"></i>
          </a>
          <a id="modalCodeLink" href="#" target="_blank" rel="noopener noreferrer" class="btn btn-secondary magnetic-btn">
            <i class="fa-brands fa-github"></i>
            <span>View Architecture</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ========================================================================
       MASTER SITE FOOTER - ARCHITECTURAL STUDIO FOOTPRINT
       ======================================================================== -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top-grid">
        
        <div class="footer-brand">
          <div class="brand-identity" style="margin-bottom: 0.8rem;">
            <div class="brand-logo-wrap">
              <img src="assets/images/blue_hour_symbol.png" alt="Blue Hour Creative Studios" class="brand-logo-img">
            </div>
            <div class="brand-title-wrap">
              <span class="brand-wordmark">BLUE HOUR<span>.</span></span>
              <span class="brand-micro-label">CREATIVE STUDIOS</span>
            </div>
          </div>
          <p>
            Bridging technical engineering with viral distribution to build the next generation of digital market leaders.
          </p>
          <div class="social-pills-row">
            <a href="<?= htmlspecialchars($agency['socials']['instagram'] ?? '#') ?>" target="_blank" rel="noopener noreferrer" class="social-pill-link" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="<?= htmlspecialchars($agency['socials']['linkedin'] ?? '#') ?>" target="_blank" rel="noopener noreferrer" class="social-pill-link" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="<?= htmlspecialchars($agency['socials']['github'] ?? '#') ?>" target="_blank" rel="noopener noreferrer" class="social-pill-link" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
          </div>
        </div>

        <div>
          <h4 class="footer-col-title">Navigation</h4>
          <ul class="footer-links-list">
            <li><a href="index.php">Overview</a></li>
            <li><a href="services.php">Capabilities</a></li>
            <li><a href="works.php">Selected Works</a></li>
            <li><a href="pricing.php">Pricing & Packages</a></li>
            <li><a href="team.php">Leadership & Team</a></li>
            <li><a href="contact.php">Strategic Desk</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Capabilities</h4>
          <ul class="footer-links-list">
            <li><a href="services.php#web">Custom Web & SaaS</a></li>
            <li><a href="services.php#erp">Enterprise ERP & Logistics</a></li>
            <li><a href="services.php#mobile">Mobile Apps & Edge AI</a></li>
            <li><a href="services.php#social">Social Media Strategy</a></li>
            <li><a href="services.php#ads">Paid Performance Ads</a></li>
            <li><a href="services.php#brand">Brand Identity Systems</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Studio Presence</h4>
          <ul class="footer-contact-info">
            <li><i class="fa-solid fa-location-dot"></i> <span><?= htmlspecialchars($agency['location'] ?? 'Guwahati & New Delhi') ?></span></li>
            <li><i class="fa-solid fa-envelope"></i> <span><?= htmlspecialchars($agency['email'] ?? 'hello@bluehourcreativestudios.com') ?></span></li>
            <li><i class="fa-solid fa-phone"></i> <span><?= htmlspecialchars($agency['phone'] ?? '+91 7002201534') ?></span></li>
          </ul>
        </div>

      </div>

      <div class="footer-bottom-bar">
        <span>&copy; <?= date('Y') ?> <?= htmlspecialchars($agency['name'] ?? 'Blue Hour Creative Studios') ?>. All rights reserved.</span>
        <div class="footer-live-clock">
          <span class="clock-pulse"></span>
          <span>Guwahati & New Delhi &bull; <strong id="studioLiveClock">--:-- --</strong> IST</span>
        </div>
        <span>High-Performance Architecture &bull; ISO SLA Standards</span>
      </div>
    </div>
  </footer>

  <!-- Pass In-Memory Projects Data for Zero-Latency Modal Interaction -->
  <script>
    window.BLUE_HOUR_PROJECTS = <?= json_encode($projects, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
    window.AURA_PROJECTS = window.BLUE_HOUR_PROJECTS;
  </script>

  <!-- Client Script Engine with Cache-Busting -->
  <script src="assets/js/main.js?v=<?= file_exists(__DIR__ . '/../assets/js/main.js') ? filemtime(__DIR__ . '/../assets/js/main.js') : time() ?>"></script>
</body>
</html>
