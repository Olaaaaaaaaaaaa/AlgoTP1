<?php

function afficheDureeHeure($secondes)
{
    $heure = 0;
    while($secondes >= 3600){
        $heure++;
        $secondes = $secondes - 3600;
    }
    return $heure;
}

function afficheDureeMinute($secondes)
{
    $minute = 0;
    $secondes = $secondes - (afficheDureeHeure($secondes) * 3600);
    while($secondes >= 60){
        $minute++;
        $secondes = $secondes - 60;
    }
    return $minute; 
}

function afficheDureeSeconde($secondes)
{
    $sec = 0;
    $secondes = $secondes - (afficheDureeHeure($secondes) * 3600) - (afficheDureeMinute($secondes) * 60);
    $sec = $secondes;
    return $sec; 
}

function afficheDuree($secondes)
{
    $heure = afficheDureeHeure($secondes);
    $minute = afficheDureeMinute($secondes);
    $sec = afficheDureeSeconde($secondes);

    echo ($heure. " heures " .$minute. " minutes " .$sec. " secondes ");

}

var_dump(afficheDureeMinute(61));

var_dump(intdiv(88800, 3600));

