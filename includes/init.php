<?php
/**
 * Blue Hour Creative Studios - Global Environment & Data Initialization
 */

$agencyDataFile = __DIR__ . '/../data/agency.json';
$agencyData = [];

if (file_exists($agencyDataFile)) {
    $raw = file_get_contents($agencyDataFile);
    $agencyData = json_decode($raw, true) ?? [];
}

$agency = $agencyData['agency'] ?? [];
$services = $agencyData['services'] ?? [];
$projects = $agencyData['projects'] ?? [];
$pillars = $agencyData['marketing_pillars'] ?? [];
$testimonials = $agencyData['testimonials'] ?? [];
$stats = $agencyData['stats'] ?? [];
$pricingData = $agencyData['pricing_packages'] ?? [];
$pricingCategories = $pricingData['categories'] ?? [];
$transparentCosts = $pricingData['transparent_costs'] ?? [];
$keyTerms = $pricingData['key_terms'] ?? [];
$team = $agencyData['team'] ?? [];

// Helper to determine active nav class
function navActive($current, $target) {
    return ($current === $target) ? 'active' : '';
}

// Helper to generate customized prefilled WhatsApp URLs for each package
function getPackageWhatsAppUrl($plan) {
    $planName = $plan['name'] ?? 'Package';
    $planPrice = $plan['price'] ?? '';
    $billing = !empty($plan['billing']) ? ' (' . $plan['billing'] . ')' : '';
    $planId = $plan['id'] ?? '';

    $text = "Hi Blue Hour Creative Studios, I would like to get started with the *" . $planName . "* package [" . $planPrice . $billing . "].\n\n";

    if ($planId === 'website_starter') {
        $text .= "• Scope: Up to 5 Custom-Designed Responsive Pages\n";
        $text .= "• Includes 1 Year Domain charges (.com / .in)\n";
        $text .= "• Includes 1 Year Free Maintenance & Bug Solving Support\n\n";
        $text .= "Please let me know the onboarding steps and how we can get started!";
    } elseif ($planId === 'website_cms') {
        $text .= "• Scope: Website + Custom CMS & Payment Gateway\n";
        $text .= "• Includes 1 Year Domain charges (.com / .in)\n";
        $text .= "• Includes 1 Year Free Maintenance & Bug Solving Support\n\n";
        $text .= "Please share the project onboarding timeline!";
    } elseif ($planId === 'social_mgmt') {
        $text .= "• Scope: Social Media Channel Management (12 Posts + 4 Cinematic Reels/mo)\n";
        $text .= "• Strategy & Content Direction\n\n";
        $text .= "Let's schedule a kickoff call to review our channels!";
    } elseif ($planId === 'digital_growth') {
        $text .= "• Scope: Complete Digital Growth Retainer (Content, Paid Ads & SEO)\n\n";
        $text .= "Please let me know how we can initiate the growth campaign!";
    } elseif ($planId === 'mobile_app') {
        $text .= "• Scope: Cross-Platform Native Mobile App (Android + iOS)\n\n";
        $text .= "Let's discuss our mobile app roadmap and timeline!";
    } else {
        $text .= "Please let me know the next steps to get started!";
    }

    return "https://wa.me/917002201534?text=" . rawurlencode($text);
}
