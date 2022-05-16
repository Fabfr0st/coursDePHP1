<?php

/* $age = 2;
if ($age >= 18) {
    echo "Vous êtes majeur à $age ans. Vous pouvez voter.";
} else {
    echo "Vous ne pouvez pas voter car vous êtes trop jeune, vous avec $age ans.";
}

echo '<hr>';
$heure = date('H');
echo "Il est $heure H<br>";
if ($heure < 12) {
    echo "On est le matin.";
} else {
    echo "On est le soir.";
}

echo "<br>";
$heure = 15;
echo "Il est $heure H<br>";
if ($heure < 12) {
    echo "On est le matin.";
} elseif ($heure < 18) {
    echo "On est l'après-midi.";
} else {
    echo "On est le soir.";
} */

/* $a = 20;
$b = 5;
$c1 = 10;
$c2 = '10';

if ($b != 3) {
    echo "La variable b: $b est différente de 3.";
}
echo "<br>";
if ($c1 == $c2) {
    echo "La valeur de c1: $c1 est égale à c2: $c2.";
}
echo "<br>";
if ($c1 === $c2) {
    echo "La valeur et le type de c1: $c1 sont égaux à ceux de c2: $c2.<br>";
} else {
    echo "Le type de c1: $c1 est différent de celui de c2: $c2.";
}
echo "<br>";
if ($c2 != $c1) {
    echo "$c2 est différent de la valeur de c1: $c1";
}
echo "<br>";
if ($c2 !== $c1) {
    echo "c2: $c2 est différent de la valeur et de type de c1: $c1";
} */

/*
>>>>>>>>>>>>>>>SWITCH<<<<<<<<<<<<<<<
*/
/* $couleur = 'vert';

switch ($couleur) {
    case 'vert':
        echo "Votre couleur favorite est le vert.";
        break;
    case 'jaune':
        echo "Votre couleur favorite est le jaune.";
        break;
    case 'bleu':
        echo "Votre couleur favorite est le bleu.";
        break;
    case 'rouge':
        echo "Votre couleur favorite est le rouge.";
        break;
    default:
        echo "Votre couleur favorite n'est ni le vert, rouge, jaune ou bleu.";
        break;
}
echo "<br>";

$food = 3;
$return_value = match ($food) {
    'pomme' => "C'est une pomme",
    'hareng' => "C'est un hareng",
    'gateau' => "C'est un gateau",
    3 => "Cest un 3 ?!",
    default => 'Ne mangez pas cette nourriture!',
};
var_dump($return_value); */

$var1 = 2;
$var2; //0 et false sont considérés comme vides

/* if (empty($var1)) { //empty retourne un booléen 0->false->vide
    echo "var1 est vide";
}
echo '<br>';
if (empty($var2)) {
    echo "var2 est vide";
}
echo '<br>';
if (isset($var1)) { 
    echo "var1 est set";
}
echo '<br>';
if (isset($var2)) { 
    echo "var2 est set";
}
else {
    echo "var2 n'est pas set";
} */

echo '<br>';
/* $articles = [1,5,7];
if(!empty($articles[0])) {
    var_dump($articles[0]);
} else {
    echo "Il n'y a pas d'articles !";
}    */

// Operateur ternaire
// condition ? true : false
echo !empty($articles[0]) ? $articles[0] : "Il n'y a pas d'articles";

$premierArticle = !empty($articles[0]) ? $articles[0] : "Il n'y a pas d'articles";
$premierArticle = !empty($articles[0]) ? $articles[0] : null;
echo $premierArticle;