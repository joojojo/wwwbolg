<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\connection',
            'dsn' => 'mysql:host=localhost;dbname=store',
            'username' => 'root',
            'password' => '123456',
            'charset' => 'utf-8'
        ],
    ],
];
