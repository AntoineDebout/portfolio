<?php

return [
    'me'            => [
        'name'  => 'Antoine DEBOUT',
        'job'   => 'Fullstack Developer',
        'img'   => url('img/profile-picture/me.jpeg'),
    ],
    'skills_tags'   => [
        'laravel' => [
            'title'     => 'Laravel',
            'icon'      => [
                'type'      => 'fab',
                'class'     => 'text-red-500',
                'name'      => 'laravel',
                'size'      => 'xs',
            ],
            'background' => 'bg-red-100',
            'rounded'    => 'rounded-full',
        ],
        'vue' => [
            'title'     => 'Vue',
            'icon'      => [
                'type'      => 'fab',
                'class'     => 'text-green-500',
                'name'      => 'vuejs',
                'size'      => 'xs',
            ],
            'background' => 'bg-green-100',
            'rounded'    => 'rounded-full',
        ],
        'tailwind' => [
            'title'     => 'Tailwind',
            'icon'      => [
                'type'      => 'fab',
                'class'     => 'text-blue-500',
                'name'      => 'css3',
                'size'      => 'xs',
            ],
            'background' => 'bg-blue-100',
            'rounded'    => 'rounded-full',
        ],
    ],
    'skills_general' => [
        'hard' => [
            'PHP',
            'Laravel',
            'Symfony',
            'Tailwind',
            'VueJs',
            'jQuery',
            'MySQL',
            'PostgreSQL',
            'GIT',
            'AWS',
            'Singlestore',
            'PHPUnit',
        ],
        'soft' => [
            'Agile',
            'Esprit d\'équipe',
            'Entraide',
            'Organisation',
            'Curiosité'
        ],
    ],
    'infos'         => [
        'location' => [
            'title'     => 'Saint-Jean-De-Luz, FR',
            'icon'      => [
                'type'      => 'fas',
                'class'     => 'text-black',
                'name'      => 'location-dot',
                'size'      => 'sm',
            ]
        ],
        'twitter' => [
            'title'     => '@AntoineDebout',
            'link'      => 'https://twitter.com/AntoineDebout',
            'icon'      => [
                'type'      => 'fab',
                'class'     => 'text-black',
                'name'      => 'twitter',
                'size'      => 'sm',
            ]
        ],
        'github' => [
            'title'     => 'AntoineDebout',
            'link'      => 'https://github.com/AntoineDebout',
            'icon'      => [
                'type'      => 'fab',
                'class'     => 'text-black',
                'name'      => 'github',
                'size'      => 'sm',
            ]
        ],
        'email' => [
            'title'     => 'ant.debout@gmail.com',
            'icon'      => [
                'type'      => 'fas',
                'class'     => 'text-black',
                'name'      => 'at',
                'size'      => 'sm',
            ]
        ]
    ],
    'studies'       => [
        'itescia'   => [
            'school'        => 'ITESCIA - CCI Paris Ile de France',
            'img_icon'      => url('img/studies/itescia.png'),
            'name'          => 'Master of science Manager en Ingénierie Informatique',
            'starts_at'     => 'Sept 2017',
            'ends_at'       => 'Sept 2020',
        ],
        'uas'       => [
            'school'        => 'Lapland University of Applied Sciences',
            'img_icon'      => url('img/studies/uas.png'),
            'name'          => 'International Business IT (Erasmus +)',
            'starts_at'     => 'Aout 2019',
            'ends_at'       => 'Dec 2019',
        ],
    ],
    'experiences'   => [
        'ge' => [
            'company'       => 'GlobalExam',
            'img_icon'      => url('img/experiences/ge.jpeg'),
            'job'           => 'Fullstack Developer',
            'contract'      => 'CDI',
            'starts_at'     => 'Sept 2020',
            'ends_at'       => 'Today',
            'description'   => '',
            'skills'        => [

            ],
            'link_url'      => 'https://global-exam.com/fr',
        ],
        'sga' => [
            'company'       => 'SGA Courtage',
            'img_icon'      => url('img/experiences/sga.jpeg'),
            'job'           => 'Développeur',
            'contract'      => 'PROJET SCOLAIRE',
            'starts_at'     => 'Juil 2019',
            'ends_at'       => 'Sept 2020',
            'description'   => 'Réalisation d\'un CRM pour courtier en assurance. 
                Développement d\'une application web sous Laravel - Bootstrap - jQuery. 
                Mise en place de l\'architecture de données. Gestion d\'une équipe de 3 personnes',
            'skills'        => [

            ],
            'link_url'      => 'http://sgacourtage.fr/',
        ],
        'nxo' => [
            'company'       => 'NXO France',
            'img_icon'      => url('img/experiences/nxo.png'),
            'job'           => 'Ingénieur Développeur',
            'contract'      => 'APPRENTISSAGE',
            'starts_at'     => 'Sept 2017',
            'ends_at'       => 'Sept 2020',
            'description'   => ' Conception, développement et maintenance d’applications orientées business sur la plateforme intranet 
                (Plan de charge Avant vente, automatisation de processus pour la SupplyChain, gestion de planning)
                Création et évolution de modules pour un site E-Commerce sous Magento. Migration d\'une plateforme Magento v1 vers Magento v2.',
            'skills'        => [

            ],
            'link_url'      => 'https://www.nxo.eu/',
        ],
        'cpam' => [
            'company'       => 'CPAM Val-d\'Oise',
            'img_icon'      => url('img/experiences/cpam.png'),
            'job'           => 'Réalisateur d\'application',
            'contract'      => 'APPRENTISSAGE',
            'starts_at'     => 'Sept 2015',
            'ends_at'       => 'Sept 2017',
            'description'   => 'Evolution d\'une application VBA vers une application Web',
            'skills'        => [

            ],
        ],
    ]
];