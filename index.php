<?php
require __DIR__ . '/autoload.php';

//## last 3 news ##
$news = \App\Model\Article::getLastItem(3);
include __DIR__ .'/App/templates/index.php';




