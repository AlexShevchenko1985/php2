<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>
<body>
<h1>Article</h1>
<h2><?php echo $article->title; ?></h2>
<p><?php echo $article->text ?></p>
<p>Author: <?php echo $article->author->firstname.' '.$article->author->lastname ?></p>
</body>
</html>