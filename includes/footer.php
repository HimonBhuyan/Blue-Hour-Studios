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
      // ====================================================================
      // ARTISANAL FRONT LOADING SCREEN (BLUE HOUR LOGO PRELOADER)
      // ====================================================================
      const preloader = document.getElementById('bhPreloader');
      const preloaderBar = document.getElementById('bhPreloaderBar');
      const preloaderPct = document.getElementById('bhPreloaderPercent');
      const preloaderStatus = document.getElementById('bhPreloaderStatus');

      if (preloader) {
        const isFirstLoad = !sessionStorage.getItem('bh_studio_loaded');
        const duration = isFirstLoad ? 1350 : 480;
        const startTime = performance.now();

        const stages = [
          'Igniting Edison Filaments...',
          'Pinning Studio Polaroids...',
          'Handcrafting Code Stack...',
          'Welcome to Blue Hour.'
        ];

        function stepLoader(now) {
          const elapsed = now - startTime;
          const progress = Math.min(1, elapsed / duration);
          const eased = 1 - Math.pow(1 - progress, 3);
          const pct = Math.round(eased * 100);

          if (preloaderBar) preloaderBar.style.width = pct + '%';
          if (preloaderPct) preloaderPct.textContent = pct + '%';
          if (preloaderStatus) {
            const stageIdx = Math.min(stages.length - 1, Math.floor(progress * stages.length));
            preloaderStatus.textContent = stages[stageIdx];
          }

          if (progress < 1) {
            requestAnimationFrame(stepLoader);
          } else {
            try { sessionStorage.setItem('bh_studio_loaded', '1'); } catch (e) {}
            setTimeout(function() {
              preloader.classList.add('preloader-hidden');
            }, 140);
          }
        }

        requestAnimationFrame(stepLoader);

        // Allow clicking preloader to skip immediately
        preloader.addEventListener('click', function() {
          preloader.classList.add('preloader-hidden');
        });
      }

      // Mobile menu toggle
      const mobileBtn = document.getElementById('mobileMenuBtn');
      const navMenu = document.getElementById('navMenu');
      const siteHeader = document.getElementById('siteHeader');
      if (mobileBtn && navMenu) {
        mobileBtn.addEventListener('click', function(e) {
          e.stopPropagation();
          const isOpen = navMenu.classList.toggle('mobile-menu-open');
          if (siteHeader) siteHeader.classList.toggle('menu-is-open', isOpen);
          const icon = mobileBtn.querySelector('i');
          if (icon) {
            icon.className = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
          }
        });

        // Close mobile menu when clicking a link or tapping outside
        document.addEventListener('click', function(e) {
          if (navMenu.classList.contains('mobile-menu-open') && !navMenu.contains(e.target) && !mobileBtn.contains(e.target)) {
            navMenu.classList.remove('mobile-menu-open');
            if (siteHeader) siteHeader.classList.remove('menu-is-open');
            const icon = mobileBtn.querySelector('i');
            if (icon) icon.className = 'fa-solid fa-bars';
          }
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

      // ====================================================================
      // INTERACTIVE HANGING PULL-CHAIN EDISON BULB (THEME SWITCHER + AUDIO)
      // ====================================================================
      const bulbFixture = document.getElementById('pullBulbFixture');
      const bulbAssembly = document.getElementById('pullBulbAssembly');
      const bulbCordLine = document.getElementById('bulbCordLine');
      const bulbAcorn = document.getElementById('bulbAcornHandle');
      const bulbTooltip = document.getElementById('pullBulbTooltip');

      // Create warm full-screen flash overlay on pull
      const flashOverlay = document.createElement('div');
      flashOverlay.className = 'bulb-flash-overlay';
      document.body.appendChild(flashOverlay);

      let audioCtxBulb = null;
      function playPullChainClick(isTurningLightOn) {
        try {
          const AudioCtx = window.AudioContext || window.webkitAudioContext;
          if (!AudioCtx) return;
          if (!audioCtxBulb) audioCtxBulb = new AudioCtx();
          if (audioCtxBulb.state === 'suspended') audioCtxBulb.resume();

          const now = audioCtxBulb.currentTime;
          // 1st click: chain pull down latch
          const osc1 = audioCtxBulb.createOscillator();
          const gain1 = audioCtxBulb.createGain();
          osc1.type = 'triangle';
          osc1.frequency.setValueAtTime(isTurningLightOn ? 920 : 680, now);
          osc1.frequency.exponentialRampToValueAtTime(240, now + 0.045);
          gain1.gain.setValueAtTime(0.16, now);
          gain1.gain.exponentialRampToValueAtTime(0.001, now + 0.045);
          osc1.connect(gain1);
          gain1.connect(audioCtxBulb.destination);
          osc1.start(now);
          osc1.stop(now + 0.048);

          // 2nd click: mechanical brass spring release ("ka-clink!")
          const osc2 = audioCtxBulb.createOscillator();
          const gain2 = audioCtxBulb.createGain();
          osc2.type = 'sine';
          osc2.frequency.setValueAtTime(isTurningLightOn ? 1420 : 1080, now + 0.055);
          osc2.frequency.exponentialRampToValueAtTime(520, now + 0.11);
          gain2.gain.setValueAtTime(0.14, now + 0.055);
          gain2.gain.exponentialRampToValueAtTime(0.001, now + 0.11);
          osc2.connect(gain2);
          gain2.connect(audioCtxBulb.destination);
          osc2.start(now + 0.055);
          osc2.stop(now + 0.115);
        } catch (err) {}
      }

      function updateBulbTooltip() {
        const cur = document.documentElement.getAttribute('data-theme') || 'dark';
        if (bulbTooltip) {
          bulbTooltip.textContent = (cur === 'dark') ? 'Pull for Daylight!' : 'Pull for Night Studio!';
        }
      }
      updateBulbTooltip();

      function triggerBulbSwitch() {
        const htmlEl = document.documentElement;
        const currentTheme = htmlEl.getAttribute('data-theme') || 'dark';
        const nextTheme = (currentTheme === 'dark') ? 'light' : 'dark';

        htmlEl.setAttribute('data-theme', nextTheme);
        try { localStorage.setItem('bh_bulb_theme', nextTheme); } catch (e) {}

        playPullChainClick(nextTheme === 'light');
        updateBulbTooltip();

        // Elastic bounce animation on the hanging bulb assembly
        if (bulbAssembly) {
          bulbAssembly.classList.remove('is-pulled-bounce');
          void bulbAssembly.offsetWidth;
          bulbAssembly.classList.add('is-pulled-bounce');
        }

        // Brief warm Edison flash across the studio
        flashOverlay.classList.add('flash-active');
        setTimeout(function() {
          flashOverlay.classList.remove('flash-active');
        }, 320);
      }

      if (bulbFixture) {
        let isDragging = false;
        let startY = 0;
        let pullDist = 0;

        function setChainExtension(dy) {
          const clamped = Math.max(0, Math.min(48, dy));
          if (bulbCordLine) {
            bulbCordLine.setAttribute('y2', String(146 + clamped));
          }
          if (bulbAcorn) {
            bulbAcorn.setAttribute('transform', 'translate(0, ' + clamped + ')');
          }
        }

        bulbFixture.addEventListener('pointerdown', function(e) {
          isDragging = true;
          startY = e.clientY;
          pullDist = 0;
          bulbFixture.setPointerCapture(e.pointerId);
        });

        bulbFixture.addEventListener('pointermove', function(e) {
          if (!isDragging) return;
          pullDist = Math.max(0, e.clientY - startY);
          setChainExtension(pullDist);
        });

        function endPull(e) {
          if (!isDragging) return;
          isDragging = false;
          setChainExtension(0);
          // Trigger if pulled down > 12px OR clicked/tapped directly
          if (pullDist >= 12 || pullDist < 5) {
            triggerBulbSwitch();
          }
          pullDist = 0;
        }

        bulbFixture.addEventListener('pointerup', endPull);
        bulbFixture.addEventListener('pointercancel', endPull);

        bulbFixture.addEventListener('keydown', function(e) {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            triggerBulbSwitch();
          }
        });
      }

      // ====================================================================
      // INTERACTIVE 3D HERO CORKBOARD PARALLAX TILT
      // ====================================================================
      const heroBoard = document.getElementById('heroInteractiveBoard');
      if (heroBoard && window.innerWidth >= 960) {
        heroBoard.addEventListener('mousemove', function(e) {
          const rect = heroBoard.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;
          const cx = rect.width / 2;
          const cy = rect.height / 2;
          const rotX = ((y - cy) / cy) * -5;
          const rotY = ((x - cx) / cx) * 5;
          heroBoard.style.transform = 'perspective(1200px) rotateX(' + rotX.toFixed(2) + 'deg) rotateY(' + rotY.toFixed(2) + 'deg)';
        });
        heroBoard.addEventListener('mouseleave', function() {
          heroBoard.style.transform = 'perspective(1200px) rotateX(0deg) rotateY(0deg)';
        });
      }

      // ====================================================================
      // ARTISANAL SCROLL-DOWN REVEAL, STAGGERED POLAROID DROP & PARALLAX ENGINE
      // ====================================================================
      const scrollProgressBar = document.getElementById('scrollProgressBar');
      const heroSketches = document.querySelectorAll('.studio-sketch');
      const heroWatermark = document.querySelector('.studio-watermark-text');

      function onWindowScroll() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const docHeight = Math.max(1, document.documentElement.scrollHeight - window.innerHeight);
        const scrollPct = Math.min(100, Math.max(0, (scrollTop / docHeight) * 100));

        if (scrollProgressBar) {
          scrollProgressBar.style.width = scrollPct + '%';
        }

        // Subtle scroll parallax on floating chalk sketches & watermark
        if (scrollTop < 900) {
          heroSketches.forEach(function(sk, idx) {
            const dir = (idx % 2 === 0) ? 1 : -1;
            sk.style.transform = 'translate3d(0, ' + (scrollTop * 0.14 * dir).toFixed(1) + 'px, 0)';
          });
          if (heroWatermark) {
            heroWatermark.style.transform = 'translate3d(' + (-scrollTop * 0.12).toFixed(1) + 'px, 0, 0)';
          }
        }
      }

      window.addEventListener('scroll', onWindowScroll, { passive: true });
      onWindowScroll();

      // Automatically tag section headers, cards, Polaroids, timelines, and CTA blocks
      const upTargets = document.querySelectorAll(
        '.section-head-kraft, .specials-head-row, .discipline-card, .event-row, .reserve-table-card, .spotlight-dark-card, .footer-top-grid > div'
      );
      const polaroidTargets = document.querySelectorAll(
        '.polaroid-card, .partner-brand-card, .srv-scrap-card, .prc-scrap-card, .founder-dossier-card'
      );
      const swingTargets = document.querySelectorAll(
        '.pinned-event-sheet'
      );

      upTargets.forEach(function(el) {
        el.classList.add('bh-scroll-item', 'bh-reveal-up');
      });

      polaroidTargets.forEach(function(el) {
        el.classList.add('bh-scroll-item', 'bh-reveal-polaroid');
      });

      swingTargets.forEach(function(el) {
        el.classList.add('bh-scroll-item', 'bh-reveal-Swing');
      });

      // Assign staggered cascade delays to sibling cards inside grids
      const grids = document.querySelectorAll(
        '.disciplines-grid, .polaroids-grid, .partner-logos-grid, .scrapbook-cards-grid, .founders-dossier-grid, .event-timeline-list, .footer-top-grid'
      );
      grids.forEach(function(grid) {
        const items = grid.querySelectorAll('.bh-scroll-item');
        items.forEach(function(item, idx) {
          const staggerMs = (idx % 6) * 85;
          item.style.setProperty('--bh-delay', staggerMs + 'ms');
        });
      });

      if ('IntersectionObserver' in window) {
        const scrollObserver = new IntersectionObserver(function(entries, obs) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('bh-in-view');
              obs.unobserve(entry.target);
            }
          });
        }, {
          threshold: 0.12,
          rootMargin: '0px 0px -45px 0px'
        });

        document.querySelectorAll('.bh-scroll-item').forEach(function(el) {
          scrollObserver.observe(el);
        });
      } else {
        document.querySelectorAll('.bh-scroll-item').forEach(function(el) {
          el.classList.add('bh-in-view');
        });
      }

      // ====================================================================
      // LIVE ARTISANAL STUDIO FIREFLY & CONSTELLATION BACKGROUND ENGINE
      // ====================================================================
      const canvas = document.getElementById('ambientInteractiveCanvas');
      const orb1 = document.getElementById('auroraOrb1');
      const orb2 = document.getElementById('auroraOrb2');
      const orb3 = document.getElementById('auroraOrb3');

      if (canvas && canvas.getContext) {
        const ctx = canvas.getContext('2d');
        let width = window.innerWidth;
        let height = window.innerHeight;
        let dpr = Math.min(window.devicePixelRatio || 1, 2);

        const mouse = { x: width * 0.5, y: height * 0.4, targetX: width * 0.5, targetY: height * 0.4, active: false };
        const particles = [];
        const sparks = [];

        const colors = [
          '232, 141, 56',  // Warm Artisanal Amber Orange
          '246, 200, 125', // Edison Filament Gold
          '255, 245, 225', // Warm Chalk Cream
          '217, 119, 36'   // Roasted Copper
        ];

        function resizeCanvas() {
          width = window.innerWidth;
          height = window.innerHeight;
          dpr = Math.min(window.devicePixelRatio || 1, 2);
          canvas.width = Math.floor(width * dpr);
          canvas.height = Math.floor(height * dpr);
          canvas.style.width = width + 'px';
          canvas.style.height = height + 'px';
          ctx.setTransform(1, 0, 0, 1, 0, 0);
          ctx.scale(dpr, dpr);

          const count = width < 768 ? 38 : 78;
          if (particles.length === 0) {
            for (let i = 0; i < count; i++) {
              particles.push({
                x: Math.random() * width,
                y: Math.random() * height,
                vx: (Math.random() - 0.5) * 0.45,
                vy: (Math.random() - 0.5) * 0.45 - 0.1,
                r: 1.5 + Math.random() * 2.4,
                color: colors[i % colors.length],
                phase: Math.random() * Math.PI * 2,
                speed: 0.02 + Math.random() * 0.03,
                halo: Math.random() < 0.28
              });
            }
          }
        }

        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        window.addEventListener('mousemove', function(e) {
          mouse.targetX = e.clientX;
          mouse.targetY = e.clientY;
          mouse.active = true;
        });

        window.addEventListener('click', function(e) {
          for (let i = 0; i < 10; i++) {
            const angle = Math.random() * Math.PI * 2;
            const spd = 1.5 + Math.random() * 4;
            sparks.push({
              x: e.clientX,
              y: e.clientY,
              vx: Math.cos(angle) * spd,
              vy: Math.sin(angle) * spd,
              r: 1.4 + Math.random() * 2,
              alpha: 0.9,
              color: colors[i % colors.length]
            });
          }
        });

        let tick = 0;
        function animateStudioStage() {
          ctx.clearRect(0, 0, width, height);
          tick += 0.012;

          if (mouse.active) {
            mouse.x += (mouse.targetX - mouse.x) * 0.1;
            mouse.y += (mouse.targetY - mouse.y) * 0.1;
          } else {
            mouse.x = width * 0.5 + Math.cos(tick) * (width * 0.22);
            mouse.y = height * 0.4 + Math.sin(tick * 1.2) * (height * 0.16);
          }

          // Smooth parallax for warm studio aurora orbs
          const dxOrb = (mouse.x - width * 0.5);
          const dyOrb = (mouse.y - height * 0.5);
          if (orb1) orb1.style.transform = 'translate3d(' + (dxOrb * 0.05) + 'px, ' + (dyOrb * 0.05) + 'px, 0)';
          if (orb2) orb2.style.transform = 'translate3d(' + (-dxOrb * 0.04) + 'px, ' + (-dyOrb * 0.04) + 'px, 0)';
          if (orb3) orb3.style.transform = 'translate3d(' + (dyOrb * 0.03) + 'px, ' + (-dxOrb * 0.03) + 'px, 0)';

          // Update & draw floating firefly nodes
          for (let i = 0; i < particles.length; i++) {
            const p = particles[i];
            p.phase += p.speed;
            p.x += p.vx;
            p.y += p.vy;

            // Gentle magnetic reaction to cursor
            const mdx = mouse.x - p.x;
            const mdy = mouse.y - p.y;
            const mdist = Math.sqrt(mdx * mdx + mdy * mdy);
            if (mdist < 190 && mdist > 1) {
              const force = (1 - mdist / 190) * 0.45;
              p.x -= (mdx / mdist) * force;
              p.y -= (mdy / mdist) * force;
            }

            if (p.x < -20) p.x = width + 20;
            if (p.x > width + 20) p.x = -20;
            if (p.y < -20) p.y = height + 20;
            if (p.y > height + 20) p.y = -20;

            const alpha = 0.35 + Math.sin(p.phase) * 0.25;
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(' + p.color + ', ' + alpha + ')';
            ctx.fill();

            if (p.halo) {
              ctx.beginPath();
              ctx.arc(p.x, p.y, p.r * 2.8, 0, Math.PI * 2);
              ctx.fillStyle = 'rgba(' + p.color + ', ' + (alpha * 0.16) + ')';
              ctx.fill();
            }

            // Connect nearby nodes with delicate warm blueprint threads
            for (let j = i + 1; j < particles.length; j++) {
              const p2 = particles[j];
              const dx = p.x - p2.x;
              const dy = p.y - p2.y;
              const dist = Math.sqrt(dx * dx + dy * dy);
              if (dist < 130) {
                const lineAlpha = (1 - dist / 130) * 0.16;
                ctx.beginPath();
                ctx.moveTo(p.x, p.y);
                ctx.lineTo(p2.x, p2.y);
                ctx.strokeStyle = 'rgba(232, 141, 56, ' + lineAlpha + ')';
                ctx.lineWidth = 0.8;
                ctx.stroke();
              }
            }

            // Connect to cursor with glowing Edison filament line
            if (mdist < 175) {
              const cAlpha = (1 - mdist / 175) * 0.32;
              ctx.beginPath();
              ctx.moveTo(mouse.x, mouse.y);
              ctx.lineTo(p.x, p.y);
              ctx.strokeStyle = 'rgba(246, 200, 125, ' + cAlpha + ')';
              ctx.lineWidth = 1;
              ctx.stroke();
            }
          }

          // Click spark bursts
          for (let k = sparks.length - 1; k >= 0; k--) {
            const s = sparks[k];
            s.x += s.vx;
            s.y += s.vy;
            s.vx *= 0.95;
            s.vy *= 0.95;
            s.alpha -= 0.025;
            if (s.alpha <= 0) {
              sparks.splice(k, 1);
              continue;
            }
            ctx.beginPath();
            ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(' + s.color + ', ' + s.alpha + ')';
            ctx.fill();
          }

          requestAnimationFrame(animateStudioStage);
        }

        animateStudioStage();
      }
    });
  </script>
</body>
</html>
