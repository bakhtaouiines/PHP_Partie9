<?php
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
/*timestamp
Le paramètre optionnel timestamp est un timestamp Unix de type entier qui vaut par défaut l'heure courante locale si timestamp est omis ou null. En d'autres termes, il vaut par défaut la valeur de la fonction time().*/
$todayTimestamp = time();
$oldTimestamp = mktime(15, 00, 0, 8, 2, 2016);
/*Paramètres du timestamp : 
L’heure ;
Les minutes ;
Les secondes ;
Le mois ;
Le jour;
L’année.*/

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9.4</title>
</head>

<body>
    <h1>Partie 9 Exercice 4 / Les dates</h1>
    <p>Le timestamp actuel est:
        <?= $todayTimestamp // Formate une date/heure locale avec la configuration locale
        ?>
    </p>
    <p>Le timestamp du mardi 2 août 2016 à 15h00 est: <?= $oldTimestamp ?></p>
</body>

</html>