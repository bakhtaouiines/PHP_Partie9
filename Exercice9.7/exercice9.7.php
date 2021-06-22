<?php
$todayPlus20 = date('j/m/Y', strtotime('+20 days'))
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9.7</title>
</head>

<body>
    <h1>Partie 9 Exercice 7 / Les dates</h1>
    <p>Dans 20 jours nous serons le : <?= $todayPlus20 ?>.</p>
</body>

</html>