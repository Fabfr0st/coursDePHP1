<?php

function afficherMessage($prenom)
{
    $resultat = "<p>Bonjour $prenom</p>";
    return $resultat;
}

$display = afficherMessage("Michel");
echo $display;


