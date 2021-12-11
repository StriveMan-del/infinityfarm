<?php
session_start();
$id=$_SESSION['id'];
require('db.php');
$data=$_POST['id'];
$buy=R::load('game', $id);
switch ($data){
    case 'hen':
        if($buy->rub < 500){
            echo 'У вас не хватает денег';
        }else {
            $buy->chicken += 1;
            $buy->rub -= 500;
            $buy->buy++;
            echo '1';
        }
        break;
    case 'cow':
        if($buy->rub < 1500){
            echo 'У вас не хватает денег';
        }else{
            $buy->cow += 1;
            $buy->rub -=1500;
            $buy->buy++;
            echo '1';
        }
        break;
    case 'pig':
        if($buy->rub < 5000){
            echo 'У вас не хватает денег';
        }else{
        $buy->pig+= 1;
        $buy->rub-=5000;
        $buy->buy++;
            echo '1';
        }
        break;
    case 'sheep':
        if($buy->rub < 10000){
            echo 'У вас не хватает денег';
        }else{
        $buy->sheep+= 1;
        $buy->rub-=10000;
        $buy->buy++;
            echo '1';
        }
        break;
    case 'potato':
        if($buy->rub < 500){
            echo 'У вас не хватает денег';
        }else{
        $buy->potato+= 1;
        $buy->rub-=500;
            $buy->buy++;
            echo '1';
        }
        break;
    case 'wheat':
        if($buy->rub < 3000){
            echo 'У вас не хватает денег';
        }else{
        $buy->wheat+= 1;
        $buy->rub-=3000;
            $buy->buy++;
            echo '1';
        }
        break;
    case 'corn':
        if($buy->rub < 6000){
            echo 'У вас не хватает денег';
        }else{
        $buy->corn+= 1;
        $buy->rub-=6000;
            $buy->buy++;
            echo '1';
        }
        break;
    case 'soya':
        if($buy->rub < 15000){
            echo 'У вас не хватает денег';
        }else{
        $buy->soya+= 1;
        $buy->rub-=15000;
            $buy->buy++;
            echo '1';
        }
        break;
    case 'rice':
        if($buy->rub < 50000){
            echo 'У вас не хватает денег';
        }else{
        $buy->rice+= 1;
        $buy->rub-=50000;
            $buy->buy++;
            echo '1';
        }
        break;
    default: break;
}
R::store($buy);
?>

