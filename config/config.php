<?php

return [
    'database' => [
        'connection' => 'mysql:host=127.0.0.1;port=33061;',
        'name' => 'dbname=mytodos',
        'username' => 'root',
        'password' => 'password',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];
