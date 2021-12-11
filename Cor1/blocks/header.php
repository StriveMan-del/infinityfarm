<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="interkassa-verification" content="22d4ac54fdec261d6284a632c36af9d8" />
    <title>FermaGame</title>
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <link rel="icon" href="/resourses/img/cereal.png" sizes="512x512">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="/resourses/assets/js/ajax.js" type="text/javascript"></script>
    <script src="/resourses/assets/js/jquery.maskedinput.min.js"></script>
    <link rel="stylesheet" href="/resourses/assets/css/bootstrap.min.css">
    <script src="/resourses/assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/resourses/assets/css/menu3.css">
</head>
<body>
<div class="all">
<div class="header container-fluid col">
<?php
if (isset($_SESSION['test'])) : ?>
<div class="currency">
    <p><img src="https://img.icons8.com/dusk/64/000000/gg.png">GGcoins:<?php
                $id = $_SESSION['id'];
                $screen = R::load('game', $id);
                echo $screen->ggcoins ?></p>
    <p id="cur"><img src="https://img.icons8.com/dusk/64/000000/ruble.png">RUB:<?php
                $id = $_SESSION['id'];
                $screen = R::load('game', $id);
                echo $screen->rub ?></p>
    <p><a href="/?page=donate" class="btn text-white stretched-link">Пополнить баланс</a></p>
</div>
<div class="user"><img src="resourses/img/user.png"><?php //echo $_SESSION['logged']->username;
    echo $_SESSION["test"];
    ?> <br/>
    <a href="/?page=profile">Профиль</a><br/>
    <?php
    $status = R::findOne('users','id= ?', [$_SESSION['id']]);
    if($status->status == 'admin'): ?>
    <a href="/admin/index.php?page=main">Админ</a><br/>
    <?php endif;?>
    <a href="/logout.php">Выйти</a></div>
<?php else : ?>
<div class="register">
    <button id="register"><b>Регистрация</b></button>
    <button id="enter"><b>Вход</b></button>
</div>
<div id="zat" class="zatem">

</div>
<div id="autorisation" class="okno">
    <div class="errors"></div>
    <button id="exit" class="exit"><b>Х</b></button>
    <div class="pp">
        <p>Авторизация</p>
    </div>
    <div class="forma container">
        <div class="row">
            <div class="col-12">
        <p class="pp">Регистрация</p>
        <div class="errors" id="errorss"></div>
        <div class="form">
            <p>Ваше имя</p>
            <input id="NameUser" required placeholder="Kirill" name="UserName" minlength="6">
            <div id="loginerror"><p>*Логин может содержать любые символы кроме специальных и быть длиной не меньше 5 и не больше 20</p></div>
            <p>Название фермы</p>
            <input id="NameFarm" required placeholder="FarmName" name="FarmName">
            <div id="farmerror">*Имя фермы может содержать только символы латиницы или цифры и быть длиной не меньше 5 и не больше 20</div>
            <p>Почта</p>
            <input id="UserMail" required placeholder="example@gmail.com" name="UserMail" type="email">
            <div id="mailerror">*Почта должна иметь вид somebody@example.com</div>
            <p>Пароль</p>
            <input id="Password" required placeholder="*****" type="password" name="UserPassword"><br/>
            <div id="paserror">*Пароль не должен быть короче 6 символов</div>
            <button class="sub" id="reg" onclick="reg()">Зарегестрироваться</button>
        </div>
        <hr>
        <p class="pp">Вход</p>
        <div class="errors" id="errors"></div>
        <div class="form">
            <p>Ваше имя</p>
            <input id="NameUsers" required placeholder="Kirill" name="UserNames">
            <p>Пароль</p>
            <input id="Passwords" required placeholder="*****" type="password" name="UserPasswords"><br/>
            <button class="sub" id="login_up" onclick="log_in()">Войти</button>
        </div>
            </div>
        </div>
    </div>


</div>
<?php endif; ?>
<div class="image">
    <img src="resourses/img/_Farm-512.png">
</div>
<div class="Name">
    <p><b>Infinity Farm</b></p>
</div>
<div class="menu container">
    <ul>
        <li><a href="/?page=main" class="btn btn-light button col-2">Главная</a></li>
        <li><a href="/?page=ferma" class="btn btn-light button col-2">Ферма<img src="https://img.icons8.com/cotton/64/000000/farm--v1.png"
                                                         class="icon"></a></li>
        <li><a href="/?page=barn" class="btn btn-light button col-2">Амбар<img src="https://img.icons8.com/ios/50/000000/tractor.png"
                                                        class="icon"></a></li>
        <li><a href="/?page=market" class="btn btn-light button col-2">Рынок<img src="https://img.icons8.com/dusk/64/000000/gg.png"
                                                          class="icon"></a></li>
        <li><a href="/?page=top" class="btn btn-light button col-2">Топ <img src="resourses/img/winner.png" width="40px"></a></li>
        <li>
            <div class="drop">
            <button class="btn btn-light button col-2 dropbtn">Игры <img src="resourses/img/gamepad.png" width="40px"></button>
            <div class="dropcontent">
                <a href="/?page=game">Грядка</a>
                <a href="/?page=race">Гонка улиток</a>
                <a href="/?page=fight">Бои петухов</a>
            </div>
            </div>
        </li>

    </ul>
</div>
</div>
<div class="content col">