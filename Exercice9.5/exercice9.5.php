<?php
$today = new DateTime('NOW');
$oldDate = new DateTime('2016-05-16');
$difference = $oldDate->diff($today)->format('%a'); // format % = Caractère % littéral -> a = jours 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9.5</title>
</head>

<body>
    <h1>Partie 9 Exercice 5 / Les dates</h1>
    <p>Le nombre de jours séparant la date du jour au 16 mai 2016 est de : <?= $difference?></p>

</body>

</html>