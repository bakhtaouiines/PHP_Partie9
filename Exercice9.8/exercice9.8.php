<?php
$todayLess22 = date('j/m/Y', strtotime('- 22 days'))
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9.8</title>
</head>

<body>
    <h1>Partie 9 Exercice 8 / Les dates</h1>
    <p>Il y a 22 jours nous étions le : <?= $todayLess22 ?>.</p>
</body>

</html>