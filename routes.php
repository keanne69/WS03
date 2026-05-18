<?php

$router->get('/', 'Controllers/home.php');
$router->get('/listings', 'Controllers/listings/index.php');
$router->get('/listings/create', 'Controllers/listings/create.php');
