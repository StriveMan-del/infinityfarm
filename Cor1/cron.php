<?php
require('db.php');
$valut = R::count('users');
echo $valut;
for($i=1;$i <= $valut; $i++){
    $table = R::load('game',$i);
    $table -> storage += $table->chicken * 20;
    $table -> storage += $table->cow * 80;
    $table -> storage += $table->pig * 250;
    $table -> storage += $table->sheep * 750;
    $table -> storage += $table->potato * 20;
    $table -> storage += $table->wheat * 200;
    $table -> storage += $table->corn * 450;
    $table -> storage += $table->soya * 1200;
    $table -> storage += $table->rice * 9000;
    R::store($table);
}
?>

