<!doctype html>
<html lang="en">
<?php
require __DIR__ . '/autoload.php';
$id = $_GET['id'];
$data = \App\Models\Article::findById($id);
?>
<head>
    <meta charset="UTF-8">
    <title><?php echo $data->title; ?></title>
</head>
<body>
<h2><?php echo $data->title; ?></h2>
<p><?php echo $data->text; ?></p>
</body>
</html>
