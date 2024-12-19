<!DOCTYPE html>
<html>
    <head>
        <title>Ćw. funkcja "while"</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $x = 345;
            $y = 27;
            while ($x != $y) {
                if ($x < $y) {
                    //zamiana liczb miejscami, aby różnica była dodatnia
                    $pomoc = $x;
                    $x = $y;
                    $y = $pomoc;
                }
            $x = $x - $y;
            }
            echo "Największy wspólny dzielnik wynosi: $x";
        ?>
    </body>
</html>