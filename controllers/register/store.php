<?php

use Core\App;
use Core\Database;

$heading = 'Register';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (empty($name)) $errors['name'] = 'Please provide a name';
if (empty($email)) $errors['email'] = 'Please provide a valid email';
if (empty($password)) $errors['password'] = 'Please provide a password';

if (!empty($errors)) {
    return view('register/create.view.php', [
        'errors' => $errors,
        'heading' => $heading
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    header('location:/');
} else {
    $db->query('insert into users(name,email,password) VALUES(:name, :email, :password)', [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];
    header('location:/');
    exit();
}
