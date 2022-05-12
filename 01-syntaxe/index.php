<h1>SYNTAXE PHP</h1>

<?php
echo 'Ceci est du php.', ' La aussi.<br/>';
print("La c'est un texte en php avec print.");
echo '<hr>';

// variables
$maVariable = "la Variable";
echo $maVariable;
echo '<hr>';

// concat
$fruit1 = "Banane";
$fruit2 = "Ananas";
echo $fruit1 . ' ' . $fruit2;
echo '<br>';
echo $fruit1 .= ' Tomate';
echo '<hr>';

$data1 = "Hello";
$data2 = "les terriens";
$data3 = "Mars";
$data4 = "planète";

echo "<p>".$data1.", ".$data2.",je viens de la ".$data4. " ".$data3.".</p>";

$phrase = "<p>";
$phrase .= $data1;
$phrase .= ", ";
$phrase .= $data2;
$phrase .= ",je viens de la ";
$phrase .= $data4;
$phrase .= " ";
$phrase .= $data3;
$phrase .= ".</p>";
echo $phrase;
?>