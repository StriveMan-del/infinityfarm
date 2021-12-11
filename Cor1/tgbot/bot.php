<?php
require 'tgbot.php';
$bot = new BOT();
$input_array = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = @$input_array['message']['chat']['id'];
$message = @$input_array['message']['text'];
switch($message){
    case '/start':
        $bot->sendMessage($chat_id, 'Привет.Это бот сайта InfintyFarm.Здесь вы можете войти в свой аккаунт и работать с сайтом,а так же получать уведомления о вашем счёте каждый час.', [['Моя ферма', 'Амбар', 'Рынок'], ['Счёт', 'Опции']], ['keyboard', false, true], ['html', true]); break;
    default:
        $bot->sendMessage($chat_id, 'Неизвестная команда');
}
?>