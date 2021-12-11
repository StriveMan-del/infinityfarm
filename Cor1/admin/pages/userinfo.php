<?php
function user_search(){
    $name = $_GET['username'];
   $user = R::findOne('users','username=?',[$name]);
   if (!isset($user)){ echo 'Пользователь не найден';} else {
       $game = R::findOne('game', 'users_id = ?', [$user->id]);
       if ($user->token != '0') {
           $token = 'no';
       } else {
           $token = 'yes';
       };
       echo "<tr><td>" . $user->username . "</td><td>" . $user->usermail . "</td><td>" . $user->farmname . "</td><td>" . $token . "</td><td>" . $game->ggcoins . "</td><td>" . $game->rub . "</td><td>" . $game->buy . "</td><td><a href='/admin/?page=userchange&username=" . $user->username . "'>Изменить</a></td></tr>";
   }}
function user_table()
{
    $table = R::getAll("SELECT * FROM `users` ORDER BY `id` ASC");
    $game = R::getAll("SELECT * FROM `game` ORDER BY `users_id` ASC");
    for ($i = 0; $i < count($table); $i++) {
        if ($table[$i]['token'] != '0') {
            $table[$i]['token'] = 'no';
        } else {
            $table[$i]['token'] = 'yes';
        }
        echo "<tr><td>" . $table[$i]['username'] . "</td><td>" . $table[$i]['usermail'] . "</td><td>" . $table[$i]['farmname'] . "</td><td>" . $table[$i]['token'] . "</td><td>" . $game[$i]['ggcoins'] . "</td><td>" . $game[$i]['rub'] . "</td><td>" . $game[$i]['buy'] . "</td><td><a href='/admin/?page=userchange&username=" . $table[$i]['username'] . "'>Изменить</a></td></tr>";
    }
};
?>
<div class="contain">
    <form class="form">
        <div class="form-group">
            <label for="username">Имя пользователя</label>
            <input type="hidden" name="page" value="userinfo">
            <input type="text" placeholder="Name_User" name="username" class="form-control">
        </div>
    </form>
    <div class="info">
        <table class="table table-dark">
            <tr>
                <th scope="col">Пользователь</th>
                <th scope="col">Почта</th>
                <th scope="col">Ферма</th>
                <th scope="col">Подтверждение</th>
                <th scope="col">GGcoins</th>
                <th scope="col">RUB</th>
                <th scope="col">Покупок</th>
            </tr>
            <?php if (!isset($_GET['username'])) {
                user_table();
            }else {
                user_search();
                }?>
        </table>
    </div>
</div>
