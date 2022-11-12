<?php
require 'functions.php';

// require 'router.php';

require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);


$id = isset($_GET['id']) ? $_GET['id'] : 1;
$user = isset($_GET['user']) ? $_GET['user'] : 1;



//Method one: fetch single///
//$query = 'select * from post where id = ?';
// $posts = $db->query($query,[$id]))->fetch();

// Method Two: fetch multiple/////
// $query = 'select * from post where id = ?';
// $posts = $db->query($query, [$id]);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }

//Method Three: binding with key
$query = 'select * from post where id = :uid';
$posts = $db->query($query, ['uid' => $id])->fetch();

//Method Four: binding with key
// $query = 'select * from post where id = :uid, name= :username';
// $posts = $db->query($query, ['uid' => $id, ':username' => $user])->fetch();

show($posts);
