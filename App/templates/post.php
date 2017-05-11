<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit post</title>
</head>
<body>
<a href="http://php2/admin.php" >Back</a>
<h1><?php echo ($_GET['id']? 'Edit post' : 'Add New Post') ?></h1>
<p>Author: <?php echo $article->author->firstname.' '.$article->author->lastname ?></p>
<form method="POST">
    <h4>Title</h4>
    <input name="title" style="width: 340px" value="<?php echo $article->title; ?>">
    <h4>Text</h4>
    <textarea rows="30" cols="45" name="text"><?php echo $article->text; ?></textarea>
    <input type="hidden" name="id" value="<?php echo ($_GET['id'])? $_GET['id'] : null; ?>" >
    <p> <input type="submit"></p>
</form>
</body>
</html>