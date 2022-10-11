<?php
namespace App\Core;

use App\Post\PostController;
use App\Post\PostsRepository;
use Exception;
use PDO;

class Container
{

    private $receipts = [];
    private $instances = [];


    public function __construct( )
    {
        $this->receipts = [
            "postController" => function() {
               return new PostController(
                   $this->make("postsRepository")
               );
            },
            "postsRepository" => function() {
               return new PostsRepository(
                   $this->make("pdo")
               );
            },
            "pdo" => function(){

                try {
                    $pdo =  new PDO(
                        "mysql:host=localhost:3306;dbname:Blog",
                        'root',
                        'root'
                    );
                } catch (Exception $exception){
                    //throw new Exception("oh das ist ein fehlermeldungemn");

                    echo "Verbindung zur Datenbank Fehlergeschlagen";
                    die();
                }

                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $pdo;

            }
       ];

    }

    public function make($name)
    {
     if (!empty($this->instances[$name]))
     {
         return $this->instances[$name];
     }

     if (isset($this->receipts[$name]))
     {
         $this->instances[$name] = $this->receipts[$name]();
     }

     //erzeuge this instance
     return $this->instances[$name];
    }



}