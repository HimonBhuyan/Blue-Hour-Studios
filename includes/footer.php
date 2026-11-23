<?php
/**
 * Blue Hour Creative Studios - Global Footer & Modal Lightbox
 *
 * @var array $agency
 * @var array $projects
 */
?>
  <!-- ========================================================================
       CASE STUDY DETAIL MODAL LIGHTBOX
       ======================================================================== -->
  <div class="project-modal-backdrop" id="projectModal" aria-hidden="true" style="display: none;">
    <div class="project-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
      <button class="modal-close-btn" aria-label="Close Case Study Modal" id="modalCloseBtn">
        <i class="fa-solid fa-xmark"></i>
      </button>

      <div class="modal-hero-cover">
        <img id="modalCoverImg" src="" alt="Case Study Cover">
      </div>

      <div class="modal-inner-content">
        <span class="polaroid-badge" id="modalCategoryTag" style="position: static; display: inline-block; margin-bottom: 0.5rem;"></span>
        <h2 style="font-family: var(--font-hand); font-size: 2.2rem; font-weight: 700; color: #FFFDF9; margin-bottom: 0.75rem;" id="modalTitle"></h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; padding: 0.85rem 0; border-top: 1px dashed rgba(255,255,255,0.12); border-bottom: 1px dashed rgba(255,255,255,0.12); margin-bottom: 1.25rem;">
          <div>
            <strong style="display: block; font-family: var(--font-mono); font-size: 0.68rem; color: var(--text-muted); text-transform: uppercase;">Client / Partner</strong>
            <span id="modalClient" style="font-size: 0.92rem; font-weight: 600; color: #FFF;"></span>
          </div>
          <div>
            <strong style="display: block; font-family: var(--font-mono); font-size: 0.68rem; color: var(--text-muted); text-transform: uppercase;">Timeline</strong>
            <span id="modalDuration" style="font-size: 0.92rem; font-weight: 600; color: #FFF;"></span>
          </div>
          <div>
            <strong style="display: block; font-family: var(--font-mono); font-size: 0.68rem; color: var(--text-muted); text-transform: uppercase;">Execution</strong>
            <span style="font-size: 0.92rem; font-weight: 600; color: var(--accent-orange);">Turnkey Handcrafted</span>
          </div>
        </div>

        <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.5rem;" id="modalDesc"></p>

        <h4 style="font-family: var(--font-display); font-size: 1.05rem; font-weight: 700; color: #FFF; display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.75rem;">
          <i class="fa-solid fa-code-branch" style="color: var(--accent-orange);"></i>
          <span>Architecture &amp; Key Highlights</span>
        </h4>
        <ul id="modalHighlightsList" style="list-style: none; display: flex; flex-direction: column; gap: 0.5rem; margin-bottom: 1.5rem;"></ul>

        <h4 style="font-family: var(--font-display); font-size: 1.05rem; font-weight: 700; color: #FFF; display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.75rem;">
          <i class="fa-solid fa-layer-group" style="color: var(--accent-orange);"></i>
          <span>Technology &amp; Execution Stack</span>
        </h4>
        <div id="modalTagsWrapper" style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-bottom: 2rem;"></div>

        <div style="display: flex; gap: 1rem; flex-wrap: wrap; padding-top: 1rem; border-top: 1px dashed rgba(255,255,255,0.12);">
          <a id="modalLiveLink" href="#" target="_blank" rel="noopener noreferrer" class="btn-orange-solid" style="padding: 0.75rem 1.6rem; font-size: 0.92rem;">
            <span>Visit Live Platform</span>
            <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.75rem; margin-left: 4px;"></i>
          </a>
          <a id="modalCodeLink" href="#" target="_blank" rel="noopener noreferrer" class="btn-craft-outline" style="padding: 0.75rem 1.5rem; font-size: 0.92rem;">
            <i class="fa-brands fa-github" style="margin-right: 4px;"></i>
            <span>View Architecture</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ========================================================================
       MASTER SITE FOOTER (ROOT BARREL DARK ESPRESSO FOOTPRINT)
       ======================================================================== -->
  <footer class="site-footer-craft">
    <div class="container">
      <div class="footer-top-grid">
        
        <div>
          <div style="display: flex; align-items: center; gap: 0.65rem; margin-bottom: 0.85rem;">
            <img src="assets/images/blue_hour_symbol.png?v=20261123" alt="Blue Hour Studios" style="width: 32px; height: 32px;">
            <div class="brand-wordmark">
              <span>BLUE HOUR.</span>
              <span>CREATIVE STUDIOS</span>
            </div>
          </div>
          <p style="font-family: var(--font-body); font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
            Artisanal software engineering and hyper-growth digital acceleration. We engineer high-converting digital storefronts and bespoke software platforms.
          </p>
          <div style="display: flex; gap: 0.65rem;">
            <a href="https://instagram.com/bluehourcreativestudios" target="_blank" rel="noopener noreferrer" style="width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.06); color: #FFF; display: flex; align-items: center; justify-content: center; font-size: 0.9rem;" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://linkedin.com/company/blue-hour-creative-studios" target="_blank" rel="noopener noreferrer" style="width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.06); color: #FFF; display: flex; align-items: center; justify-content: center; font-size: 0.9rem;" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://github.com/HimonBhuyan" target="_blank" rel="noopener noreferrer" style="width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.06); color: #FFF; display: flex; align-items: center; justify-content: center; font-size: 0.9rem;" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
          </div>
        </div>

        <div>
          <h4 class="footer-col-title">Navigation</h4>
          <ul class="footer-links">
            <li><a href="index.php">Home Overview</a></li>
            <li><a href="services.php">Disciplines &amp; Skills</a></li>
            <li><a href="works.php">Selected Works</a></li>
            <li><a href="pricing.php">Pricing Packages</a></li>
            <li><a href="brochure.php"><i class="fa-regular fa-file-pdf" style="color: var(--accent-orange); margin-right: 4px;"></i> Rate Card (PDF)</a></li>
            <li><a href="team.php">Founders &amp; Team</a></li>
            <li><a href="contact.php">Reserve a Brief</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Capabilities</h4>
          <ul class="footer-links">
            <li><a href="/website-development/">Website Development</a></li>
            <li><a href="/ecommerce-development/">E-Commerce Portals</a></li>
            <li><a href="/social-media-management/">Social Media Growth</a></li>
            <li><a href="/branding-design/">Branding &amp; Identity</a></li>
            <li><a href="/seo-digital-marketing/">SEO &amp; Performance</a></li>
            <li><a href="/portfolio/">Portfolio Archive</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Studio Presence</h4>
          <p style="font-family: var(--font-body); font-size: 0.88rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0.75rem;">
            <i class="fa-solid fa-location-dot" style="color: var(--accent-orange); margin-right: 6px;"></i>
            Guwahati, Assam &amp; New Delhi, India
          </p>
          <p style="font-family: var(--font-body); font-size: 0.88rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0.75rem;">
            <i class="fa-solid fa-clock" style="color: var(--accent-orange); margin-right: 6px;"></i>
            Daily: 10:00 AM &ndash; 10:00 PM IST
          </p>
          <a href="https://wa.me/917002201534?text=Hi%20Blue%20Hour%20Studios,%20I%20would%20like%20to%20discuss%20a%20project" target="_blank" rel="noopener noreferrer" style="font-family: var(--font-hand); font-size: 1.25rem; font-weight: 700; color: var(--accent-orange); display: inline-flex; align-items: center; gap: 0.45rem;">
            <i class="fa-brands fa-whatsapp"></i> Chat with Founder
          </a>
        </div>

      </div>

      <div class="footer-bottom-bar">
        <span>&copy; <?= date('Y') ?> Blue Hour Creative Studios. 100% Handcrafted Code.</span>
        <span>Guwahati // New Delhi // Pan-India</span>
      </div>
    </div>
  </footer>

  <!-- Complete In-Memory Agency Projects Store for Lightbox -->
  <script>
    window.agencyProjects = <?= json_encode($projects, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>;
  </script>

  <!-- Lightweight Modal & Interactive Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Mobile menu toggle
      const mobileBtn = document.getElementById('mobileMenuBtn');
      const navMenu = document.getElementById('navMenu');
      if (mobileBtn && navMenu) {
        mobileBtn.addEventListener('click', function() {
          navMenu.style.display = (navMenu.style.display === 'flex') ? 'none' : 'flex';
          navMenu.style.flexDirection = 'column';
          navMenu.style.position = 'absolute';
          navMenu.style.top = '100%';
          navMenu.style.left = '0';
          navMenu.style.width = '100%';
          navMenu.style.background = '#14110E';
          navMenu.style.padding = '1.5rem';
          navMenu.style.boxShadow = '0 12px 30px rgba(0,0,0,0.6)';
        });
      }

      // Project Modal Lightbox
      const modal = document.getElementById('projectModal');
      const closeBtn = document.getElementById('modalCloseBtn');

      function openModal(projectId) {
        if (!modal || !window.agencyProjects) return;
        const project = window.agencyProjects.find(function(p) { return p.id === projectId; });
        if (!project) return;

        document.getElementById('modalTitle').textContent = project.title || '';
        document.getElementById('modalClient').textContent = project.client || 'Client Confidential';
        document.getElementById('modalDuration').textContent = project.duration || '3 Months';
        document.getElementById('modalDesc').textContent = project.description || '';
        document.getElementById('modalCategoryTag').textContent = project.category_label || 'Flagship';

        const coverImg = document.getElementById('modalCoverImg');
        if (coverImg) coverImg.src = project.image || '';

        const highlightsList = document.getElementById('modalHighlightsList');
        if (highlightsList) {
          highlightsList.innerHTML = '';
          (project.highlights || []).forEach(function(h) {
            const li = document.createElement('li');
            li.style.cssText = 'font-family: var(--font-body); font-size: 0.9rem; color: #D8CEBE; display: flex; align-items: flex-start; gap: 0.6rem;';
            li.innerHTML = '<i class="fa-solid fa-check" style="color: var(--accent-orange); margin-top: 4px; font-size: 0.8rem;"></i> <span>' + h + '</span>';
            highlightsList.appendChild(li);
          });
        }

        const tagsWrapper = document.getElementById('modalTagsWrapper');
        if (tagsWrapper) {
          tagsWrapper.innerHTML = '';
          (project.tags || []).forEach(function(t) {
            const span = document.createElement('span');
            span.className = 'polaroid-tag';
            span.textContent = t;
            tagsWrapper.appendChild(span);
          });
        }

        const liveBtn = document.getElementById('modalLiveLink');
        if (liveBtn) {
          if (project.live && project.live !== '#') {
            liveBtn.href = project.live;
            liveBtn.style.display = 'inline-flex';
          } else {
            liveBtn.style.display = 'none';
          }
        }

        const codeBtn = document.getElementById('modalCodeLink');
        if (codeBtn) {
          if (project.github && project.github !== '#') {
            codeBtn.href = project.github;
            codeBtn.style.display = 'inline-flex';
          } else {
            codeBtn.style.display = 'none';
          }
        }

        modal.style.display = 'flex';
        setTimeout(function() { modal.classList.add('modal-open'); }, 10);
        document.body.style.overflow = 'hidden';
      }

      function closeModal() {
        if (!modal) return;
        modal.classList.remove('modal-open');
        setTimeout(function() {
          modal.style.display = 'none';
          document.body.style.overflow = '';
        }, 300);
      }

      document.addEventListener('click', function(e) {
        const trigger = e.target.closest('[data-project-open]');
        if (trigger) {
          e.preventDefault();
          const pId = trigger.getAttribute('data-project-open');
          openModal(pId);
        }
      });

      if (closeBtn) closeBtn.addEventListener('click', closeModal);
      if (modal) {
        modal.addEventListener('click', function(e) {
          if (e.target === modal) closeModal();
        });
      }
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal && modal.classList.contains('modal-open')) {
          closeModal();
        }
      });
    });
  </script>
</body>
</html>
