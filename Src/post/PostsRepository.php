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
    function fetchPosts()
    {
       $stmt =  $this->pdo->query('SELECT * FROM Blog.plats');

       $posts = $stmt->fetchAll(PDO::FETCH_CLASS,"App\\post\\PostModel");

       return $posts;
    }

    /**
     * @param $titre
     * @return PostModel
     */
    function fetchPost($id)
    {
        $stmt  = $this->pdo->prepare("SELECT * FROM Blog.plats WHERE plats.id= :id");
        $stmt->execute(["id" => $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\\post\\PostModel");
        $post =  $stmt->fetch(PDO::FETCH_CLASS);

/*
        $post = new PostModel();
        $post->id = $postArray['id'];
        $post->titre = $postArray['titre'];
        $post->content = $postArray['content'];*/
        return $post;

    }

}