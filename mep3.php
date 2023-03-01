<?php

function afficheDureeHeure($secondes)
{
    return intdiv($secondes, 3600);
}

function afficheDureeMinute($secondes)
{
    $secondes = $secondes - (afficheDureeHeure($secondes) * 3600);
    return intdiv($secondes, 60);
}

function afficheDureeSeconde($secondes)
{
    $secondes = $secondes - (afficheDureeHeure($secondes) * 3600) - (afficheDureeMinute($secondes) * 60);
    return $secondes; 
}

function afficheDuree($secondes)
{
    $heure = afficheDureeHeure($secondes);
    $minute = afficheDureeMinute($secondes);
    $sec = afficheDureeSeconde($secondes);

    if ($heure == 0){
        $heure = "";
    }elseif ($heure == 1){
        $heure = $heure." heure ";
    }else{
        $heure = $heure." heures ";
    }

    if ($minute == 0){
        $minute = "";
    }elseif ($minute == 1){
        $minute = $minute." minute ";
    }else{
        $minute = $minute." minutes ";
    }

    if ($sec == 0){
        $sec = "";
    }elseif ($sec == 1){
        $sec = $sec." seconde ";
    }else{
        $sec = $sec." secondes ";
    }

    echo ($heure . $minute . $sec);

}

afficheDuree(62);
