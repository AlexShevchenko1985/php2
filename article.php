<?php
require __DIR__ . '/autoload.php';

//## singe article ##
$view = new \App\View();
$view->article =  \App\Models\Article::findById($_GET['id']);
$view->renderer(__DIR__ .'/App/templates/article.php');