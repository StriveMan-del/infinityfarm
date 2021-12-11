<?php
require_once('db.php');
session_start();
$table = R::findOne('garden', 'game_hash=? and round_hash=?', [$_SESSION['game_hash'], $_SESSION['round_hash']]);
$data = [
    'result'=>'suc',
    'mine'=>$table->mine,
];
if (isset($table) && $table->end_game == 0) {
    $user=R::load('game', $_SESSION['id']);
    $bet=R::findOne('bets','id=?',[$_SESSION['count']]);
    $user->rub+=$table->bet * $bet->bet;
    R::store($user);
    $table = R::load('garden', $table->id);
    $table -> end_game = 1;
    R::store($table);
    $data = json_encode($data);
    echo $data;
};
?>