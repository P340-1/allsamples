<?php
spl_autoload_register();

use Factory\Router;

$obj = Router::parse('users');
echo $obj->render();

$obj = Router::parse('pages');
echo $obj->render();

$obj = Router::parse('pages/1');
echo $obj->render();

