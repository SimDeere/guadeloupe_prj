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
            /* Styles pour les liens d'impression */
            .print-links {
                display: inline-block;
                margin-left: 20px;
            }
            
            .print-link {
                display: inline-flex;
                align-items: center;
                background-color: #f0f0f0;
                color: #333;
                padding: 5px 10px;
                border-radius: 4px;
                text-decoration: none;
                font-size: 0.9em;
                border: 1px solid #ddd;
                transition: all 0.2s ease;
            }
            
            .print-link:hover {
                background-color: #e0e0e0;
                border-color: #ccc;
            }
            
            .print-link img {
                width: 16px;
                height: 16px;
                margin-right: 5px;
            }
            
            @media print {
                .print-links {
                    display: none;
                }
            }
        }
    </style>
</head>
<body class="<?php echo $device_class; ?>">
    <header>
        <div id="countdown" class="elfsight-countdown-container">
            <div class="elfsight-countdown-inline">
                <div class="elfsight-countdown-text">Décollage pour la Guadeloupe dans</div>
                <div class="elfsight-countdown-timer">
                    <span id="countdown-days" class="elfsight-countdown-value">00</span><span class="elfsight-countdown-label">J</span>
                    <span class="elfsight-countdown-separator"> : </span>
                    <span id="countdown-hours" class="elfsight-countdown-value">00</span><span class="elfsight-countdown-label">H</span>
                    <span class="elfsight-countdown-separator"> : </span>
                    <span id="countdown-minutes" class="elfsight-countdown-value">00</span><span class="elfsight-countdown-label">M</span>
                    <span class="elfsight-countdown-separator"> : </span>
                    <span id="countdown-seconds" class="elfsight-countdown-value">00</span><span class="elfsight-countdown-label">S</span>
                </div>
                <div class="elfsight-countdown-info">(Vol du 14/02/2026 à 11h45)</div>
            </div>
        </div>

        <h1><?php echo $site_config['site_title']; ?></h1>
        <p class="subtitle"><?php echo $site_config['site_subtitle']; ?></p>
        
        <nav class="main-nav">
            <a href="index.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Planning</a>
            <a href="liste_affaires.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'liste_affaires.php' ? 'active' : ''; ?>">Liste des affaires</a>
            <div class="print-links">
                <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
                    <a href="planning_print.php" class="print-link" target="_blank" title="Version imprimable">
                        <img src="images/print-icon.png" alt="Imprimer" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2224%22 height=%2224%22 viewBox=%220 0 24 24%22><path fill=%22%23333%22 d=%22M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z%22/></svg>'">
                        Version imprimable
                    </a>
                <?php elseif (basename($_SERVER['PHP_SELF']) == 'liste_affaires.php'): ?>
                    <a href="liste_affaires_print.php" class="print-link" target="_blank" title="Version imprimable">
                        <img src="images/print-icon.png" alt="Imprimer" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2224%22 height=%2224%22 viewBox=%220 0 24 24%22><path fill=%22%23333%22 d=%22M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z%22/></svg>'">
                        Version imprimable
                    </a>
                <?php endif; ?>
            </div>
        </nav>
        
        <div class="info-box">
            <h3>Informations pratiques</h3>
            <p><?php echo $site_config['logement']; ?></p>
            <p><?php echo $site_config['transport']; ?></p>
        </div>
    </header>
    
    <div class="container">