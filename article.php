<?php
require __DIR__ . '/autoload.php';
$id = $_GET['id'];
$data = \App\Models\Article::findById($id);
?>
<h2><?php echo $data[0]->title; ?></h2>
<p><?php echo $data[0]->text; ?></p>
