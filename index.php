<?php
require __DIR__ . '/autoload.php';

//## last 3 news ##
$view = new \App\View();
$view->news =  \App\Models\Article::getLastItem(3);
$view->renderer(__DIR__ .'/App/templates/index.php');