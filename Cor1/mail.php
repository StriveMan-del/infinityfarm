<?php
require 'PHPmailer/PHPMailer.php';
require 'PHPmailer/SMTP.php';
require 'PHPmailer/Exception.php';
function sendmail($email, $id)
{
    $url = md5($id);
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $msg = "ok";
        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth = true;
        // Настройки вашей почты
            $mail->Host = 'smtp.gmail.com'; // SMTP сервера GMAIL
        $mail->Username = 'infinityfarmsite@gmail.com'; // Логин на почте
        $mail->Password = '$d1122opswe4sg3432dfg'; // Пароль на почте
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('infinityfarmsite@gmail.com', 'InfinityFarm'); // Адрес самой почты и имя отправителя
        // Получатель письма
        $mail->addAddress($email);
        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);

        $mail->Subject = 'Подтверждение почты на сайте InfinityFarm';
        $mail->Body = "<h1>Infinity Farm</h1><div style='border:2px black solid''>
<img src='https://icac.org/Content/TruthAboutCotton/f31a9b10_9b03_4366_9e3f_834174aa953f/Land_Usage_1.png'><br/><hr>
<p style='font-size:15pt'>Спасибо что выбрали наш сайт, перейдите по этой ссылке, чтобы подтвердить свою почту: <b>http://k95216gn.beget.tech/index.php?page=mail&token=$url</b></p>
</div>";
// Проверяем отравленность сообщения
        if ($mail->send()) {

        } else {
            echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
        }
    } catch (Exception $e) {
        echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }
}

?>