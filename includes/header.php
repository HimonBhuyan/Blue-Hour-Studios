<?php
/**
 * Blue Hour Creative Studios - Global Header & Navigation Capsule
 *
 * Expected variables:
 * @var string $pageTitle (optional)
 * @var string $pageDesc (optional)
 * @var string $activePage ('home'|'services'|'works'|'pricing'|'team'|'contact')
 * @var array  $agency
 */

$title = !empty($pageTitle) 
    ? $pageTitle . ' — ' . ($agency['name'] ?? 'Blue Hour Creative Studios')
    : ($agency['name'] ?? 'Blue Hour Creative Studios') . ' — Software Engineering & Viral Brand Growth';

$description = !empty($pageDesc)
    ? $pageDesc
    : 'Blue Hour Creative Studios is a hybrid creative technology powerhouse. We architect bespoke high-performance web applications, enterprise ERPs, and hyper-growth social media campaigns.';

$currentPage = $activePage ?? 'home';
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title) ?></title>

  <!-- Immediate Theme Initializer (Default: White / Porcelain Light Mode) -->
  <script>
    (function() {
      try {
        var saved = localStorage.getItem('blue_hour_theme');
        var theme = saved ? saved : 'light';
        document.documentElement.setAttribute('data-theme', theme);
      } catch (e) {}
    })();
  </script>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="<?= htmlspecialchars($description) ?>">
  <meta name="keywords" content="Blue Hour Creative Studios, software engineering, web development, SaaS, enterprise ERP, social media agency, performance marketing, high ROAS, Guwahati, New Delhi">
  <meta name="author" content="Blue Hour Creative Studios">
  <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($description) ?>">
  <meta property="og:type" content="website">

  <!-- Precision Google Typography: Space Grotesk, Plus Jakarta Sans, JetBrains Mono -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- FontAwesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Favicons and Touch Icons -->
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="48x48" href="assets/images/favicon-48x48.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">

  <!-- Master Architectural Stylesheet with Cache-Busting -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?= file_exists(__DIR__ . '/../assets/css/style.css') ? filemtime(__DIR__ . '/../assets/css/style.css') : time() ?>">
</head>
<body>

<?php if ($currentPage === 'home'): ?>
  <!-- ========================================================================
       CREATIVE ARCHITECTURAL PRELOADER - BLUE HOUR TWILIGHT AURA (FIRST LOAD HOMEPAGE ONLY)
       ======================================================================== -->
  <div class="creative-preloader" id="sitePreloader" aria-hidden="true">
    <script>
      // Immediately hide preloader before paint if already seen in this session
      try {
        if (sessionStorage.getItem('bh_preloader_seen')) {
          document.getElementById('sitePreloader').style.display = 'none';
        }
      } catch (e) {}
    </script>
    <div class="preloader-backdrop-glow"></div>
    
    <div class="preloader-core">
      <!-- Animated Ribbon Monogram & Orbital Halo -->
      <div class="preloader-symbol-wrap">
        <div class="preloader-halo-ring"></div>
        <div class="preloader-halo-ring-outer"></div>
        <img src="assets/images/blue_hour_symbol.png" alt="Blue Hour Creative Studios" class="preloader-symbol-img">
      </div>

      <!-- Typography Wordmark -->
      <div class="preloader-brand-title">
        <span class="preloader-wordmark">BLUE HOUR<span>.</span></span>
        <span class="preloader-kicker">CREATIVE STUDIOS</span>
      </div>

      <!-- Live Dynamic Status Telemetry -->
      <div class="preloader-status-strip">
        <span class="preloader-status-dot"></span>
        <span class="preloader-status-text" id="preloaderStatusText">INITIALIZING EDGE ARCHITECTURE...</span>
      </div>

      <!-- Minimalist Hairline Progress Bar & Counter -->
      <div class="preloader-progress-track">
        <div class="preloader-progress-fill" id="preloaderProgressBar"></div>
      </div>
      <div class="preloader-counter-row">
        <span class="preloader-latency">Q4/2026 ACTIVE</span>
        <span class="preloader-counter" id="preloaderCounter">0%</span>
      </div>
    </div>
  </div>
<?php endif; ?>

  <!-- Cinematic Film Grain Overlay Texture -->
  <div class="cinematic-grain-overlay" aria-hidden="true"></div>

  <!-- Dynamic Cursor Badge Follower for Project Cards -->
  <div class="cursor-badge-follower" id="cursorFollower" aria-hidden="true">
    <span>VIEW BLUEPRINT</span>
    <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.6rem;"></i>
  </div>

  <!-- Cursor Spotlight Ambient Glow -->
  <div class="cursor-spotlight" id="cursorSpotlight" aria-hidden="true"></div>

  <!-- Editorial Atmospheric Canvas & Live Interactive Dynamic Mesh -->
  <div class="editorial-ambient-canvas" aria-hidden="true">
    <div class="ambient-glow-top"></div>
    <div class="ambient-aurora-orb ambient-orb-1" id="auroraOrb1"></div>
    <div class="ambient-aurora-orb ambient-orb-2" id="auroraOrb2"></div>
    <div class="ambient-grid-lines"></div>
    <canvas id="ambientInteractiveCanvas" class="ambient-interactive-canvas"></canvas>
  </div>

  <!-- ========================================================================
       TOP NAVIGATION BAR - MINIMALIST FLOATING GLASS CAPSULE
       ======================================================================== -->
  <header class="site-header" id="siteHeader">
    <div class="nav-capsule">
      <a href="index.php" class="brand-identity" id="brandLogo">
        <div class="brand-logo-wrap">
          <img src="assets/images/blue_hour_symbol.png" alt="Blue Hour Creative Studios" class="brand-logo-img">
        </div>
        <div class="brand-title-wrap">
          <span class="brand-wordmark">BLUE HOUR<span>.</span></span>
          <span class="brand-micro-label">CREATIVE STUDIOS</span>
        </div>
      </a>

      <nav>
        <ul class="nav-links-list" id="navMenu">
          <li><a href="index.php" class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>">Overview</a></li>
          <li><a href="services.php" class="nav-link <?= $currentPage === 'services' ? 'active' : '' ?>">Capabilities</a></li>
          <li><a href="works.php" class="nav-link <?= $currentPage === 'works' ? 'active' : '' ?>">Works</a></li>
          <li><a href="pricing.php" class="nav-link <?= $currentPage === 'pricing' ? 'active' : '' ?>">Pricing</a></li>
          <li><a href="team.php" class="nav-link <?= $currentPage === 'team' ? 'active' : '' ?>">Team</a></li>
          <li><a href="contact.php" class="nav-link <?= $currentPage === 'contact' ? 'active' : '' ?>">Inquiry</a></li>
        </ul>
      </nav>

      <div class="nav-actions">
        <!-- Live Studio Availability Indicator -->
        <div class="live-studio-status" title="Studio is currently onboarding Q4/2026 partner projects">
          <span class="status-dot-pulse"></span>
          <span>Q4 ONBOARDING</span>
        </div>

        <!-- Interactive Acoustic Sound Toggle (Sleek Circle Icon Button) -->
        <button type="button" class="sound-toggle-btn sound-active" id="soundToggleBtn" aria-label="Toggle Acoustic Audio" title="Acoustic Audio: ON">
          <i class="fa-solid fa-volume-high" id="soundIcon"></i>
        </button>

        <!-- 3-Atmosphere Theme Switcher (Porcelain Light -> Dark Obsidian -> Blue Hour Twilight) -->
        <button type="button" class="theme-toggle-btn" id="themeToggleBtn" aria-label="Toggle Atmosphere Mode" title="Atmosphere: Porcelain Light (Click for Dark Obsidian)">
          <i class="fa-solid fa-sun" id="themeIcon"></i>
        </button>

        <a href="contact.php" class="btn btn-primary btn-pill-compact magnetic-btn" id="headerCtaBtn">
          <span>Start Project</span>
          <i class="fa-solid fa-arrow-right" style="font-size: 0.72rem;"></i>
        </a>

        <button class="mobile-toggle" id="mobileMenuBtn" aria-label="Toggle Navigation Menu">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
    </div>
  </header>
