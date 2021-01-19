<!-- Emmet: article*4>h2>lorem6^p>lorem26 -->
<?php
foreach($articlesList as $id => $article) :?>
<article>
    <h2><a href="index.php?page=article&id=<?=$id;?>"><?=$article->getTitle();?></a></h2>
    <?=$article->getContent();?>
</article>
<?php endforeach ;?>
