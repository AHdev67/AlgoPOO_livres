<h1>Exercice Livres</h1>

<p>
Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et <br>
leurs auteurs respectifs.<br>
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un <br>
auteur. Un auteur comporte un nom et un prénom.<br>
Une méthode toString() sera appréciée dans chacune de vos classes.<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie <br>
complète d’un auteur.
</p>

<h2>Résultat</h2>

<?php
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });

    $auteur1= new Auteur("Stephen", "King");

    $livre1= new Livre("Ça", 1138, 1986, 20, $auteur1);
    $livre2= new Livre("Simetierre", 1983, 374, 15, $auteur1);
    $livre3= new Livre("Le Fléau",1978, 823, 14, $auteur1);
    $livre4= new Livre("Shining", 1977, 447, 16, $auteur1);

    echo $auteur1->afficherBiblio();

    $auteur2= new Auteur("Emile", "Zola");

    $livre5= new Livre("L'Assommoir", 1876, 502, 9.99, $auteur2);

    echo $auteur2->afficherBiblio();
?>