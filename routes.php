<?php



// $routes = [
//     '/' => 'controllers/home.php',
//     '/about' => 'controllers/about.php',
//     '/contact' => 'controllers/contact.php',
//     '/notes' => 'controllers/notes/notes.php',
//     '/note' => 'controllers/notes/note.php',
//     '/create-note' => 'controllers/notes/create.php',
// ];

$router->get('/', 'controllers/home.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/notes', 'controllers/notes/notes.php');
$router->get('/note', 'controllers/notes/note.php');
$router->get('/create-note', 'controllers/notes/create.php');
