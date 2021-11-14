<?php
spl_autoload_register();
error_reporting(E_ALL);

$obj = new classSampleOne();
echo $obj->msg(); 
echo('<br>');

echo( $obj->$val_0);
echo('<br>');

$obj = new classSampleTwo();
$obj->$newVal = 'newVal';
echo $obj->msg();
echo('<br>');
echo($obj->$newVal);
echo('<br>');

echo('const: ');
$obj->const_val = ' my_const'; // ???
$obj->const_val = ' my_const1';

echo($obj->const_val);
echo('<br>');

echo('const: ');
echo(classSampleOne::val_const);
echo('<br>');

echo('static val: ');
echo(classSampleOne:: $val_static);
echo('<br>');

echo('static two: ');
echo(classSampleTwo:: $val_static);
echo('<br>');

$obj = new classSampleFour();
$obj->fabs();
$obj->fnoabs();
$obj->traitPrintVal();

// Создать анонимный класс
