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

function diagToDim(float $diag): string
{
    $diag = abs($diag);
    $ratio = 16 / 9;
    $largeur = $ratio * sqrt($diag ** 2 / ($ratio ** 2 + 1));
    $hauteur = sqrt(($diag ** 2) / ($ratio ** 2 + 1));
    $largeur = round($largeur * 2.54, 2);
    $hauteur = round($hauteur * 2.54, 2);
    
    return "<p>hauteur: $hauteur cm, largeur: $largeur cm</p>";
}

echo diagToDim(24);
