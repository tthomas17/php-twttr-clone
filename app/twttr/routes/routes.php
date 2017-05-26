<?php

$app->get('/', function() use($app) {

  return $app['twig']->render('app.twig');
});

$app->post('/', function() use($app) {

  return $app['twig']->render('app.twig');
});



?>
