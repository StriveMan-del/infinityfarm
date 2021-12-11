<?php
session_start();
require('db.php');
if (isset($_GET['rur'])) {
    $table = R::findCollection('game', 'ORDER BY `rub` DESC');
    $i = 0;
    $arrub = [];
    $arid = [];
    $i = 0;
    $count = R::count('game', 'ORDER BY `rub` DESC');
    $n = $count > 10 ? 10:$count;
    while ($i < $n) {
        $tables = $table->next();
        $arrub[$i] = $tables->rub;
        $arid[$i] = $tables->users_id;
        $i++;
    };
    for($i = 0; $i < $n; $i++){
        $player = R::load('users', $arid[$i]);
        echo '<li>'.$player->username. ':'. $arrub[$i].'</li>';
    };
}
if (isset($_GET['buy'])) {
    $table = R::findCollection('game', 'ORDER BY `buy` DESC');
    $i = 0;
    $arbuy = [];
    $arid = [];
    $i = 0;
    $count = R::count('game', 'ORDER BY `rub` DESC');
    $n = $count > 10 ? 10:$count;
    while ($i < $n) {
        $tables = $table->next();
        $arbuy[$i] = $tables->buy;
        $arid[$i] = $tables->users_id;
        $i++;
    }
    for($i = 0; $i < $n; $i++){
        $player = R::load('users', $arid[$i]);
        echo '<li>'.$player->username. ':'. $arbuy[$i].'</li>';
    }
}
?>