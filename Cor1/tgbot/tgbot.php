<?php
error_reporting(E_ALL);
define('API_TOKEN', '1051896479:AAFRKFgQLPikUzu99gooY-7CNP0VWNwSRrw');
define('API_BOTURL', 'https://api.telegram.org/bot' . API_TOKEN. '/');

class BOT
{
    function sendMessage($chatid, $msg, $keyboard = [], $keyboard_opt = [], $parse_preview = ['html', false])
    {

        if (empty($keyboard_opt)) {
            $keyboard_opt[0] = 'keyboard';
            $keyboard_opt[1] = 'false';
            $keyboard_opt[2] = 'true';
        }
        $option = [
            $keyboard_opt[0] => $keyboard,
            'one_time_keyboard' => $keyboard_opt[1],
            'resize_keyboard' => $keyboard_opt[2],
        ];
        $replyMarkups = json_encode($option);
        $removeMarkups = json_encode(['remove_keyboard' => true]);
        if ($keyboard == [0]) {
            file_get_contents(API_BOTURL . 'sendMessage?disable_web_page_preview=' . $parse_preview[1] . '&chat_id=' . $chatid . '&parse_mode=' . $parse_preview[0] . '&text=' . urlencode($msg) . '&reply_markup=' . urlencode($removeMarkups));
        } else if ($keyboard == []) {
            file_get_contents(API_BOTURL . 'sendMessage?disable_web_page_preview=' . $parse_preview[1] . '&chat_id=' . $chatid . '&parse_mode=' . $parse_preview[0] . '&text=' . urlencode($msg));
                  } else {
            file_get_contents(API_BOTURL . 'sendMessage?disable_web_page_preview=' . $parse_preview[1] . '&chat_id=' . $chatid . '&parse_mode=' . $parse_preview[0] . '&text=' . urlencode($msg) . '&reply_markup=' . urlencode($replyMarkups));
        }
    }
}

?>