<?php
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
$february = utf8_encode(strftime('%B %Y', mktime(0, 0, 0, 2, 1, 2016))); //utf8_encode — Convertit une chaîne ISO-8859-1 en UTF-8
$februaryDays = date('t', mktime(0, 0, 0, 2, 1, 2016))
?>

<!-- Autre méthode : 
    $d=cal_days_in_month(CAL_GREGORIAN,10,2005);
    echo "There was $d days in October 2005"; -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9.6</title>
</head>

<body>
    <h1>Partie 9 Exercice 6 / Les dates</h1>
    <p>Le mois de
        <?= $february . ' possède ' . $februaryDays . ' jours '; ?>
    </p>
</body>

</html>