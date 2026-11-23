<?php
/**
 * Blue Hour Creative Studios - Global Header & Navigation Capsule
 *
 * @var string $pageTitle (optional)
 * @var string $pageDesc (optional)
 * @var string $activePage ('home'|'services'|'works'|'pricing'|'team'|'contact')
 * @var array  $agency
 */

$currentPage = $activePage ?? 'home';
$baseUrl = 'https://theblue-hour-studios.vercel.app';

$canonicalPathMap = [
    'home'     => '/',
    'services' => '/services',
    'works'    => '/portfolio/',
    'pricing'  => '/pricing',
    'team'     => '/team',
    'contact'  => '/contact/',
];
$canonicalPath = !empty($customCanonicalPath)
    ? $customCanonicalPath
    : ($canonicalPathMap[$currentPage] ?? '/');
$canonicalUrl = $baseUrl . $canonicalPath;

$scriptDir = isset($_SERVER['SCRIPT_NAME']) ? str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])) : '/';
$baseHref = ($scriptDir === '/api' || $scriptDir === '.' || $scriptDir === '/') ? '/' : rtrim($scriptDir, '/') . '/';

$title = !empty($pageTitle) 
    ? ($currentPage === 'home' ? $pageTitle : $pageTitle . ' | Blue Hour Creative Studios')
    : 'Blue Hour Creative Studios | Web Development & Digital Marketing';

$description = !empty($pageDesc)
    ? $pageDesc
    : 'Blue Hour Creative Studios is an artisanal software engineering & viral digital growth studio. We craft high-performance web applications, luxury e-commerce engines, and high-ROAS marketing campaigns.';

$ogDescription = !empty($pageOgDesc) ? $pageOgDesc : $description;
$ogImage = $baseUrl . '/og-image.jpg';
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <base href="<?= htmlspecialchars($baseHref) ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($title) ?></title>

  <meta name="description" content="<?= htmlspecialchars($description) ?>" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Blue Hour Creative Studios" />
  <meta property="og:title" content="<?= htmlspecialchars($title) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($ogDescription) ?>" />
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>" />
  <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>" />

  <!-- Google Fonts: Caveat & Kalam (Handwritten), Plus Jakarta Sans & Space Grotesk (Body/Display), JetBrains Mono -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;600;700&family=Kalam:wght@400;700&family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- FontAwesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico?v=20261123">

  <!-- Master Artisanal Stylesheet with Cache Buster -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?= file_exists(__DIR__ . '/../assets/css/style.css') ? filemtime(__DIR__ . '/../assets/css/style.css') : '20261123' ?>">
  <script>
    (function() {
      try {
        var saved = localStorage.getItem('bh_bulb_theme') || 'dark';
        document.documentElement.setAttribute('data-theme', saved);
      } catch (e) {}
    })();
  </script>
</head>
<body>

  <!-- ========================================================================
       ARTISANAL FRONT LOADING SCREEN (BLUE HOUR STUDIO PRELOADER)
       ======================================================================== -->
  <div class="bh-preloader" id="bhPreloader" aria-label="Loading Blue Hour Creative Studios">
    <div class="bh-preloader-ambient"></div>
    
    <div class="bh-preloader-stage">
      <!-- Rotating Outer Artisanal Seal Ring -->
      <div class="bh-preloader-halo">
        <svg class="bh-preloader-ring-svg" viewBox="0 0 220 220" fill="none">
          <path id="preloaderRingPath" d="M 110, 110 m -86, 0 a 86,86 0 1,1 172,0 a 86,86 0 1,1 -172,0" fill="none"/>
          <circle cx="110" cy="110" r="102" stroke="rgba(232, 141, 56, 0.25)" stroke-width="1.5" stroke-dasharray="6 5"/>
          <circle cx="110" cy="110" r="70" stroke="rgba(255, 253, 249, 0.1)" stroke-width="1"/>
          <text fill="rgba(232, 141, 56, 0.72)" font-family="JetBrains Mono, monospace" font-size="9.5" font-weight="600" letter-spacing="3.4">
            <textPath href="#preloaderRingPath">★ BLUE HOUR CREATIVE STUDIOS ★ GUWAHATI &amp; NEW DELHI</textPath>
          </text>
        </svg>
      </div>

      <!-- Pinned Polaroid / Kraft Logo Emblem -->
      <div class="bh-preloader-polaroid">
        <span class="washi-tape washi-tape-top" style="width: 72px; height: 22px; top: -11px;"></span>
        <div class="bh-preloader-logo-box">
          <img src="assets/images/blue_hour_full.png?v=20261123" alt="Blue Hour Creative Studios" class="bh-preloader-logo-img" onerror="this.src='assets/images/blue_hour_symbol.png'">
        </div>
        <div class="bh-preloader-chin">
          <span class="bh-preloader-tagline">Good Code. Great Design. Iconic Brands.</span>
        </div>
      </div>

      <!-- Progress Bar & Handwritten Counter -->
      <div class="bh-preloader-progress-wrap">
        <div class="bh-preloader-meta">
          <span class="bh-preloader-status" id="bhPreloaderStatus">Developing Darkroom Prints...</span>
          <span class="bh-preloader-percent" id="bhPreloaderPercent">0%</span>
        </div>
        <div class="bh-preloader-track">
          <div class="bh-preloader-bar" id="bhPreloaderBar"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- ========================================================================
       ARTISANAL STUDIO ATMOSPHERE ENGINE
       (Edison Firefly Canvas, Warm Amber Orbs, Chalkboard Grid & Organic Grain)
       ======================================================================== -->
  <div class="studio-ambient-stage" aria-hidden="true">
    <div class="studio-board-texture"></div>
    <div class="studio-blueprint-grid"></div>
    <div class="studio-aurora-orb orb-amber-1" id="auroraOrb1"></div>
    <div class="studio-aurora-orb orb-copper-2" id="auroraOrb2"></div>
    <div class="studio-aurora-orb orb-gold-3" id="auroraOrb3"></div>
    <canvas id="ambientInteractiveCanvas" class="studio-firefly-canvas"></canvas>
    <div class="studio-film-grain"></div>
  </div>

  <!-- Root Barrel Style Header Navigation -->
  <header class="site-header" id="siteHeader">
    <!-- Top Scroll Progress Ribbon -->
    <div class="scroll-progress-track" aria-hidden="true">
      <div class="scroll-progress-bar" id="scrollProgressBar"></div>
    </div>
    <div class="container">
      <div class="nav-row">
        
        <a href="index.php" class="brand-badge" aria-label="Blue Hour Creative Studios Home">
          <img src="assets/images/blue_hour_symbol.png?v=20261123" alt="Blue Hour Studios Logo">
          <div class="brand-wordmark">
            <span>BLUE HOUR.</span>
            <span>CREATIVE STUDIOS</span>
          </div>
        </a>

        <nav>
          <ul class="nav-links" id="navMenu">
            <li><a href="index.php" class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>">Home</a></li>
            <li><a href="services.php" class="nav-link <?= $currentPage === 'services' ? 'active' : '' ?>">Disciplines</a></li>
            <li><a href="works.php" class="nav-link <?= $currentPage === 'works' ? 'active' : '' ?>">Works</a></li>
            <li><a href="pricing.php" class="nav-link <?= $currentPage === 'pricing' ? 'active' : '' ?>">Pricing</a></li>
            <li><a href="team.php" class="nav-link <?= $currentPage === 'team' ? 'active' : '' ?>">About</a></li>
            <li><a href="contact.php" class="nav-link <?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a></li>
          </ul>
        </nav>

        <div class="nav-actions">
          <a href="contact.php" class="btn-reserve-table">
            <i class="fa-regular fa-calendar-check" style="color: var(--accent-orange);"></i>
            <span>Reserve a Brief</span>
          </a>
          <button type="button" class="menu-toggle-btn" id="mobileMenuBtn" aria-label="Toggle Menu">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>

      </div>
    </div>

    <!-- ======================================================================
         INTERACTIVE HANGING PULL-CHAIN EDISON BULB (THEME SWITCHER)
         Pull down or click to toggle Studio Night vs Daylight Paper Theme
         ====================================================================== -->
    <div class="pull-bulb-fixture" id="pullBulbFixture" role="button" tabindex="0" aria-label="Pull bulb cord to switch studio lighting theme" title="Pull down or click to switch Studio Lighting!">
      <div class="pull-bulb-assembly" id="pullBulbAssembly">
        <svg class="pull-bulb-svg" viewBox="0 0 80 185" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <radialGradient id="edisonLampGlow" cx="50%" cy="48%" r="50%">
              <stop offset="0%" stop-color="#FFE4A0" stop-opacity="0.95"/>
              <stop offset="45%" stop-color="#F6A83B" stop-opacity="0.45"/>
              <stop offset="100%" stop-color="#E88D38" stop-opacity="0"/>
            </radialGradient>
            <linearGradient id="brassSocket" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" stop-color="#9A7438"/>
              <stop offset="50%" stop-color="#E5C178"/>
              <stop offset="100%" stop-color="#7D5B26"/>
            </linearGradient>
          </defs>

          <!-- Top braided electrical cord from ceiling -->
          <line x1="40" y1="0" x2="40" y2="26" stroke="#4A3B2C" stroke-width="3.5" stroke-linecap="round"/>

          <!-- Ambient Bulb Halo Glow -->
          <circle class="bulb-ambient-halo" cx="40" cy="64" r="38" fill="url(#edisonLampGlow)"/>

          <!-- Vintage Brass Socket & Switch Key -->
          <rect x="31" y="24" width="18" height="8" rx="2" fill="url(#brassSocket)"/>
          <rect x="29" y="31" width="22" height="11" rx="2" fill="url(#brassSocket)"/>
          <rect x="49" y="34" width="7" height="4" rx="2" fill="#C9A259"/>

          <!-- Teardrop Edison Glass Envelope -->
          <path class="bulb-glass-shell" d="M29 42 C24 50, 21 58, 22 67 C23 79, 31 87, 40 87 C49 87, 57 79, 58 67 C59 58, 56 50, 51 42 Z" fill="rgba(255, 232, 185, 0.18)" stroke="rgba(255, 220, 160, 0.75)" stroke-width="1.6"/>

          <!-- Glowing Vintage Squirrel-Cage Edison Filament -->
          <path class="bulb-filament-wire" d="M35 42 L35 58 C35 66, 32 72, 36 75 C39 77, 41 77, 44 75 C48 72, 45 66, 45 58 L45 42" stroke="#FFD67A" stroke-width="2" stroke-linecap="round" fill="none"/>
          <path class="bulb-filament-core" d="M37 56 Q40 70 43 56" stroke="#FFF9E6" stroke-width="1.5" stroke-linecap="round" fill="none"/>

          <!-- Pull-Chain Cord & Brass Beaded Chain (Stretches on pull) -->
          <g class="bulb-pull-chain-group" id="bulbPullChainGroup">
            <line id="bulbCordLine" x1="40" y1="87" x2="40" y2="146" stroke="#D8B46E" stroke-width="2" stroke-dasharray="2 3.5" stroke-linecap="round"/>
            <!-- Brass Acorn Pull Handle -->
            <g id="bulbAcornHandle" transform="translate(0, 0)">
              <circle cx="40" cy="146" r="3.5" fill="#E5C178"/>
              <path d="M33 151 C33 148, 47 148, 47 151 L45 167 C45 172, 35 172, 35 167 Z" fill="url(#brassSocket)" stroke="#FFF3D1" stroke-width="0.8"/>
              <circle cx="40" cy="172" r="2.2" fill="#E5C178"/>
            </g>
          </g>
        </svg>
        <span class="pull-bulb-tooltip" id="pullBulbTooltip">Pull me!</span>
      </div>
    </div>
  </header>
