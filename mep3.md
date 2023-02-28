# Enoncé 3
## Affichage d'une durée


```
FONCTION afficheDuréeHeure(var secondes)
DEBUT
    DECLARER $heure
    TANT QUE $secondes > 3600 FAIRE
        $heure++;
        $secondes = $secondes-3600;
    FIN TANT QUE
    Renvoyer $heure 
FIN

FONCTION afficheDuréeMinute(var secondes)
DEBUT
    DECLARER $minute
    $secondes = $secondes - (afficheDuréeHeure * 3600)
    TANT QUE $secondes > 60 FAIRE
        $minute++;
        $secondes = $secondes-60;
    FIN TANT QUE
    Renvoyer $minute 
FIN

FONCTION afficheDuréeSeconde(var secondes)
DEBUT
    DECLARER $sec
    $secondes = $secondes - (afficheDuréeHeure * 3600) - (afficheDuréeMinute *60)
    $sec = $secondes
    Renvoyer $sec 
FIN

PROCEDURE afficheDurée(var secondes)
DEBUT
    DECLARE $heure = afficheDuréeHeure($secondes);
    DECLARE $minute = afficheDuréeMinute($secondes);
    DECLARE $sec = afficheDuréeSeconde($secondes);

    SI $heure = 0 
        ET $minute = 0 ALORS
        Renvoyer $sec secondes
    SINON SI $heure = 0 
        ET $minute <> 0 ALORS
        Renvoyer $minute minutes $sec secondes
    SINON SI $heure <> 0 
        ET $minute = 0 ALORS
        Renvoyer $heure heures $sec secondes
    SINON 
        Renvoyer $heure heures $minute minutes $sec secondes

FIN
```


