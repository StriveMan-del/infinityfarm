<div class="mas container">
    <p>
        Ваша почта была подтверждена, вы будете перенаправленны на главную страницу через 5 секунд.
    </p>
</div>
<?php
$user = R::findOne('users', 'token = ?' , [$_GET['token']]);
if (isset($user)){
$user = R::load('users', $user->id);
$user -> token = 0;
R::store($user);};
?>
<script>
    setTimeout(() =>location.replace('/?page=main'), 5000);
</script>
