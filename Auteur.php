<?php

class Auteur{
    private string $_nom;
    private string $_prenom;

    public function __construct(string $nom, string $prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

    public function getNom(): string{
        return $this->_nom;
    }

    public function setNom(string $nom){
        $this->_nom = $nom;
    }

    public function getPrenom(): string{
        return $this->_prenom;
    }

    public function setPrenom(string $prenom){
        $this->_nom = $prenom;
    }

    public function __toString(): string{
        return "$this->_prenom $this->_nom";
    }

    public function affichageBiblio(){
        echo "<h1>Livres de $this</h1>";
    }
}