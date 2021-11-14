<?php

echo('closure: ');
$k = function() use ($a, $e) // use - наследование переменных из родительской области видимости
{
    echo('OK');
};

$k();