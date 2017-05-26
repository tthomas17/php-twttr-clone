<?php
require __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application([
  'debug' => true
  ]);

$app->mount('/', new twttr\providers\controllerProviders\PostControllerProvider);

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../app/twttr/views',
));

require __DIR__.'/../app/twttr/routes/routes.php';
require __DIR__.'/../app/twttr/db/doctrine.php';

$app->run();


?>