<?php
//var_dump($_GET);
$idUrl = $_GET['id'];
var_dump($idUrl);
?>

<article>

<?php
//var_dump($articlesList);
?>

<h2><?=$articlesList[$idUrl]->getTitle();?></h2>
<?= $articlesList[$idUrl]->getContent();?>
</article>