<?php 
$calculDate = (time() - strtotime('2016-05-16 15:00:00'));
$diff = number_format($calculDate/86400 ,0);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <link rel="stylesheet" href="styleA.css">
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <p><?= $diff?></p>
    </body>
</html>