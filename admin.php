<?php
require __DIR__.'/autoload.php';
$view = new \App\View();
$view->news = \App\Models\Article::findAll();
if($_GET['delete']){
    $article = \App\Models\Article::findById($_GET['delete']);
    $article->delete();
    header("Location: http://php2/admin.php");
}
$view->renderer(__DIR__.'/App/templates/admin.php');