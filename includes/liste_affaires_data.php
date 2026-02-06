<?php
/**
 * Données complètes de la liste des affaires pour le voyage en Guadeloupe
 * Ce fichier est inclus dans les pages qui affichent la liste des affaires
 */

// Si la variable $liste_affaires n'existe pas déjà, on la définit
if (!isset($liste_affaires) || !is_array($liste_affaires)) {
    $liste_affaires = [];
}

// Données complètes de la liste d'affaires
$liste_affaires = [
    'Valise / Sac en soute' => [
        ['nom' => 'Slips', 'nombre' => 9],
        ['nom' => 'Chaussettes', 'nombre' => 9],
        ['nom' => 'T-shirt', 'nombre' => 5],
        ['nom' => 'Chemise', 'nombre' => 2],
        ['nom' => 'Sweat', 'nombre' => 1],
        ['nom' => 'Pyjama', 'nombre' => 2],
        ['nom' => 'Pancho pluie', 'nombre' => 1],
        ['nom' => 'Short', 'nombre' => 4],
        ['nom' => 'Robe/jupe', 'nombre' => 2],
        ['nom' => 'Pantalon', 'nombre' => 1],
        ['nom' => 'Jupe/Robe', 'nombre' => 2],
        ['nom' => 'Casquette', 'nombre' => 1],
        ['nom' => 'Chapeau', 'nombre' => 1],
        ['nom' => 'Lunettes de soleil', 'nombre' => 1],
        ['nom' => 'Maillot de bain', 'nombre' => 2],
        ['nom' => 'Serviette de plage', 'nombre' => 1],
        ['nom' => 'Chaussures de marche', 'nombre' => 1],
        ['nom' => 'Tongs / Sandales', 'nombre' => 1],
        ['nom' => 'Chaussures d\'eau', 'nombre' => 1]
    ],
    'Trousse de toilette' => [
        ['nom' => 'Brosse à dents', 'nombre' => 1],
        ['nom' => 'Dentifrice', 'nombre' => 1],
        ['nom' => 'Savon / Gel douche', 'nombre' => 1],
        ['nom' => 'Shampoing', 'nombre' => 1],
        ['nom' => 'Déodorant', 'nombre' => 1],
        ['nom' => 'Crème solaire indice 50', 'nombre' => 1],
        ['nom' => 'Après-soleil / Aloé vera', 'nombre' => 1],
        ['nom' => 'Anti-moustique', 'nombre' => 1],
        ['nom' => 'Brosse / Peigne', 'nombre' => 1],
        ['nom' => 'Rasoir', 'nombre' => 1],
        ['nom' => 'Médicaments personnels', 'nombre' => 1]
    ],
    'Pharmacie' => [
        ['nom' => 'Pansements', 'nombre' => 1],
        ['nom' => 'Désinfectant', 'nombre' => 1],
        ['nom' => 'Paracétamol', 'nombre' => 1],
        ['nom' => 'Anti-diarrhéique', 'nombre' => 1],
        ['nom' => 'Anti-inflammatoire', 'nombre' => 1],
        ['nom' => 'Antihistaminique', 'nombre' => 1],
        ['nom' => 'Crème pour piqûres d\'insectes', 'nombre' => 1],
        ['nom' => 'Sérum physiologique', 'nombre' => 1]
    ],
    'Électronique' => [
        ['nom' => 'Téléphone portable', 'nombre' => 1],
        ['nom' => 'Chargeur téléphone', 'nombre' => 1],
        ['nom' => 'Appareil photo', 'nombre' => 1],
        ['nom' => 'Chargeur appareil photo', 'nombre' => 1],
        ['nom' => 'Cartes mémoire', 'nombre' => 2],
        ['nom' => 'Batterie externe', 'nombre' => 1],
        ['nom' => 'Adaptateur de prise (non nécessaire pour la Guadeloupe)', 'nombre' => 0]
    ],
    'Documents' => [
        ['nom' => 'Passeport / Carte d\'identité', 'nombre' => 1],
        ['nom' => 'Permis de conduire', 'nombre' => 1],
        ['nom' => 'Carte vitale', 'nombre' => 1],
        ['nom' => 'Carte bancaire', 'nombre' => 1],
        ['nom' => 'Espèces', 'nombre' => 1],
        ['nom' => 'Billets d\'avion', 'nombre' => 1],
        ['nom' => 'Réservation voiture', 'nombre' => 1],
        ['nom' => 'Réservation logement', 'nombre' => 1],
        ['nom' => 'Assurance voyage', 'nombre' => 1]
    ],
    'Activités / Loisirs' => [
        ['nom' => 'Masque et tuba', 'nombre' => 1],
        ['nom' => 'Livre / Liseuse', 'nombre' => 1],
        ['nom' => 'Sac à dos léger', 'nombre' => 1],
        ['nom' => 'Gourde', 'nombre' => 1],
        ['nom' => 'Sac étanche', 'nombre' => 1],
        ['nom' => 'Jumelles', 'nombre' => 1]
    ],
    'Divers' => [
        ['nom' => 'Sac pour le linge sale', 'nombre' => 1],
        ['nom' => 'Cadenas pour valise', 'nombre' => 1],
        ['nom' => 'Étiquette bagage', 'nombre' => 1],
        ['nom' => 'Stylo', 'nombre' => 1],
        ['nom' => 'Carnet', 'nombre' => 1],
        ['nom' => 'Parapluie compact', 'nombre' => 1]
    ]
];