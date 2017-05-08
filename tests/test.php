<?php
require __DIR__ . '/../autoload.php';
$db = \App\Db::instance();

//INSERT INTO
$title = 'Title TEST2';
$text = 'Text TEST2';
$sql_insert = 'INSERT INTO news (title, text)
                VALUE (:title, :text)';
$params = [':title' => $title, ':text' => $text];

//UPDATE
$id = 11;
$title1 = 'Title TEST UPDATE1';
$text1 = 'Text TEST UPDATE1';
$sql_update = 'UPDATE news
               SET title = :title1, text = :text1
               WHERE id = :id';
$params2 = [':id' => $id, ':title1' => $title1, ':text1' => $text1];
//$data = $db->execute($sql_update, $params2);
//echo $data;
//assert(is_object($data));
//assert($data instanceof \App\Db);

//Active Record UPDATE
//$article = \App\Models\Article::findById(2);
//$article->title = 'New test title2222233';
//$res = $article->save();

//Active Record INSERT
//$article = new \App\Models\Article();
//$article->title = 'New test INSERT title 4';
//$article->text = 'New test INSERT text 4';
//$res = $article->save();

//Active Record Delete
//$article = \App\Models\Article::findById(20);
//$res = $article->delete();

//Save the configuration file
//$res = new \App\Config();

//interface
//$data = new \App\Ordering();
//echo $data->oder(new \App\Models\Vegetable());

//trait
//$data = new \App\Models\Fruit();
//echo $data->getVolume();
