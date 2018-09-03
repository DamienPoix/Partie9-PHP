<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <link rel="stylesheet" href="styleA.css">
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <p>
            <?php
            setlocale(LC_TIME, "fr_FR.UTF-8");
            //permet de choisir la langue d'écriture
            echo strftime('%A %d %B %Y');
            ?>
        </p>
    </body>
</html>