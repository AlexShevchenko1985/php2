<?php
require __DIR__ . '/autoload.php';
if (111 == $_GET['pass'] || 111 == $_COOKIE['pass']) {

    if(empty( $_COOKIE['pass'])) {
        setcookie("pass", $_GET['pass'], time() + 36000);
    }

    $view = new \App\View();
    $view->news = \App\Models\Article::findAll();
    if ($_GET['delete']) {
        $article = \App\Models\Article::findById($_GET['delete']);
        $article->delete();
        header("Location: http://php2/admin.php");
    }
    $view->renderer(__DIR__ . '/App/templates/admin.php');

}else{
    echo 'У вас нет прав доступа!';
}
