/**
 * Script de test pour vérifier la compatibilité responsive
 * Ce script simule différentes tailles d'écran pour tester l'adaptation du site
 */

document.addEventListener('DOMContentLoaded', function() {
    // Créer l'interface de test
    createTestInterface();
    
    // Initialiser les tests
    initTests();
});

/**
 * Crée l'interface de test responsive
 */
function createTestInterface() {
    // Créer le conteneur de l'interface de test
    const testContainer = document.createElement('div');
    testContainer.id = 'responsive-test-container';
    testContainer.style.position = 'fixed';
    testContainer.style.top = '10px';
    testContainer.style.right = '10px';
    testContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
    testContainer.style.color = 'white';
    testContainer.style.padding = '10px';
    testContainer.style.borderRadius = '5px';
    testContainer.style.zIndex = '9999';
    testContainer.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.5)';
    testContainer.style.maxWidth = '300px';
    testContainer.style.fontSize = '14px';
    
    // Titre
    const title = document.createElement('h3');
    title.textContent = 'Test Responsive';
    title.style.margin = '0 0 10px 0';
    title.style.fontSize = '16px';
    testContainer.appendChild(title);
    
    // Informations sur l'appareil
    const deviceInfo = document.createElement('div');
    deviceInfo.id = 'device-info';
    deviceInfo.style.marginBottom = '10px';
    testContainer.appendChild(deviceInfo);
    
    // Boutons de test pour différentes tailles d'écran
    const deviceButtons = [
        { name: 'Mobile S', width: 320, height: 568 },
        { name: 'Mobile M', width: 375, height: 667 },
        { name: 'Mobile L', width: 425, height: 812 },
        { name: 'Tablet', width: 768, height: 1024 },
        { name: 'Laptop', width: 1024, height: 768 },
        { name: 'Desktop', width: 1440, height: 900 }
    ];
    
    const buttonContainer = document.createElement('div');
    buttonContainer.style.display = 'flex';
    buttonContainer.style.flexWrap = 'wrap';
    buttonContainer.style.gap = '5px';
    
    deviceButtons.forEach(device => {
        const button = document.createElement('button');
        button.textContent = device.name;
        button.style.padding = '5px';
        button.style.margin = '0';
        button.style.backgroundColor = '#0077b6';
        button.style.color = 'white';
        button.style.border = 'none';
        button.style.borderRadius = '3px';
        button.style.cursor = 'pointer';
        button.style.fontSize = '12px';
        
        button.addEventListener('click', function() {
            simulateScreenSize(device.width, device.height, device.name);
        });
        
        buttonContainer.appendChild(button);
    });
    
    testContainer.appendChild(buttonContainer);
    
    // Bouton pour basculer l'orientation
    const orientationButton = document.createElement('button');
    orientationButton.textContent = 'Changer Orientation';
    orientationButton.style.padding = '5px';
    orientationButton.style.margin = '10px 0 0 0';
    orientationButton.style.backgroundColor = '#2a9d8f';
    orientationButton.style.color = 'white';
    orientationButton.style.border = 'none';
    orientationButton.style.borderRadius = '3px';
    orientationButton.style.cursor = 'pointer';
    orientationButton.style.width = '100%';
    
    orientationButton.addEventListener('click', function() {
        toggleOrientation();
    });
    
    testContainer.appendChild(orientationButton);
    
    // Bouton pour basculer le mode sombre/clair
    const darkModeButton = document.createElement('button');
    darkModeButton.textContent = 'Mode Sombre/Clair';
    darkModeButton.style.padding = '5px';
    darkModeButton.style.margin = '5px 0 0 0';
    darkModeButton.style.backgroundColor = '#e76f51';
    darkModeButton.style.color = 'white';
    darkModeButton.style.border = 'none';
    darkModeButton.style.borderRadius = '3px';
    darkModeButton.style.cursor = 'pointer';
    darkModeButton.style.width = '100%';
    
    darkModeButton.addEventListener('click', function() {
        toggleDarkMode();
    });
    
    testContainer.appendChild(darkModeButton);
    
    // Bouton pour fermer l'interface de test
    const closeButton = document.createElement('button');
    closeButton.textContent = 'Fermer';
    closeButton.style.padding = '5px';
    closeButton.style.margin = '5px 0 0 0';
    closeButton.style.backgroundColor = '#666';
    closeButton.style.color = 'white';
    closeButton.style.border = 'none';
    closeButton.style.borderRadius = '3px';
    closeButton.style.cursor = 'pointer';
    closeButton.style.width = '100%';
    
    closeButton.addEventListener('click', function() {
        testContainer.style.display = 'none';
    });
    
    testContainer.appendChild(closeButton);
    
    // Ajouter l'interface au document
    document.body.appendChild(testContainer);
}

/**
 * Initialise les tests et affiche les informations sur l'appareil
 */
function initTests() {
    updateDeviceInfo();
    
    // Mettre à jour les informations lors du redimensionnement de la fenêtre
    window.addEventListener('resize', updateDeviceInfo);
}

/**
 * Met à jour les informations sur l'appareil
 */
function updateDeviceInfo() {
    const deviceInfo = document.getElementById('device-info');
    const width = window.innerWidth;
    const height = window.innerHeight;
    const devicePixelRatio = window.devicePixelRatio || 1;
    const orientation = width > height ? 'Paysage' : 'Portrait';
    
    let deviceType = 'Desktop';
    if (width <= 576) {
        deviceType = 'Mobile';
    } else if (width <= 992) {
        deviceType = 'Tablet';
    }
    
    deviceInfo.innerHTML = `
        <div><strong>Type:</strong> ${deviceType}</div>
        <div><strong>Taille:</strong> ${width}x${height}px</div>
        <div><strong>Ratio:</strong> ${devicePixelRatio}x</div>
        <div><strong>Orientation:</strong> ${orientation}</div>
    `;
}

/**
 * Simule une taille d'écran spécifique
 */
function simulateScreenSize(width, height, deviceName) {
    // Afficher une alerte pour informer l'utilisateur
    alert(`Simulation de ${deviceName} (${width}x${height})\n\nCette fonction est une démonstration. Dans un environnement réel, vous devriez utiliser les outils de développement du navigateur pour tester différentes tailles d'écran.`);
    
    // Dans un environnement réel, on utiliserait les outils de développement du navigateur
    // Cette fonction est juste pour la démonstration
    updateDeviceInfo();
}

/**
 * Bascule l'orientation (portrait/paysage)
 */
function toggleOrientation() {
    const width = window.innerWidth;
    const height = window.innerHeight;
    
    // Afficher une alerte pour informer l'utilisateur
    if (width > height) {
        alert("Simulation du changement d'orientation: Portrait\n\nCette fonction est une démonstration. Dans un environnement réel, vous devriez utiliser les outils de développement du navigateur ou tourner physiquement votre appareil.");
    } else {
        alert("Simulation du changement d'orientation: Paysage\n\nCette fonction est une démonstration. Dans un environnement réel, vous devriez utiliser les outils de développement du navigateur ou tourner physiquement votre appareil.");
    }
    
    // Dans un environnement réel, on utiliserait les outils de développement du navigateur
    // ou on tournerait physiquement l'appareil
    updateDeviceInfo();
}

/**
 * Bascule entre le mode sombre et le mode clair
 */
function toggleDarkMode() {
    if (document.body.classList.contains('dark-mode')) {
        document.body.classList.remove('dark-mode');
        alert('Mode clair activé');
    } else {
        document.body.classList.add('dark-mode');
        alert('Mode sombre activé');
    }
}