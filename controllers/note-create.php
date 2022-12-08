<?php


$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Create Note';


// DB BELOW////////////////////////
///////////////////////////////////

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query('INSERT INTO notes(title,body,userId) VALUES(:title, :body, :userId)', [
        'title' => $_POST['title'],
        'body' => $_POST['body'],
        'userId' => $_POST['userId'],
    ]);
}

// $noteId = isset($_GET['id']) ? $_GET['id'] : null;
// $userId = 1;

// // Method Three: binding with key
// $query = 'select * from notes where userId = :uid and id = :note_id';
// $note = $db->query($query, [
//     'uid' => $userId,
//     'note_id' => $noteId
// ])->findOrAbort();


// authorize($note['userId'] !== $userId, Response::FORBIDDEN);


require './views/note-create.view.php';
