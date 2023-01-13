<?php
// DB BELOW////////////////////////
///////////////////////////////////

use Core\Validator;
use Core\Database;


$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Create New Note';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (Validator::string($_POST['title'])) {
        $errors['title'] = 'Title is required!';
    }

    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'Body is required!';
    }

    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'Body cannnot be more than 1000 character!';
    }

    if (!empty($errors)) {
        return view('notes/create.view.php', [
            'heading' => $heading,
            'errors' => $errors
        ]);
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(title,body,userId) VALUES(:title, :body, :userId)', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'userId' => $_POST['userId'],
        ]);

        header('location:/notes');
        exit();
    }
}
