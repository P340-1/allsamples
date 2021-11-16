<?php

$my_array = array( 10=>0, '11', '10'=>'str10', 2=>2, 'three', 'fruit'=>'apple' );
$my_array[50] = '50';
$my_array[10] = 'int10';
$my_array['50'] = 'string50'; // перекрывает [50]

echo('<br><pre>');
var_dump($my_array);

echo('<br>');
var_dump($my_array[0]);

echo('<br>');
sort($my_array);
var_dump($my_array);


$my_array1 = [];
$my_array1[] = 'new_value';

echo('<br>');
var_dump($my_array1);


// Создание массива приведением типа
$my_array2 = 'this is array2';
$my_array2 = (array) $my_array2;

echo('<br>');
var_dump($my_array2);


// Обмен переменныз без посредника
$x=4; $y=5;
list($x, $y) = [$y, $x];
echo('<br> '.$x.' '.$y);

// Слияние массивов
// Если индексы одинаковые - значения берутся из левого
$fst = [1 => 'one', 2 => 'two'];
$snd = [3 => 'three', 4 => 'four'];
$sum = $fst + $snd;
echo '<pre>';
print_r($sum);
echo '</pre>';

// array_merge()
// in_array()
// array_key_exists()
// array_search() - найти ключ по значению
