<?php
/**
 * Données complètes du planning pour le voyage en Guadeloupe
 * Ce fichier est inclus dans les pages qui affichent le planning
 */

// Si la variable $planning n'existe pas déjà, on la définit
if (!isset($planning) || !is_array($planning)) {
    $planning = [];
}

// Données complètes du planning
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
                'type' => 'activity',
                'heure' => '9h',
                'description' => 'Plage de Bois Jolan (Sainte-Anne) - Eau turquoise, sable blanc, cocotiers.'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Pique-nique sur la plage (prévoir courses la veille).'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'description' => 'Continuation à la plage ou visite du Bourg de Sainte-Anne.'
            ]
        ],
        'soir' => [
            [
                'type' => 'food',
                'description' => 'Dîner au logement.'
            ]
        ]
    ],
    [
        'jour' => 3,
        'date' => 'Lundi 16 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'description' => 'Visite de la Pointe des Châteaux (Grand-Terre) - Site naturel emblématique.'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Déjeuner à Saint-François (restaurants sur le port).'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'description' => 'Plage des Raisins Clairs à Saint-François.'
            ]
        ],
        'soir' => [
            [
                'type' => 'food',
                'description' => 'Dîner au logement.'
            ]
        ]
    ],
    [
        'jour' => 4,
        'date' => 'Mardi 17 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'description' => 'Excursion à la Désirade (départ du port de Saint-François à 8h, retour à 16h30).'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Déjeuner sur l\'île (restaurant Le Zamana recommandé).'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'description' => 'Plages de la Désirade et retour à Saint-François.'
            ]
        ],
        'soir' => [
            [
                'type' => 'food',
                'description' => 'Dîner au logement.'
            ]
        ]
    ],
    [
        'jour' => 5,
        'date' => 'Mercredi 18 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'description' => 'Route vers Basse-Terre. Arrêt au Mémorial ACTe à Pointe-à-Pitre.'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Déjeuner à Pointe-à-Pitre.'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'description' => 'Route vers Deshaies. Installation au nouveau logement.'
            ]
        ],
        'soir' => [
            [
                'type' => 'food',
                'description' => 'Dîner au logement ou dans un restaurant local.'
            ]
        ]
    ],
    [
        'jour' => 6,
        'date' => 'Jeudi 19 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'description' => 'Jardin Botanique de Deshaies.'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Déjeuner au restaurant du jardin ou à Deshaies.'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'description' => 'Plage de Grande Anse (Deshaies) - Une des plus belles plages de l\'île.'
            ]
        ],
        'soir' => [
            [
                'type' => 'food',
                'description' => 'Dîner au logement.'
            ]
        ]
    ],
    [
        'jour' => 7,
        'date' => 'Vendredi 20 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'description' => 'Randonnée aux Chutes du Carbet (prévoir 3-4h aller-retour).'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Pique-nique pendant la randonnée.'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'description' => 'Continuation de la randonnée et retour.'
            ]
        ],
        'soir' => [
            [
                'type' => 'food',
                'description' => 'Dîner au logement.'
            ]
        ]
    ],
    [
        'jour' => 8,
        'date' => 'Samedi 21 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'description' => 'Plage de Malendure et réserve Cousteau (possibilité de snorkeling).'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Déjeuner dans un restaurant de bord de mer à Malendure.'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'activity',
                'description' => 'Continuation à la plage ou excursion en bateau à fond de verre.'
            ]
        ],
        'soir' => [
            [
                'type' => 'food',
                'description' => 'Dîner au logement.'
            ]
        ]
    ],
    [
        'jour' => 9,
        'date' => 'Dimanche 22 fév.',
        'matin' => [
            [
                'type' => 'activity',
                'description' => 'Route vers l\'aéroport.'
            ]
        ],
        'midi' => [
            [
                'type' => 'food',
                'description' => 'Déjeuner léger près de l\'aéroport.'
            ]
        ],
        'apres_midi' => [
            [
                'type' => 'travel',
                'heure' => '15h30',
                'description' => 'Décollage et retour.'
            ]
        ],
        'soir' => ''
    ]
];