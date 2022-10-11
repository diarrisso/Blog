
<?php include "./element/header.php";?>
<div class="container">

    <h1> Description de la recette </h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-titre"> <?php echo $postContent['titre'];?> </h3>
        </div>
        <div class="panel-body">
            <?php echo  nl2br( $postContent['content']);?>

        </div>

    </div>


</div>

<?php include "./element/footer.php";?>
