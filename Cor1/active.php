<?php
session_start();
require_once('db.php');
$id = filter_input(INPUT_POST, 'id');
$id++;
if (is_int($id) && $id <= 5 && $id >0) {
    $table = R::findOne('garden', 'game_hash=? and round_hash=?', [$_SESSION['game_hash'], $_SESSION['round_hash']]);
    if (isset($table) && $table->end_game == 0) {
        if ($_SESSION['count'] == 9) {
            $table = R::load('garden', $table->id);
            $table->end_game = 1;
            $user = R::load('game', $_SESSION['id']);
            $bet = R::load('bets', $_SESSION['count']+1);
            $user -> rub += $table->bet * $bet->bet;
            $mine = $table->mine;
            R::store($user);
            $data = [
                'result' => '3',
                'mine' => $mine,
            ];
            R::store($table);
            $data = json_encode($data);
            echo $data;
        } else {
            $gameid = $table->id;
            $str_mine = $table->mine;
            if ($table->mine[$_SESSION['count']] != $id) {
                $_SESSION['count']++;
                $bet=R::findOne('bets','id=?',[$_SESSION['count']]);
                $data = [
                    'result' => '1',
                    'bet' => $table->bet * $bet->bet,
                ];
                $data = json_encode($data);
                echo $data;
            } else {
                unset($_SESSION['count']);
                $table = R::load('garden', $gameid);
                $table->end_game = 2;
                $mine = $table->mine;
                $round_hash = $table->round_hash;
                $game_hash = $table->game_hash;
                $round = $table->round;
                $user = R::load('game', $_SESSION['id']);
                $user->rub -= $table->bet;
                $data = [
                    'round' => $round,
                    'mine' => $mine,
                    'round_hash' => $round_hash,
                    'game_hash' => $game_hash,
                    'result' => '2',
                ];
                R::store($user);
                R::store($table);
                $data = json_encode($data);
                echo $data;
            };
        };
    } else {
        echo 'error';
    };
}
?>