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
$tableau2 = ['Cabriolet', 5, 'couleur'=>'rouge'];
$tableau = array_merge($tableau, $tableau2);
print_r($tableau);

echo '<hr>MOYENNE';
$tabNotes = [12, 5, 16, 7];
$moy = array_sum($tabNotes) / count($tabNotes);
echo "<br>$moy";








echo '</pre>';
