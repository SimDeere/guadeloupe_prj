<?php
/**
 * En-tête simplifié pour les versions imprimables
 */

// Titre de la page (peut être personnalisé par chaque page)
$page_title = isset($page_title) ? $page_title : 'Voyage en Guadeloupe';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- Préchargement des polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Feuille de style principale -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Feuille de style pour l'impression -->
    <link rel="stylesheet" href="css/print.css">
</head>
<body class="print-body">
    <!-- Le contenu de la page sera inséré ici -->