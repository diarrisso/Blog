<?php

use App\handler\Contact;

require __DIR__ . "/../init.php";
//require_once __DIR__.'/../vendor/autoload.php';
$router = new \App\Router();

$router->get('/', function (){
    $container = new \App\Core\Container();
    $postShow = $container->make('postController');
    $postShow->index();

});

$router->get('/post', function( array  $params){

    $container = new \App\Core\Container();
    $postShow = $container->make('postController');
    $postShow->show();
    //echo "salut about";
    //echo '<h1> Hello ' . $params['username'] . '</h1>';
});


$router->get('/login', function( array  $params){

    $container = new \App\Core\Container();
    $postShow = $container->make('postController');
    $postShow->login();
    //echo "salut about";
    //echo '<h1> Hello ' . $params['username'] . '</h1>';
});





$router->get('/contact', Contact::class . '::execute');
$router->post('/contact', function ($paramet)
{
 var_dump($paramet);
});

$router->addNotFoundHandler(function () {
    $title = "Not Found";
    require_once __DIR__. "/../Src/Templates/404.phtml";
});

$router->run();