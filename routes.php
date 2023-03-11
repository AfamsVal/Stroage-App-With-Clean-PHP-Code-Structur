<?php
session_start();
$_SESSION['user'] = 1;

// session_destroy();



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
$router->get('/notes', 'controllers/notes/notes.php')->only('auth');
$router->get('/note', 'controllers/notes/note.php');
$router->get('/note', 'controllers/notes/note.php');
$router->delete('/note', 'controllers/notes/delete_note.php');
$router->get('/create-note', 'controllers/notes/create.php');
$router->post('/create-note', 'controllers/notes/create-note.php');
$router->patch('/note', 'controllers/notes/update-note.php');
$router->get('/edit-note', 'controllers/notes/edit-note.php');
$router->get('/register', 'controllers/register/create.php')->only('guest');
$router->post('/register', 'controllers/register/store.php');
