<?php

function estValideAnnee($annee)
{
    if($annee >= 0){
        return 1;
    }
    else {
        return 0;
    }
}
function estValideMois($mois)
{
    if($mois >= 0 || $mois <= 12){
        return 1;
    }
    else {
        return 0;
    }
}
function estValideJour($mois, $jour)
{
    if($mois = 1 || $mois = 3 || $mois = 5 || $mois = 7 || $mois = 8 || $mois = 10 || $mois = 12 && $jour >= 0 || $jour <= 31){
        return 1;
    }
    elseif($mois = 4 || $mois = 6 || $mois = 9 || $mois = 11 && $jour >= 0 || $jour <= 30) {
        return 1;
    }
    elseif($mois = 2 && $jour >= 0 || <= 28) {
        return 1;
    }
    else{
        return 0;
    }
}

function estValide($annee, $mois, $jour)
{
    estValideAnnee($annee);
    estValideMois($mois);
    estValideJour($mois, $jour);
}

estValide(2000, 02, 02);

?>