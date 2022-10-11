
<?php  require "../init.php";?>

<?php $Container = new \App\Core\Container();?>
<?php $test = $Container->make('postController');
$test->index();


?>

