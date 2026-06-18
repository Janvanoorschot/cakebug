<?php

use function Cake\Core\env;
use Cake\Database\Connection;
use Cake\Database\Driver\Mysql;
use Cake\Database\Driver\Sqlite;

return [
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),
    'Security' => [
        'salt' => env('SECURITY_SALT', '024fd1b5c4202057e8d86bc4c617606f9eeea8194e55cfe7c06ff3932c2c0afe'),
    ],
    'Datasources' => [
        'default' => [
            'className' => Connection::class,
            'driver' => Sqlite::class,
            'datasource' => 'Database/Sqlite',
            'database' => '../webroot/cakebug.sqlite',
            'log' => true,
        ],
        'debug_kit' => [
            'className' => 'Cake\Database\Connection',
            'driver' => Sqlite::class,
            'datasource' => 'Database/Sqlite',
            'database' => '../webroot/cakebug_debug_kit.sqlite',
            'log' => true,
        ]

    ],
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
