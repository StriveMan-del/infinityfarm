<?php
require_once('db.php');
$name=$_GET['username'];
$user=R::findOne('users', 'username = ?', [$name]);
$id = $user->id;

?>