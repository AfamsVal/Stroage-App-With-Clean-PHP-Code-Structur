<?php
$heading = 'Register';
$note = '';
$errors = [];

view('register/create.view.php', [
    'heading' => $heading,
    'note' => $note,
    'errors' => $errors,
]);
