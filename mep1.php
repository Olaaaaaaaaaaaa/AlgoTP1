<?php

function estBissextile($annee)
{
    if (($annee % 400) == 0) {
        return true;
    }
    if (($annee % 100) == 0) {
        return false;
    }
    if (($annee % 4) == 0) {
        return true;
    }

    return false;
}

function estValideJour($annee, $mois, $jour)
{
    if ($jour < 1){
        return false;
    }

    if (($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11) && $jour <= 30 ){
        return true;
    }

    if ($mois == 2){
        if ((estBissextile($annee) && $jour <= 29) || $jour <= 28){
            return true;
        }
        else{
            return false;
        }
    }

    if (($mois == 1 || $mois == 3 || $mois == 5 || $mois == 7 || $mois == 8 || $mois == 10 || $mois == 12) && $jour <= 31){
        return true;
    }

    return false;
}


function estValideMois($mois)
{
    if ($mois >= 1 && $mois <= 12){
        return true;
    }

    return false;
}

function estValideAnnee($annee)
{
    if ($annee != 0){
        return true;
    }

    return false;
}

function estValide($annee, $mois, $jour)
{
    if (estValideAnnee($annee) == true && estValideMois($mois) == true && estValideJour($annee, $mois, $jour) == true){
        echo "C'est moi wsh";
    }
    else 
    {
        echo "J crois que ça lag nan ?";
    }
    echo PHP_EOL;
    return true;
}




var_dump(estValide(0,1,31));
