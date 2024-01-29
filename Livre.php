<?php

class Livre extends Auteur{
    private string $_titre;
    private string $_auteur;
    private int $_nbPages;
    private int $_anneeParution;
    private int $_prix;

    public function __construct(string $titre, int $nbPages, int $anneeParution, float $prix){
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_anneeParution = $anneeParution;
        $this->_prix = $prix;
    }

    public function getTitre(): string{
        return $this->_titre;
    }

    public function setTitre(string $titre){
        $this->_nom = $titre;
    }

    public function getAuteur(): string{
        return $this->_auteur;
    }

    public function setAuteur(string $auteur){
        $this->_nom = $auteur;
    }

    public function getnbPages(): int{
        return $this->_nbPages;
    }

    public function setnbPages(int $nbPages){
        $this->_nbPages = $nbPages;
    }

    public function getAnneeParution(): int{
        return $this->_anneeParution;
    }

    public function setAnneeParution(int $anneeParution){
        $this->_anneeParution = $anneeParution;
    }

    public function getPrix(): int{
        return $this->_prix;
    }

    public function setPrix(int $prix){
        $this->_prix = $prix;
    }

    public function __toString(): string{
        return "$this->_titre ($this->_anneeParution)";
    }

    public function afficherLivre(){
        echo "$this : $this->_nbPages / $this->_prix €";
    }

    public function afficherBiblio(){
        echo "Livres de $this";
    }

}