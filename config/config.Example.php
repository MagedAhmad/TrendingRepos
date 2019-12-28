<?php

return [
    /*
     * Help set your project to deployment
     * or still in development phase .
     *
     * Options : development | deployment
     */
    'env' => 'development',

    'offset' => 10,
    
    /*
     * Set your database credentials
     *
     */
    'database' => [
        'name' => 'dbname',
        'username' => 'root',
        'password' => 'ENTER-YOUR-PASSWORD',
        'connection' => 'mysql:host=localhost',
        'options' => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],

    /*
     * Set your Api default attributes
     *
     */
    'Api' => [
        'provider' => 'github',
        'language' => 'PHP',
        'since' => 'weekly'
    ],

    /*
    * Supported providers
    *
    */
    'providers' => [
        'github',
        'gitlab',
        'bitbucket'
    ],
];
