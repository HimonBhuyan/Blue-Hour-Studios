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
</head>
<body>

  <!-- Root Barrel Style Header Navigation -->
  <header class="site-header" id="siteHeader">
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
  </header>
