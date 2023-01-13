<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

// require base_path('Database.php');

// require base_path('Response.php');

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    // show(base_path("{$class}.php"));
    require base_path("{$class}.php");
});

// require base_path('Core/router.php');

$router = new \Core\Router();

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//mETHOD 1
// $method = isset($_POST['_request_method']) ? $_POST['_request_method'] : $_SERVER['REQUEST_METHOD'];

// mETHOD 2
$method =  $_POST['_request_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
