<?php
/**
 * En-tête du site Voyage en Guadeloupe
 * 
 * Ce fichier contient l'en-tête HTML commun à toutes les pages
 */

// Inclure les fichiers nécessaires
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Déterminer le type d'appareil pour les optimisations
$device_type = get_device_type();
$device_class = get_device_class();

// Titre de la page (peut être personnalisé par chaque page)
$page_title = isset($page_title) ? get_page_title($page_title) : get_page_title();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <?php echo get_responsive_meta_tags(); ?>
    <title><?php echo $page_title; ?></title>
    
    <!-- Meta tags pour iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Voyage Guadeloupe">
    <meta name="format-detection" content="telephone=no">
    
    <!-- Préchargement des polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Feuille de style principale -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Fond des Caraïbes -->
    <link rel="stylesheet" href="css/caribbean-background.css">
    
    <!-- Feuille de style spécifique à l'appareil -->
    <?php if (is_mobile()): ?>
    <link rel="stylesheet" href="css/mobile.css">
    <?php elseif (is_tablet()): ?>
    <link rel="stylesheet" href="css/tablet.css">
    <?php else: ?>
    <link rel="stylesheet" href="css/desktop.css">
    <?php endif; ?>
    
    <!-- Meta tags pour SEO -->
    <meta name="description" content="<?php echo $site_config['site_description']; ?>">
    <meta name="author" content="<?php echo $site_config['site_author']; ?>">
    
    <!-- Meta tags pour les réseaux sociaux -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $site_config['site_description']; ?>">
    <meta property="og:type" content="website">
    
    <!-- Favicon et icônes pour iOS -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon.ico">
    <link rel="apple-touch-icon" sizes="167x167" href="images/favicon.ico">
    
    <!-- Scripts JavaScript -->
    <script src="js/main.js" defer></script>
    <script src="js/countdown.js" defer></script>
    
    <style>
        /* Variables CSS pour les couleurs du thème */
        :root {
            --primary-color: <?php echo $theme_colors['primary']; ?>;
            --secondary-color: <?php echo $theme_colors['secondary']; ?>;
            --accent-color: <?php echo $theme_colors['accent']; ?>;
            --green-color: <?php echo $theme_colors['green']; ?>;
            --red-color: <?php echo $theme_colors['red']; ?>;
            --light-bg: <?php echo $theme_colors['light_bg']; ?>;
            --dark-text: <?php echo $theme_colors['dark_text']; ?>;
        }
    </style>
</head>
<body class="<?php echo $device_class; ?>">
    <header>
        <div id="countdown" class="elfsight-countdown-container">
            <div class="elfsight-countdown-inline">
                <div class="elfsight-countdown-text">Décollage pour la Guadeloupe dans</div>
                <div class="elfsight-countdown-timer">
                    <div class="elfsight-countdown-item">
                        <div id="countdown-days" class="elfsight-countdown-value">00</div>
                        <div class="elfsight-countdown-label">J</div>
                    </div>
                    <div class="elfsight-countdown-separator">:</div>
                    <div class="elfsight-countdown-item">
                        <div id="countdown-hours" class="elfsight-countdown-value">00</div>
                        <div class="elfsight-countdown-label">H</div>
                    </div>
                    <div class="elfsight-countdown-separator">:</div>
                    <div class="elfsight-countdown-item">
                        <div id="countdown-minutes" class="elfsight-countdown-value">00</div>
                        <div class="elfsight-countdown-label">M</div>
                    </div>
                    <div class="elfsight-countdown-separator">:</div>
                    <div class="elfsight-countdown-item">
                        <div id="countdown-seconds" class="elfsight-countdown-value">00</div>
                        <div class="elfsight-countdown-label">S</div>
                    </div>
                </div>
                <div class="elfsight-countdown-info">(Vol du 14/02/2026 à 11h45)</div>
            </div>
        </div>

        <h1><?php echo $site_config['site_title']; ?></h1>
        <p class="subtitle"><?php echo $site_config['site_subtitle']; ?></p>
        
        <nav class="main-nav">
            <a href="index.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Planning</a>
            <a href="liste_affaires.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'liste_affaires.php' ? 'active' : ''; ?>">Liste des affaires</a>
        </nav>
        
        <div class="info-box">
            <h3>Informations pratiques</h3>
            <p><?php echo $site_config['logement']; ?></p>
            <p><?php echo $site_config['transport']; ?></p>
        </div>
    </header>
    
    <div class="container">