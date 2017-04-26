<?php
require __DIR__.'/../autoload.php';
$db = new \App\Db();
//INSERT INTO
$title = 'Title TEST2';
$text = 'Text TEST2';
$sql_insert = 'INSERT INTO news (title, text)
                VALUE (:title, :text)';
$params = [':title' => $title, ':text' => $text];

//UPDATE
$id = 11;
$title1 = 'Title TEST UPDATE';
$text1 = 'Text TEST UPDATE';
$sql_update = 'UPDATE news
               SET title = :title1, text = :text1
               WHERE id = :id';
$params2 = [':id' => $id, ':title1' => $title1, ':text1' => $text1];

//$data = $db->execute($sql_insert, $params);
//echo $data;