<?php
namespace twttr\controllers;

use Silex\Application;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use PDO;

class PostController {
  public function getTweetAction(Application $app){

    $posts = $app['db']->fetchAll("SELECT message_text FROM posts ORDER BY date_created DESC;");

    return $app['twig']->render('app.twig', array('posts' => $posts));
    die();
  }

  public function postTweetAction(Application $app, Request $request){

    if ($request->getMethod() == 'POST') {
        $message =  $request->request->get('message');

        if(isset($message) && $message != ""){

          if(strlen($message) > 140){
            echo "Messages need to be 140 Characters or less";
          }else{
            $posted = $app['db']->prepare("INSERT INTO posts VALUES (:id, :message_text, :date_created);");
          $date = date("Y-m-d H:i:s");
          $id=NULL;
          $posted->bindParam(':id', $id, PDO::PARAM_NULL);
          $posted->bindParam(':message_text', $message, PDO::PARAM_STR);
          $posted->bindParam(':date_created', $date, PDO::PARAM_STR);
          $posted->execute();
          }

        }else{
          echo "Please enter a message";
        }


      }


      $posts = $app['db']->fetchAll("SELECT message_text FROM posts ORDER BY date_created DESC;");

      return $app['twig']->render('app.twig', array('posts' => $posts));


    die();
  }
}

