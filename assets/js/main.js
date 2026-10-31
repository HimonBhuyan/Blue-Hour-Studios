/**
 * Blue Hour Creative Studios - Master Client Engine (Interactive Luxury Suite)
 * Handles Navigation, 3-Atmosphere Switching, Acoustic Sound Synthesis,
 * Interactive Terminal Simulations, Project Launchpad ROI Configurator,
 * Cursor Spotlight & Follower, Luminous Border Shaders, Kinetic Number Counters,
 * Magnetic Buttons, Scope Estimator, Filtering, Modal & Form Submissions
 */

document.addEventListener('DOMContentLoaded', () => {
  initCreativePreloader();
  initAcousticSound();
  initAtmosphericTheme();
  initLiveInteractiveBackground();
  initCursorSpotlight();
  initScrollReveal();
  initNavbar();
  initInteractiveTerminal();
  initLaunchpadConfigurator();
  initServiceFilters();
  initWorkFilters();
  initProjectModal();
  initKineticCounters();
  initContactForm();
  initCardTilt();
  initStudioClock();
  initCardSpotlight();
  initHeroShowcaseTabs();
  initCursorFollower();
  initMagneticButtons();
  initScopeEstimator();
  initPricingInteractions();
  initTeamInteractions();
});

/* -------------------------------------------------------------------------
   1. TACTILE ACOUSTIC SOUND SYNTHESIZER (Web Audio API)
   ------------------------------------------------------------------------- */
let audioCtx = null;
let soundEnabled = true;

function initAcousticSound() {
  const soundBtn = document.getElementById('soundToggleBtn');
  const soundIcon = document.getElementById('soundIcon');
  const soundText = document.getElementById('soundText');

  const savedSound = localStorage.getItem('blue_hour_sound');
  if (savedSound === 'muted') {
    soundEnabled = false;
    updateSoundUI(false);
  }

  function getAudioContext() {
    if (!audioCtx) {
      const AudioContextClass = window.AudioContext || window.webkitAudioContext;
      if (AudioContextClass) audioCtx = new AudioContextClass();
    }
    if (audioCtx && audioCtx.state === 'suspended') {
      audioCtx.resume();
    }
    return audioCtx;
  }

  function playLuxuryClick(freq = 620, type = 'sine', duration = 0.04) {
    if (!soundEnabled) return;
    try {
      const ctx = getAudioContext();
      if (!ctx) return;
      const osc = ctx.createOscillator();
      const gain = ctx.createGain();

      osc.type = type;
      osc.frequency.setValueAtTime(freq, ctx.currentTime);
      osc.frequency.exponentialRampToValueAtTime(freq * 1.5, ctx.currentTime + duration);

      gain.gain.setValueAtTime(0.06, ctx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.0001, ctx.currentTime + duration);

      osc.connect(gain);
      gain.connect(ctx.destination);

      osc.start();
      osc.stop(ctx.currentTime + duration);
    } catch (e) {
      // Audio autoplay policy fallback
    }
  }

  window.playLuxuryClick = playLuxuryClick;

  if (soundBtn) {
    soundBtn.addEventListener('click', () => {
      soundEnabled = !soundEnabled;
      localStorage.setItem('blue_hour_sound', soundEnabled ? 'active' : 'muted');
      updateSoundUI(soundEnabled);
      if (soundEnabled) playLuxuryClick(780, 'sine', 0.06);
    });
  }

  function updateSoundUI(active) {
    if (!soundBtn) return;
    if (active) {
      soundBtn.classList.add('sound-active');
      soundBtn.setAttribute('title', 'Tactile Sound: ON');
      if (soundIcon) soundIcon.className = 'fa-solid fa-volume-high';
      if (soundText) soundText.textContent = 'AUDIO ON';
    } else {
      soundBtn.classList.remove('sound-active');
      soundBtn.setAttribute('title', 'Tactile Sound: MUTED');
      if (soundIcon) soundIcon.className = 'fa-solid fa-volume-xmark';
      if (soundText) soundText.textContent = 'MUTED';
    }
  }

  // Attach soft clicks to interactive elements
  document.addEventListener('click', (e) => {
    if (e.target.closest('button, .nav-link, .filter-pill-btn, .range-slider-luxury, .chip-editorial-option, .scope-checkbox-label')) {
      playLuxuryClick(580, 'sine', 0.035);
    }
  });
}

/* -------------------------------------------------------------------------
   2. 3-ATMOSPHERE THEME SWITCHER (Obsidian -> Twilight Blue -> Porcelain Light)
   ------------------------------------------------------------------------- */
function initAtmosphericTheme() {
  const themeToggleBtn = document.getElementById('themeToggleBtn');
  const themeIcon = document.getElementById('themeIcon');
  const html = document.documentElement;

  // Cycles: dark -> twilight -> light -> dark
  const themes = ['light', 'dark', 'twilight'];
  const savedTheme = localStorage.getItem('blue_hour_theme') || 'light';

  let currentIdx = themes.indexOf(savedTheme);
  if (currentIdx === -1) currentIdx = 0;

  applyTheme(themes[currentIdx]);

  if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', () => {
      currentIdx = (currentIdx + 1) % themes.length;
      applyTheme(themes[currentIdx]);
      if (window.playLuxuryClick) window.playLuxuryClick(840, 'triangle', 0.05);
    });
  }

  function applyTheme(theme) {
    html.setAttribute('data-theme', theme);
    localStorage.setItem('blue_hour_theme', theme);
    window.dispatchEvent(new CustomEvent('bh_theme_change', { detail: { theme } }));

    if (themeIcon && themeToggleBtn) {
      if (theme === 'dark') {
        themeIcon.className = 'fa-solid fa-moon';
        themeToggleBtn.setAttribute('title', 'Atmosphere: Dark Obsidian (Click for Twilight)');
      } else if (theme === 'twilight') {
        themeIcon.className = 'fa-solid fa-cloud-moon';
        themeToggleBtn.setAttribute('title', 'Atmosphere: Blue Hour Twilight (Click for Porcelain Light)');
      } else {
        themeIcon.className = 'fa-solid fa-sun';
        themeToggleBtn.setAttribute('title', 'Atmosphere: Porcelain Light (Click for Dark Obsidian)');
      }
    }
  }
}

/* -------------------------------------------------------------------------
   2.5 LIVE INTERACTIVE BACKGROUND ENGINE (Retina Canvas, Fluid Dynamic Mesh & Parallax Orbs)
   ------------------------------------------------------------------------- */
function initLiveInteractiveBackground() {
  const canvas = document.getElementById('ambientInteractiveCanvas');
  const orb1 = document.getElementById('auroraOrb1');
  const orb2 = document.getElementById('auroraOrb2');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  if (!ctx) return;

  let width = 0;
  let height = 0;
  let dpr = Math.min(window.devicePixelRatio || 1, 2);
  let animationFrameId = null;
  let isTabVisible = true;

  const mouse = {
    x: -9999,
    y: -9999,
    targetX: -9999,
    targetY: -9999,
    radius: 175,
    active: false
  };

  const shockwaves = [];

  function getThemePalette() {
    const theme = document.documentElement.getAttribute('data-theme') || 'light';
    if (theme === 'light') {
      return {
        particleColors: [
          'rgba(195, 155, 95, ',   // Warm luxury champagne
          'rgba(90, 105, 130, ',   // Slate graphite
          'rgba(170, 135, 80, ',   // Architectural bronze
          'rgba(130, 145, 165, '   // Soft platinum
        ],
        lineColor: '185, 150, 95',
        mouseLineColor: '205, 165, 100',
        lineMaxDist: 115,
        baseParticleAlpha: 0.38,
        maxLineAlpha: 0.22,
        mouseLineAlpha: 0.35,
        shockwaveColor: '195, 155, 95'
      };
    } else if (theme === 'twilight') {
      return {
        particleColors: [
          'rgba(129, 140, 248, ',  // Indigo
          'rgba(192, 132, 252, ',  // Twilight violet
          'rgba(96, 165, 250, ',   // Celestial cyan
          'rgba(244, 244, 246, '   // Starlight white
        ],
        lineColor: '129, 140, 248',
        mouseLineColor: '168, 85, 247',
        lineMaxDist: 120,
        baseParticleAlpha: 0.45,
        maxLineAlpha: 0.24,
        mouseLineAlpha: 0.38,
        shockwaveColor: '129, 140, 248'
      };
    } else {
      return {
        particleColors: [
          'rgba(226, 210, 180, ',  // Champagne gold
          'rgba(255, 255, 255, ',  // Mercury silver
          'rgba(212, 212, 216, ',  // Titanium
          'rgba(190, 170, 135, '   // Deep gold
        ],
        lineColor: '226, 210, 180',
        mouseLineColor: '247, 241, 230',
        lineMaxDist: 120,
        baseParticleAlpha: 0.42,
        maxLineAlpha: 0.20,
        mouseLineAlpha: 0.35,
        shockwaveColor: '226, 210, 180'
      };
    }
  }

  let palette = getThemePalette();

  window.addEventListener('bh_theme_change', () => {
    palette = getThemePalette();
  });

  class Particle {
    constructor() {
      this.reset(true);
    }

    reset(initial = false) {
      this.x = initial ? Math.random() * width : (Math.random() > 0.5 ? 0 : width);
      this.y = initial ? Math.random() * height : Math.random() * height;
      this.vx = (Math.random() - 0.5) * 0.45;
      this.vy = (Math.random() - 0.5) * 0.45;
      this.baseRadius = 1.2 + Math.random() * 1.8;
      this.radius = this.baseRadius;
      this.colorIdx = Math.floor(Math.random() * 4);
      this.pulseSpeed = 0.02 + Math.random() * 0.03;
      this.pulseVal = Math.random() * Math.PI * 2;
      this.alpha = 0.25 + Math.random() * 0.45;
      this.friction = 0.95;
      this.pushX = 0;
      this.pushY = 0;
    }

    update() {
      this.pulseVal += this.pulseSpeed;

      this.x += this.vx + this.pushX;
      this.y += this.vy + this.pushY;
      this.pushX *= this.friction;
      this.pushY *= this.friction;

      if (mouse.active) {
        const dx = mouse.x - this.x;
        const dy = mouse.y - this.y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < mouse.radius && dist > 1) {
          const force = (1 - dist / mouse.radius) * 1.8;
          const angle = Math.atan2(dy, dx);
          this.pushX -= Math.cos(angle) * force * 0.5;
          this.pushY -= Math.sin(angle) * force * 0.5;
        }
      }

      for (let i = 0; i < shockwaves.length; i++) {
        const sw = shockwaves[i];
        const dx = this.x - sw.x;
        const dy = this.y - sw.y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        const diff = Math.abs(dist - sw.currentRadius);
        if (diff < 35) {
          const pushForce = ((35 - diff) / 35) * sw.intensity * 2.8;
          const angle = Math.atan2(dy, dx);
          this.pushX += Math.cos(angle) * pushForce;
          this.pushY += Math.sin(angle) * pushForce;
        }
      }

      if (this.x < -25) this.x = width + 25;
      if (this.x > width + 25) this.x = -25;
      if (this.y < -25) this.y = height + 25;
      if (this.y > height + 25) this.y = -25;
    }

    draw() {
      const alpha = Math.min(1, Math.max(0.06, this.alpha * palette.baseParticleAlpha * (0.8 + Math.sin(this.pulseVal) * 0.28)));
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
      ctx.fillStyle = palette.particleColors[this.colorIdx] + alpha + ')';
      ctx.fill();
    }
  }

  class Shockwave {
    constructor(x, y) {
      this.x = x;
      this.y = y;
      this.currentRadius = 12;
      this.maxRadius = 260;
      this.speed = 5;
      this.intensity = 1.0;
      this.life = 1.0;
    }

    update() {
      this.currentRadius += this.speed;
      this.life = Math.max(0, 1 - (this.currentRadius / this.maxRadius));
      this.intensity = this.life;
      return this.currentRadius < this.maxRadius;
    }

    draw() {
      if (this.life <= 0) return;
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.currentRadius, 0, Math.PI * 2);
      ctx.strokeStyle = `rgba(${palette.shockwaveColor}, ${this.life * 0.26})`;
      ctx.lineWidth = 1.5;
      ctx.stroke();
    }
  }

  let particles = [];

  function resize() {
    width = window.innerWidth;
    height = window.innerHeight;
    dpr = Math.min(window.devicePixelRatio || 1, 2);

    canvas.width = Math.floor(width * dpr);
    canvas.height = Math.floor(height * dpr);
    canvas.style.width = width + 'px';
    canvas.style.height = height + 'px';

    ctx.setTransform(1, 0, 0, 1, 0, 0);
    ctx.scale(dpr, dpr);

    const targetCount = width < 768 ? 32 : Math.min(75, Math.max(45, Math.floor((width * height) / 22000)));

    if (particles.length !== targetCount) {
      particles = [];
      for (let i = 0; i < targetCount; i++) {
        particles.push(new Particle());
      }
    }
  }

  resize();

  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(resize, 120);
  });

  window.addEventListener('mousemove', (e) => {
    mouse.targetX = e.clientX;
    mouse.targetY = e.clientY;
    mouse.active = true;
  });

  window.addEventListener('mouseleave', () => {
    mouse.active = false;
  });

  window.addEventListener('click', (e) => {
    if (shockwaves.length < 5) {
      shockwaves.push(new Shockwave(e.clientX, e.clientY));
    }
  });

  window.addEventListener('touchmove', (e) => {
    if (e.touches && e.touches[0]) {
      mouse.targetX = e.touches[0].clientX;
      mouse.targetY = e.touches[0].clientY;
      mouse.active = true;
    }
  }, { passive: true });

  window.addEventListener('touchend', () => {
    mouse.active = false;
  });

  let orb1X = 0, orb1Y = 0;
  let orb2X = 0, orb2Y = 0;

  function render() {
    if (!isTabVisible) {
      animationFrameId = requestAnimationFrame(render);
      return;
    }

    ctx.clearRect(0, 0, width, height);

    if (mouse.active) {
      mouse.x += (mouse.targetX - mouse.x) * 0.16;
      mouse.y += (mouse.targetY - mouse.y) * 0.16;
    } else {
      mouse.x = -9999;
      mouse.y = -9999;
    }

    if (orb1 && orb2 && mouse.active) {
      const offsetX1 = (mouse.x - width / 2) * 0.045;
      const offsetY1 = (mouse.y - height / 2) * 0.045;
      orb1X += (offsetX1 - orb1X) * 0.05;
      orb1Y += (offsetY1 - orb1Y) * 0.05;
      orb1.style.transform = `translate3d(${orb1X}px, ${orb1Y}px, 0)`;

      const offsetX2 = -(mouse.x - width / 2) * 0.035;
      const offsetY2 = -(mouse.y - height / 2) * 0.035;
      orb2X += (offsetX2 - orb2X) * 0.05;
      orb2Y += (offsetY2 - orb2Y) * 0.05;
      orb2.style.transform = `translate3d(${orb2X}px, ${orb2Y}px, 0)`;
    }

    for (let i = shockwaves.length - 1; i >= 0; i--) {
      const alive = shockwaves[i].update();
      shockwaves[i].draw();
      if (!alive) shockwaves.splice(i, 1);
    }

    const pCount = particles.length;
    for (let i = 0; i < pCount; i++) {
      particles[i].update();
      particles[i].draw();
    }

    ctx.lineWidth = 0.75;
    for (let i = 0; i < pCount; i++) {
      const p1 = particles[i];
      for (let j = i + 1; j < pCount; j++) {
        const p2 = particles[j];
        const dx = p1.x - p2.x;
        const dy = p1.y - p2.y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < palette.lineMaxDist) {
          const alpha = (1 - dist / palette.lineMaxDist) * palette.maxLineAlpha;
          ctx.strokeStyle = `rgba(${palette.lineColor}, ${alpha})`;
          ctx.beginPath();
          ctx.moveTo(p1.x, p1.y);
          ctx.lineTo(p2.x, p2.y);
          ctx.stroke();
        }
      }

      if (mouse.active) {
        const mdx = p1.x - mouse.x;
        const mdy = p1.y - mouse.y;
        const mDist = Math.sqrt(mdx * mdx + mdy * mdy);

        if (mDist < mouse.radius) {
          const mAlpha = (1 - mDist / mouse.radius) * palette.mouseLineAlpha;
          ctx.strokeStyle = `rgba(${palette.mouseLineColor}, ${mAlpha})`;
          ctx.beginPath();
          ctx.moveTo(mouse.x, mouse.y);
          ctx.lineTo(p1.x, p1.y);
          ctx.stroke();
        }
      }
    }

    animationFrameId = requestAnimationFrame(render);
  }

  document.addEventListener('visibilitychange', () => {
    isTabVisible = !document.hidden;
  });

  render();
}

/* -------------------------------------------------------------------------
   3. CURSOR SPOTLIGHT AMBIENT SHADER
   ------------------------------------------------------------------------- */
function initCursorSpotlight() {
  const spotlight = document.getElementById('cursorSpotlight');
  if (!spotlight || window.innerWidth < 768) return;

  window.addEventListener('mousemove', (e) => {
    document.documentElement.style.setProperty('--mouse-x', `${e.clientX}px`);
    document.documentElement.style.setProperty('--mouse-y', `${e.clientY}px`);
  });
}

/* -------------------------------------------------------------------------
   4. SCROLL REVEAL ANIMATIONS
   ------------------------------------------------------------------------- */
function initScrollReveal() {
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  if (!revealElements.length) return;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-revealed');
        obs.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -30px 0px'
  });

  revealElements.forEach(el => observer.observe(el));
}

/* -------------------------------------------------------------------------
   5. 3D CARD TILT MICRO-INTERACTION
   ------------------------------------------------------------------------- */
function initCardTilt() {
  const tiltCards = document.querySelectorAll('.tilt-card');
  if (!tiltCards.length || window.innerWidth < 1024) return;

  tiltCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = ((y - centerY) / centerY) * -4;
      const rotateY = ((x - centerX) / centerX) * 4;

      card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
}

/* -------------------------------------------------------------------------
   6. NAVBAR & SCROLL BEHAVIOR
   ------------------------------------------------------------------------- */
function initNavbar() {
  const header = document.querySelector('.site-header');
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelectorAll('.nav-link');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
    highlightActiveNavLink();
  });

  if (mobileToggle && header) {
    mobileToggle.addEventListener('click', () => {
      header.classList.toggle('mobile-open');
      const icon = mobileToggle.querySelector('i');
      if (icon) {
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-xmark');
      }
    });

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        header.classList.remove('mobile-open');
        const icon = mobileToggle.querySelector('i');
        if (icon) {
          icon.classList.add('fa-bars');
          icon.classList.remove('fa-xmark');
        }
      });
    });
  }

  function highlightActiveNavLink() {
    const hashLinks = Array.from(navLinks).filter(l => (l.getAttribute('href') || '').startsWith('#'));
    if (!hashLinks.length) return;

    const sections = document.querySelectorAll('section[id]');
    const scrollPos = window.scrollY + 140;

    sections.forEach(sec => {
      const top = sec.offsetTop;
      const height = sec.offsetHeight;
      const id = sec.getAttribute('id');

      if (scrollPos >= top && scrollPos < top + height) {
        hashLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === `#${id}`) {
            link.classList.add('active');
          }
        });
      }
    });
  }
}

/* -------------------------------------------------------------------------
   7. INTERACTIVE HERO TERMINAL LIVE PIPELINE SIMULATION
   ------------------------------------------------------------------------- */
function initInteractiveTerminal() {
  const btnDeploy = document.getElementById('btnRunDeploy');
  const btnRoas = document.getElementById('btnRunRoas');
  const btnReset = document.getElementById('btnResetCode');
  const consoleEl = document.getElementById('terminalLiveConsole');
  const codeLines = document.getElementById('codeStaticLines');

  if (!btnDeploy || !consoleEl || !codeLines) return;

  btnDeploy.addEventListener('click', () => {
    highlightBtn(btnDeploy);
    codeLines.style.display = 'none';
    consoleEl.classList.add('active');
    consoleEl.innerHTML = '<div style="color: var(--accent-champagne);"><i class="fa-solid fa-spinner fa-spin"></i> Initializing Blue Hour Edge Deployment Engine...</div>';

    setTimeout(() => {
      consoleEl.innerHTML = `
        <div style="color: #60a5fa;">[10:48:10] Connecting Cloudflare Global Anycast Edge Network...</div>
        <div style="color: #a7f3d0;">[10:48:11] Syncing Redis multi-region inventory lock pipeline...</div>
        <div style="color: #a7f3d0;">[10:48:12] Purging stale static assets across 280+ POPs in 11.2ms...</div>
        <div style="color: #fcd34d;">[10:48:13] Healthcheck ping: https://api.bluehour.io/health -> 200 OK (13.8ms)</div>
        <div style="color: var(--accent-emerald); font-weight: 700; margin-top: 6px;">
          ✔ BLUE HOUR DEPLOYMENT SUCCESSFUL // ZERO DOWNTIME GUARANTEED
        </div>
      `;
      if (window.playLuxuryClick) window.playLuxuryClick(920, 'sine', 0.08);
    }, 650);
  });

  btnRoas.addEventListener('click', () => {
    highlightBtn(btnRoas);
    codeLines.style.display = 'none';
    consoleEl.classList.add('active');
    consoleEl.innerHTML = '<div style="color: var(--accent-champagne);"><i class="fa-solid fa-spinner fa-spin"></i> Initializing Meta Conversions API (CAPI) Telemetry...</div>';

    setTimeout(() => {
      consoleEl.innerHTML = `
        <div style="color: #f472b6;">[10:48:14] Handshaking Meta Graph API v20.0 via server-side dispatch...</div>
        <div style="color: #93c5fd;">[10:48:15] Analyzed 34,800 organic & paid video reel impressions...</div>
        <div style="color: #a7f3d0;">[10:48:15] Matching high-intent luxury DTC demographic cluster...</div>
        <div style="color: #fcd34d;">[10:48:16] Attribution window calculated: $5,000 spend -> $24,000 return</div>
        <div style="color: var(--accent-emerald); font-weight: 700; margin-top: 6px;">
          ✔ VERIFIED CAMPAIGN MULTIPLIER: 4.8X NET ROAS
        </div>
      `;
      if (window.playLuxuryClick) window.playLuxuryClick(880, 'sine', 0.08);
    }, 650);
  });

  btnReset.addEventListener('click', () => {
    highlightBtn(null);
    consoleEl.classList.remove('active');
    codeLines.style.display = 'block';
  });

  function highlightBtn(activeBtn) {
    [btnDeploy, btnRoas].forEach(b => b?.classList.remove('active'));
    if (activeBtn) activeBtn.classList.add('active');
  }
}

/* -------------------------------------------------------------------------
   8. CLIENT INTERACTIVE LAUNCHPAD ROI & FEASIBILITY CONFIGURATOR
   ------------------------------------------------------------------------- */
function initLaunchpadConfigurator() {
  const sliderVisitors = document.getElementById('sliderVisitors');
  const sliderAdSpend = document.getElementById('sliderAdSpend');
  const dispVisitors = document.getElementById('dispVisitors');
  const dispAdSpend = document.getElementById('dispAdSpend');
  const projRevenue = document.getElementById('projRevenue');
  const projThroughput = document.getElementById('projThroughput');
  const projSprint = document.getElementById('projSprint');
  const btnTransfer = document.getElementById('btnTransferConfig');
  const archRadios = document.querySelectorAll('input[name="launchpad_arch"]');
  const dispArch = document.getElementById('dispArchType');
  const clientMessage = document.getElementById('clientMessage');

  if (!sliderVisitors || !sliderAdSpend) return;

  function updateProjections() {
    const visitors = parseInt(sliderVisitors.value, 10);
    const adSpend = parseInt(sliderAdSpend.value, 10);

    dispVisitors.textContent = `${visitors.toLocaleString('en-US')} Visitors / Mo`;
    dispAdSpend.textContent = `$${adSpend.toLocaleString('en-US')} / Month`;

    // 4.8x ROAS target
    const projectedRev = adSpend * 4.8;
    projRevenue.textContent = `$${Math.round(projectedRev).toLocaleString('en-US')} / Mo`;

    // Edge throughput
    const reqPerSec = Math.round(visitors / 60);
    projThroughput.textContent = `${reqPerSec.toLocaleString('en-US')} Req / Sec`;

    // Sprint estimation
    if (visitors <= 100000 && adSpend <= 10000) {
      projSprint.textContent = '4 — 5 Weeks Sprint';
    } else if (visitors <= 500000) {
      projSprint.textContent = '6 — 8 Weeks Full Build';
    } else {
      projSprint.textContent = '8+ Weeks Enterprise';
    }
  }

  sliderVisitors.addEventListener('input', updateProjections);
  sliderAdSpend.addEventListener('input', updateProjections);

  archRadios.forEach(radio => {
    radio.addEventListener('change', () => {
      if (dispArch) dispArch.textContent = radio.value;
      updateProjections();
    });
  });

  updateProjections();

  if (btnTransfer) {
    btnTransfer.addEventListener('click', (e) => {
      e.preventDefault();
      const visitors = sliderVisitors.value;
      const adSpend = sliderAdSpend.value;
      const selectedArch = document.querySelector('input[name="launchpad_arch"]:checked')?.value || 'SaaS & Web App';

      const briefText = `Configured via Launchpad: Targeting ~${parseInt(visitors, 10).toLocaleString()} monthly audience with a projected $${parseInt(adSpend, 10).toLocaleString()} monthly marketing spend for our ${selectedArch} platform. Looking for turnkey engineering and brand acceleration.`;

      if (clientMessage) {
        clientMessage.value = briefText;
      }

      const contactSection = document.getElementById('contact');
      if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
        setTimeout(() => {
          clientMessage?.focus();
        }, 800);
      }
    });
  }
}

/* -------------------------------------------------------------------------
   9. SERVICES CATEGORY FILTERING
   ------------------------------------------------------------------------- */
function initServiceFilters() {
  const tabs = document.querySelectorAll('.service-filter-tab');
  const cards = document.querySelectorAll('.service-card');

  if (!tabs.length || !cards.length) return;

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      const filter = tab.getAttribute('data-filter');

      cards.forEach(card => {
        const category = card.getAttribute('data-category');
        if (filter === 'all' || category === filter) {
          card.style.display = 'flex';
          card.style.animation = 'fadeInUp 0.4s ease forwards';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

/* -------------------------------------------------------------------------
   10. OUR WORKS / PORTFOLIO FILTERING
   ------------------------------------------------------------------------- */
function initWorkFilters() {
  const buttons = document.querySelectorAll('.work-filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  if (!buttons.length || !projectCards.length) return;

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      projectCards.forEach(card => {
        const tags = (card.getAttribute('data-category') || '').toLowerCase();
        const specificTag = (card.getAttribute('data-filter-tag') || '').toLowerCase();

        if (filter === 'all' || tags.includes(filter) || specificTag === filter) {
          card.style.display = 'flex';
          card.style.animation = 'fadeInUp 0.4s ease forwards';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

/* -------------------------------------------------------------------------
   11. CASE STUDY DETAIL MODAL
   ------------------------------------------------------------------------- */
function initProjectModal() {
  const modalBackdrop = document.getElementById('projectModal');
  const closeBtn = document.querySelector('.modal-close-btn');

  if (!modalBackdrop) return;

  document.addEventListener('click', e => {
    const trigger = e.target.closest('[data-project-open]');
    if (!trigger) return;

    const projectId = trigger.getAttribute('data-project-open');
    openModalForProject(projectId);
  });

  function openModalForProject(projectId) {
    const projectList = window.BLUE_HOUR_PROJECTS || window.AURA_PROJECTS || [];
    if (!projectList.length) return;

    const project = projectList.find(p => p.id === projectId);
    if (!project) return;

    const coverImg = document.getElementById('modalCoverImg');
    const catTag = document.getElementById('modalCategoryTag');
    const title = document.getElementById('modalTitle');
    const client = document.getElementById('modalClient');
    const duration = document.getElementById('modalDuration');
    const desc = document.getElementById('modalDesc');
    const highlightsList = document.getElementById('modalHighlightsList');
    const tagsWrapper = document.getElementById('modalTagsWrapper');
    const liveLink = document.getElementById('modalLiveLink');
    const codeLink = document.getElementById('modalCodeLink');

    if (coverImg) coverImg.src = project.image || 'assets/images/project-placeholder.svg';
    if (catTag) catTag.textContent = project.category_label || project.category;
    if (title) title.textContent = project.title;
    if (client) client.textContent = project.client || 'Client Confidential';
    if (duration) duration.textContent = project.duration || 'Complete Build';
    if (desc) desc.textContent = project.description;

    if (highlightsList) {
      highlightsList.innerHTML = '';
      if (Array.isArray(project.highlights) && project.highlights.length) {
        project.highlights.forEach(item => {
          const cleanItem = item.replace(/^-\s*/, '');
          const li = document.createElement('li');
          li.innerHTML = `<i class="fa-solid fa-chevron-right"></i> <span>${cleanItem}</span>`;
          highlightsList.appendChild(li);
        });
      } else {
        highlightsList.innerHTML = '<li><i class="fa-solid fa-chevron-right"></i> <span>Turnkey design, engineering, and digital deployment.</span></li>';
      }
    }

    if (tagsWrapper) {
      tagsWrapper.innerHTML = '';
      if (Array.isArray(project.tags)) {
        project.tags.forEach(t => {
          const pill = document.createElement('span');
          pill.className = 'modal-tech-pill';
          pill.textContent = t;
          tagsWrapper.appendChild(pill);
        });
      }
    }

    if (liveLink) {
      if (project.live && project.live !== '#') {
        liveLink.href = project.live;
        liveLink.style.display = 'inline-flex';
      } else {
        liveLink.style.display = 'none';
      }
    }

    if (codeLink) {
      if (project.github && project.github !== '#') {
        codeLink.href = project.github;
        codeLink.style.display = 'inline-flex';
      } else {
        codeLink.style.display = 'none';
      }
    }

    modalBackdrop.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    modalBackdrop.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  modalBackdrop.addEventListener('click', e => {
    if (e.target === modalBackdrop) closeModal();
  });
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && modalBackdrop.classList.contains('active')) closeModal();
  });
}

/* -------------------------------------------------------------------------
   12. KINETIC SMOOTH NUMBER COUNTERS
   ------------------------------------------------------------------------- */
function initKineticCounters() {
  const counterElements = document.querySelectorAll('.counter-val');
  if (!counterElements.length) return;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.25 });

  counterElements.forEach(el => observer.observe(el));

  function animateCounter(el) {
    const target = parseFloat(el.getAttribute('data-target') || '0');
    const decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
    const suffix = el.getAttribute('data-suffix') || '';
    const duration = 1800;
    const startTime = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const ease = 1 - Math.pow(1 - progress, 3);
      const currentVal = target * ease;

      el.textContent = currentVal.toFixed(decimals) + suffix;

      if (progress < 1) {
        requestAnimationFrame(update);
      } else {
        el.textContent = target.toFixed(decimals) + suffix;
      }
    }

    requestAnimationFrame(update);
  }
}

/* -------------------------------------------------------------------------
   13. CONTACT FORM SUBMISSION
   ------------------------------------------------------------------------- */
function initContactForm() {
  const form = document.getElementById('agencyInquiryForm');
  const alertBox = document.getElementById('formAlert');
  const submitBtn = document.getElementById('submitBtn');

  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    if (alertBox) {
      alertBox.className = 'form-feedback-alert';
      alertBox.style.display = 'none';
    }

    const formData = new FormData(form);
    const dataObj = {};
    formData.forEach((value, key) => { dataObj[key] = value; });

    if (!dataObj.name || !dataObj.email || !dataObj.message) {
      showAlert('Please enter your name, corporate email address, and project vision.', 'error');
      return;
    }

    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Transmitting Strategic Brief...';
    }

    try {
      const response = await fetch('api/contact.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify(dataObj)
      });

      const result = await response.json();

      if (response.ok && result.success) {
        showAlert(result.message || 'Brief received. Our studio partners will contact you within 24 hours.', 'success');
        form.reset();
      } else {
        showAlert(result.error || 'Submission failed. Please email us directly at hello@bluehourcreativestudios.com.', 'error');
      }
    } catch (err) {
      showAlert('Network error. Please reach out to hello@bluehourcreativestudios.com directly.', 'error');
    } finally {
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<span>Submit Strategic Brief</span> <i class="fa-solid fa-arrow-right" style="font-size: 0.8rem;"></i>';
      }
    }
  });

  function showAlert(msg, type) {
    if (!alertBox) return;
    alertBox.textContent = msg;
    alertBox.className = `form-feedback-alert ${type}`;
    alertBox.style.display = 'flex';
  }
}

/* -------------------------------------------------------------------------
   14. LIVE IST STUDIO CLOCK (Guwahati & New Delhi)
   ------------------------------------------------------------------------- */
function initStudioClock() {
  const clockEl = document.getElementById('studioLiveClock');
  if (!clockEl) return;

  function updateClock() {
    try {
      const now = new Date();
      const options = {
        timeZone: 'Asia/Kolkata',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true
      };
      const formatter = new Intl.DateTimeFormat('en-US', options);
      clockEl.textContent = formatter.format(now);
    } catch (e) {
      clockEl.textContent = new Date().toLocaleTimeString();
    }
  }

  updateClock();
  setInterval(updateClock, 1000);
}

/* -------------------------------------------------------------------------
   15. SPOTLIGHT CARD BORDER SHADER (Linear/Raycast Effect)
   ------------------------------------------------------------------------- */
function initCardSpotlight() {
  const cards = document.querySelectorAll('.spotlight-card');
  if (!cards.length) return;

  cards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      card.style.setProperty('--card-mouse-x', `${x}px`);
      card.style.setProperty('--card-mouse-y', `${y}px`);
    });

    card.addEventListener('mouseleave', () => {
      card.style.setProperty('--card-mouse-x', '-500px');
      card.style.setProperty('--card-mouse-y', '-500px');
    });
  });
}

/* -------------------------------------------------------------------------
   16. DUAL-MODE HERO SHOWCASE TABS (GUI vs Code Blueprint)
   ------------------------------------------------------------------------- */
function initHeroShowcaseTabs() {
  const tabButtons = document.querySelectorAll('.showcase-tab-btn');
  const guiView = document.getElementById('heroGuiView');
  const codeView = document.getElementById('heroCodeView');

  if (!tabButtons.length || !guiView || !codeView) return;

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      tabButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const view = btn.getAttribute('data-view');
      if (view === 'code') {
        guiView.classList.add('hidden-view');
        codeView.classList.add('active');
      } else {
        codeView.classList.remove('active');
        guiView.classList.remove('hidden-view');
      }
    });
  });
}

/* -------------------------------------------------------------------------
   17. DYNAMIC CURSOR BADGE FOLLOWER
   ------------------------------------------------------------------------- */
function initCursorFollower() {
  const follower = document.getElementById('cursorFollower');
  const projectCards = document.querySelectorAll('.project-card-editorial');
  if (!follower || window.innerWidth < 1024) return;

  window.addEventListener('mousemove', (e) => {
    follower.style.left = `${e.clientX}px`;
    follower.style.top = `${e.clientY}px`;
  });

  projectCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
      follower.classList.add('active');
    });
    card.addEventListener('mouseleave', () => {
      follower.classList.remove('active');
    });
  });
}

/* -------------------------------------------------------------------------
   18. MAGNETIC BUTTON GRAVITATIONAL PULL
   ------------------------------------------------------------------------- */
function initMagneticButtons() {
  const magneticBtns = document.querySelectorAll('.magnetic-btn');
  if (!magneticBtns.length || window.innerWidth < 1024) return;

  magneticBtns.forEach(btn => {
    btn.addEventListener('mousemove', (e) => {
      const rect = btn.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      btn.style.transform = `translate(${x * 0.22}px, ${y * 0.22}px)`;
    });

    btn.addEventListener('mouseleave', () => {
      btn.style.transform = '';
    });
  });
}

/* -------------------------------------------------------------------------
   19. INTERACTIVE PROJECT SCOPE & SPRINT ESTIMATOR
   ------------------------------------------------------------------------- */
function initScopeEstimator() {
  const wrap = document.getElementById('scopeEstimatorWrap');
  if (!wrap) return;

  const checkboxes = wrap.querySelectorAll('input[type="checkbox"]');
  const timelineEl = document.getElementById('estimatedTimelineText');
  const tierEl = document.getElementById('estimatedTierText');
  const badgeEl = document.getElementById('sprintBadgeStatus');

  checkboxes.forEach(cb => {
    cb.addEventListener('change', () => {
      const parentLabel = cb.closest('.scope-checkbox-label');
      if (parentLabel) {
        if (cb.checked) {
          parentLabel.classList.add('is-checked');
        } else {
          parentLabel.classList.remove('is-checked');
        }
      }
      recalculateEstimate();
    });
  });

  function recalculateEstimate() {
    let totalWeeks = 0;
    checkboxes.forEach(cb => {
      if (cb.checked) {
        totalWeeks += parseInt(cb.getAttribute('data-weeks') || '2', 10);
      }
    });

    if (totalWeeks === 0) {
      if (timelineEl) timelineEl.textContent = 'CUSTOM SPRINT SCOPE';
      if (tierEl) tierEl.textContent = 'SELECT DELIVERABLES TO ESTIMATE TIMELINE';
      if (badgeEl) {
        badgeEl.textContent = 'CONSULTATION';
        badgeEl.style.color = 'var(--text-muted)';
      }
      return;
    }

    const minWeeks = Math.max(2, totalWeeks - 1);
    const maxWeeks = Math.max(3, totalWeeks + 1);

    if (timelineEl) {
      timelineEl.textContent = `${minWeeks} — ${maxWeeks} WEEKS SPRINT`;
    }

    if (totalWeeks <= 4) {
      if (tierEl) tierEl.textContent = 'FAST-TRACK SPRINT // EXPEDITED PRODUCTION';
      if (badgeEl) {
        badgeEl.textContent = 'FAST-TRACK';
        badgeEl.style.color = 'var(--accent-emerald)';
      }
    } else if (totalWeeks <= 7) {
      if (tierEl) tierEl.textContent = 'FULL-CYCLE STUDIO BUILD // COMPREHENSIVE QA';
      if (badgeEl) {
        badgeEl.textContent = 'FULL BUILD';
        badgeEl.style.color = 'var(--accent-champagne)';
      }
    } else {
      if (tierEl) tierEl.textContent = 'ENTERPRISE RETROFIT // MULTI-PHASE ARCHITECTURE';
      if (badgeEl) {
        badgeEl.textContent = 'ENTERPRISE';
        badgeEl.style.color = '#60a5fa';
      }
    }
  }

  recalculateEstimate();
}

/* -------------------------------------------------------------------------
   19. ACOUSTIC TICK HELPER & PRICING FILTER TABS
   ------------------------------------------------------------------------- */
function playAcousticTick(freq = 620, duration = 0.04) {
  if (typeof window.playLuxuryClick === 'function') {
    try { window.playLuxuryClick(freq, 'sine', duration); } catch (e) {}
  }
}
window.playAcousticTick = playAcousticTick;

function initPricingInteractions() {
  const filterTabs = document.querySelectorAll('.pricing-tab-btn');
  const pricingCards = document.querySelectorAll('.pricing-card-editorial');
  const selectPackageBtns = document.querySelectorAll('.btn-select-package');
  const clientBudgetSelect = document.getElementById('clientBudget');
  const clientMessageTextarea = document.getElementById('clientMessage');
  const contactSection = document.getElementById('contact');

  // 1. Filter Tabs
  filterTabs.forEach(tab => {
    tab.addEventListener('click', (e) => {
      e.preventDefault();
      try { playAcousticTick(900, 0.04); } catch (err) {}

      filterTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      const filter = (tab.getAttribute('data-filter') || 'all').trim().toLowerCase();

      pricingCards.forEach(card => {
        const cat = (card.getAttribute('data-category') || '').trim().toLowerCase();
        if (filter === 'all' || cat === filter) {
          card.style.display = '';
          card.style.opacity = '1';
          card.style.transform = 'translateY(0)';
        } else {
          card.style.display = 'none';
          card.style.opacity = '0';
          card.style.transform = 'translateY(8px)';
        }
      });
    });
  });

  // 2. Select Package Flow -> Direct WhatsApp with Package-specific Prefilled Text
  selectPackageBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      try { playAcousticTick(1100, 0.07); } catch (err) {}

      const planName = btn.getAttribute('data-plan-name') || 'Website';
      const planPrice = btn.getAttribute('data-plan-price') || '';
      const planId = btn.getAttribute('data-plan-id') || '';
      let targetUrl = btn.getAttribute('data-whatsapp-url') || btn.getAttribute('href');

      if (!targetUrl || targetUrl === '#' || !targetUrl.includes('wa.me')) {
        let msg = `Hi Blue Hour Creative Studios, I would like to get started with the *${planName}* package [${planPrice}].\n\n`;
        if (planId === 'website_starter') {
          msg += `• Scope: Up to 5 Custom-Designed Responsive Pages\n• Includes 1 Year Domain charges (.com / .in)\n• Includes 1 Year Free Maintenance & Bug Solving Support\n\nPlease let me know the onboarding steps and how we can get started!`;
        } else if (planId === 'website_cms') {
          msg += `• Scope: Website + Custom CMS & Payment Gateway\n• Includes 1 Year Domain charges (.com / .in)\n• Includes 1 Year Free Maintenance & Bug Solving Support\n\nPlease share the project onboarding timeline!`;
        } else if (planId === 'social_mgmt') {
          msg += `• Scope: Social Media Channel Management (12 Posts + 4 Cinematic Reels/mo)\n• Strategy & Content Direction\n\nLet's schedule a kickoff call to review our channels!`;
        } else if (planId === 'digital_growth') {
          msg += `• Scope: Complete Digital Growth Retainer (Content, Paid Ads & SEO)\n\nPlease let me know how we can initiate the growth campaign!`;
        } else if (planId === 'mobile_app') {
          msg += `• Scope: Cross-Platform Native Mobile App (Android + iOS)\n\nLet's discuss our mobile app roadmap and timeline!`;
        } else {
          msg += `Please let me know the next steps to get started!`;
        }
        targetUrl = `https://wa.me/917002201534?text=${encodeURIComponent(msg)}`;
      }

      // If it is an anchor tag with href, allow standard native navigation to new tab
      if (btn.tagName.toLowerCase() === 'a' && btn.getAttribute('href') && btn.getAttribute('href') !== '#') {
        // Native link handles open
        return;
      }

      // Fallback for button element
      e.preventDefault();
      window.open(targetUrl, '_blank', 'noopener,noreferrer');
    });
  });
}

/* -------------------------------------------------------------------------
   20. TEAM CONSULTATION DIRECT FLOW
   ------------------------------------------------------------------------- */
function initTeamInteractions() {
  const consultBtns = document.querySelectorAll('.btn-team-consult');
  const clientMessageTextarea = document.getElementById('clientMessage');
  const contactSection = document.getElementById('contact');

  consultBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      try { playAcousticTick(1150, 0.08); } catch (err) {}

      const name = btn.getAttribute('data-member-name') || '';
      const role = btn.getAttribute('data-member-role') || '';

      if (clientMessageTextarea) {
        clientMessageTextarea.value = `I would like to schedule a strategic consultation directly with ${name} (${role}) to discuss our upcoming project requirements.`;
      }

      // Auto-select relevant discipline radio if present
      if (name.includes('Himon')) {
        const webRadio = document.querySelector('input[name="service"][value="Custom Web & SaaS Development"]');
        if (webRadio) webRadio.checked = true;
      } else if (name.includes('Darshana')) {
        const socialRadio = document.querySelector('input[name="service"][value="Social Media Marketing & Growth"]');
        if (socialRadio) socialRadio.checked = true;
      }

      if (contactSection) {
        e.preventDefault();
        contactSection.scrollIntoView({ behavior: 'smooth' });

        const formCard = document.querySelector('.contact-card-editorial');
        if (formCard) {
          formCard.style.transition = 'box-shadow 0.4s ease, border-color 0.4s ease';
          formCard.style.borderColor = 'var(--accent-champagne)';
          formCard.style.boxShadow = '0 0 35px rgba(226, 177, 89, 0.3)';
          setTimeout(() => {
            formCard.style.borderColor = '';
            formCard.style.boxShadow = '';
          }, 1600);
        }

        setTimeout(() => {
          const nameInput = document.getElementById('clientName');
          if (nameInput) nameInput.focus();
        }, 600);
      } else {
        window.location.href = `contact.php?consult=${encodeURIComponent(name)}`;
      }
    });
  });
}

/* -------------------------------------------------------------------------
   21. CREATIVE ARCHITECTURAL PRELOADER LOGIC
   ------------------------------------------------------------------------- */
function initCreativePreloader() {
  const preloader = document.getElementById('sitePreloader');
  if (!preloader) return;

  try {
    if (sessionStorage.getItem('bh_preloader_seen')) {
      preloader.style.display = 'none';
      preloader.classList.add('is-loaded');
      return;
    }
    sessionStorage.setItem('bh_preloader_seen', 'true');
  } catch (e) {}

  const progressBar = document.getElementById('preloaderProgressBar');
  const counter = document.getElementById('preloaderCounter');
  const statusText = document.getElementById('preloaderStatusText');

  const messages = [
    '01 // INITIALIZING EDGE ARCHITECTURE...',
    '02 // SYNCHRONIZING BESPOKE SHADERS...',
    '03 // ORCHESTRATING BRAND ACCELERATION...',
    '04 // BLUE HOUR STUDIO READY'
  ];

  let progress = 0;
  let msgIdx = 0;

  const interval = setInterval(() => {
    progress += Math.floor(Math.random() * 12) + 6;
    if (progress > 100) progress = 100;

    if (progressBar) progressBar.style.width = `${progress}%`;
    if (counter) counter.textContent = `${progress}%`;

    const expectedIdx = Math.min(Math.floor((progress / 100) * messages.length), messages.length - 1);
    if (expectedIdx !== msgIdx) {
      msgIdx = expectedIdx;
      if (statusText) statusText.textContent = messages[msgIdx];
    }

    if (progress >= 100) {
      clearInterval(interval);
      setTimeout(() => {
        preloader.classList.add('is-loaded');
        try {
          if (window.playLuxuryClick) {
            window.playLuxuryClick(1050, 'sine', 0.08);
          }
        } catch (e) {}
      }, 240);
    }
  }, 30);
}
