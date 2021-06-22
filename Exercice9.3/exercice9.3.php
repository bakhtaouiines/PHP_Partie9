<?php
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']); // permet de modifier et de définir de nouvelles informations de localisation
$today = strftime('%A %d %B %Y'); // Formate une date/heure locale avec la configuration locale
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9.3</title>
</head>

<body>
    <h1>Partie 9 Exercice 3 / Les dates</h1>
    <p>Aujourd'hui nous sommes le <?= $today ?>.</p>
</body>

</html>