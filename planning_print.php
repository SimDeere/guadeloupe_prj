<?php
/**
 * Version imprimable du planning du voyage en Guadeloupe
 */

// Définir le titre de la page
$page_title = 'Planning - Version imprimable';

// Inclure l'en-tête simplifié pour impression
include 'includes/header_print.php';

// Données du planning (copié depuis index.php)
$planning = [
    [
        'jour' => 1,
        'date' => 'Samedi 14 fév.',
        'matin' => '',
        'midi' => '',
        'apres_midi' => [
            [
                'type' => 'travel',
                'heure' => '15h30',
                'description' => 'Atterrissage, récupération des 3 voitures.'
            ],
            [
                'type' => 'activity',
                'heure' => 'Fin d\'après-midi',
                'description' => 'Route vers Sainte-Anne (environ 30-40 min). Installation au logement.'
            ],
            [
                'type' => 'food',
                'heure' => 'Logistique',
                'description' => 'Courses de base au Carrefour Market ou au Leader Price de Sainte-Anne pour les dîners.'
            ]
        ],
        'soir' => [
            [
                'type' => 'evening',
                'description' => 'Premier bain de pied sur la plage du Bourg de Sainte-Anne (éclairée le soir) et repos.'
            ]
        ]
    ],
    // Copier le reste des données du planning depuis index.php
    // ...
];

// Inclure les données complètes du planning depuis le fichier original
include 'includes/planning_data.php';
?>

<div class="container print-container">
    <header class="print-header">
        <h1>Planning du Voyage en Guadeloupe</h1>
        <p class="print-date">Document imprimé le <?php echo date('d/m/Y'); ?></p>
    </header>

    <main>
        <div class="planning-container">
            <?php foreach ($planning as $jour): ?>
                <div class="day-card">
                    <div class="day-header">
                        <h2>Jour <?php echo $jour['jour']; ?> - <?php echo $jour['date']; ?></h2>
                    </div>
                    
                    <?php if (!empty($jour['matin']) && is_array($jour['matin'])): ?>
                        <div class="time-slot">
                            <h3>Matin</h3>
                            <?php foreach ($jour['matin'] as $activite): ?>
                                <div class="activity-item">
                                    <strong><?php echo isset($activite['heure']) ? $activite['heure'] : ''; ?></strong>
                                    <span><?php echo $activite['description']; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($jour['midi']) && is_array($jour['midi'])): ?>
                        <div class="time-slot">
                            <h3>Midi</h3>
                            <?php foreach ($jour['midi'] as $activite): ?>
                                <div class="activity-item">
                                    <strong><?php echo isset($activite['heure']) ? $activite['heure'] : ''; ?></strong>
                                    <span><?php echo $activite['description']; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($jour['apres_midi']) && is_array($jour['apres_midi'])): ?>
                        <div class="time-slot">
                            <h3>Après-midi</h3>
                            <?php foreach ($jour['apres_midi'] as $activite): ?>
                                <div class="activity-item">
                                    <strong><?php echo isset($activite['heure']) ? $activite['heure'] : ''; ?></strong>
                                    <span><?php echo $activite['description']; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($jour['soir']) && is_array($jour['soir'])): ?>
                        <div class="time-slot">
                            <h3>Soir</h3>
                            <?php foreach ($jour['soir'] as $activite): ?>
                                <div class="activity-item">
                                    <strong><?php echo isset($activite['heure']) ? $activite['heure'] : ''; ?></strong>
                                    <span><?php echo $activite['description']; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer class="print-footer">
        <p>Voyage en Guadeloupe - Planning imprimable</p>
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