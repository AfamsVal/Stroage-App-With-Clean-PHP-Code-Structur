<?php

use Core\Database;
use Core\Response;
use Core\Validator;

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Edit Note';

$noteId = isset($_POST['id']) ? $_POST['id'] : null;
$userId = 1;

// Method Three: binding with key
$query = 'select * from notes where userId = :uid and id = :note_id';
$note = $db->query($query, [
    'uid' => $userId,
    'note_id' => $noteId
])->findOrAbort();


authorize($note['userId'] !== $userId, Response::FORBIDDEN);


$errors = [];

if (Validator::string($_POST['title'])) {
    $errors['title'] = 'Title is required!';
}

if (strlen($_POST['body']) === 0) {
    $errors['body'] = 'Body is required!';
}

if (count($errors)) {
    return  view('notes/edit.view.php', [
        'heading' => $heading,
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body, title = :title where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
    'title' => $_POST['title'],
]);

header('location: /notes');
die();
