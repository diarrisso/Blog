<?php require_once __DIR__ .  "./../layourt/header.php";?>

<div class="container">
    <div class="row">
        <?php foreach ($post as $value):?>
            <div class="col-12 col-md-4">
                <a href="/post?id=<?= $value->getId()?>">
                    <img src="http://localhost/Blog/src/Templates/img/plat.jpeg" alt="cuisine
                 " width="300px" height="200px" class="mt-4">
                </a>
                <h3><?php echo $value->getTitre()?></h3>
                <p>
                    <?php echo nl2br($value->getContent());?>
                </p>
            </div>
        <?php endforeach;?>
    </div>
</div>

<?php require_once __DIR__ .  "./../layourt/footer.php";?>
