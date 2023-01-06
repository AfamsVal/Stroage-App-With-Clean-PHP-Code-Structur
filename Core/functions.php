<?php

use Core\Response;

function show($value)
{
    echo "<pre>";

    var_dump($value);

    echo '</pre>';

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}


function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $atrributes = [])
{
    extract($atrributes);
    require base_path('views/' . $path);
}
