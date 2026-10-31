<?php
/**
 * Blue Hour Creative Studios - Vercel Serverless Entrypoint & Edge Front Controller
 */

// Set working directory to project root
chdir(dirname(__DIR__));

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($requestUri, PHP_URL_PATH);
$path = trim($path, '/');

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
    'contact'         => 'contact.php',
    'contact.php'     => 'contact.php',
    'inquiry'         => 'contact.php',
    'api/contact'     => 'api/contact.php',
    'api/contact.php' => 'api/contact.php',
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
