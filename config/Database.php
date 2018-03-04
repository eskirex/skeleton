<?php

return [
    /*
     * Select default database connection name
     */
    'default' => 'mysql',

    'mysql' => [
        'type'     => 'pdo_mysql',
        'database' => 'accounts',
        'server'   => 'localhost',
        'username' => 'root',
        'password' => '',
        'charset'  => 'utf8',
    ]
];
