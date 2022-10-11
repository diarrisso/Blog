
<?php include "./element/header.php";?>


<div class="container">

    <div class="row">
        <?php foreach ($post as $posts):?>
        <div class="col-sm">
            <h3>
                <a href="post.php?id=<?php echo $posts->id;?>">
                   <img src="./../../../img/module_table_bottom.png">
                    <?php echo  $posts['titre'];?>
                </a>
            </h3>

        </div>
        <?php endforeach; ?>

    </div>

</div>




<?php include "./element/footer.php";?>
