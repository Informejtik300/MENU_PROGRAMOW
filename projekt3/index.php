<!DOCTYPE html>
<html>
    <head>
        <title>Zmienne</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $x=18;                      //zmienna numeryczna
            $tekst="Dominik Wojtyla";   //ciąg znaków
            $y=$x-5;                    //obliczenie

            echo "Witam na stronie użytkownika:<b> $tekst </b>";
            echo "<br>Wykonajmy dodawanie liczb x oraz y:<br>";
            echo "$x + $y = ";
            echo $x + $y;
            echo "<br><br>To samo możemy otrzymać za pomocą jednej instrukcji:<br>";
            echo "$x + $y = ".($x + $y);
            echo "<br><br><br><br>A to jest już dalej :)<br>";

            if (is_integer($x)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "<br>";
            if (is_array($x)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "<br>".gettype($x);
            echo "<br>".gettype($tekst);
            echo "<br>".gettype($y);
        ?>
    </body>
</html>