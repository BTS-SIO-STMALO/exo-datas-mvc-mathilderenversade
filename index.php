<?php

// Point d'entrée pour la page d'accueil
require __DIR__.'/inc/data/datas.php';

var_dump($_GET);

// Il est nécessaire d'initialiser ma variable $currentPage sinon j'ai une erreur sur mon index. Je l'initialise avec la valeur home pour que ça affiche bien la home.tpl.php 
$currentPage = 'home';

// Je vérifie que ma super globale contient une valeur et que cette valeur est stockée dans une clé "page"
if (isset ($_GET['page'])){
    // je veux récupérer la valeur stockée dans la clé page de $_GET. Cette valeur va me permettre d'appeler la bonne template.
    $currentPage = $_GET['page'];
}


// Inclusion des fichiers nécessaires
require __DIR__.'/inc/templates/header.tpl.php';
require __DIR__.'/inc/templates/'.$currentPage.'.tpl.php';
require __DIR__.'/inc/templates/footer.tpl.php';

// Récupération des données nécessaires la page (si besoin)

// Affichage
