/**
 * Gestion des cases à cocher pour la liste des affaires
 * Sauvegarde et restauration de l'état des cases à cocher dans des fichiers plats
 * pour chaque personne du menu déroulant
 */

// Variable pour suivre si les données ont été chargées
let dataLoaded = false;

// Suppression de la variable autoSaveInterval qui n'est plus nécessaire

document.addEventListener('DOMContentLoaded', function() {
    // Récupérer le sélecteur de personne et les boutons
    const personSelect = document.getElementById('person-select');
    const loadButton = document.getElementById('load-button');
    const saveButton = document.getElementById('save-button');
    
    // Initialiser les cases à cocher avec les valeurs sauvegardées pour la personne sélectionnée
    loadCheckboxStates(personSelect.value);
    dataLoaded = true;
    
    // Ajouter des écouteurs d'événements pour les changements de cases à cocher
    setupCheckboxListeners();
    
    // Ajouter un écouteur d'événement pour le changement de personne
    personSelect.addEventListener('change', function() {
        const selectedPerson = this.value;
        
        // Mettre à jour l'URL avec la personne sélectionnée
        const url = new URL(window.location.href);
        url.searchParams.set('person', selectedPerson);
        window.history.replaceState({}, '', url);
        
        // Note: Nous ne chargeons plus automatiquement les données ici
        // pour laisser l'utilisateur cliquer sur le bouton de chargement
    });
    
    // Ajouter un écouteur d'événement pour le bouton de chargement
    loadButton.addEventListener('click', function() {
        const selectedPerson = personSelect.value;
        loadCheckboxStates(selectedPerson);
        
        // Afficher un message de confirmation
        alert('Données chargées pour ' + selectedPerson);
    });
    
    // Ajouter un écouteur d'événement pour le bouton de sauvegarde
    saveButton.addEventListener('click', function() {
        saveCheckboxStates();
        
        // Afficher un message de confirmation
        alert('Données sauvegardées pour ' + personSelect.value);
    });
    
    // Suppression de l'appel à startAutoSave() qui n'est plus nécessaire
});

// La fonction startAutoSave a été supprimée car nous utilisons maintenant un bouton de sauvegarde explicite

/**
 * Configure les écouteurs d'événements pour toutes les cases à cocher
 */
function setupCheckboxListeners() {
    // Sélectionner toutes les cases à cocher dans la liste des affaires
    const checkboxes = document.querySelectorAll('.table-affaires input[type="checkbox"]');
    
    // Ajouter un écouteur d'événement à chaque case à cocher
    // Note: Nous ne sauvegardons plus automatiquement lors du changement d'état
    // La sauvegarde se fait uniquement via le bouton "Sauvegarder"
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            // Aucune action automatique
            console.log('Case à cocher modifiée, utilisez le bouton Sauvegarder pour enregistrer les changements');
        });
    });
}

/**
 * Sauvegarde l'état de toutes les cases à cocher dans un fichier plat
 */
function saveCheckboxStates() {
    // Récupérer la personne sélectionnée
    const personSelect = document.getElementById('person-select');
    const person = personSelect.value;
    
    // Objet pour stocker l'état des cases à cocher
    const checkboxStates = {};
    
    // Sélectionner toutes les cases à cocher
    const checkboxes = document.querySelectorAll('.item-checkbox');
    
    // Stocker l'état de chaque case à cocher
    checkboxes.forEach(function(checkbox) {
        // Utiliser l'ID de la case à cocher comme clé
        checkboxStates[checkbox.id] = checkbox.checked;
    });
    
    // Convertir l'objet en chaîne JSON
    const statesJSON = JSON.stringify(checkboxStates);
    
    // Envoyer les données au serveur pour sauvegarde
    fetch('save_checkboxes.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            person: person,
            states: statesJSON
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('États des cases à cocher sauvegardés pour ' + person);
        } else {
            console.error('Erreur lors de la sauvegarde des états des cases à cocher:', data.error);
        }
    })
    .catch(error => {
        console.error('Erreur lors de la sauvegarde des états des cases à cocher:', error);
    });
}

/**
 * Charge l'état des cases à cocher depuis un fichier plat
 * @param {string} person - La personne sélectionnée
 */
function loadCheckboxStates(person) {
    console.log('Chargement des données pour: ' + person);
    
    // Réinitialiser toutes les cases à cocher
    const checkboxes = document.querySelectorAll('.item-checkbox');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
    });
    
    // Charger les états depuis le serveur avec un timestamp pour éviter la mise en cache
    const timestamp = new Date().getTime();
    fetch('load_checkboxes.php?person=' + encodeURIComponent(person) + '&_=' + timestamp)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur réseau: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            if (data.success && data.states) {
                try {
                    // Convertir la chaîne JSON en objet
                    const checkboxStates = JSON.parse(data.states);
                    
                    // Appliquer l'état à chaque case à cocher
                    for (const id in checkboxStates) {
                        const checkbox = document.getElementById(id);
                        if (checkbox) {
                            checkbox.checked = checkboxStates[id];
                        }
                    }
                    
                    console.log('États des cases à cocher chargés pour ' + person);
                } catch (e) {
                    console.error("Erreur lors du chargement des états des cases à cocher:", e);
                }
            } else if (!data.success) {
                console.error('Erreur lors du chargement des états des cases à cocher:', data.error);
            } else {
                console.log('Aucune donnée sauvegardée pour ' + person);
            }
        })
        .catch(error => {
            console.error('Erreur lors du chargement des états des cases à cocher:', error);
        });
}

/**
 * Efface le fichier de sauvegarde des cases à cocher pour une personne
 * @param {string} person - La personne sélectionnée
 */
function clearCheckboxStates(person) {
    fetch('clear_checkboxes.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            person: person
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('États des cases à cocher effacés pour ' + person);
            // Réinitialiser toutes les cases à cocher
            resetAllCheckboxes();
        } else {
            console.error('Erreur lors de l\'effacement des états des cases à cocher:', data.error);
        }
    })
    .catch(error => {
        console.error('Erreur lors de l\'effacement des états des cases à cocher:', error);
    });
}

/**
 * Réinitialise toutes les cases à cocher
 */
function resetAllCheckboxes() {
    // Sélectionner toutes les cases à cocher
    const checkboxes = document.querySelectorAll('.item-checkbox');
    
    // Décocher chaque case
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
    });
    
    // Sauvegarder l'état
    saveCheckboxStates();
}

/**
 * Ajoute un bouton de réinitialisation à l'interface
 */
function addResetButton() {
    const personSelector = document.querySelector('.person-selector');
    
    // Créer le bouton de réinitialisation
    const resetButton = document.createElement('button');
    resetButton.textContent = 'Réinitialiser';
    resetButton.className = 'reset-button';
    resetButton.style.marginLeft = '10px';
    resetButton.style.padding = '8px 12px';
    resetButton.style.borderRadius = '4px';
    resetButton.style.border = '1px solid var(--accent-color)';
    resetButton.style.backgroundColor = '#f8f8f8';
    resetButton.style.cursor = 'pointer';
    
    resetButton.addEventListener('click', function() {
        const person = document.getElementById('person-select').value;
        if (confirm('Voulez-vous vraiment réinitialiser la liste pour ' + person + ' ?')) {
            resetAllCheckboxes();
        }
    });
    
    // Ajouter le bouton après le sélecteur de personne
    personSelector.appendChild(resetButton);
}

// Ajouter le bouton de réinitialisation lors du chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    addResetButton();
});