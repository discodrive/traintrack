<?php

$app->get('/', function () use ($app) {
    return $app['twig']->render('home.html', array(
        'name' => 'home'
    ));
});

$app->get('/workout/{name}', function ($name) use ($app) {
    return $app['twig']->render('name.html', array(
        'name' => $name,
    ));
});