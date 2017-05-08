<?php
require __DIR__ . '/autoload.php';
if ($_GET['id']) {
    $article = \App\Models\Article::findById($_GET['id']);
} else {
    $article = new \App\Models\Article();
}

if ($_POST) {
    if ($_POST['id']) {
        $article = \App\Models\Article::findById($_POST['id']);
    } else {
        $article = new \App\Models\Article();
    }
    $article->title = $_POST['title'];
    $article->text = $_POST['text'];
    $article->save();
    if ($_POST['id']) {
        $url = 'http://php2/post.php?id=' . $_POST['id'];
    } else {
        $param = \App\Models\Article::getLastItem();
        $url = 'http://php2/post.php?id=' . $param[0]->id;
    }
    header('Location: ' . $url);
}

require __DIR__ . '/App/templates/post.php';

