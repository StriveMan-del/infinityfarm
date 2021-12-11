<?php
$username = $_GET['username'];
$user = R::findOne('users','username=?',[$username]);
$game = R::findOne('game', 'users_id=?', [$user->id]);
if (isset($_GET['change'])){
$data = $_GET;
$user= R::load('users',$user->id);
$game= R::load('game',$user->id);
    $user->username = $data['username'];
    $user->farmname = $data['farmname'];
    $user->usermail = $data['usermail'];
    if($data['password'] != 'null'){
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
    };
    if($data['token'] == 'yes'){
        $user->token = '0';
    } else if($data['token'] == 'no'){
        $user->token = md5($user->id);
    }
    $game->ggcoins = $data['ggcoins'];
    $game->rub=$data['rub'];
    $game->storage=$data['storage'];
    R::store($game);
    R::store($user);
}
?>
<div class="container">
    <h1>Информация о пользователе</h1>
    <form class="form">
        <div class="form-group">
            <input type="hidden" name="page" value="userchange">
            <label for="username">Имя пользователя</label>
            <input type="text" name="username" value="<?php echo $user->username ?>" class="form-control">
            <label for="usermail">Почта пользователя</label>
            <input type="email" name="usermail" value="<?php echo $user->usermail ?>" class="form-control">
            <label for="farmname">Имя фермы</label>
            <input type="text" name="farmname" value="<?php echo $user->farmname ?>" class="form-control">
            <label for="password">Пароль</label>
            <input type="text" name="password" value="null" class="form-control">
            <label for="token">Подтверждение почты</label>
            <input type="text" name="token" value="<?php if ($user->token == '0')
            {echo 'yes';}
            else {echo 'no';} ?>" class="form-control">
            <label for="ggcoins">Количество GGcoins</label>
            <input type="text" name="ggcoins" value="<?php echo $game->ggcoins ?>" class="form-control">
            <label for="rub">Количество RUB</label>
            <input type="text" name="rub" value="<?php echo $game->rub ?>" class="form-control">
            <label for="storage">Хранилище</label>
            <input type="text" name="storage" value="<?php echo $game->storage ?>" class="form-control">
            <input type="hidden" name="change" value="change">
            <button class="btn btn-primary">Изменить</button>
        </div>
    </form>
</div>