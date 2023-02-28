# Enoncé 1
## Tester si une date est valide


```
FONCTION estValideAnnee(var annee)
DEBUT
    SI annee <> 0 ALORS
        Renvoyer VRAI
    FINSI

    Renvoyer FAUX
FIN

FONCTION estValideMois(var mois)
DEBUT
    SI mois >=1 
        ET mois <= 12 ALORS
            Renvoyer VRAI
    FINSI

    Renvoyer FAUX
FIN

FONCTION estBissextime(var annee)
DEBUT
    SI annee divisible par 400 ALORS
        Renvoyer VRAI
    FINSI

    SI annee divisible par 100 ALORS
        Renvoyer FAUX
    FINSI

    SI annee divisible par 4 ALORS
        Renvoyer VRAI
    FINSI

    Renvoyer FAUX
FIN

FONCTION estValideJour(var annee, var mois, var jour)
DEBUT
    SI jour < 1 ALORS
        Renvoyer FAUX
    FINSI

    SI (mois = 1 
        OU mois = 3
        OU mois = 5
        OU mois = 7
        OU mois = 8
        OU mois = 10
        OU mois = 12)
        ET jour <= 31 ALORS
            Renvoyer VRAI
    FINSI

    SI (mois = 4
        OU mois = 6
        OU mois = 9
        OU mois = 11)
        ET jour <= 30 ALORS
            Renvoyer VRAI
    FINSI

    SI mois = 2 ALORS
        SI (estBissextime(annee) ET jour <= 29)
            OU jour <= 28 ALORS
            Renvoyer VRAI
    FINSI

    Renvoyer FAUX
FIN

FONCTION estValide(var annee, var mois, var jour)
DEBUT

    SI estValideAnnee($annee) 
        ET estValideMois($mois) 
        ET estValideJour($annee, $mois, $jour) ALORS
            Renvoyer VRAI
    FINSI

    Renvoyer FAUX
FIN
```


