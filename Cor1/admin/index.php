<?php
session_start();
require_once('../db.php');
require_once('../blocks/headers.php');
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'main':
            require('../admin/pages/main.php');
            break;
        case 'userinfo':
            require('../admin/pages/userinfo.php');
            break;
        case 'userchange':
        require('../admin/pages/userchange.php');
        break;
        case 'useradd':
            require('../admin/pages/useradd.php');
            break;
        default:
            require('../resourses/pages/404.php');
            break;
    }

}else{
    echo "<script>location.replace('?page=main')</script>";
}
require_once('../blocks/footers.php');
?>