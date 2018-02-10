<?php

return [
    'db' => [
        'driver' => 'mysqli',
        'hostname' => 'localhost',
        'username' => '',
        'password' => '',
        'database' => '',
        'port' => 3306,
        'charset' => 'utf8',
        'options' => []
    ],
    'config' => [
        'config_modification' => true,
        'config_admin_language' => 'en-gb',
        'config_error_log' => true,
        'config_error_display' => false,
        'config_view_theme' => 'default',
        'config_compression' => 0
    ],
    'url' => [
        'path' => 'admin/'
    ],
    'router' => include 'routes.php',
];