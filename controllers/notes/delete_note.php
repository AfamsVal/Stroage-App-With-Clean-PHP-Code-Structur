<?php

use Core\App;
use Core\Database;
use Core\Response;


$db = App::resolve(Database::class);

$heading = 'Note';

$noteId = isset($_GET['id']) ? $_GET['id'] : null;
$userId = 1;

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
