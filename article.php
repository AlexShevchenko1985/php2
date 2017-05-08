<?php
require __DIR__ . '/autoload.php';

//## singe article ##
$article = \App\Models\Article::findById($_GET['id']);
include __DIR__ .'/App/templates/article.php';
