<!-- Emmet: article*4>h2>lorem6^p>lorem26 -->
<?php
foreach($dataArticlesList as $id => $article) :?>
<article>
    <h2><a href="index.php?page=article&id=<?=$id;?>"><?=$article["title"];?></a></h2>
    <?=$article["content"];?>
</article>
<?php endforeach ;?>
