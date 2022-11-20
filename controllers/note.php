<?php


$config = require('config.php');

$db = new Database($config['database']);

$heading = 'Note';


// DB BELOW////////////////////////
///////////////////////////////////


$noteId = isset($_GET['id']) ? $_GET['id'] : null;

// Method Three: binding with key
$query = 'select * from notes where id = :note_id';
$note = $db->query($query, ['note_id' => $noteId])->fetch();

require './views/note.view.php';
