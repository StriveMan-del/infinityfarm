<?php
session_start();
require('db.php');
$dataSet = $_POST;
if (!$dataSet){
    exit('Ошибка платежа');
}
unset($dataSet['ik_sign']); //Delete string with signature from dataset
ksort($dataSet, SORT_STRING); // Sort elements in array by var names in alphabet queue
array_push($dataSet, 'XaRKGSNreulce8S8'); // Adding secret key at the end of the string
$signString = implode(':', $dataSet); // Concatenation calues using symbol ":"
$sign = base64_encode(md5($signString, true)); // Get MD5 hash as binare view using generate string and code it in BASE64
$user = R::findOne('users', 'username = ?',[$_POST['ik_x_login']]);
$id = $user -> id;
$user = R::load('game', $id);
$user->rub += $_POST['ik_am']*10;
R::store($user);
?>