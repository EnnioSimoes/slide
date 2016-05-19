<?php

use Pagekit\Application;

return [

    'name' => 'slide',

    'type' => 'extension',

    // called when Pagekit initializes the module
    'main' => function (Application $app) {
        echo "Meu Slide";
    },
    'autoload' => [
        'Ennio\\Slide\\' => 'src'
    ],
    'routes' => [
        '@slide' => [
            'path' => '/slide',
            'controller' => 'Ennio\\Slide\\Controller\\SlideController'
        ]
    ],
];
