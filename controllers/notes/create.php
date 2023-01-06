<?php

require 'validator.php';


$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Create New Note';

$errors = [];

// DB BELOW////////////////////////
///////////////////////////////////

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (!Validator::string($_POST['title'])) {
        $errors['title'] = 'Title is required!';
    }

    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'Body is required!';
    }

    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'Body cannnot be more than 1000 character!';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(title,body,userId) VALUES(:title, :body, :userId)', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'userId' => $_POST['userId'],
        ]);
    }
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


view('notes/create.view.php', [
    'heading' => $heading,
    'errors' => $errors
]);
