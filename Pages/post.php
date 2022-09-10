<?php require "../init.php";?>
<?php include "./element/header.php";?>

<div class="container">

    <h1> Description de la recette </h1>
    <p>

        <?php
        $id = $_GET["id"];
        $postRepository = new \App\Post\PostsRepository($pdo);
         $response = $postRepository->fetchPost($id)
        ?>

        <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-titre"> <?php echo $response->titre;?> </h3>
        </div>
        <div class="panel-body">
            <?php echo  nl2br( $response->content);?>

        </div>

    </div>
        <?php   //$test  = fetch_post();?>
        <ul>
            <?php //foreach ($test as $value):?>
                <li>

                        <?php //echo  $value['titre'];?>
                </li>
            <?php //endforeach; ?>
        </ul>
    </p>

</div>

<?php include "./element/footer.php";?>