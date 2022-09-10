<?php

$pdo = new PDO(
    "mysql:host=localhost:3306;dbname:Blog",
    'root',
    'root'
);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
/*
function fetch_posts ()
{

    global $pdo;
    return  $pdo->query('SELECT * FROM Blog.plats');
}

/**
 * @param $titre
 * @return false|PDOStatement
 *//*
function fetch_post($id)

{
    global $pdo;
    $stmt  = $pdo->prepare("SELECT * FROM Blog.plats WHERE plats.id= :id");
    $stmt->execute(["id" => $id]);
    return $stmt->fetch();


}*/
