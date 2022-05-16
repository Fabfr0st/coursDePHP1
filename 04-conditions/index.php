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

$a = 20;
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
}
