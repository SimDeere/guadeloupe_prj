<?php
/**
 * Version imprimable du planning du voyage en Guadeloupe
 */

// Définir le titre de la page
$page_title = 'Planning - Version imprimable';

// Inclure l'en-tête simplifié pour impression
include 'includes/header_print.php';

// Données du planning (copié exactement depuis index.php)
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
    [
        'jour' => 2,
        'date' => 'Dimanche 15 fév.',
        'matin' => [
            [
                'type' => 'beach',
                'description' => 'Détente à la Plage de la Caravelle à Sainte-Anne. Sable blanc et eaux calmes.'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'heure' => '12h00',
                'description' => 'Déjeuner rapide à Sainte-Anne (Bokits ou accras sur le pouce).'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'heure' => '13h30',
                'description' => 'Carnaval à Pointe-à-Pitre. C\'est une expérience intense et bruyante.'
            ],
            [
                'type' => 'warning',
                'description' => 'Conseil : Voir pour amener un siège pliant pour maman/enfant car on reste souvent debout longtemps.'
            ]
        ],
        'soir' => [
            [
                'type' => 'evening',
                'description' => 'Retour au calme à Sainte-Anne.'
            ]
        ]
    ],
    [
        'jour' => 3,
        'date' => 'Lundi 16 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'heure' => '10h00',
                'description' => 'RDV au Moule pour le Parapente.'
            ],
            [
                'type' => 'beach',
                'description' => 'Le reste du groupe profite de la Plage de l\'Autre Bord juste à côté.'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Déjeuner au Moule (Front de mer).'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'description' => 'Direction le Nord.'
            ],
            [
                'type' => 'activity',
                'description' => 'Arrêt photo au Cimetière de Morne-à-l\'Eau (échiquier noir et blanc).'
            ],
            [
                'type' => 'activity',
                'description' => 'Route jusqu\'à la Pointe de la Grande Vigie (falaises impressionnantes, peu de marche).'
            ]
        ],
        'soir' => [
            [
                'type' => 'beach',
                'description' => 'Bain de fin de journée à l\'Anse Bertrand ou retour par la côte Est.'
            ]
        ]
    ],
    [
        'jour' => 4,
        'date' => 'Mardi 17 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'heure' => '10h30',
                'description' => 'Réserve Cousteau (Bateau à fond de verre).'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Déjeuner sur la plage de Malendure.'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'description' => 'Remontée vers Deshaies. Arrêt à la Plage de Grande Anse.'
            ],
            [
                'type' => 'warning',
                'description' => 'Attention : Il peut y avoir des rouleaux. Sinon la plage de la Perle juste après, plus calme.'
            ]
        ],
        'soir' => [
            [
                'type' => 'travel',
                'description' => 'Retour : Par la route de la Traversée.'
            ]
        ]
    ],
    [
        'jour' => 5,
        'date' => 'Mercredi 18 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'description' => 'Exploration de la Mangrove (Grand Cul-de-Sac Marin)'
            ],
            [
                'type' => 'activity',
                'description' => '<strong>Groupe Sportif</strong>: Kayak dans la mangrove.'
            ],
            [
                'type' => 'activity',
                'description' => '<strong>Groupe Doux</strong>: Excursion en bateau moteur avec skipper (départ de Morne-à-l\'Eau ou Petit-Canal).'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Pique-nique ou restaurant de poissons à Port-Louis.'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'beach',
                'description' => 'Plage du Souffleur à Port-Louis (magnifique, beaucoup d\'ombre).'
            ]
        ],
        'soir' => [
            [
                'type' => 'activity',
                'description' => 'Shopping : Boutiques de souvenirs au Moule ou à Sainte-Anne en fin de journée.'
            ]
        ]
    ],
    [
        'jour' => 6,
        'date' => 'Jeudi 19 fév.',
        'matin' => [
            [
                'type' => 'beach',
                'description' => 'Plage des Amandiers (Sainte-Rose): Elle offre beaucoup d\'ombre grâce à ses amandiers et dispose de carbets (tables abritées). <br>Les eaux y sont calmes.'
            ],
            [
                'type' => 'activity',
                'description' => 'Sinon activités : Écomusée CréoleArt (Sainte-Rose) - Écomusée proposant une balade dans un jardin médicinal et des expositions sur l\'histoire de la Guadeloupe. <br>Accessible et très visuel pour les enfants'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Pique-nique ou restaurant sur le port de Sainte Rose.'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'travel',
                'description' => 'Excursion Bateau Saintes Rose: Rendez-vous 12h30 Port de Sainte Rose pour une excursion au sein de Grand Cul de Sac avec visite des Ilets.<br>(https://www.bleublancvert.com/excursion-bateau-sainte-rose-guadeloupe)'
            ]
        ],
        'soir' => []
    ],
    [
        'jour' => 7,
        'date' => 'Vendredi 20 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'description' => 'Scission randonnée'
            ],
            [
                'type' => 'activity',
                'description' => '<strong>Groupe Sportif</strong> : Direction les Chutes du Carbet (la 2ème chute est accessible en 45 min aller-retour sur sentier aménagé). <br>Le Saut de la Lézarde est glissant, sinon le Carbet pour la sécurité.'
            ],
            [
                'type' => 'activity',
                'description' => '<strong>Groupe Doux</strong> : Visite du Zoo de Guadeloupe (Bouillante), puis visite de la maison de la forêt avec la cascade aux écrevisses et retour vers Douville. <br> Ensuite plage ou piscine de la maison (Sainte Anne).'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Pique nique.'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'beach',
                'description' => 'Regroupement à la Plage de Viard ou retour vers Saint-François pour la Pointe des Châteaux (très beau coucher de soleil, marche facile sur le plat, sauf la montée à la croix).'
            ]
        ],
        'soir' => []
    ],
    [
        'jour' => 8,
        'date' => 'Samedi 21 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'description' => 'Shopping final au Marché de Sainte-Anne (épices, paréos, souvenirs).'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Dernier repas les pieds dans l\'eau à Sainte-Anne.'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'heure' => '14h00',
                'description' => 'Nettoyage des 3 voitures (Stations-service à proximité de l\'aéroport ou à Sainte-Anne).'
            ],
            [
                'type' => 'travel',
                'heure' => '15h30',
                'description' => 'Dépose des véhicules près de l\'aéroport PTP.'
            ]
        ],
        'soir' => [
            [
                'type' => 'travel',
                'heure' => '18h00',
                'description' => 'Décollage.'
            ]
        ]
    ]
];

// Informations sur la flore et la faune
$flora_fauna = [
    'flore' => ['🌺 Hibiscus', '🌴 Palmiers', '🍌 Bananiers', '🥥 Cocotiers'],
    'faune' => ['🦎 Iguanes', '🐠 Poissons tropicaux', '🐢 Tortues marines', '🦜 Perroquets']
];

// Légende des icônes
$legende = [
    'beach' => 'Activités plage',
    'food' => 'Repas',
    'activity' => 'Visites et activités',
    'evening' => 'Activités du soir',
    'travel' => 'Déplacements'
];
?>

<div class="container print-container">
    <header class="print-header">
        <h1>Planning du Voyage en Guadeloupe</h1>
        <p class="print-date">Document imprimé le <?php echo date('d/m/Y'); ?></p>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Matin</th>
                    <th>Midi</th>
                    <th>Après-midi</th>
                    <th>Soirée</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($planning as $jour): ?>
                <tr>
                    <td>
                        <span class="day-label">Jour <?php echo $jour['jour']; ?></span><br>
                        <?php echo $jour['date']; ?>
                    </td>
                    <td>
                        <?php if (!empty($jour['matin'])): ?>
                            <?php foreach ($jour['matin'] as $activite): ?>
                                <div class="activity-group <?php echo $activite['type']; ?>-icon">
                                    <?php if (isset($activite['heure'])): ?>
                                        <span class="time-label"><?php echo $activite['heure']; ?> :</span>
                                    <?php endif; ?>
                                    <?php echo $activite['description']; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (!empty($jour['midi'])): ?>
                            <?php foreach ($jour['midi'] as $activite): ?>
                                <div class="activity-group <?php echo $activite['type']; ?>-icon">
                                    <?php if (isset($activite['heure'])): ?>
                                        <span class="time-label"><?php echo $activite['heure']; ?> :</span>
                                    <?php endif; ?>
                                    <?php echo $activite['description']; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (!empty($jour['apres_midi'])): ?>
                            <?php foreach ($jour['apres_midi'] as $activite): ?>
                                <?php if ($activite['type'] === 'warning'): ?>
                                    <div class="warning"><?php echo $activite['description']; ?></div>
                                <?php else: ?>
                                    <div class="activity-group <?php echo $activite['type']; ?>-icon">
                                        <?php if (isset($activite['heure'])): ?>
                                            <span class="time-label"><?php echo $activite['heure']; ?> :</span>
                                        <?php endif; ?>
                                        <?php echo $activite['description']; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (!empty($jour['soir'])): ?>
                            <?php foreach ($jour['soir'] as $activite): ?>
                                <?php if ($activite['type'] === 'warning'): ?>
                                    <div class="warning"><?php echo $activite['description']; ?></div>
                                <?php else: ?>
                                    <div class="<?php echo $activite['type']; ?>-icon">
                                        <?php if (isset($activite['heure'])): ?>
                                            <span class="time-label"><?php echo $activite['heure']; ?> :</span>
                                        <?php endif; ?>
                                        <?php echo $activite['description']; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="info-box">
            <h3>Légende</h3>
            <?php foreach ($legende as $type => $description): ?>
            <p class="<?php echo $type; ?>-icon"><?php echo $description; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="info-box" style="text-align: center;">
            <h3>Flore et faune des Caraïbes</h3>
            <p class="flora-fauna"><?php echo implode(' • ', $flora_fauna['flore']); ?></p>
            <p class="flora-fauna"><?php echo implode(' • ', $flora_fauna['faune']); ?></p>
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