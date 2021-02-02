<?php

class Data {

    private $articlesList;
    private $authorsList;
    private $categoriesList; 

    public function __construct()
    {
        require __DIR__.'/../data/datas.php';
        $this->articlesList = $dataArticlesList;
        $this->authorsList = $dataAuthorsList;
        $this->categoriesList = $dataCategoriesList;
    }

    
    /**
     * Get the value of articlesList
     */ 
    public function getArticlesList()
    {
        return $this->articlesList;
    }

    /**
     * Get the value of authorsList
     */ 
    public function getAuthorsList()
    {
        return $this->authorsList;
    }

    /**
     * Get the value of categoriesList
     */ 
    public function getCategoriesList()
    {
        return $this->categoriesList;
    }

    /**
     * Je veux une méthode qui me permet d'obtenir un seul article en fonction d'un paramètre qui serait donc l'id de mon article
     */
    public function getArticle(int $id){
        if (isset($this->articlesList[$id])){
            return $this->articlesList[$id];
        }else{
            // si par exemple, on n'a pas transmis ou récupéré d'id ou bien que l'id reçu n'est pas contenu dans articlesList dans ce cas
            return false;
        }
    }
}