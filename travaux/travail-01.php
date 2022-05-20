<?php
/*
Travail-01 :

    Réaliser un script qui convertit une température de degré Celsius °C en degré Fahrenheit °F
    Afficher les résultats dans un tableau html table , utiliser la fonction php round pour arrondir à l'unité supérieur
    Voici le tableau de conversion que vous devez avoir :

| °C | °F |
|--- |--- |
| 25 | 77 |
| 03 | 37.4 |
| 35 | 95 |
| 11 | 51.8 |
 */
$tempsC = [25, 03, 35, 11];
$tempsF = [];
echo "<table>
        <tr>
            <td>°C</td>
            <td>°F</td>
        </tr>";
foreach ($tempsC as $tempC) {
    $tempF = round(($tempC * 1.8) + 32,PHP_ROUND_HALF_UP);
    $tempsF[] = $tempF;
}
for ($i=0; $i < count($tempsC); $i++) { 
    echo "<tr><td>".$tempsC[$i]."</td><td>".$tempsF[$i]."</td></tr>";
}
echo "</table>";
