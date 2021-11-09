<?php
spl_autoload_register();
error_reporting(E_ALL);

$obj = new classSampleOne();
echo $obj->msg();
echo('<br>');

echo( ($obj->$val_0).'<br>');

$obj = new classSampleTwo();
$obj->$newVal = 'newVal';
echo $obj->msg();
echo('<br>');
echo($obj->$newVal);


