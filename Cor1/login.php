<?php
session_start();
require_once('db.php');
//$data = $_POST;
$UserName = filter_input(INPUT_POST,'UserName');
$UserMail = filter_input(INPUT_POST,'UserMail');
$FarmName = filter_input(INPUT_POST,'FarmName');
$UserPassword = filter_input(INPUT_POST,'UserPassword');
$NameUsers = filter_input(INPUT_POST,'NameUsers');
$UserPasswords = filter_input(INPUT_POST,'UserPasswords');

if (isset($_POST['sub'])) {
    if (R::count('users', "username = ?", array($UserName)) > 0){
     echo 'errorlogin';
    } else if (R::count('users', "usermail = ?", array($UserMail)) > 0) {
        echo 'errormail';
    }else if (R::count('users', "farmname = ?", array($FarmName)) > 0){
        echo 'errorfarm';
    } else {
        $user = R::dispense('users');
        $user->username = $UserName;
        $user->farmname = $FarmName;
        $user->usermail = $UserMail;
        $user->password = password_hash($UserPassword, PASSWORD_DEFAULT);
        $user->status = 'user';
        $game = R::dispense('game');
        $game->ggcoins = 0;
        $game->rub = 500;
        $game->chicken = 0;
        $game->cow = 0;
        $game->pig = 0;
        $game->sheep = 0;
        $game->potato = 0;
        $game->wheat = 0;
        $game->corn = 0;
        $game->soya = 0;
        $game->rice = 0;
        $user->ownItemList[]=$game;
        R::store($user);
        $user = R::findOne('users', 'username = ?', array($UserName));
        $user = R::load('users', $user -> id);
        $user -> token = md5($user -> id);
        sendmail($UserMail,$user -> id);
        R::store($user);
        echo 'suc';
    }
};
if (isset($_POST["login_up"])) {
    $user = R::findOne('users', 'username = ?', array($NameUsers));
    if (isset($user)) {
        if(password_verify($UserPasswords, $user->password))
        {
            $_SESSION['logged'] = $user;
            $_SESSION["test"] = $user -> username;
            $_SESSION['id'] = $user -> id;
            $_SESSION['token'] = $user -> token;
            $_SESSION['status'] = $user -> status;
            echo 'suc';


        } else {
            echo 'errorpass';
        }
    } else {
        echo 'errorlogin';
    }
}
?>