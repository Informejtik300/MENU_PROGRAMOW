<!DOCTYPE html>
<html>
    <head>
        <title>Potęgi</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $p=2;
            $w=3;
            $wynik=1;
            for ($i=1;$i<=$w;$i++) { 
                $wynik=$wynik*$p;
                echo "Lp$i. $p podniesione do potęgi $i to: $wynik <br>";
            }
            echo "Lp$i. $p podniesione do potęgi $w to: $wynik";
        ?>
    </body>
</html>