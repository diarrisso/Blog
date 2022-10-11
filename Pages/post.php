<?php
 require"../init.php";

 $container = new \App\Core\Container();
 $postShow = $container->make('postController');
 $postShow->show();

?>




