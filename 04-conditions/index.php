<?php

$age = 2;
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
}
