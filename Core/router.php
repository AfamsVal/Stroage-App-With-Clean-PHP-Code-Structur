<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/notes' => 'controllers/notes/notes.php',
    '/note' => 'controllers/notes/note.php',
    '/create-note' => 'controllers/notes/create.php',
];

function abort($code = 404)
{
    http_response_code($code);

    view("{$code}.view.php");

    die();
}

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
