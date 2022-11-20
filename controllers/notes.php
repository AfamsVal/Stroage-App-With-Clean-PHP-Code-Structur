<?php


$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Notes';


// DB BELOW////////////////////////
///////////////////////////////////


$id = isset($_GET['id']) ? $_GET['id'] : 1;
$user = isset($_GET['user']) ? $_GET['user'] : 1;

// Method Three: binding with key
$query = 'select * from notes where userId = :uid';
$notes = $db->query($query, ['uid' => $id])->fetchAll();

// show($notes);

require './views/notes.view.php';








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
// $query = 'select * from notes where user_id = :uid';
// $posts = $db->query($query, ['uid' => $id])->fetchAll();

//Method Four: binding with key
// $query = 'select * from post where id = :uid, name= :username';
// $posts = $db->query($query, ['uid' => $id, ':username' => $user])->fetch();
// show($posts);