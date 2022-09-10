<?php // require "../init.php";?>
<?php include "./element/header.php";?>


<div class="container">

    <h1>Willkommen zum mein Blog</h1>
    <p>
<?php

$postRepository = new \App\Post\PostsRepository($pdo);
$result = $postRepository->fetchPosts();

?>
<ul>
<?php foreach ($result as $posts):?>
<li>
    <a href="post.php?id=<?php echo $posts->id;?>">
        <?php echo  $posts->titre;?>
    </a>
</li>

 <?php endforeach; ?>
    </ul>
    </p>

</div>

<?php include "./element/footer.php";?>
