<?php

return [
    'style'      => [
        'minify'   => true,
        'data'     => [],
        'resource' => [
            'libraries' . DS . 'tether',
            'libraries' . DS . 'bootstrap',
            'libraries' . DS . 'font-awesome',
            'libraries' . DS . 'keyframes',
            'header',
            'main',
            'index',
            'login',
            'register',
            'settings',
            'footer'
        ]
    ],
    'javascript' => [
        'minify' => true,
        'data'   => [],
        'script' => [
            'libraries' . DS . 'jquery',
            'libraries' . DS . 'tether',
            'libraries' . DS . 'popper',
            'libraries' . DS . 'bootstrap',
            'main',
            'settings',
        ],
    ],

];