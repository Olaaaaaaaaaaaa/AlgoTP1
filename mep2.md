# Enoncé 2
## Comparaison de dates


```
FONCTION estAvantAnnee(var annee1, var annee2) 
DEBUT
    SI annee1 = annee2 ALORS
        Renvoyer PAREIL
    FINSI
    SI annee1 > annee2 ALORS
        Renvoyer APRES
    Sinon
        Renvoyer AVANT
    FINSI
FIN

FONCTION estAvantMois(var mois1, var mois2) 
DEBUT
    SI mois1 = mois2 ALORS
        Renvoyer PAREIL
    FINSI
    SI mois1 > mois2 ALORS
        Renvoyer APRES
    Sinon
        Renvoyer AVANT
    FINSI

FIN

FONCTION estAvantJour(var jour1, var jour2) 
DEBUT
    SI jour1 = jour2 ALORS
        Renvoyer PAREIL
    FINSI
    SI jour1 > jour2 ALORS
        Renvoyer APRES
    Sinon
        Renvoyer AVANT
    FINSI

FIN

FONCTION estAvant(var annee1, var mois1, var jour1, var annee2, var mois2, var jour2)
DEBUT
    DECLARER AVANT <- -1
    DECLARER PAREIL <- 0
    DECLARER APRES <- 1

    SI estAvantAnnee($annee1, $annee2) <> 0 ALORS
        Renvoyer estAvantAnnee($annee1, $annee2)
    SINON SI estAvantMois($mois1, $mois2) <> 0 ALORS
        Renvoyer estAvantMois($mois1, $mois2)
    SINON 
        Renvoyer estAvantJour($jour1, $jour2)
    FINSI

FIN
```


