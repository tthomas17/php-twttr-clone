<?php
namespace twttr\providers\controllerProviders;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class PostControllerProvider implements ControllerProviderInterface {
  public function connect(Application $app){
    $controllers = $app['controllers_factory'];

    $controllers->get('/',"twttr\controllers\PostController::getTweetAction");
    $controllers->post('/',"twttr\controllers\PostController::postTweetAction");




    return $controllers;
  }

}

?>