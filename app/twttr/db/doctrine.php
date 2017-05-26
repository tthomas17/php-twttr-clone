<?php

$app->register(new Silex\Provider\DoctrineServiceProvider,[
  'db.options'=> [
      'driver' => 'pdo_mysql',
      'host' => 'localhost',
      'dbname' => 'twttr',
      'user' => 'phpPostService',
      'password' => 'phpPostService',
      'charset' => 'utf8mb4',
    ]
  ]);


?>