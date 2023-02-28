# Enoncé 2
## Comparaison de dates


```
FONCTION estAvantAnnee(var annee1, var annee2) 
DEBUT
    SI annee1 > annee2 ALORS
        Renvoyer IDEM
    FINSI
    SI annee1 > annee2 ALORS
        Renvoyer annee2
    Sinon
        Renvoyer annee1
    FINSI
FIN

FONCTION estAvantMois(var mois1, var mois2) 
DEBUT
    SI mois1 > mois2 ALORS
        Renvoyer IDEM
    FINSI
    SI mois1 > mois2 ALORS
        Renvoyer mois2
    Sinon
        Renvoyer mois1
    FINSI

FIN

FONCTION estAvantJour(var jour1, var jour2) 
DEBUT
    SI jour1 > jour2 ALORS
        Renvoyer IDEM
    FINSI
    SI jour1 > mois2 ALORS
        Renvoyer jour2
    Sinon
        Renvoyer jour1
    FINSI

FIN

FONCTION estAvant(var annee1, var mois1, var jour1, var annee2, var mois2, var jour2)
DEBUT
    SI estAvantAnnee($annee1, $annee2) <> IDEM ALORS
        Renvoyer estAvantAnnee($annee1, $annee2)
    SINON SI estAvantMois($mois1, $mois2) <> IDEM ALORS
        Renvoyer estAvantMois($mois1, $mois2)
    SINON SI estAvantJour($jour1, $jour2) <> IDEM ALORS
        Renvoyer estAvantJour($jour1, $jour2)
    SINON
        Renvoyer IDEM
    FINSI

FIN
```


