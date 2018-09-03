<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exo6</title>
    </head>
    <body>
        <?php
        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        echo "Il y a  {$number} jours en Février 2016";
        ?>
    </body>
</html>