<?php
/*
 Travail-00 :

    Créer un tableau php avec ses nombres : 27,15,34,379,248,5643,81,211,999,142,300,572
    Tester les nombres de ce tableau pour savoir si chaque nombre est pair ou impair (un nombre est pair si le resultat de la division par 2 est 0)
    Afficher les résultats sous forme de liste html ul comme ceci (xx,yy sont des nombres) :

* xx : pair
* yy : impaire
etc ...
 */
$nombres = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];
$html = '';
foreach ($nombres as $nombre) {
    $html .= "$nombre, ";
}
$html = substr($html, 0, -2);
echo $html;
echo " sont des nombres : ";
echo "<ul>";
foreach ($nombres as $nombre) {
    if ($nombre % 2 == 0) {
        echo "<li>$nombre : pair</li>";
    } else {
        echo "<li>$nombre : impair</li>";
    }
}
echo "</ul>";
