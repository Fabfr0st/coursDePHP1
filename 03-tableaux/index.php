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

$fruits = ['Orange', 'Durian', 'Grenade', 'Banane', 'Mangue', 'Kiwi', 'Pomme', 'Fraise', 'Framboise', 'Cerise', 'Mandarine', 'Clementine', 'Raisin', 'Avocat', 'Groseille', 'Mûre', 'Melon', 'Pastèque', 'Citrouille', 'Tomate', 'Olive', 'Date', 'Courgette', 'Aubergine'];
/* $html = '';
for ($i = 0; $i < count($fruits); $i++) {
    $html .= "$fruits[$i], ";
}
$html = substr_replace($html, '.', -2);
echo $html; */

/* foreach ($fruits as $fruit => $fruitCourant) {
    echo "<br>$fruitCourant";
} */

$fruits = ['banane' => 'jaune', 'kiwi' => 'vert', 'cerise' => 'rouge'];
// var_dump($fruits);
// echo "La couleur d'une cerise est " . $fruits['cerise'] . '.<br>';
$ages = ['Thomas' => 24, 'Paul' => 42, 'Jack' => 5];
$ages['Claire'] = 18;
$ages['Claire'] = 22;
// var_dump($ages);
$chaine = implode('-', $ages); //implode assemble les élém du tableau en string
// var_dump($chaine);

$ages2 = "45,14,5,14,78,56,91,42,36";
$ages2 = explode(',', $ages2); //explode dissocie les élém dans une string pour en faire un tableau
/* var_dump($ages2);
$html = "<ul>";
foreach ($ages as $personne => $age) {
    // echo "$personne a $age ans.<br>";
    $html .= "<li>$personne a $age ans.</li>";
}
$html .= "</ul>";
echo $html; */


/* echo '<hr>MOYENNE';
$tabNotes = [12, 5, 16, 7];
$moy = array_sum($tabNotes) / count($tabNotes);
echo "<br>$moy";

echo '<hr>Nombre à remplir avec for<br>';
$nombres = [];
for ($i=34; $i <= 78; $i++) { 
    $nombres[] = $i ;
}
print_r($nombres); */

/* echo '<hr>Notes et élèves';
$html = "<ul>";*/
$notes = ['Rachelle' => 15, 'Jean' => 8, 'Elisa' => 20, 'Allan' => 0, 'Daphne' => 17];
/*foreach ($notes as $eleve => $note) {
    $html .= "<li>$eleve a obtenu $note/20.</li>";
}
$html .= "</ul>";
echo $html;


$notesAges = array_merge($notes, $ages);
var_dump($notesAges); */

/* asort();
sort();
arsort();
ksort();
krsort(); */

/* $planetes = ['Mars','Terre','Pluton','Vénus','Jupiter','Uranus','Mercure'];
print_r($planetes);
echo '<hr>';
krsort($planetes);
print_r($planetes);

echo '<hr>';

print_r($notes);
echo '<hr>';
krsort($notes);
print_r($notes);
 */

$mois = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
/* echo $mois[4];
echo '<br>';
echo $mois[10];
echo '<br>';
$mois[3] = strtoupper($mois[3]);
echo $mois[3];

echo '<hr>'; */

$region = [76 => 'Seine-Maritime', 27 => 'Eure', 14 => 'Calvados', 61 => 'Orne', 50 => 'Manche'];
/* echo $region[27];
echo '<br>';
$region[29] = 'Finistère';
$html='';
foreach ($region as $codeDep => $nomDep) {
    $html.= "<p>Le $nomDep possède le code postal suivant :  $codeDep";
}
echo $html; */

// $tab = [
//     'voiture' => 'ford',
//     'nombre' => [1,2,3,4],
//     'planete' => ['mars','terre']
// ];

$tab = [];
$tab[] = ['A','B','C'];
$tab[] = ['Q','R','T'];
$tab[] = ['E','U','P','I'];
print_r($tab);
echo '<hr>';
// Ecrire le mot CEPPIC
echo $tab[0][2].$tab[2][0].$tab[2][2].$tab[2][2].$tab[2][3].$tab[0][2];


echo '</pre>';
