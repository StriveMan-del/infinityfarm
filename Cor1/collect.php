<?php
session_start();
require('db.php');
$id = $_SESSION['id'];
$table= R::load('game',$id);
$table->ggcoins+=$table->storage;
$table->storage=0;
R::store($table);

?>

