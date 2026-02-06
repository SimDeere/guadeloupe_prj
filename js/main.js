/**
 * Script principal pour le site Voyage en Guadeloupe
 * Fonctionnalités interactives et améliorations de l'expérience utilisateur
 */

document.addEventListener('DOMContentLoaded', function() {
    // Détection du type d'appareil
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    const isTablet = /iPad|Android(?!.*Mobile)/i.test(navigator.userAgent);
    
    if (isMobile || isTablet) {
        document.body.classList.add('touch-device');
    }
    
    // Détection de l'orientation
    function handleOrientationChange() {
        if (window.matchMedia("(orientation: portrait)").matches) {
            document.body.classList.remove('landscape');
            document.body.classList.add('portrait');
        } else {
            document.body.classList.remove('portrait');
            document.body.classList.add('landscape');
        }
    }
    
    // Appliquer l'orientation initiale
    handleOrientationChange();
    
    // Écouter les changements d'orientation
    window.addEventListener('orientationchange', function() {
        // Petit délai pour laisser le navigateur s'ajuster
        setTimeout(handleOrientationChange, 100);
    });
    
    // Amélioration de l'expérience de défilement
    function smoothScrolling() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
    
    smoothScrolling();
    
    // Amélioration de l'expérience des tableaux sur mobile
    function enhanceTables() {
        const tables = document.querySelectorAll('table');
        
        tables.forEach(table => {
            // Ajouter une classe pour indiquer que le tableau est scrollable
            if (table.scrollWidth > table.clientWidth) {
                table.classList.add('scrollable');
                
                // Créer un indicateur de défilement
                const scrollIndicator = document.createElement('div');
                scrollIndicator.className = 'scroll-indicator';
                scrollIndicator.innerHTML = '<span>→ Faire défiler →</span>';
                
                // Insérer l'indicateur avant le tableau
                table.parentNode.insertBefore(scrollIndicator, table);
                
                // Masquer l'indicateur après le premier défilement
                table.addEventListener('scroll', function() {
                    scrollIndicator.style.opacity = '0';
                    setTimeout(() => {
                        scrollIndicator.style.display = 'none';
                    }, 500);
                }, { once: true });
            }
        });
    }
    
    enhanceTables();
    
    // Amélioration de l'accessibilité
    function enhanceAccessibility() {
        // Ajouter des attributs ARIA pour améliorer l'accessibilité
        const dayLabels = document.querySelectorAll('.day-label');
        dayLabels.forEach((label, index) => {
            label.setAttribute('role', 'text');
            label.setAttribute('aria-label', 'Jour ' + (index + 1));
        });
        
        // Améliorer la navigation au clavier
        const interactiveElements = document.querySelectorAll('a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])');
        interactiveElements.forEach(element => {
            element.addEventListener('focus', function() {
                this.classList.add('keyboard-focus');
            });
            
            element.addEventListener('blur', function() {
                this.classList.remove('keyboard-focus');
            });
        });
    }
    
    enhanceAccessibility();
    
    // Optimisation des images en fonction de la taille de l'écran
    function optimizeImages() {
        const devicePixelRatio = window.devicePixelRatio || 1;
        const screenWidth = window.innerWidth * devicePixelRatio;
        
        // Sélectionner les images qui peuvent être optimisées
        const images = document.querySelectorAll('img[data-src]');
        
        images.forEach(img => {
            let imagePath;
            
            // Choisir la bonne résolution d'image en fonction de la taille de l'écran
            if (screenWidth <= 576) {
                imagePath = img.getAttribute('data-src-small');
            } else if (screenWidth <= 992) {
                imagePath = img.getAttribute('data-src-medium');
            } else {
                imagePath = img.getAttribute('data-src-large');
            }
            
            // Si une source spécifique n'est pas disponible, utiliser la source par défaut
            if (!imagePath) {
                imagePath = img.getAttribute('data-src');
            }
            
            // Définir la source de l'image
            if (imagePath) {
                img.src = imagePath;
            }
        });
    }
    
    optimizeImages();
    
    // Réagir aux changements de taille d'écran
    window.addEventListener('resize', function() {
        // Réoptimiser les images si la taille de l'écran change significativement
        optimizeImages();
    });
    
    // Amélioration de l'expérience utilisateur pour les tableaux
    function enhanceTableExperience() {
        const rows = document.querySelectorAll('tbody tr');
        
        rows.forEach(row => {
            // Ajouter un effet de survol
            row.addEventListener('mouseenter', function() {
                this.classList.add('hover');
            });
            
            row.addEventListener('mouseleave', function() {
                this.classList.remove('hover');
            });
            
            // Ajouter un effet de clic pour les appareils tactiles
            row.addEventListener('click', function() {
                // Supprimer la classe active de toutes les lignes
                rows.forEach(r => r.classList.remove('active'));
                
                // Ajouter la classe active à la ligne cliquée
                this.classList.add('active');
            });
        });
    }
    
    enhanceTableExperience();
    
    // Détection de la préférence pour le mode sombre
    function detectColorScheme() {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    }
    
    detectColorScheme();
    
    // Écouter les changements de préférence de couleur
    if (window.matchMedia) {
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', detectColorScheme);
    }
});