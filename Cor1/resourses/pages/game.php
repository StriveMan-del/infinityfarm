<?php if (isset($_SESSION['logged']) && $_SESSION['token'] == '0') : ?>
    <div id="result-game" class="alert alert-dismissible fade show" role="alert"></div>
<div class="preloader" id="preloader">
    <div class="loader"></div>
</div>
<div class="mas container">
    <h1>Игра Грядка</h1>
    <p>В режиме Грядка от участника требуется пройти как можно больше клеток игрового поля, не попав на крота. Выигрыш
        зачисляется в RUB.
        Чем больше клеток пройдено, тем выше коэффициент выигрыша. При попадании на крота, ставка сгорает.</p>
</div>
<div class="game container rounded p-4">
    <div class="row" id="game">
        <div class="col-md-8 mr-3">
            <div class="row">
                <div class="garden content-column p-20-l p-20-r p-10-t op">
                    <div class="garden_bets">
                        <span class="bet" data-bet="1.3">1.3</span>
                        <span class="bet" data-bet="1.6">1.6</span>
                        <span class="bet" data-bet="1.8">1.8</span>
                        <span class="bet" data-bet="2.0">2.0</span>
                        <span class="bet" data-bet="2.5">2.5</span>
                        <span class="bet" data-bet="3.0">3.0</span>
                        <span class="bet" data-bet="3.5">3.5</span>
                        <span class="bet" data-bet="4.0">4.0</span>
                        <span class="bet" data-bet="4.5">4.5</span>
                        <span class="bet" data-bet="5.0">5.0</span>
                    </div>
                </div>
            </div>
            <div class="row" id="game-cells">
                <div class="game-cells">
                    <div class="game-row">
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                    </div>
                    <div class="game-row">
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                    </div>
                    <div class="game-row">
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                    </div>
                    <div class="game-row">
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                    </div>
                    <div class="game-row">
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                    </div>
                    <div class="game-row">
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                    </div>
                    <div class="game-row">
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                    </div>
                    <div class="game-row">
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                    </div>
                    <div class="game-row">
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                    </div>
                    <div class="game-row">
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                        <div class="game-cell"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="row border border-dark" id="garden-stf">
                <div class="garden_stf">
                    <h2><span>Поставить RUB</span></h2>
                    <hr>
                    <div class="btn-group row ml-1 btn-bet">
                        <button class="btn btn-primary bg-info border-dark col-md-2" onclick="autobet(50)">50</button>
                        <button class="btn btn-primary bg-info border-dark col-md-2" onclick="autobet(100)">100</button>
                        <button class="btn btn-primary bg-info border-dark col-md-2" onclick="autobet(500)">500</button>
                        <button class="btn btn-primary bg-info border-dark col-md-2" onclick="autobet(1000)">1K</button>
                        <button class="btn btn-primary bg-info border-dark col-md-2" onclick="autobet(2500)">2,5K</button>
                        <button class="btn btn-primary bg-info border-dark col-md-2" onclick="autobet(5000)">5K</button>
                    </div>
                    <div class="deliver-control mt-1">
                        <div class="row">
                            <button class="btn btn-reload border border-dark col-md-1" id="reload"></button>
                            <p class="col-md-3 rate-name">Ставка</p>
                            <input type="text" id="sum" class="col-md-3 ml-1 bg-info" placeholder="0">
                            <img src="https://img.icons8.com/dusk/64/000000/ruble.png" height="28px">
                        </div>
                    </div>
                    <div class="start">
                        <div class="container">
                            <button class="btn btn-info w-100 mt-2 btn-start" id="start-game"><span>ИГРАТЬ!</span></button>
                            <button class="btn btn-info w-100 mt-2 btn-start" id="collect-game"><span>Собрать!</span><span id="sum_bet"></span></button>
                            <button class="btn btn-info w-100 mt-2 btn-start" id="reload-game"><span>Начать заново!</span></button>
                        </div>
                    </div>
                    <hr>
                    <div class="info-game" id="info-game">
                        <h3>Честная игра</h3>
                        <p>Хэш раунда:</p>
                        <p class="hash" id="hash-game"><?php echo $_SESSION['game_hash'] ?></p>
                        <p>Хэш числа раунда:</p>
                        <p class="hash" id="hash-round"><?php echo $_SESSION['round_hash'] ?></p>
                        <p>Число раунда:<span id="round">Неизвестно</span></p>
                        <p>Мины на поле: <span id="mine">Неизвестно</span></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php elseif(isset($_SESSION['logged']) && $_SESSION['token'] != "0") : ?>
<div class="mas container">
    <h1>Игры<img src="resourses/img/gamepad.png" class="img"></h1>
    <p>Пожалуйста подтвердите почту, чтобы продолжить работать с сайтом.</p>
</div>
<?php else : ?>
    <div class="mas container">
        <h1>Игры<img src="resourses/img/gamepad.png" class="img"></h1>

        <p>Зарегестрируйтесь или войдите, чтобы продолжить работать с сайтом.</p>

    </div>
<?php endif; ?>
<script src="/resourses/assets/js/preloader.js"></script>
<script src="/resourses/assets/js/game.js"></script>