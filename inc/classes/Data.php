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
}