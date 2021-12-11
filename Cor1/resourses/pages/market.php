<link rel="stylesheet" href="resourses/assets/css/barn.css">
<?php if( isset($_SESSION['logged']) && $_SESSION['token'] == '0') :  ?>
    <div id="exchanged" class="alert alert-success alert-dismissible fade show" role="alert"></div>
    <div class="mas container">
        <h1>Рынок<img src="https://img.icons8.com/dusk/64/000000/gg.png" class="img"></h1>
        <div class="para" id="par">
            <p>Здесь вы можете продать <img
                    src="https://img.icons8.com/dusk/64/000000/gg.png"
                    class="icon"> GGcoins и получить RUB.
            </p>
            <p>На складе:<?php $id = $_SESSION['id'];
                $screen = R::load('game', $id);
                echo $screen->ggcoins?> <img
                    src="https://img.icons8.com/dusk/64/000000/gg.png"
                    class="icon"> GGcoins
            </p>
            <p>Расценки продажи:5<img
                    src="https://img.icons8.com/dusk/64/000000/gg.png"
                    class="icon"> GGcoins=1RUB.
            </p>
            <button class="sub" id="exchange" onclick="exc()">Обменять</button>
        </div>
    </div>
<?php elseif(isset($_SESSION['logged']) && $_SESSION['token'] != "0") : ?>
    <div class="mas container">
        <h1>Рынок<img src="https://img.icons8.com/ios/50/000000/tractor.png" class="img"></h1>
        <p>Пожалуйста подтвердите почту, чтобы продолжить работать с сайтом.</p>
    </div>
<?php else : ?>
    <div class="mas container">
        <h1>Рынок<img src="https://img.icons8.com/ios/50/000000/tractor.png" class="img"></h1>

        <p>Зарегестрируйтесь или войдите, чтобы продолжить работать с сайтом.</p>

    </div>
<?php endif; ?>
