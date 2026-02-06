<?php
/**
 * Fonctions utilitaires pour le site Voyage en Guadeloupe
 * 
 * Ce fichier contient les fonctions réutilisables pour le site
 */

// Inclure le fichier de configuration
require_once 'config.php';

/**
 * Génère le titre de la page
 * 
 * @param string $page_title Titre spécifique de la page
 * @return string Le titre complet formaté
 */
function get_page_title($page_title = '') {
    global $site_config;
    
    if (empty($page_title)) {
        return $site_config['site_title'];
    } else {
        return $page_title . ' | ' . $site_config['site_title'];
    }
}

/**
 * Génère les balises meta pour le responsive design
 * 
 * @return string Les balises meta HTML
 */
function get_responsive_meta_tags() {
    return '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">';
}

/**
 * Génère les liens CSS avec version pour éviter le cache
 * 
 * @param string $css_file Nom du fichier CSS
 * @return string La balise link HTML
 */
function get_css_link($css_file) {
    global $site_config;
    $version = filemtime($site_config['css_path'] . '/' . $css_file);
    return '<link rel="stylesheet" href="' . $site_config['css_path'] . '/' . $css_file . '?v=' . $version . '">';
}

/**
 * Génère les liens JavaScript avec version pour éviter le cache
 * 
 * @param string $js_file Nom du fichier JavaScript
 * @return string La balise script HTML
 */
function get_js_link($js_file) {
    global $site_config;
    $version = filemtime($site_config['js_path'] . '/' . $js_file);
    return '<script src="' . $site_config['js_path'] . '/' . $js_file . '?v=' . $version . '"></script>';
}

/**
 * Sécurise les données entrées par l'utilisateur
 * 
 * @param string $data Les données à sécuriser
 * @return string Les données sécurisées
 */
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Détecte si l'appareil est mobile
 * 
 * @return boolean True si l'appareil est mobile, false sinon
 */
function is_mobile() {
    return get_device_type() === 'mobile';
}

/**
 * Détecte si l'appareil est une tablette
 * 
 * @return boolean True si l'appareil est une tablette, false sinon
 */
function is_tablet() {
    return get_device_type() === 'tablet';
}

/**
 * Détecte si l'appareil est un ordinateur de bureau
 * 
 * @return boolean True si l'appareil est un ordinateur de bureau, false sinon
 */
function is_desktop() {
    return get_device_type() === 'desktop';
}

/**
 * Ajoute une classe CSS en fonction du type d'appareil
 * 
 * @return string La classe CSS correspondant au type d'appareil
 */
function get_device_class() {
    $device = get_device_type();
    return 'device-' . $device;
}

/**
 * Génère une icône avec la classe CSS correspondante
 * 
 * @param string $icon_type Type d'icône (beach, food, activity, evening, travel)
 * @return string La classe CSS de l'icône
 */
function get_icon_class($icon_type) {
    $icon_classes = [
        'beach' => 'beach-icon',
        'food' => 'food-icon',
        'activity' => 'activity-icon',
        'evening' => 'evening-icon',
        'travel' => 'travel-icon'
    ];
    
    return isset($icon_classes[$icon_type]) ? $icon_classes[$icon_type] : '';
}

/**
 * Formate une date en français
 * 
 * @param string $date Date au format Y-m-d
 * @return string Date formatée en français
 */
function format_date_fr($date) {
    $timestamp = strtotime($date);
    $jour = date('j', $timestamp);
    
    $mois_fr = [
        1 => 'janvier', 2 => 'février', 3 => 'mars', 4 => 'avril',
        5 => 'mai', 6 => 'juin', 7 => 'juillet', 8 => 'août',
        9 => 'septembre', 10 => 'octobre', 11 => 'novembre', 12 => 'décembre'
    ];
    
    $mois = $mois_fr[date('n', $timestamp)];
    $jour_semaine_fr = [
        'Monday' => 'Lundi', 'Tuesday' => 'Mardi', 'Wednesday' => 'Mercredi',
        'Thursday' => 'Jeudi', 'Friday' => 'Vendredi', 'Saturday' => 'Samedi', 'Sunday' => 'Dimanche'
    ];
    
    $jour_semaine = $jour_semaine_fr[date('l', $timestamp)];
    
    return $jour_semaine . ' ' . $jour . ' ' . $mois;
}

/**
 * Génère un identifiant unique pour les éléments HTML
 * 
 * @param string $prefix Préfixe de l'identifiant
 * @return string Identifiant unique
 */
function generate_id($prefix = 'element') {
    static $id_counter = 0;
    $id_counter++;
    return $prefix . '-' . $id_counter;
}
?>