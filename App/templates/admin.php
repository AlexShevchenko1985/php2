<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
<h1>All Posts</h1>
<a href="http://php2/post.php" >Add New</a>
<?php foreach ($news as $article) { ?>
    <div>
        <a href="http://php2/article.php?id=<?php echo $article->id; ?>"><h3><?php echo $article->title; ?></h3></a>
        <p><?php echo $article->text; ?></p>
        <p>Author: <?php echo $article->author->firstname.' '.$article->author->lastname ?></p>
        <a href="http://php2/post.php?id=<?php echo $article->id; ?>">Update</a>
        <a href="http://php2/admin.php?delete=<?php echo $article->id; ?>">Trash</a>
    </div>
<?php } ?>
</body>
</html>