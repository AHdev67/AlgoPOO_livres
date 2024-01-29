<?php

class Livre extends Auteur{
    private string $_titre;
    private int $_nbPages;
    private int $_anneeParution;
    private float $_prix;
    private Auteur $_auteur;

    public function __construct(string $titre, int $nbPages, int $anneeParution, float $prix, Auteur $auteur){
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_anneeParution = $anneeParution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
    }

    public function getTitre(): string{
        return $this->_titre;
    }

    public function setTitre(string $titre){
        $this->_nom = $titre;
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

    public function getPrix(): float{
        return $this->_prix;
    }

    public function setPrix(float $prix){
        $this->_prix = $prix;
    }

    public function __toString(): string{
        return "$this->_titre ($this->_anneeParution)";
    }

    public function afficherLivre(){
        echo "$this : $this->_nbPages pages / $this->_prix €";
    }
}