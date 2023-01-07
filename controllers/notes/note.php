<?php

use Core\Database;
use Core\Response;

$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Note';

$noteId = isset($_GET['id']) ? $_GET['id'] : null;
$userId = 12;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $query = 'select * from notes where userId = :uid and id = :note_id';
    $note = $db->query($query, [
        'uid' => $userId,
        'note_id' => $noteId
    ])->findOrAbort();


    authorize($note['userId'] !== $userId, Response::FORBIDDEN);


    //form submitted, delete current user
    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);

    header('location:/notes');
    exit();
} else {



    // Method Three: binding with key
    $query = 'select * from notes where userId = :uid and id = :note_id';
    $note = $db->query($query, [
        'uid' => $userId,
        'note_id' => $noteId
    ])->findOrAbort();


    authorize($note['userId'] !== $userId, Response::FORBIDDEN);

    view('notes/note.view.php', [
        'heading' => $heading,
        'note' => $note,
    ]);
}
