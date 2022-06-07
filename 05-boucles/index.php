<?php
// Loops

// While
/* $j = 0;
while ($j <= 10) {
    // echo $j . '-';
    echo "$j-";
    $j++; // $j = $j + 1
} */

// Avec une boucle while afficher toutes les années de 1970 à aujourd'hui dans une liste ul
// Afficher le nombre de jour depuis 1970
// Travailler dans une branche annees
/* ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle While</title>
</head>
<body>
    <ul>
<?php
    $anne1 = 1970;
    $anne2 = 2022;
    $nbJour = 0;
    while($anne1 <= $anne2){
?>
    <li><?=$anne1;?></li>
<?php
    $nbJour += 365;
    $anne1++;
    }
?>   
<li>Le nombre de jour depuis 1970 est : <strong><?=$nbJour - 365;?></strong></li>
</ul>
</body>
</html> */
// ==========
// Do while
// ==========
/* $y = 0;
$k = 10;
do {
    echo "Nombre : $y<br>";
    $y++;
    $k--;
} while ($y >= 10);
echo '<br>';
echo $k; */

//=========
// foreach
//=========
$tabs = [1, 2, 3, 4, 5, 6];
foreach ($tabs as $tab) {
    echo 'Nombre : ' . $tab . '<br>';
}

$html = "<h1>For div par 7</h1>";
$html .= "<ul>";
for ($i = -128; $i <= 1257; $i++) {

    if ($i % 7 === 0) {
        $html .= "<li>";
        $html .= $i;
        $html .= "</li>";
    }
}
$html .= "</ul>";
echo $html;

$while = "<h1>While div par 7</h1>";
$while .= "<ul>";
$a = -128;
while ($a <= 1257) {
    if ($a % 7 === 0) {
        $while .= "<li>";
        $while .= $a;
        $while .= "</li>";
    }
    $a++;
}
$while .= "</ul>";
echo $while;



$premier = "<h1>Nombres premiers</h1>";
$premier .= "<ul>";

for ($i = 1; $i <= 50; $i++) {
    $n = 0;

    for ($j = 2; $j < ($i / 2 + 1); $j++) {
        if ($i % $j === 0) {
            $n++;
            break;
        }
    }

    if ($n === 0) {
        $premier .= "<li>" . $i . "</li>";
    }
}
$premier .= "</ul>";
echo $premier;
