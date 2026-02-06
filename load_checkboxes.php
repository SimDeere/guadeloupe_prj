<?php
/**
 * Script pour charger l'état des cases à cocher depuis un fichier plat
 * pour la personne spécifiée
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

// Récupérer la personne depuis la requête GET
if (!isset($_GET['person'])) {
    echo json_encode(['success' => false, 'error' => 'Personne non spécifiée']);
    exit;
}

// Nettoyer le nom de la personne
$person = preg_replace('/[^a-zA-Z0-9]/', '-', strtolower($_GET['person']));

// Nom du fichier de sauvegarde
$filename = $data_dir . '/' . $person . '.json';

// Vérifier si le fichier existe
if (!file_exists($filename)) {
    // Pas d'erreur, juste pas de données
    echo json_encode(['success' => true, 'states' => null]);
    exit;
}

// Lire le contenu du fichier
$states = file_get_contents($filename);

if ($states === false) {
    echo json_encode(['success' => false, 'error' => 'Impossible de lire le fichier']);
    exit;
}

// Réponse de succès avec les états
echo json_encode(['success' => true, 'states' => $states]);