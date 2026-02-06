<?php
/**
 * Page de liste des affaires à emporter pour le voyage en Guadeloupe
 *
 * Cette page affiche la liste des affaires à emporter pour le voyage
 */

// Fonction pour créer un ID valide à partir d'une chaîne
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

// Répertoire pour stocker les fichiers de sauvegarde
$data_dir = 'data';

// Vérifier si le répertoire existe, sinon le créer
if (!is_dir($data_dir)) {
    mkdir($data_dir, 0755, true);
}

// Définir le titre de la page
$page_title = 'Liste des affaires à emporter';

// Inclure l'en-tête
include 'includes/header.php';

// Données de la liste d'affaires
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
        ['nom' => 'Lunettes vue', 'nombre' => 1],
        ['nom' => 'Lunettes soleil', 'nombre' => 1],
        ['nom' => 'Tongs', 'nombre' => 1],
        ['nom' => 'Chaussures "ville"', 'nombre' => 1],
        ['nom' => 'Chaussures randonnée', 'nombre' => 1],
        ['nom' => 'Coupe vent', 'nombre' => 1],
        ['nom' => 'Ceinture', 'nombre' => 1],
        ['nom' => 'Casquette/Chapeau', 'nombre' => null],
    ],
    'Affaires de plage' => [
        ['nom' => 'Maillot de bain', 'nombre' => 2],
        ['nom' => 'Serviette de bain', 'nombre' => 1],
        ['nom' => 'Lunettes de bain', 'nombre' => 1],
        ['nom' => 'Masque de bain', 'nombre' => 1],
        ['nom' => 'Chaussure de plage', 'nombre' => 1],
        ['nom' => 'T-shirt de plage', 'nombre' => 2],
        ['nom' => 'Crème solaire', 'nombre' => 1],
        ['nom' => 'Jouet de plage', 'nombre' => 7],
        ['nom' => 'Fouta', 'nombre' => 1],
    ],
    'Toilette' => [
        ['nom' => 'Shampoing', 'nombre' => 1],
        ['nom' => 'Savon', 'nombre' => 1],
        ['nom' => 'Dentifrice', 'nombre' => 1],
        ['nom' => 'Brosse à dents', 'nombre' => 1],
        ['nom' => 'Peigne/brosse', 'nombre' => 1],
        ['nom' => 'Cotons tige', 'nombre' => 9],
        ['nom' => 'Démêlant cheveux', 'nombre' => 1],
        ['nom' => 'Tampon nettoyage', 'nombre' => 2],
        ['nom' => 'Serviette de douche', 'nombre' => 1],
        ['nom' => 'Anti-moustique', 'nombre' => 1],
        ['nom' => 'Rasoir', 'nombre' => null],
        ['nom' => 'Pince à épiler', 'nombre' => null],
        ['nom' => 'Coupe ongle', 'nombre' => null],
        ['nom' => 'Boules Quies', 'nombre' => null],
        ['nom' => 'Trousse de toilette', 'nombre' => null],
        ['nom' => 'Sèche cheveux', 'nombre' => null],
        ['nom' => 'Stick à lèvre', 'nombre' => null],
        ['nom' => 'Déodorant', 'nombre' => null],
        ['nom' => 'Parfum', 'nombre' => null],
    ],
    'Divers' => [
        ['nom' => 'Mouchoir en papier', 'nombre' => 3],
        ['nom' => 'Gourde', 'nombre' => 1],
        ['nom' => 'Projecteur nuit', 'nombre' => 1],
        ['nom' => 'Doudou', 'nombre' => 2],
        ['nom' => 'Jouet', 'nombre' => 10],
        ['nom' => 'Appareil photo', 'nombre' => 2],
        ['nom' => 'Chargeur jouet', 'nombre' => 1],
        ['nom' => 'Sac linge sale', 'nombre' => 1],
        ['nom' => 'Lessive', 'nombre' => null],
        ['nom' => 'Biberon', 'nombre' => null],
        ['nom' => 'Tétine', 'nombre' => null],
        ['nom' => 'Pelle/râteau', 'nombre' => null],
        ['nom' => 'Bouée/Gilet Sauvetage', 'nombre' => null],
        ['nom' => 'Chargeur portable', 'nombre' => null],
        ['nom' => 'Gopro/chargeur', 'nombre' => null],
        ['nom' => 'Pèse bagage', 'nombre' => null],
        ['nom' => 'Crayon papier', 'nombre' => null],
        ['nom' => 'Toutounette poubelle', 'nombre' => null],
        ['nom' => 'Carte identité', 'nombre' => null],
        ['nom' => 'Passeport', 'nombre' => null],
        ['nom' => 'Permis conduire', 'nombre' => null],
        ['nom' => 'Verre plastique', 'nombre' => null],
        ['nom' => 'Gel hydroalcoolique', 'nombre' => null],
        ['nom' => 'Opinel', 'nombre' => null],
        ['nom' => 'Petit sac à dos', 'nombre' => null],
        ['nom' => 'Lampe poche', 'nombre' => null],
        ['nom' => 'Veilleuse nuit enfant', 'nombre' => null],
        ['nom' => 'Masques chirurgicaux', 'nombre' => null],
        ['nom' => 'Épingles à linge', 'nombre' => null],
        ['nom' => 'Torchon', 'nombre' => null],
        ['nom' => 'Éponge', 'nombre' => null],
        ['nom' => 'Petite radio', 'nombre' => null],
        ['nom' => 'Enceinte connectée', 'nombre' => null],
        ['nom' => 'E-cigarette', 'nombre' => null],
        ['nom' => 'Liquide Vapoteuse', 'nombre' => null],
        ['nom' => 'Casque/Écouteur audio', 'nombre' => null],
        ['nom' => 'Petit sac course pliable', 'nombre' => null],
        ['nom' => 'Élastique Renfo muscu', 'nombre' => null],
    ],
    'Pharmacie' => [
        ['nom' => 'Biafine', 'nombre' => null],
        ['nom' => 'Doliprane', 'nombre' => null],
        ['nom' => 'Anti-vomitif', 'nombre' => null],
        ['nom' => 'Anti-diarrhéique', 'nombre' => null],
        ['nom' => 'Gaviscon', 'nombre' => null],
        ['nom' => 'Antihistaminique', 'nombre' => null],
        ['nom' => 'Désinfectant', 'nombre' => null],
        ['nom' => 'Pansement', 'nombre' => null],
        ['nom' => 'Sérum physiologique', 'nombre' => null],
        ['nom' => 'Coton', 'nombre' => null],
        ['nom' => 'Thé', 'nombre' => null],
        ['nom' => 'Café', 'nombre' => null],
        ['nom' => 'Chocolat', 'nombre' => null],
        ['nom' => 'Filtre café', 'nombre' => null],
        ['nom' => 'Antimoustique', 'nombre' => null],
        ['nom' => 'PQ', 'nombre' => null],
        ['nom' => 'Attelles poignet', 'nombre' => null],
    ],
    'Sac en cabine' => [
        ['nom' => 'Jouet', 'nombre' => 10],
        ['nom' => 'Sac à dos', 'nombre' => 2],
        ['nom' => 'Carte identité', 'nombre' => 1],
        ['nom' => 'Casque musique', 'nombre' => 1],
        ['nom' => 'Cale nuque', 'nombre' => 1],
        ['nom' => 'Stitch', 'nombre' => 1],
        ['nom' => 'Jeux société', 'nombre' => null],
        ['nom' => 'Boules Quies', 'nombre' => null],
        ['nom' => 'Livre', 'nombre' => null],
        ['nom' => 'Anti-vomitif', 'nombre' => null],
        ['nom' => 'Anti-diarrhéique', 'nombre' => null],
    ]
];
?>

<!-- Méta-balises spécifiques pour Safari iOS -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<h2 class="page-title">Liste des affaires à emporter</h2>

<div class="liste-affaires">
    <?php foreach ($liste_affaires as $categorie => $items): ?>
        <div class="categorie">
            <h3><?php echo $categorie; ?></h3>
            <table class="table-affaires">
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Quantité</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?php echo $item['nom']; ?></td>
                            <td class="quantite"><?php echo $item['nombre'] ? $item['nombre'] : '-'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endforeach; ?>
</div>

<style>
    /* Style pour le titre de la page */
    .page-title {
        color: white !important;
        text-align: center;
        margin-bottom: 20px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }
    
    /* Styles généraux */
    * {
        -webkit-text-size-adjust: 100%;
        text-size-adjust: 100%;
        color: inherit !important; /* Forcer la couleur héritée pour tous les éléments */
    }
    
    /* Correction spécifique pour Safari iOS */
    body *::before,
    body *::after {
        content: none !important; /* Supprimer tout contenu généré par ::before et ::after */
        display: none !important;
    }
    
    /* Correction spécifique pour le texte "matin" en blanc sur Safari iOS */
    tr::before, tr::after,
    td::before, td::after,
    th::before, th::after {
        content: none !important;
        display: none !important;
        color: inherit !important;
        visibility: hidden !important;
        opacity: 0 !important;
    }
    
    /* Assurer que tous les textes héritent de la couleur correcte */
    tr, td, th, span, div, p {
        color: inherit !important;
        -webkit-text-fill-color: inherit !important;
    }
    
    .liste-affaires {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-bottom: 30px;
    }
    
    .liste-affaires > .categorie {
        margin-bottom: 30px;
    }
    
    .categorie {
        background-color: var(--light-bg);
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        padding: 15px;
        -webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        -moz-box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        overflow: hidden; /* Pour éviter les débordements */
    }
    
    .categorie h3 {
        color: var(--primary-color);
        margin-top: 0;
        border-bottom: 2px solid var(--accent-color);
        padding-bottom: 8px;
        margin-bottom: 15px;
    }
    
    .table-affaires {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed; /* Pour éviter les problèmes de mise en page sur Safari iOS */
    }
    
    .table-affaires th {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid var(--accent-color);
        font-size: 14px; /* Taille de police réduite pour éviter les superpositions */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .table-affaires td {
        padding: 8px;
        border-bottom: 1px solid #eee;
        font-size: 14px; /* Taille de police réduite pour éviter les superpositions */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal; /* Permettre le retour à la ligne pour le contenu */
        word-wrap: break-word; /* Permettre la césure des mots longs */
    }
    
    .table-affaires tr:last-child td {
        border-bottom: none;
    }
    
    .quantite {
        text-align: center;
        width: 80px;
        display: table-cell !important; /* Forcer l'affichage en cellule de tableau */
        visibility: visible !important; /* S'assurer que la colonne est visible */
    }
    
    @media (max-width: 768px) {
        /* Supprimer la règle qui cache la colonne des quantités */
        /*
        .table-affaires th:nth-child(2),
        .table-affaires td:nth-child(2) {
            display: none;
        }
        */
        
        /* Ajuster la taille des colonnes pour Safari iOS */
        .table-affaires th:first-child,
        .table-affaires td:first-child {
            width: 70%;
        }
        
        .table-affaires th:nth-child(2),
        .table-affaires td:nth-child(2) {
            width: 30%;
            display: table-cell !important;
            visibility: visible !important;
        }
    }
</style>

<?php
// Inclure le pied de page
include 'includes/footer.php';
?>