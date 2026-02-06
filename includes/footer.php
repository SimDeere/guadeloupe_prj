    </div><!-- Fin du conteneur principal -->
    
    <footer>
        <p>Bon voyage en Guadeloupe ! 🌴 Profitez bien de votre séjour sur l'île papillon.</p>
        <?php if ($site_config['debug_mode']): ?>
        <div class="debug-info">
            <p>Type d'appareil détecté : <?php echo ucfirst(get_device_type()); ?></p>
        </div>
        <?php endif; ?>
        
        <!-- Script pour détecter les changements d'orientation sur mobile -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Détecter les changements d'orientation sur mobile
                window.addEventListener('orientationchange', function() {
                    // Recharger la page pour appliquer les styles adaptés
                    location.reload();
                });
                
                // Ajouter une classe au body selon l'orientation
                if (window.matchMedia("(orientation: portrait)").matches) {
                    document.body.classList.add('portrait');
                } else {
                    document.body.classList.add('landscape');
                }
            });
        </script>
        
        <!-- Script pour améliorer le défilement sur les appareils tactiles -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Améliorer le défilement sur les appareils tactiles
                if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
                    document.body.classList.add('touch-device');
                    
                    // Améliorer le défilement des tableaux sur mobile
                    const tables = document.querySelectorAll('table');
                    tables.forEach(function(table) {
                        table.addEventListener('touchstart', function(e) {
                            this.classList.add('active-touch');
                        });
                        
                        table.addEventListener('touchend', function(e) {
                            this.classList.remove('active-touch');
                        });
                    });
                }
            });
        </script>
    </footer>
</body>
</html>