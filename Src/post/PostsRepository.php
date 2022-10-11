<?php
namespace App\Post;


use PDO;

class PostsRepository
{
    private PDO $pdo;

    public function __construct( PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return array|false
     */
    public function fetchPosts()
    {
       $stmt =  $this->pdo->query('SELECT * FROM Blog.plats');

       $posts = $stmt->fetchAll(PDO::FETCH_CLASS,"App\\post\\PostModel");

       return $posts;
    }

    /**
     * @param $id
     * @return PostModel
     */
    public function fetchPost($id)
    {
        $stmt  = $this->pdo->prepare("SELECT * FROM Blog.plats WHERE plats.id= :id");
        $stmt->execute(["id" => $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\\post\\PostModel");
        $post =  $stmt->fetch(PDO::FETCH_CLASS);
        return $post;

    }

}