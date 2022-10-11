<?php

namespace App\Post;


class PostController
{
    public function __construct(PostsRepository $postsRepository)
    {
       $this->postsRepository = $postsRepository;
    }


    private function render($view, $params)
    {
      extract($params);
      include __DIR__ . "/../Templates/{$view}.php";
    }

    public function index() {

        $post = $this->postsRepository->fetchPosts();

     $this->render("Posts/index", [
         "post" => $post
     ]);

    }

    public function show()
    {
        $id = $_REQUEST['id'];
        $postContent = $this->postsRepository->fetchPost($id);

       $this->render("Posts/show",[

           "postContent" => $postContent
       ]);
    }

}