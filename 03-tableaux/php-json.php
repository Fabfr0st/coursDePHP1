<?php
$pers1 = [
    'prenom' => 'Simon',
    'nom' => 'Jérémi',
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

echo '</pre>';