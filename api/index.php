<?php
/**
 * Blue Hour Creative Studios - Vercel Serverless Entrypoint & Edge Front Controller
 */

// Set working directory to project root
chdir(dirname(__DIR__));

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($requestUri, PHP_URL_PATH);
$path = trim($path, '/');

// Serve Google Search Console verification file directly
if ($path === 'googlefb1d7f6a60216a85.html') {
    header('Content-Type: text/html; charset=utf-8');
    echo 'google-site-verification: googlefb1d7f6a60216a85.html';
    exit;
}

// Serve robots.txt and sitemap.xml directly
if ($path === 'robots.txt' && file_exists(dirname(__DIR__) . '/robots.txt')) {
    header('Content-Type: text/plain; charset=utf-8');
    readfile(dirname(__DIR__) . '/robots.txt');
    exit;
}
if ($path === 'sitemap.xml' && file_exists(dirname(__DIR__) . '/sitemap.xml')) {
    header('Content-Type: application/xml; charset=utf-8');
    readfile(dirname(__DIR__) . '/sitemap.xml');
    exit;
}

// Serve og-image.jpg directly if requested through front controller
if ($path === 'og-image.jpg' || $path === 'public/og-image.jpg') {
    $ogFile = dirname(__DIR__) . '/assets/images/og-image.jpg';
    if (file_exists($ogFile)) {
        header('Content-Type: image/jpeg');
        header('Cache-Control: public, max-age=31536000, immutable');
        readfile($ogFile);
        exit;
    }
}

// Explicitly send text/html header so browser never treats output as a downloadable binary
if (!headers_sent() && strpos($path, 'api/') !== 0) {
    header('Content-Type: text/html; charset=utf-8');
}

// Security: Prevent direct web access to sensitive internal directories & files
$blockedPrefixes = ['data', 'storage', 'includes', '.git', '.env', '.htaccess'];
foreach ($blockedPrefixes as $prefix) {
    if ($path === $prefix || strpos($path, $prefix . '/') === 0) {
        http_response_code(403);
        echo 'Access Denied';
        exit;
    }
}

// Map clean and traditional routes to physical PHP files
$routeMap = [
    ''                => 'index.php',
    'index'           => 'index.php',
    'index.php'       => 'index.php',
    'home'            => 'index.php',
    'services'        => 'services.php',
    'services.php'    => 'services.php',
    'capabilities'    => 'services.php',
    'works'           => 'works.php',
    'works.php'       => 'works.php',
    'portfolio'       => 'works.php',
    'pricing'         => 'pricing.php',
    'pricing.php'     => 'pricing.php',
    'packages'        => 'pricing.php',
    'team'            => 'team.php',
    'team.php'        => 'team.php',
    'contact'                     => 'contact.php',
    'contact.php'                 => 'contact.php',
    'inquiry'                     => 'contact.php',
    'website-development'         => 'website-development.php',
    'website-development.php'     => 'website-development.php',
    'ecommerce-development'       => 'ecommerce-development.php',
    'ecommerce-development.php'   => 'ecommerce-development.php',
    'social-media-management'     => 'social-media-management.php',
    'social-media-management.php' => 'social-media-management.php',
    'branding-design'             => 'branding-design.php',
    'branding-design.php'         => 'branding-design.php',
    'seo-digital-marketing'       => 'seo-digital-marketing.php',
    'seo-digital-marketing.php'   => 'seo-digital-marketing.php',
    'api/contact'                 => 'api/contact.php',
    'api/contact.php'             => 'api/contact.php',
];

if (isset($routeMap[$path])) {
    $targetFile = dirname(__DIR__) . '/' . $routeMap[$path];
    if (file_exists($targetFile)) {
        require $targetFile;
        exit;
    }
}

// Fallback for direct script execution if matching safe php file exists
if (!empty($path)) {
    $potentialFile = dirname(__DIR__) . '/' . $path;
    if (is_file($potentialFile) && pathinfo($potentialFile, PATHINFO_EXTENSION) === 'php') {
        require $potentialFile;
        exit;
    }
}

// Fallback to index.php
require dirname(__DIR__) . '/index.php';
