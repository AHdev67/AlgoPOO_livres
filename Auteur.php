<?php

class Auteur{
    private string $_nom;
    private string $_prenom;

//Tableau dans lequel on vas stocker les objets livre prenant cet objet auteur en paramètre
    private array $_bibliographie;

    public function __construct(string $nom, string $prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_bibliographie = [];
    }

//-----------------------------------------------------------------GETTER/SETTER NOM-----------------------------------------------------------------
    public function getNom(): string{
        return $this->_nom;
    }

    public function setNom(string $nom){
        $this->_nom = $nom;
        return $this;
    }

//-----------------------------------------------------------------GETTER/SETTER PRENOM-----------------------------------------------------------------
    public function getPrenom(): string{
        return $this->_prenom;
    }

    public function setPrenom(string $prenom){
        $this->_nom = $prenom;
        return $this;
    }

//-----------------------------------------------------------------GETTER/SETTER BIBLIO-----------------------------------------------------------------
    public function getBiblio(): array{
        return $this->_bibliographie;
    }

    public function setBiblio(array $bibliographie){
        $this->_bibliographie = $bibliographie;
        return $this;
    }

//Méthode qui nous permet d'ajouter un objet livre au tableau dés qu'il est crée avec l'objet auteur en paramètre
    public function addLivre(Livre $Livre){
        $this->_bibliographie[] = $Livre;
    }

    public function __toString(): string{
        return "$this->_nom $this->_prenom";
    }

//Méthode d'affichage 
    public function afficherBiblio(){
        $result= "<h1>Livres de $this</h1><br><br>";
        foreach($this->_bibliographie as $livre){
            $result.=$livre."<br>";
        }
        return $result;
    }
}