<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('TELEGRAM_TOKEN', '1068990738:AAHxlzUHSPI19gqDM-XoeqmpGoV9tmVUaSI');
//define('TELEGRAM_CHATID', '616945793');
define('TELEGRAM_CHATID', '-314542611');

function message_to_telegram($messageText) {
    $botApiToken = TELEGRAM_TOKEN;
    $data = [
        'chat_id' => TELEGRAM_CHATID,
        'text' => $messageText
    ];

    $resp = file_get_contents("https://api.telegram.org/bot{$botApiToken}/sendMessage?" . http_build_query($data));
}
date_default_timezone_set('Europe/Kiev');
$today = date("Y-m-d H:i:s");

if(!strlen($direction)) $direction = "Не указано";
if(!strlen($name)) $name = "Не указано";
if(!strlen($phone)) $phone = "Не указано";
if(!strlen($date)) $date = "Не указано";

$messageText = $today . "\n\n" . "Направление: $direction\n" . "Имя: $name\n" . "Телефон: $phone\n" . "Дата: $date\n" . $mess;

if($check == "24!1F-P;Zz4H@1Za&4bs1Kf^Xe6)271b&*;tdy^T*77-PHO2_a)yyRae)XbX8N4F") {
    message_to_telegram($messageText);
}