<link rel="stylesheet" href="resourses/assets/css/barn.css">
<?php if (isset($_SESSION['logged']) && $_SESSION['token'] == '0') : ?>
    <div id="collected" class="alert alert-dismissible fade show" role="alert"></div>
    <div class="mas container">
        <h1>Амбар<img src="https://img.icons8.com/ios/50/000000/tractor.png" class="img"></h1>

        <div class="para container" id="par">
            <p>Здесь вы можете узнать состояние своего амбара и собрать доход.
            </p>
            <p>
            <ul>
                <li><img src="resourses/img/hen.png" class="barn-icon">Курицы X <?php
                    $id = $_SESSION['id'];
                    $screen = R::load('game', $id);
                    echo $screen->chicken ?>: <?php echo $screen->chicken * 20 ?><img
                        src="https://img.icons8.com/dusk/64/000000/gg.png"
                        class="icon"> GGcoins
                </li>
                <li><img src="resourses/img/cow.png" class="barn-icon">Коровы X <?php
                    $id = $_SESSION['id'];
                    $screen = R::load('game', $id);
                    echo $screen->cow ?>: <?php echo $screen->cow * 80 ?><img
                        src="https://img.icons8.com/dusk/64/000000/gg.png"
                        class="icon"> GGcoins
                </li>
                <li><img src="resourses/img/pork.png" class="barn-icon">Свиньи Х <?php
                    $id = $_SESSION['id'];
                    $screen = R::load('game', $id);
                    echo $screen->pig ?>: <?php echo $screen->pig * 250 ?><img
                        src="https://img.icons8.com/dusk/64/000000/gg.png"
                        class="icon"> GGcoins
                </li>
                <li><img src="resourses/img/sheep.png" class="barn-icon">Овцы Х <?php
                    $id = $_SESSION['id'];
                    $screen = R::load('game', $id);
                    echo $screen->sheep ?>: <?php echo $screen->sheep * 750 ?><img
                        src="https://img.icons8.com/dusk/64/000000/gg.png"
                        class="icon"> GGcoins
                </li>
                <li><img src="resourses/img/potato.png" class="barn-icon">Картошка Х <?php
                    $id = $_SESSION['id'];
                    $screen = R::load('game', $id);
                    echo $screen->potato ?>: <?php echo $screen->potato * 20 ?><img
                        src="https://img.icons8.com/dusk/64/000000/gg.png"
                        class="icon"> GGcoins
                </li>
                <li><img src="resourses/img/wheat.png" class="barn-icon">Пшеница Х <?php
                    $id = $_SESSION['id'];
                    $screen = R::load('game', $id);
                    echo $screen->wheat ?>: <?php echo $screen->wheat * 200 ?>
                    <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon">
                    GGcoins
                </li>
                <li><img src="resourses/img/corn.png" class="barn-icon">Кукуруза Х <?php
                    $id = $_SESSION['id'];
                    $screen = R::load('game', $id);
                    echo $screen->corn ?>: <?php echo $screen->corn * 450 ?><img
                        src="https://img.icons8.com/dusk/64/000000/gg.png"
                        class="icon"> GGcoins
                </li>
                <li><img src="resourses/img/soya.png" class="barn-icon">Соя Х <?php
                    $id = $_SESSION['id'];
                    $screen = R::load('game', $id);
                    echo $screen->soya ?>: <?php echo $screen->soya * 1200 ?><img
                        src="https://img.icons8.com/dusk/64/000000/gg.png"
                        class="icon"> GGcoins
                </li>
                <li><img src="resourses/img/rice.png" class="barn-icon">Рис Х <?php
                    $id = $_SESSION['id'];
                    $screen = R::load('game', $id);
                    echo $screen->rice ?>: <?php echo $screen->rice * 9000 ?><img
                        src="https://img.icons8.com/dusk/64/000000/gg.png"
                        class="icon"> GGcoins
                </li>
            </ul>
            </p>
            <p>Производительность в час:<?php
                $curens = 0;
                $curens += $screen->chicken * 20;
                $curens += $screen->cow * 80;
                $curens += $screen->pig * 250;
                $curens += $screen->sheep * 750;
                $curens += $screen->potato * 20;
                $curens += $screen->wheat * 200;
                $curens += $screen->corn * 450;
                $curens += $screen->soya * 1200;
                $curens += $screen->rice * 9000;
                echo $curens;
                ?> <img
                    src="https://img.icons8.com/dusk/64/000000/gg.png"
                    class="icon"> GGcoins</p>
            <p>Всего: <?php echo $screen->storage; ?> <img
                    src="https://img.icons8.com/dusk/64/000000/gg.png"
                    class="icon"> GGcoins</p>
            <button class="sub" id="collect" onclick="collect()">Собрать</button>
        </div>
    </div>
<?php elseif(isset($_SESSION['logged']) && $_SESSION['token'] != "0") : ?>
  <div class="mas container">
      <h1>Амбар<img src="https://img.icons8.com/ios/50/000000/tractor.png" class="img"></h1>
      <p>Пожалуйста подтвердите почту, чтобы продолжить работать с сайтом.</p>
  </div>
<?php else : ?>
    <div class="mas container">
        <h1>Амбар<img src="https://img.icons8.com/ios/50/000000/tractor.png" class="img"></h1>

        <p>Зарегестрируйтесь или войдите, чтобы продолжить работать с сайтом.</p>

    </div>
<?php endif; ?>