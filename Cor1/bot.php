<?php
require ('tgbot.php');
$bot = new BOT();
$input_array = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = @$input_array['message']['chat']['id'];
$message = @$input_array['message']['text'];
switch($message){
    case '/start':
        $bot->sendMessage($chat_id, 'Привет.Это бот сайта InfintyFarm.'); break;
    default:
        $bot->sendMessage($chat_id, 'Неизвестная команда');
}
?>