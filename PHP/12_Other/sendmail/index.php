<?php
// 1. В командной строке выполнить composer install
// 2. Для yandex в настройках почты включить IMAP => портальный пароль!

require "vendor/autoload.php";

echo('Ready...');

$message = new Swift_Message();
echo('OK...');

$message->setFrom('MyLogin@yandex.ru');
$message->setTo(array('ToLogin@yandex.ru' => 'Джемс'));
$message->setSubject('Delicious New Recipe');

$message->setBody (<<<_TEXT_
Глава 17. Отправка сообщений по электронной почте 299
_TEXT_
);

var_dump($message);

$transport = (new Swift_SmtpTransport('smtp.yandex.ru', 465, 'ssl'))
->setUsername('MyLogin@yandex.ru') 
->setPassword('');


var_dump($transport);

$mailer = new Swift_Mailer($transport);

print_r($mailer);

$mailer->send($message);
