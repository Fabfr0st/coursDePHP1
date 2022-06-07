<?php

function afficherMessage($prenom)
{
    $resultat = "<p>Bonjour $prenom</p>";
    return $resultat;
}

$display = afficherMessage("Michel");
echo $display;

function calculerSurface(float|int $long, float|int $larg): float
{
    return abs($long * $larg);
}

echo calculerSurface(5.2, 4);
