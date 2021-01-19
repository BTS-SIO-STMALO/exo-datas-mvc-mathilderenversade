## Code fourni

- l'intégration HTML/CSS bien moche est faite
- y'a rien qui marche et tout est en dur :expressionless:

## Etapes 

1) faire déjà en sorte que ce qui existe s'affiche sur notre fichier point d'entrée

2) à la racine du projet, créer les fichiers :
- category.php => page listant toutes les catégories. 
- author.php => page listant tous les auteurs.
- article.php => page affichant un article. Dans un premier temps, faites simplement un affichage de "Je suis un article".

3) dans le dossier correspondant au template :
- créer un fichier de template par page
- faites le html nécessaire

4) dans les fichiers racines
- inclure les données nécessaires pour le bon fonctionnement du code
- afficher le code HTML grâce aux templates 
- vérifier l'affichage correct des 3 nouvelles pages et les intégrer à la navigation

5) si vous êtes arrivés jusque là, vous vous dîtes que les fichiers article.php / author.php et category.php sont redondants puisqu'ils ne font que passer des données à la vue(la template) puis afficher les templates. C'est quasi le même code qui se répète sur ces pages. Dès lors, si on avait les données disponibles dès l'index et qu'on pouvait, dès l'index, appeler la bonne template, on pourrait s'en passer de ces fichiers ... 
Comment faire pour appeler dès l'index, la bonne template ?
Vous vous rappelez que grâce à la super globale $_GET on peut faire transiter des informations via l'url ?
Et si, pour aller sur ma page category, au lieu de faire un lien vers mon fichier category.php, je déterminais une url de ce type : index.php?page=category et que je récupérais une variable à injecter au moment de l'appel à ma template ?

6) Si vous êtes arrivés jusque là, vous vous dites c'est cool. Maintenant ce qui serait vraiment cool, c'est que les titres de mes articles sur ma homepage soit des liens et quand je clique dessus ça m'affiche les informations relatives à l'article sur lequel j'ai cliqué. 
A mon avis, en rajoutant un paramètre dans l'url calé sur l'id du tableau ça peut marcher ...
