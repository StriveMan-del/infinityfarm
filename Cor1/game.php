<?php
session_start();
require_once('db.php');
$id = $_SESSION['id'];
$user= R::load('game', $id);
$bet = +filter_input(INPUT_POST, 'bet');
var_dump($user->rub);
if ((+$user->rub < $bet) || $bet < 0){
    echo 'money';
} else {
    $mine = intval(random_int(1,5).random_int(1,5).random_int(1,5).random_int(1,5).random_int(1,5).random_int(1,5).random_int(1,5).random_int(1,5).random_int(1,5).random_int(1,5));
    $round = floatval('0.'.'0'.random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9));
    $game = $mine * $round;
    $garden = R::dispense('garden');
    $garden->game_hash = hash('sha224',$game);
    $_SESSION['game_hash'] = hash('sha224',$game);
    $garden->round_hash = hash('sha224',$round);
    $_SESSION['round_hash'] = hash('sha224',$round);
    $_SESSION['count'] = 0;
    $garden->mine = $mine;
    $garden->round = $round;
    $garden->end_game = 0;
    $garden->bet = round(filter_input(INPUT_POST, 'bet'));
    R::store($garden);
}
?>