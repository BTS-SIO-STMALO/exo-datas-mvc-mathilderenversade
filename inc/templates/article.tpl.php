<?php
//var_dump($_GET);
$idUrl = $_GET['id'];
var_dump($idUrl);
?>

<article>
<h2><?=$dataArticlesList[$idUrl]['title'];?></h2>
<?= $dataArticlesList[$idUrl]['content'];?>
</article>