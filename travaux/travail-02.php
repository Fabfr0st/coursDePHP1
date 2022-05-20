<?php
/*
Travail-02 :

    Travaller avec le fichier json persons.json dans le dossier Travaux
    Afficher le(a) deuxieme ami(e) de Raymond Jimenez dans un titre html <h3>
    Afficher la couleur des yeux de Ball Shaffer en gras html strong sous la forme d'une phrase : La couleur des yeux de Ball Shaffer est :
    Afficher dans une balise html article dans l'ordre suivant :
        image de la personne dans une balise html img
        Nom : le nom de la personne
        Age: age de la personne
        Couleur des yeux : la couleur des yeux de la personne
        Email: email de la personne
        Age: age de la personne
        Fruit favori : fruit favori de la personne
        Si isActive est à true : afficher ACTIF
        Tags : afficher tous les tags de la personne séparé d'une virgule
        Ne pas afficher la derniere la deniere virgule de tous les tags
        Chaque personne sera séparé d'une ligne horizontale html <hr>

Vous trouverez une capture du resultat attendu.
 */
$fichier = file_get_contents("./persons.json");
$json = json_decode($fichier, true);
// echo "<pre>";
// var_dump($json);
// echo "</pre>";
echo "<h3>" . $json[2]["friends"][1]["name"] . "</h3>";
echo "<p>La couleur des yeux de Ball Shaffer est : <strong>" . $json[1]["eyeColor"] . "</strong></p>";
echo '<article>';
foreach ($json as $personne) {
    $tags = '';
    echo '<img src="' . $personne['picture'] . '"><br>';
    echo 'Nom: ' . $personne['name'] . '<br>';
    echo 'Age: ' . $personne['age'] . '<br>';
    echo 'Couleur des yeux : ' . $personne['eyeColor'] . '<br>';
    echo 'Email: ' . $personne['email'] . '<br>';
    echo 'Fruit Favori: ' . $personne['favoriteFruit'] . '<br>';
    if ($personne['isActive']) {
        echo "ACTIF<br>";
    }
    echo 'Tags: ';
    foreach ($personne['tags'] as $tag) {
        $tags .= "$tag, ";
    };
    $tags = substr($tags, 0, -2);
    echo $tags;
    echo '<hr>';
}
echo '</article>';
