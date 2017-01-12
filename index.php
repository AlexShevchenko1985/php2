<?php

require __DIR__ . '/autoload.php';
//include __DIR__.'/test/test.php';


//findById
//$data = \App\Models\Article::findById(2);

//last 3 news
$last_news = \App\Models\Article::lastNews();
?>
<h1>News</h1>
<?php foreach ($last_news as $item){ ?>
<div>
    <h2><a href="http://php2/article.php?id=<?php echo $item->id; ?>"><?php echo $item->title; ?></a></h2>
</div>
<?php } ?>




