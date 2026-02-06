<?php
/**
 * Configuration du site Voyage en Guadeloupe
 * 
 * Ce fichier contient les paramètres de configuration du site
 */

// Informations du site
$site_config = [
    'site_title' => 'Voyage en Guadeloupe',
    'site_subtitle' => '14 - 21 février • Découverte de l\'île papillon',
    'site_description' => 'Planning de voyage en Guadeloupe',
    'site_author' => 'Voyageurs Guadeloupe',
    
    // Informations pratiques
    'logement' => 'Logement à Sainte-Anne"',
    'transport' => '3 voitures de location • 11 personnes (6 adultes, 5 enfants)',
    
    // Paramètres techniques
    'debug_mode' => false,
    'timezone' => 'America/Guadeloupe',
    
    // Chemins des dossiers
    'base_path' => '/temps/Guadeloupe_rep/Mobile_guadeloupe_php',
    'css_path' => '/temps/Guadeloupe_rep/Mobile_guadeloupe_php/css',
    'js_path' => '/temps/Guadeloupe_rep/Mobile_guadeloupe_php/js',
    'images_path' => '/temps/Guadeloupe_rep/Mobile_guadeloupe_php/images',
];

// Configuration des couleurs du thème
$theme_colors = [
    'primary' => '#0077b6',    // Bleu océan
    'secondary' => '#00b4d8',  // Bleu clair
    'accent' => '#ffd166',     // Jaune soleil
    'green' => '#2a9d8f',      // Vert tropical
    'red' => '#e76f51',        // Rouge-orange hibiscus
    'light_bg' => '#f8f9fa',
    'dark_text' => '#264653',
];

// Configuration des appareils pour le responsive design
$device_breakpoints = [
    'mobile_small' => '375px',  // Très petits écrans
    'mobile' => '576px',        // Téléphones mobiles
    'tablet_small' => '768px',  // Petites tablettes
    'tablet' => '992px',        // Tablettes et écrans moyens
    'desktop' => '1200px',      // Grands écrans et desktop
];

// Fonction pour détecter le type d'appareil
function get_device_type() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    
    if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
        return 'mobile';
    } elseif (strpos($user_agent, 'Tablet') !== false || strpos($user_agent, 'iPad') !== false) {
        return 'tablet';
    } else {
        return 'desktop';
    }
}

// Définir le fuseau horaire
date_default_timezone_set($site_config['timezone']);

// Activer/désactiver l'affichage des erreurs selon le mode debug
if ($site_config['debug_mode']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}
?>