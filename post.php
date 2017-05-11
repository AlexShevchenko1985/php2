<?php
require __DIR__ . '/autoload.php';
$view = new \App\View();
if ($_GET['id']) {
    $view->article = \App\Models\Article::findById($_GET['id']);
} else {
    $view->article = new \App\Models\Article();
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
$view->renderer(__DIR__ . '/App/templates/post.php');