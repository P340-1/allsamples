<?php
spl_autoload_register();
echo('OK_0 <br>');
use S1\Conf\SiteConfig;

SiteConfig:: get()-> items_per_page = 20;
echo SiteConfig:: get()-> items_per_page; // 20