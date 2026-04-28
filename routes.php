<?php

// return [
//     '/' => 'controllers/home.php',
//     'listings' => 'controllers/listings/index.php',
//     'listings/create' => 'controllers/listings/create.php',
//     '404' => 'controllers/error/404.php',
// ];

$router->get('/', 'Controllers/home.php');
$router->get('/listings', 'Controllers/listings/index.php');
$router->get('/listings/create', 'Controllers/listings/create.php');