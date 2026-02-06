<?php
/**
 * Script pour effacer l'état des cases à cocher d'une personne
 */

// Désactiver l'affichage des erreurs dans la réponse
ini_set('display_errors', 0);

// Définir le type de contenu de la réponse
header('Content-Type: application/json');

// Répertoire pour stocker les fichiers de sauvegarde
$data_dir = 'data';

// Vérifier si le répertoire existe
if (!is_dir($data_dir)) {
    echo json_encode(['success' => false, 'error' => 'Le répertoire de données n\'existe pas']);
    exit;
}

// Récupérer les données JSON envoyées
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

// Vérifier si les données sont valides
if (!$data || !isset($data['person'])) {
    echo json_encode(['success' => false, 'error' => 'Données invalides']);
    exit;
}

// Nettoyer le nom de la personne
$person = preg_replace('/[^a-zA-Z0-9]/', '-', strtolower($data['person']));

// Nom du fichier de sauvegarde
$filename = $data_dir . '/' . $person . '.json';

// Vérifier si le fichier existe
if (!file_exists($filename)) {
    // Le fichier n'existe pas, donc considéré comme déjà effacé
    echo json_encode(['success' => true]);
    exit;
}

// Supprimer le fichier
if (!unlink($filename)) {
    echo json_encode(['success' => false, 'error' => 'Impossible de supprimer le fichier']);
    exit;
}

// Réponse de succès
echo json_encode(['success' => true]);