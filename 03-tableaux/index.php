<?php
// tableaux indéxés
$tableau = array();
// $tableau = [];
$tableau = array('Lundi', 'Mardi', 45, 451.12, true, false);
$tableau = ['ffgfd', true, 45.1, 476, [0, 1, 2, 3, 4]];
echo '<pre>';
var_dump($tableau);
print_r($tableau);
$tableau[] = "Janvier";
// print_r($tableau);
print_r($tableau[5]);
echo '<hr>MOYENNE';
$tabNotes = [12,5,16,7];
$moy = array_sum($tabNotes)/count($tabNotes);
echo "<br>$moy";








echo '</pre>';
