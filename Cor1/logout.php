<?php
session_start();
unset ($_SESSION['test']);
session_destroy();
echo '<script>location.replace("http://cor1")</script>';
?>

