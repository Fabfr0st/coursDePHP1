<?php
// tableaux indéxés
$tableau = array();
// $tableau = [];
$tableau = array('Lundi', 'Mardi', 45, 451.12, true, false);
$tableau = ['ffgfd', true, 45.1, 476, [0, 1, 2, 3, 4]];
echo '<pre>';
// var_dump($tableau);
// print_r($tableau);
$tableau[] = "Janvier";
// print_r($tableau);
// print_r($tableau[5]);
count($tableau);
array_push($tableau, 'valeur1(a_p)', 'valeur2(a_p)', 'etc(a_p)');
$tableau2 = ['Cabriolet(a_m)', 5, 'rouge(a_m)'];
$tableau = array_merge($tableau, $tableau2);
// print_r($tableau);

/* for ($i = 0; $i < count($tableau); $i++) {
    echo "<br>";
    print_r($tableau[$i]);
} */

$fruits = ['Orange', 'Durian', 'Grenade', 'Banane', 'Mangue', 'Kiwi', 'Pomme', 'Fraise', 'Framboise', 'Cerise','Mandarine','Clementine','Raisin','Avocat','Groseille','Mûre','Melon','Pastèque','Citrouille','Tomate','Olive','Date','Courgette','Aubergine'];
/* $html = '';
for ($i = 0; $i < count($fruits); $i++) {
    $html .= "$fruits[$i], ";
}
$html = substr_replace($html, '.', -2);
echo $html; */

foreach ($fruits as $fruit => $fruitCourant) {
    echo "<br>$fruitCourant";
}

echo '<hr>MOYENNE';
$tabNotes = [12, 5, 16, 7];
$moy = array_sum($tabNotes) / count($tabNotes);
echo "<br>$moy";








echo '</pre>';
