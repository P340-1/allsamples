<?php

$my_str0 = 'my string, 0 строка ';
echo('<br>'.$current.'-'.$my_str0);

// foreach() без str_split() не пройдёт по строке как по массиву
foreach( str_split($my_str0) as $current )
{
    echo('<br>'.$current);
}

// strlen() - врзвращает количество байт
echo('<br> байт:'.strlen($my_str0));

// mb_strlen() - врзвращает количество символов
echo('<br> символов: '.mb_strlen($my_str0));

// substr() - возвращает подстроку
echo('<br> подстрока: '.mb_substr($my_str0, 9, 6));

// strpos() - возвращает позицию вхождения подстроки
echo('<br> \'р\' в позиции: '.mb_strpos($my_str0, 'р'));

// str_replace() - возвращает позицию вхождения подстроки
// mb_ аналога нет
echo('<br> замена: '.str_replace(['р','m'], ['P','M'], $my_str0));

// nl2br
$s =<<<T
hello
php
T;

echo('<br> на двух строках: '.nl2br( $s ));

// htmlspecialchars()
echo('<br> htmlspecialchars: '.htmlspecialchars( "<html>"));

// strip_tags() - удалить теги
echo('<br> strip_tags: '.strip_tags( "<html>"));

//printf()
echo('<br> printf:');

// explode() - разбить строку на массив

// implode() - составить строку из массива

// wordwrap() - вставляет \n через заданное к-во символов

// serialize()

// unserialize()

// json_encode()

// json_decode()



