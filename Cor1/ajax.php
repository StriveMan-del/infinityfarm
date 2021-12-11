<?php
session_start();
require('db.php');
$data = $_POST;
if (isset($data['login_up'])) {
    $errors = array();
    $user = R::findOne('users', 'username = ?', array($data['UserNames']));
    if ($user) {
        if(password_verify($data['UserPasswords'], $user->password))
        {

            $_SESSION['logged'] = $user;
            $_SESSION["test"] = $user -> username;
            $_SESSION['id'] = $user -> id;
            $_SESSION["test"] = $_SESSION["test"];



        } else {
            $errors[] = 'Не верно ввёден пароль';
        }

    } else {
        $errors[]= 'Пользователь с таким логином не найден';
    }
    if (!empty($errors)){


    }

}