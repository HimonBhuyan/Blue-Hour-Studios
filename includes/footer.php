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
              <img src="assets/images/blue_hour_symbol.png?v=20261101c" alt="Blue Hour Creative Studios" class="brand-logo-img">
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
            <li><a href="pricing.php">Pricing &amp; Packages</a></li>
            <li><a href="brochure.php"><i class="fa-regular fa-file-pdf" style="font-size: 0.72rem; color: var(--accent-champagne);"></i> Rate Card (PDF)</a></li>
            <li><a href="team.php">Leadership &amp; Team</a></li>
            <li><a href="contact.php">Strategic Desk</a></li>
            <li><a href="../aura-crm/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-chart-line" style="font-size: 0.72rem; color: var(--accent-champagne);"></i> Leads CRM</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Capabilities</h4>
          <ul class="footer-links-list">
            <li><a href="/website-development/">Website Development</a></li>
            <li><a href="/ecommerce-development/">E-Commerce Development</a></li>
            <li><a href="/social-media-management/">Social Media Management</a></li>
            <li><a href="/branding-design/">Branding &amp; Graphic Design</a></li>
            <li><a href="/seo-digital-marketing/">SEO &amp; Digital Marketing</a></li>
            <li><a href="/portfolio/">Portfolio &amp; Case Studies</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Studio Presence</h4>
          <ul class="footer-contact-info">
            <li><i class="fa-solid fa-location-dot"></i> <span><?= htmlspecialchars($agency['location'] ?? 'Guwahati & New Delhi') ?></span></li>
            <li><i class="fa-solid fa-envelope"></i> <span><?= htmlspecialchars($agency['email'] ?? 'bluehourcreativestudio8@gmail.com') ?></span></li>
            <li><i class="fa-solid fa-phone"></i> <span><?= htmlspecialchars($agency['phone'] ?? '+91 7002201534') ?></span></li>
          </ul>
        </div>

      </div>

      <!-- ====================================================================
           OUR CLIENTS LIVE INFINITE CAROUSEL (AT THE BOTTOM OF THE FOOTER)
           ==================================================================== -->
      <div class="footer-clients-carousel-section" id="ourClients">
        <div class="trusted-clients-header">
          <div class="trusted-clients-kicker">
            <span class="pulse-dot"></span>
            <span>OUR CLIENTS &amp; BRAND PARTNERS</span>
          </div>
          <a href="works.php" style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--accent-champagne); text-decoration: none;">
            EXPLORE ALL WORKS &rarr;
          </a>
        </div>

        <div class="clients-carousel-viewport">
          <div class="clients-carousel-track">
            <?php for ($loop = 0; $loop < 2; $loop++): ?>
              <a href="works.php" class="trusted-client-card">
                <div class="trusted-logo-box">
                  <img src="assets/images/client_pragjyotishpur.png?v=20261101d" alt="Pragjyotishpur University" loading="lazy">
                </div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Pragjyotishpur University</span>
                  <span class="trusted-client-sector">Campus ERP &amp; Portal</span>
                </div>
              </a>

              <a href="works.php" class="trusted-client-card">
                <div class="trusted-logo-box">
                  <img src="assets/images/client_omkaar.jpg?v=20261101d" alt="Omkaar Trans Logistics" loading="lazy">
                </div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Omkaar Trans Logistics</span>
                  <span class="trusted-client-sector">Enterprise Fleet ERP</span>
                </div>
              </a>

              <a href="https://gulbani.vercel.app/" target="_blank" rel="noopener noreferrer" class="trusted-client-card">
                <div class="trusted-logo-monogram">G</div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Gulbani Luxury Concierge</span>
                  <span class="trusted-client-sector">Luxury E-Commerce &amp; Ads</span>
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
                <div class="trusted-logo-monogram">P</div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Prasuna Clothing</span>
                  <span class="trusted-client-sector">D2C Fashion &amp; Viral Reels</span>
                </div>
              </a>

              <a href="works.php" class="trusted-client-card">
                <div class="trusted-logo-monogram">BP</div>
                <div class="trusted-client-meta">
                  <span class="trusted-client-name">Bhuyan Commercial Group</span>
                  <span class="trusted-client-sector">Property Management SaaS</span>
                </div>
              </a>
            <?php endfor; ?>
          </div>
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

  <!-- ========================================================================
       FLOATING WHATSAPP CONCIERGE & RATE CARD WIDGET
       ======================================================================== -->
  <div class="floating-wa-concierge" id="floatingWaConcierge">
    <div class="wa-concierge-panel" role="dialog" aria-label="Direct Founder WhatsApp Desk">
      <div class="wa-panel-header">
        <div class="wa-panel-title">
          <i class="fa-brands fa-whatsapp" style="color: #25d366; font-size: 1.1rem;"></i>
          <span>Instant Studio Desk</span>
        </div>
        <button type="button" class="wa-panel-close" id="waCloseBtn" aria-label="Close WhatsApp Menu">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <div class="wa-founder-list">
        <a href="https://wa.me/917002201534?text=Hi%20Himon,%20I%20would%20like%20to%20discuss%20a%20Web%20/%20Software%20project%20with%20Blue%20Hour%20Creative%20Studios" target="_blank" rel="noopener noreferrer" class="wa-founder-link">
          <div class="wa-founder-info">
            <strong>Himon Bhuyan</strong>
            <span>Web, E-Commerce, ERP &amp; Apps</span>
            <small>+91 7002201534</small>
          </div>
          <div class="wa-founder-icon">
            <i class="fa-brands fa-whatsapp"></i>
          </div>
        </a>

        <a href="https://wa.me/918473891457?text=Hi%20Darshana,%20I%20would%20like%20to%20discuss%20Social%20Media%20/%20Branding%20with%20Blue%20Hour%20Creative%20Studios" target="_blank" rel="noopener noreferrer" class="wa-founder-link">
          <div class="wa-founder-info">
            <strong>Darshana Das</strong>
            <span>Social Media, Shoots &amp; Ads</span>
            <small>+91 84738 91457</small>
          </div>
          <div class="wa-founder-icon">
            <i class="fa-brands fa-whatsapp"></i>
          </div>
        </a>
      </div>

      <a href="brochure.php" class="wa-brochure-link">
        <i class="fa-regular fa-file-pdf" style="color: var(--accent-champagne);"></i>
        <span>View / Download Rate Card (PDF)</span>
      </a>
    </div>

    <button type="button" class="wa-floating-trigger" id="waTriggerBtn" aria-label="Open WhatsApp Quick Chat">
      <i class="fa-brands fa-whatsapp"></i>
      <span>Chat with Founders</span>
    </button>
  </div>

  <!-- Pass In-Memory Projects Data for Zero-Latency Modal Interaction -->
  <script>
    window.BLUE_HOUR_PROJECTS = <?= json_encode($projects, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
    window.AURA_PROJECTS = window.BLUE_HOUR_PROJECTS;
    (function() {
      var wrap = document.getElementById('floatingWaConcierge');
      var trigger = document.getElementById('waTriggerBtn');
      var closeBtn = document.getElementById('waCloseBtn');
      if (wrap && trigger) {
        trigger.addEventListener('click', function(e) {
          e.stopPropagation();
          wrap.classList.toggle('is-open');
        });
        if (closeBtn) {
          closeBtn.addEventListener('click', function() {
            wrap.classList.remove('is-open');
          });
        }
        document.addEventListener('click', function(e) {
          if (!wrap.contains(e.target)) {
            wrap.classList.remove('is-open');
          }
        });
      }
    })();
  </script>

  <!-- Client Script Engine with Cache-Busting -->
  <script src="assets/js/main.js?v=<?= file_exists(__DIR__ . '/../assets/js/main.js') ? substr(md5_file(__DIR__ . '/../assets/js/main.js'), 0, 10) : '20261101c' ?>"></script>
</body>
</html>
