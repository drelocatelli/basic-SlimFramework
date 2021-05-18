<?php

require_once('vendor/autoload.php');

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->get('/teste', function(){
    require_once('teste.php');
});

$app->get("/", function(){
    echo "Homepage";
});

$app->run();