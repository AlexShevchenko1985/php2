<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NEWS</title>
</head>
<body>
<h1>News</h1>
<?php foreach ($news as $values) { ?>
    <div>
        <a href="http://php/templates/article.php?id=<?php echo $values->id; ?>"><h3><?php echo $values->title; ?></h3></a>
        <p><?php echo $values->text; ?></p>
    </div>
<?php } ?>
</body>
</html>