<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function() {
    include('../app/views/home.php');
});

$app->run();