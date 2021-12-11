<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="mas">
                <h1>Пополнение баланса</h1>
                <p>Если вы хотите поддержать сайт и его создателя, то вы можете пожертвовать деньги и получить в 10 раз больше игровой валюты</p>
                <form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8" class="form-check">
                    <input type="hidden" name="ik_co_id" value="5e00b8a91ae1bde9158b4567" />
                    <input type="hidden" name="ik_pm_no" value="<?=uniqid();?>" />
                    <p><input type="text" name="ik_am" placeholder="Сумма" /></p>
                    <p><input type="text" name="ik_x_login" placeholder="Логин"></p>
                    <input type="hidden" name="ik_cur" value="RUB" />
                    <input type="hidden" name="ik_desc" value="Пополнение баланса" />
                    <p><input type="submit" value="Перейти к оплате"></p>
                </form>
            </div>
        </div>
    </div>
</div>