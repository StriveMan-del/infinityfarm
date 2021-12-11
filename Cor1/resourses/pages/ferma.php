<link rel="stylesheet" href="resourses/assets/css/farm.css">
<?php if( isset($_SESSION['logged']) && $_SESSION['token'] == '0') : ?>
    <div id="buyer" class="alert alert-dismissible fade show" role="alert"></div>
    <div class="mas container">
        <h1>Ферма<img src="https://img.icons8.com/cotton/64/000000/farm--v1.png" class="img"></h1>
        <p>Это ваша ферма здесь вы можете купить животных и агрокультуру.</p>

    </div>
    <div class="shop">
        <div class="container">
            <div class="row justify-content-center">
        <div class="pol col-md-3" id="buy"><img src="resourses/img/hen.png" class="tab">
            <p>Курица<br/>
                Стоимость:500Р<br/>
                Доход: 20 <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon"> GG coins<br/>

            </p>
            <button class="btn btn-outline-warning buy" id="hen" onclick="buybutton(this.id)">Купить</button></div>
        <div class="pol col-md-3" id="buy"><img src="resourses/img/cow.png" class="tab">
            <p>Корова<br/>
                Стоимость:1500Р<br/>
                Доход: 80 <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon"> GG coins<br/>

            </p>
            <button class="btn btn-outline-warning buy" id="cow" onclick="buybutton(this.id)">Купить</button></div>
        <div class="pol col-md-3" id="buy"><img src="resourses/img/pork.png" class="tab">
            <p>Свинья<br/>
                Стоимость:5000Р<br/>
                Доход: 250 <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon"> GG coins<br/>
            </p>
            <button class="btn btn-outline-warning buy" id="pig" onclick="buybutton(this.id)">Купить</button></div>
        </div>
            <div class="row justify-content-center">
        <div class="pol col-md-3" id="buy"><img src="resourses/img/sheep.png" class="tab">
            <p>Овца<br/>
                Стоимость:10000Р<br/>
                Доход: 750 <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon"> GG coins<br/>
            </p>
            <button class="btn btn-outline-warning buy" id="sheep" onclick="buybutton(this.id)">Купить</button></div>
        <div class="pol col-md-3" id="buy"><img src="resourses/img/potato.png" class="tab">
            <p>Картошка<br/>
                Стоимость:500Р<br/>
                Доход: 20 <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon"> GG coins<br/>
            </p>
            <button class="btn btn-outline-warning buy" id="potato" onclick="buybutton(this.id)">Купить</button></div>
        <div class="pol col-md-3" id="buy"><img src="resourses/img/wheat.png" class="tab">
            <p>Пшеница<br/>
                Стоимость:3000Р<br/>
                Доход: 200 <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon"> GG coins<br/>
            </p>
            <button class="btn btn-outline-warning buy" id="wheat" onclick="buybutton(this.id)">Купить</button></div>
        </div>
            <div class="row justify-content-center">
        <div class="pol col-md-3" id="buy"><img src="resourses/img/corn.png" class="tab">
            <p>Кукуруза<br/>
                Стоимость:6000Р<br/>
                Доход: 450 <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon"> GG coins<br/>
            </p>
            <button class="btn btn-outline-warning buy" id="corn" onclick="buybutton(this.id)">Купить</button></div>
        <div class="pol col-md-3" id="buy"><img src="resourses/img/soya.png" class="tab">
            <p>Соя<br/>
                Стоимость:15000Р<br/>
                Доход: 1200 <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon"> GG coins<br/>
            </p>
            <button class="btn btn-outline-warning buy" id="soya" onclick="buybutton(this.id)">Купить</button></div>
        <div class="pol col-md-3" id="buy"><img src="resourses/img/rice.png" class="tab">
            <p>Рис<br/>
                Стоимость:50000Р<br/>
                Доход: 9000 <img src="https://img.icons8.com/dusk/64/000000/gg.png" class="icon"> GG coins<br/>
            </p>
            <button class="btn btn-outline-warning buy" id="rice" onclick="buybutton(this.id)" class="icon">Купить</button></div>
        </div>
        </div>
    </div>
<?php elseif(isset($_SESSION['logged']) && $_SESSION['token'] != "0") : ?>
    <div class="mas container">
        <h1>Ферма<img src="https://img.icons8.com/cotton/64/000000/farm--v1.png" class="img"></h1>
        <p>Пожалуйста подтвердите почту, чтобы продолжить работать с сайтом.</p>
    </div>
<?php else : ?>
    <div class="col-2"> </div>
    <div class="mas container">
        <h1>Ферма<img src="https://img.icons8.com/cotton/64/000000/farm--v1.png" class="img"></h1>
        <p>Зарегестрируйтесь или войдите, чтобы продолжить работать с сайтом.</p>
    </div>
<?php endif; ?>
