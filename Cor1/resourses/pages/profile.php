<?php if (isset($_SESSION['logged']) && $_SESSION['token'] == '0') : ?>
<div class="mas container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Профиль <img src="resourses/img/user.png" class="icon"></h1>
            <div class="para profile">
                <h3 align="center">Информация о пользователе</h3>
                <p>
                    Имя пользователя: <?php  $id = $_SESSION['id'];
                    $profile = R::load('users',$id);
                    echo $profile -> username;
                    ?> <br/>
                    Имя фермы: <?php
                    echo $profile->farmname;
                    ?><br/>
                    Почта: <?php
                    echo $profile->usermail;
                    ?><br/>
                    Подтверждение почты: <?php if($profile->token == 0){
                        echo '<img src="resourses/img/checkmark.png" width="25px">';
                    } else {
                        echo '<img src="resourses/img/cross.png" width="25px" >';
                    } ?>
                    <hr>
                <h3 align="center">Статистика профиля</h3>
                <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon">GGcoins: <?php
                    echo $screen->ggcoins;
                    ?><br/>
                <img src="https://img.icons8.com/dusk/64/000000/ruble.png" class="icon">RUB: <?php
                    echo $screen->rub;
                    ?><br/>
                Куплено всего: <?php
                $count = 0;
                $count +=$screen->chicken;
                $count +=$screen->cow;
                $count +=$screen->sheep;
                $count +=$screen->pig;
                $count +=$screen->potato;
                $count +=$screen->wheat;
                $count +=$screen->corn;
                $count +=$screen->soya;
                $count +=$screen->rice;
                echo $count?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php else : ?>
    <div class="mas container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>Профиль <img src="resourses/img/user.png" class="icon"></h1>
                <div class="para profile">
                    <p>Зарегестрируйтесь или войдите, чтобы продолжить работать с сайтом.</p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>