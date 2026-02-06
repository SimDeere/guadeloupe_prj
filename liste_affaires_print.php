<?php
/**
 * Version imprimable de la liste des affaires à emporter pour le voyage en Guadeloupe
 */

// Définir le titre de la page
$page_title = 'Liste des affaires à emporter - Version imprimable';

// Inclure l'en-tête simplifié pour impression
include 'includes/header_print.php';

// Fonction pour créer un ID valide à partir d'une chaîne (copié depuis liste_affaires.php)
function sanitize_id($string) {
    // Remplacer les caractères spéciaux et les espaces par des tirets
    $string = preg_replace('/[^a-zA-Z0-9]/', '-', $string);
    // Convertir en minuscules
    $string = strtolower($string);
    // Supprimer les tirets multiples
    $string = preg_replace('/-+/', '-', $string);
    // Supprimer les tirets au début et à la fin
    $string = trim($string, '-');
    
    return $string;
}

// Données de la liste d'affaires (copié depuis liste_affaires.php)
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
        // ... autres éléments
    ],
    // ... autres catégories
];

// Inclure les données complètes de la liste d'affaires depuis le fichier original
include 'includes/liste_affaires_data.php';
?>

<div class="container print-container">
    <header class="print-header">
        <h1>Liste des affaires à emporter</h1>
        <p class="print-date">Document imprimé le <?php echo date('d/m/Y'); ?></p>
    </header>

    <main>
        <div class="liste-affaires-container">
            <?php foreach ($liste_affaires as $categorie => $items): ?>
                <div class="category-card">
                    <div class="category-header">
                        <h2><?php echo $categorie; ?></h2>
                    </div>
                    
                    <div class="item-list">
                        <?php foreach ($items as $item): ?>
                            <div class="item">
                                <div class="item-checkbox">
                                    □ <!-- Case à cocher pour impression -->
                                </div>
                                <div class="item-details">
                                    <span class="item-name"><?php echo $item['nom']; ?></span>
                                    <?php if (isset($item['nombre']) && $item['nombre'] > 0): ?>
                                        <span class="item-quantity">(<?php echo $item['nombre']; ?>)</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer class="print-footer">
        <p>Voyage en Guadeloupe - Liste des affaires à emporter</p>
    </footer>
</div>

<script>
    // Déclencher automatiquement l'impression
    window.onload = function() {
        window.print();
    };
</script>

<?php
// Inclure le pied de page simplifié pour impression
include 'includes/footer_print.php';
?>