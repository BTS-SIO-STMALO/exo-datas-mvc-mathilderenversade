<?php

class DBConnexion {

    private $pdo; 

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=blogchien';
        $user = 'blogChien';
        $password = 'blogChien';

        try {
            $pdoConnexion = new PDO(
                $dsn,
                $user,
                $password,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                    // là je veux que les erreurs de connexion à la BDD s'affichent. Si j'étais sur un site en live/en production je mettrais : PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT comme ça les erreurs ne s'affichent
                )
                );
        } catch (PDOException $exception) {
            echo 'Connexion échouée : '. $exception->getMessage();
        }
        $this->pdo = $pdoConnexion;
    }

    public function getArticles(){
        $sql = '
            SELECT * FROM `article`;
        ';

        $pdoStatement = $this->pdo->query($sql);

        $articleList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

        return $articleList;
    }

    public function getAuthorsList() {
        $sql = '
        SELECT author FROM article;
        ';

        $pdoStatement = $this->pdo->query($sql);
        $authorList = $pdoStatement->fetchAll(PDO::FETCH_COLUMN);

        return $authorList;
    }
}