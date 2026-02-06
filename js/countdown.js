/**
 * Décompte horaire pour le voyage en Guadeloupe
 * Affiche le temps restant avant le décollage de l'avion
 */

// Date de décollage : 14/02/2026 à 11h45
const departureDate = new Date('2026-02-14T11:45:00+01:00');

/**
 * Calcule et met à jour le décompte
 */
function updateCountdown() {
    // Date actuelle
    const now = new Date();
    
    // Différence en millisecondes
    const diff = departureDate - now;
    
    // Si la date est passée
    if (diff < 0) {
        document.getElementById('countdown').innerHTML = 
            '<div class="countdown-message">Bon voyage en Guadeloupe !</div>';
        return;
    }
    
    // Calcul des jours, heures, minutes et secondes
    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((diff % (1000 * 60)) / 1000);
    
    // Mise à jour du HTML
    document.getElementById('countdown-days').textContent = days.toString().padStart(2, '0');
    document.getElementById('countdown-hours').textContent = hours.toString().padStart(2, '0');
    document.getElementById('countdown-minutes').textContent = minutes.toString().padStart(2, '0');
    document.getElementById('countdown-seconds').textContent = seconds.toString().padStart(2, '0');
}

/**
 * Initialise le décompte au chargement de la page
 */
document.addEventListener('DOMContentLoaded', function() {
    // Mise à jour initiale
    updateCountdown();
    
    // Mise à jour toutes les secondes
    setInterval(updateCountdown, 1000);
});