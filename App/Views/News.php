<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <title>News</title>
</head>
<body>
<h1>News</h1>
<?php foreach ($last_news as $item){ ?>
    <div>
        <h2><a href="http://php2/article.php?id=<?php echo $item->id; ?>"><?php echo $item->title; ?></a></h2>
    </div>
<?php } ?>
</body>
</html>

