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

    $auteur1= new Auteur("Stephen","King");

    $livre1= new Livre("Ça", 1138, 1986, 20);
?>