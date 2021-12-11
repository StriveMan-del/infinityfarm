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
    <link rel="stylesheet" href="/resourses/assets/css/menu.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary mb-5">
    <ul class="navbar-nav">
        <li  class="" href="#" id="admin"><h2><span class="badge badge-dark" style="font-weight:300">Админ панель</span></h2></li></ul>
    <div class="navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item <?php if($_GET['page'] == 'main'){echo "active";}?>"><a class="nav-link" href="/admin/?page=main">Главная</a></li>
            <li class="nav-item <?php if(strpos($_GET['page'],'user')){echo "active";}?> dropdown"><a class="nav-link dropdown-toggle" href='#' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Пользователь</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="/admin/?page=userinfo" class="dropdown-item">Информация о пользователе</a>
                <a href="/admin/?page=useradd" class="dropdown-item">Добавить пользователя</a>
            </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="../?page=main">К сайту</a></li>
        </ul>
    </div>
</nav>