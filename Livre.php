<?php

class Livre extends Auteur{
    private string $_titre;
    private int $_nbPages;
    private int $_anneeParution;
    private float $_prix;

//Attribut de type auteur pour assigner un objet auteur au livre, afin de l'ajouter a son tableau bibliographie
    private Auteur $_auteur;

    public function __construct(string $titre, int $anneeParution, int $nbPages, float $prix, Auteur $auteur){
        $this->_titre = $titre;
        $this->_anneeParution = $anneeParution;
        $this->_nbPages = $nbPages;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->addLivre($this);
    }
//-----------------------------------------------------------------GETTER/SETTER TITRE-----------------------------------------------------------------
    public function getTitre(): string{
        return $this->_titre;
    }

    public function setTitre(string $titre){
        $this->_nom = $titre;
        return $this;
    }

//-----------------------------------------------------------------GETTER/SETTER NB PAGES-----------------------------------------------------------------
    public function getnbPages(): int{
        return $this->_nbPages;
    }

    public function setnbPages(int $nbPages){
        $this->_nbPages = $nbPages;
        return $this;
    }

//-----------------------------------------------------------------GETTER/SETTER ANNEE PARUTION-----------------------------------------------------------------
    public function getAnneeParution(): int{
        return $this->_anneeParution;
    }

    public function setAnneeParution(int $anneeParution){
        $this->_anneeParution = $anneeParution;
        return $this;
    }

//-----------------------------------------------------------------GETTER/SETTER PRIX-----------------------------------------------------------------
    public function getPrix(): float{
        return $this->_prix;
    }

    public function setPrix(float $prix){
        $this->_prix = $prix;
        return $this;
    }

//On affiche les infos de l'objet livre
    public function __toString(): string{
        return "$this->_titre ($this->_anneeParution) : $this->_nbPages pages / $this->_prix €";
    }
}