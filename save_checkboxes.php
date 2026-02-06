<?php
/**
 * Script pour sauvegarder l'état des cases à cocher dans un fichier plat
 * pour chaque personne du menu déroulant
 */

// Désactiver l'affichage des erreurs dans la réponse
ini_set('display_errors', 0);

// Définir le type de contenu de la réponse
header('Content-Type: application/json');

// Répertoire pour stocker les fichiers de sauvegarde
$data_dir = 'data';

// Vérifier si le répertoire existe, sinon le créer
if (!is_dir($data_dir)) {
    if (!mkdir($data_dir, 0755, true)) {
        echo json_encode(['success' => false, 'error' => 'Impossible de créer le répertoire de données']);
        exit;
    }
}

// Récupérer les données JSON envoyées
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

// Vérifier si les données sont valides
if (!$data || !isset($data['person']) || !isset($data['states'])) {
    echo json_encode(['success' => false, 'error' => 'Données invalides']);
    exit;
}

// Récupérer la personne et les états
$person = preg_replace('/[^a-zA-Z0-9]/', '-', strtolower($data['person']));
$states = $data['states'];

// Nom du fichier de sauvegarde
$filename = $data_dir . '/' . $person . '.json';

// Sauvegarder les états dans le fichier
if (file_put_contents($filename, $states) === false) {
    echo json_encode(['success' => false, 'error' => 'Impossible d\'écrire dans le fichier']);
    exit;
}

// Réponse de succès
echo json_encode(['success' => true]);