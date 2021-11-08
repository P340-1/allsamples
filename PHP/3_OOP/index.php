<?php
spl_autoload_register();

//use MVC\Controllers\Controller;

$obj = new Sample();
echo $obj->msg();

$obj = new SampleTwo();
echo $obj->msg();
