<!DOCTYPE html>
<html>
    <head>
        <title>Metoda POST</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="imie">
            <input type="submit">
        </form>
        <?php
        if (isset($_POST['imie'])) {
            $imie=$_POST['imie'];
            echo "Witaj $imie";
        }
        else {
            echo "nie ma danych";
        }
        ?>
    </body>
</html>