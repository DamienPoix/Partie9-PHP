<?php
$newDate = new DateTime('2016-08-02 15:00:00')
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <link rel="stylesheet" href="styleA.css">
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <p><?= 'Voici le timestamp d\'aujourd\'hui : ' . time();?></p>
        <p><?= 'Voici le timestamp du mardi 2 aout 2016 : ' . $newDate->getTimestamp();?></p>
    </body>
</html>