<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

// require base_path('Database.php');

// require base_path('Response.php');

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    // show(base_path("{$class}.php"));
    require base_path("{$class}.php");
});

require base_path('Core/router.php');
