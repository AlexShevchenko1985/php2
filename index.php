<?php
require __DIR__.'/autoload.php';

if($_GET['id']) {
    //## findById ##
    $article = \App\Model\Article::findById($_GET['id']);
}else{
    //## last 3 news ##
    $news = \App\Model\Article::getLastNews(3);
    include __DIR__ . '/templates/index.php';
}



