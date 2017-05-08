<?php
require __DIR__.'/autoload.php';
$news = \App\Models\Article::findAll();
if($_GET['delete']){
    $article = \App\Models\Article::findById($_GET['delete']);
    $article->delete();
    header("Location: http://php2/admin.php");
}
require __DIR__.'/App/templates/admin.php';