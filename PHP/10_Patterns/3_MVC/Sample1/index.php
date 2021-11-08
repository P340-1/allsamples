<?php
spl_autoload_register();

use MVC\Controllers\Controller;

$obj = new Controller('users/1.html');
echo $obj->render();

echo("<br>");
echo("<pre>");
$obj = new Controller('users/1.rss');
echo htmlspecialchars($obj->render());
echo("</pre");

echo("<br>");
echo("<pre>");
$obj = new Controller('users.rss');
echo htmlspecialchars($obj->render());
echo("</pre");