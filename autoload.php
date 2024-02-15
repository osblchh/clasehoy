<?php
function autoload($className)
{
    $fileRoute = __DIR__ . '/classes/' . $className . '.php';
    if (file_exists($fileRoute)) {
        require_once $fileRoute;
    }
}

spl_autoload_register('autoload');
