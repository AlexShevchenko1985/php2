<?php

$db = new \App\Db();

$sql = 'UPDATE news SET title = 11 WHERE id = 1';

$res = $db->execute($sql);

var_dump($res);