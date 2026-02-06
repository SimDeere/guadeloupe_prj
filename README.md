# Site Voyage en Guadeloupe - Version PHP Responsive

Ce projet est une version PHP responsive du site "Voyage en Guadeloupe", optimisée pour différents appareils (ordinateurs, tablettes et smartphones).

## Structure du projet

```
Mobile_guadeloupe_php/
├── css/
│   ├── style.css       # Styles communs à tous les appareils
│   ├── mobile.css      # Styles spécifiques aux smartphones
│   ├── tablet.css      # Styles spécifiques aux tablettes
│   └── desktop.css     # Styles spécifiques aux ordinateurs
├── js/
│   └── main.js         # Fonctionnalités JavaScript
├── images/
│   └── ...             # Images du site (à ajouter)
├── includes/
│   ├── config.php      # Configuration du site
│   ├── functions.php   # Fonctions utilitaires
│   ├── header.php      # En-tête du site
│   └── footer.php      # Pied de page du site
├── index.php           # Page principale
└── .htaccess           # Configuration du serveur Apache
```

## Fonctionnalités

- **Responsive Design** : Adaptation automatique à la taille de l'écran (ordinateur, tablette, smartphone)
- **Détection d'appareil** : Chargement des styles CSS spécifiques selon le type d'appareil
- **Optimisation mobile** : Réorganisation du tableau pour une meilleure lisibilité sur petit écran
- **Mode sombre** : Support du mode sombre selon les préférences du système
- **Accessibilité** : Amélioration de l'accessibilité pour les lecteurs d'écran
- **Performance** : Optimisation des performances avec compression et mise en cache

## Comment tester le site sur différentes tailles d'écran

### Méthode 1 : Outils de développement du navigateur

1. Ouvrez le site dans votre navigateur
2. Appuyez sur F12 ou clic droit > Inspecter pour ouvrir les outils de développement
3. Cliquez sur l'icône "Toggle device toolbar" (ou Ctrl+Shift+M sur Chrome)
4. Sélectionnez un appareil prédéfini dans la liste déroulante ou ajustez manuellement la taille

### Méthode 2 : Redimensionnement de la fenêtre

1. Ouvrez le site dans votre navigateur
2. Redimensionnez manuellement la fenêtre pour simuler différentes tailles d'écran

### Méthode 3 : Test sur appareils réels

Pour des tests plus précis, accédez au site depuis différents appareils :
- Ordinateur de bureau
- Ordinateur portable
- Tablette (en mode portrait et paysage)
- Smartphone (en mode portrait et paysage)

## Points à vérifier lors des tests

- [ ] Le contenu s'adapte correctement à la taille de l'écran
- [ ] Le tableau est lisible sur tous les appareils
- [ ] Les images se redimensionnent correctement
- [ ] La navigation est facile sur les appareils tactiles
- [ ] Le site fonctionne en mode portrait et paysage sur mobile
- [ ] Le mode sombre s'active correctement si configuré dans le système

## Installation

1. Téléchargez les fichiers sur votre serveur web
2. Assurez-vous que PHP est installé et configuré
3. Créez un dossier `images` et ajoutez les images nécessaires
4. Accédez au site via votre navigateur

## Personnalisation

Vous pouvez personnaliser le site en modifiant :
- Les couleurs dans `includes/config.php`
- Les styles dans les fichiers CSS
- Le contenu du planning dans `index.php`

## Compatibilité

- PHP 7.0 ou supérieur
- Navigateurs modernes (Chrome, Firefox, Safari, Edge)
- Tous types d'appareils (ordinateurs, tablettes, smartphones)

## Remarques

- Les images d'arrière-plan doivent être ajoutées dans le dossier `images`
- Pour une utilisation en production, décommentez les règles HTTPS dans le fichier `.htaccess`