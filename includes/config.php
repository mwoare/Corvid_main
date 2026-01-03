<?php
/**
 * Site-wide configuration and constants
 * Corvid Tax LLC
 */

// Site Information
define('SITE_NAME', 'Corvid Tax');
define('SITE_TAGLINE', 'Tax Preparation, Planning, and Representation');

// Dynamically detect site URL (works on both local and production)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$script_path = dirname($_SERVER['SCRIPT_NAME']);
$base_path = ($script_path == '/' || $script_path == '\\') ? '' : $script_path;
define('SITE_URL', rtrim($protocol . $host . $base_path, '/'));

// Contact Information
define('COMPANY_EMAIL', 'taxhelp@corvidtax.com');
define('COMPANY_PHONE', '(206) 915-9223');
define('COMPANY_ADDRESS', 'PO BOX 56');
define('COMPANY_CITY', 'Mercer Island, WA 98040');
define('SITE_PRINCIPAL', 'Matthew Woare, EA');

// Navigation Items
$nav_items = [
    'Home' => 'index.php',
    'Services' => 'services.php',
    'About' => 'about.php',
    'Contact' => 'contact.php',
    'Client Portal' => 'portal.php'
];

// Get current page name for active navigation highlighting
$current_page = basename($_SERVER['PHP_SELF']);

// Helper function to check if page is active
function isActive($page) {
    global $current_page;
    return ($current_page === $page) ? 'active' : '';
}

// Partner logos with links
$partners = [
    [
        'name' => 'IRS E-file Provider',
        'url' => 'https://www.irs.gov/efile-index-taxpros-search?zip=98040&state=53&ero=All&bureau=All&developer=All&transmitter=All',
        'logo' => 'efile-pro.png'
    ],
    [
        'name' => 'National Society of Enrolled Agents',
        'url' => 'https://webboard.naea.org/expertdirectory/expert?UserKey=92d429c5-121a-4676-a6e7-23201fa0b214',
        'logo' => 'NAEA_Logo.png'
    ],
    [
        'name' => 'Washington Association of Accounting and Tax Professionals',
        'url' => 'https://www.waatp.org/',
        'logo' => 'waatp-logo.png'
    ]
];
?>

