<?php

// Point d'entrée pour la page d'accueil
//require __DIR__.'/inc/data/datas.php';
require __DIR__.'/inc/classes/Article.php';
require __DIR__.'/inc/classes/Data.php';

$data = new Data;

//var_dump($data);

$articlesList = $data->getArticlesList();
$categoriesList = $data->getCategoriesList();
$authorList = $data->getAuthorsList();

//var_dump($_GET);

// Il est nécessaire d'initialiser ma variable $currentPage sinon j'ai une erreur sur mon index. Je l'initialise avec la valeur home pour que ça affiche bien la home.tpl.php 
$currentPage = 'home';

// Je vérifie que ma super globale contient une valeur et que cette valeur est stockée dans une clé "page"
if (isset ($_GET['page'])){
    // je veux récupérer la valeur stockée dans la clé page de $_GET. Cette valeur va me permettre d'appeler la bonne template.
    $currentPage = $_GET['page'];
}
if ($currentPage == 'article'){

    if (isset ($_GET['id'])){
        // si la clé id de ma super-globale n'est pas vide ni null je peux donc récupérée l'id
        $articleId = $_GET['id'];
        // J'ai bien récupéré mon id, je peux donc récupérer un article précis via ma méthode getArticle de mon objet data en lui transmettant en paramètre l'id. 
        $articleToShow = $data->getArticle($articleId);

        if ($articleToShow === false){
            exit('Article n\'existe pas');
        } 
    } else {
        // SI y'a pas d'id , on affiche un message et on stoppe
        exit('ID non fourni');
    }
}


// Inclusion des fichiers nécessaires
require __DIR__.'/inc/templates/header.tpl.php';
require __DIR__.'/inc/templates/'.$currentPage.'.tpl.php';
require __DIR__.'/inc/templates/footer.tpl.php';

// Récupération des données nécessaires la page (si besoin)

// Affichage
