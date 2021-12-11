<?php
session_start();
require_once('db.php');
require_once('blocks/header.php');
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'main':
            require('resourses/pages/main.php');
            break;
        case 'ferma':
            require('resourses/pages/ferma.php');
            break;
        case 'barn':
            require('resourses/pages/barn.php');
            break;
        case 'market':
            require('resourses/pages/market.php');
            break;
        case 'profile':
            require('resourses/pages/profile.php');
            break;
        case 'top':
            require('resourses/pages/top.php');
            break;
        case 'mail':
            require ('resourses/pages/thanks.php');
            break;
        case 'game':
            require ('resourses/pages/game.php');
            break;
        case 'donate':
            require ('resourses/pages/donate.php');
            break;
        case 'succ':
            require ('resourses/pages/succ.php');
            break;
        case 'error':
            require ('resourses/pages/error.php');
            break;
        default:
            require('resourses/pages/404.php');
            break;
    }

}else{
    echo "<script>location.replace('/?page=main')</script>";
}
require_once('blocks/footer.php');
?>