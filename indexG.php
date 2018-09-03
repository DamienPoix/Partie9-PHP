<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exo6</title>
    </head>
    <body>
        <p>
        <?php
        $date = strtotime('+20days');
        echo date('d-m-Y',$date);
        ?>
        </p>    
    </body>
</html>