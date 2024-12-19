<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista Katalogów</title>
    </head>
    <body>
        <?php
            $dty = "C:\\xampp\\htdocs\\zadania_D_W\\projekt18\\grafika";
            $pliki = scandir($dty);
            echo "Katalogi: " . "<br>";
            foreach ($pliki as $plik) {
                if (is_file("$dty\\$plik") && $plik != '.' && $plik != '..') {
                    echo "<img src='grafika/$plik'>";
                }
            }
        ?>
    </body>
</html>