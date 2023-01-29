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
    'infos'         => [
        'location' => [
            'title'     => 'Saint-Jean-De-Luz',
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

    ],
    'experiences'   => [
        'ge' => [
            'company'       => 'GlobalExam',
            'img_icon'      => url('img/experiences/ge.jpeg'),
            'job'           => 'Fullstack Developer',
            'starts_at'     => 'Sept 2020',
            'ends_at'       => 'Today',
            'description'   => '',
            'skills'        => [

            ],
            'link_url'      => '',
        ],
        'sga' => [
            'company'       => 'SGA Courtage',
            'img_icon'      => url('img/experiences/sga.jpeg'),
            'job'           => 'Développeur, Architecte Base de données',
            'starts_at'     => 'Juil 2019',
            'ends_at'       => 'Sept 2020',
            'description'   => '',
            'skills'        => [

            ],
            'link_url'      => '',
        ],
        'nxo' => [
            'company'       => 'NXO France',
            'img_icon'      => url('img/experiences/nxo.png'),
            'job'           => 'Ingénieur Développeur <span class="ml-4 bg-green-100 text-green-500 text-xs p-2">Apprentissage</span>',
            'starts_at'     => 'Sept 2017',
            'ends_at'       => 'Sept 2020',
            'description'   => '',
            'skills'        => [

            ],
            'link_url'      => '',
        ],
        'cpam' => [
            'company'       => 'CPAM Val-d\'Oise',
            'img_icon'      => url('img/experiences/cpam.png'),
            'job'           => 'Réalisateur d\'application <span class="ml-4 bg-green-100 text-green-500 text-xs p-2">Apprentissage</span>',
            'starts_at'     => 'Sept 2015',
            'ends_at'       => 'Sept 2017',
            'description'   => '',
            'skills'        => [

            ],
            'link_url'      => '',
        ],
    ]
];