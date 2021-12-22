<?php
$router->define([
    'GET' => [
        '/' => [
            'controller' => 'HomeController',
            'method' => 'index'
        ],
        '/indefles' => [
            'controller' => 'IndeflesController',
            'method' => 'index'
        ],
        '/registratie' => [
            'controller' => 'RegistratieController',
            'method' => 'index'
        ],
        '/contact' => [
            'controller' => 'ContactController',
            'method' => 'index'
        ],
        '/producten' => [
            'controller' => 'ProductenController',
            'method' => 'index'
        ],
        '/winkelwagen' => [
            'controller' => 'ShoppingCartController',
            'method' => 'renderAsHTML'
        ],
        '/getProductImage' => [
            'controller' => 'ProductenController',
            'method' => 'getProductImage'
        ]
    ],
    "POST" => [
        '/registratie' => [
            'controller' => 'RegistratieController',
            'method' => 'aanmelden'
        ],
        '/bestellen' => [
            'controller' => 'BestellenController',
            'method' => 'index'
        ],
        '/winkelwagen' => [
            'controller' => 'ShoppingCartController',
            'method' => 'renderAsHTML'
        ],
        '/order' => [
            'controller' => 'ShoppingCartController',
            'method' => 'renderAsPDF'
        ]
    ]
]);