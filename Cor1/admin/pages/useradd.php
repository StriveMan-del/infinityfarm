<?php
if(isset($_POST['username'])){
$data = $_POST;
if (R::count('users', "username = ?", array($data['username'])) > 0){
    echo 'Пользователь существует с таким логином';
} else if (R::count('users', "usermail = ?", array($data['usermail'])) > 0) {
    echo 'Эта почта уже зарегистрированна';
}else if (R::count('users', "farmname = ?", array($data['usermail'])) > 0){
    echo 'Имя фермы занято';
} else if ($data['username'] != '' & $data['userfarm']!= '' & $data['usermail'] != ''){
    $user = R::dispense('users');
    $user->username = $data['username'];
    $user->farmname = $data['userfarm'];
    $user->usermail = $data['usermail'];
    $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
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
}
}
?>
<div class="container">
    <form class="form" action="#" method="POST">
        <div class="form-group">
            <input type="hidden" name="page" value="useradd">
            <label for="username">Имя пользователя</label>
            <input name="username" type="text" class="form-control">
            <label for="userfarm">Имя фермы</label>
            <input name="userfarm" type="text" class="form-control">
            <label for="usermail">Почта</label>
            <input name="usermail" type="email" class="form-control">
            <label for="password">Пароль</label>
            <input name="password" type="text" class="form-control">
            <button class="btn btn-primary">Создать пользователя</button>
        </div>
    </form>
</div>
