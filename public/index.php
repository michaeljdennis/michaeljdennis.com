<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function () {
    include('../home.php');
});

$app->run();