<?php
// constantes
define('HOST', 'localhost');
define('USER', 'root');

print_r(HOST);
echo '<br>';
var_dump(USER);

$x = 4;
$y = 2;
$z = 5;

// % modulo | ** puissance | 
$calcul = $x + $y * $z;
var_dump($calcul);

// affectation
$a = 5;
$a = '5';
var_dump($a);
$b = 7;
echo '<br>';
// $a += 6;
// $a += $b;
// $a -= $b;
// $a /= $b;
$a %= $b;
$a **= $b;
// echo round($a, 5);
echo $a;

echo '<hr>Calcul TTC<br>';
$prixHT = 34;
$tva = 20;
echo "PHT $prixHT €<br>";
echo "TVA $tva %<br>";
$prixTTC = round($prixHT + ($tva * $prixHT) / 100, 2);
echo "PTT $prixTTC €<br>";

echo '<hr>Calcul Age<br>';
// $dateActu = date("Y");
$dateAnniv = 1975;
$age = date("Y") - $dateAnniv;
echo "Vous avez $age ans à un an près !<br>";

/* $dateActu2 = date('Y-m-d');
$dateAnniv2 = date_create_from_format('Y-m-d', '1978-05-10');
echo $dateActu2;
 */

//  in/decrementation
$i = 0;
$i++;

$j = 0;
$j--;
