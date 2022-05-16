<?php
$pers1 = [
    'prenom' => 'Simon',
    'nom' => 'Jeremi',
    'email' => 's.jeremi@email.fr'
];

$people = [
    $pers1,
    [
        'prenom' => 'Serge',
        'nom' => 'Karamazov',
        'email' => 's.karamazov@email.fr'
    ],
    [
        'prenom' => 'Odile',
        'nom' => 'De Rey',
        'email' => 'o.de_rey@email.fr'
    ]
];
echo '<pre>';
print_r($people);

echo $people[2]['email'];
echo PHP_EOL;
echo $people[2]['prenom'];
echo PHP_EOL;
echo json_encode($people);
echo PHP_EOL;
$json_obj = '{
    "nom" : "Karamazov",
    "prenom": "Serge",
    "email" : "s.karamazov@email.fr"
}';
print_r($json_obj);
echo '<hr>';
$json_array_php = json_decode($json_obj);
print_r($json_array_php);


echo '</pre>';
