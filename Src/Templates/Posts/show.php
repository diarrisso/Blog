<?php require __DIR__ .  "./../layourt/header.php";?>

    <div class="container">

        <div class="clearfix">
            <img src="http://localhost/Blog/src/Templates/img/plat.jpeg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
            <h3 class="panel-titre"> <?php echo $postContent->getTitre();?> </h3>
            <p>
                <?php echo  nl2br( $postContent->getContent());?>
            </p>

        </div>


    </div>


<?php require_once __DIR__ .  "./../layourt/footer.php";?>