<?php

require __DIR__ . '/autoload.php';
//include __DIR__.'/test/test.php';


//## findById ##
//$data = \App\Models\Article::findById(14);
//var_dump($data);

//## last 3 news ##
$last_news = \App\Models\Article::getLatest(3);
include __DIR__ .'/App/Views/News.php';






