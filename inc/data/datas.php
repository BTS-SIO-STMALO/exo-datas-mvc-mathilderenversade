<?php

// Les différents articles sous forme d'un tableau d'objets
$dataArticlesList = [
    1 => new Article(
        "Comment caresser son chien dans le sens du poil","<p> Il est important de caresser son chien dans le sens du poil pour notamment éviter les poils incarnés et la mauvaise humeur </p>",
        "Mathilde", 
        "2015-02-05",
        "Bien-être"
    ),
    2 => new Article(
        "Pourquoi les chiens sentent-ils mauvaise de la bouche ?",
        "<p> Senteur poubelle ou senteur caniveau, l'haleine de nos canidés est un vrai problème du quotidien. Il existe pourtant des solutions simples </p>",
        "Nicolas",
        '2020-03-25', 
        'Soins et santé'
    ),
    3 => new Article(
        "Top 10 des meilleurs jouets à tester",
        "<p> Peluche, baballe, pouet pouet, jeux d'intelligence et d'agilité, nous avons sélectionné pour vous les meilleurs jeux 2020 pour votre animal </p>",
        "Pierre",
        '2020-12-31',
        'Loisirs'
    ),
];
/*
$dataArticlesList = [
    1 => [
        "title" => "Comment caresser son chien dans le sens du poil",
        "content"=> "<p> Il est important de caresser son chien dans le sens du poil pour notamment éviter les poils incarnés et la mauvaise humeur </p>",
        "author" =>"Mathilde",
        "date"=>'2020-07-13',
        "category" =>"Mathilde"
    ],
    2 => [
        "title" => "Pourquoi les chiens sentent-ils mauvaise de la bouche ?",
        "content"=> "<p> Senteur poubelle ou senteur caniveau, l'haleine de nos canidés est un vrai problème du quotidien. Il existe pourtant des solutions simples </p>",
        "author" =>"Nicolas",
        "date"=>'2020-03-25',
        "category" =>'Soins et santé'
    ],
    3 => [
        "title" => "Top 10 des meilleurs jouets à tester",
        "content"=> "<p> Peluche, baballe, pouet pouet, jeux d'intelligence et d'agilité, nous avons sélectionné pour vous les meilleurs jeux 2020 pour votre animal </p>",
        "author" =>"Pierre",
        "date"=>'2020-12-31',
        "category" =>'Loisirs'
    ],
    4 => [
        "title" => "Mon chien mord, que faire ?",
        "content"=> "<p> Cette sale bête s'attaque à tout le monde, j'ai déjà 5 procès sur le dos, je ne sais plus quoi faire, il me fait peur </p>",
        "author" =>"Colette",
        "date"=>'2020-01-05',
        "category" =>'Education'
    ],
    5 => [
        "title" => "Salut je suis nouveau",
        "content"=> "<p> Lorem ipsum sin doloris</p>",
        "author" =>"Colette",
        "date"=>'2020-01-05',
        "category" =>'Education'
    ],
];
*/

// Les catégories
$dataCategoriesList = [
    1 => 'Bien-être',
    2 => 'Soins et santé',
    3 => 'Loisirs',
    4 => 'Education'
];

// Les auteurs
$dataAuthorsList = [
    1 => 'Mathilde',
    2 => 'Nicolas',
    3 => 'Pierre',
    4 => 'Colette',
    5 => 'Lili',
    6 => 'Jean',
    7 => 'Pascal'
];