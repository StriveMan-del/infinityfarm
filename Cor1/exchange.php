<?php
session_start();
require('db.php');
$id = $_SESSION['id'];
$table= R::load('game',$id);
if ($table->ggcoins >= 5) {
    $table->rub += $table->ggcoins / 5;
    $table->ggcoins = 0;
    R::store($table);
    echo 'Обмен успешно завершен';
} else {
    echo 'У вас не хватает GGcoins';
}
?>

