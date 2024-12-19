<?php
    $polaczenie=mysqli_connect('localhost','root','','projekt14');

    if (isset($_POST['zapisz'])) {
        $nazwaTabeli=$_POST['nazwaTabeli'];

        mysqli_query($polaczenie, "CREATE TABLE $nazwaTabeli (id INT(5) AUTO_INCREMENT PRIMARY KEY, imie VARCHAR(20) NOT NULL, nazwisko VARCHAR(20) NOT NULL, wiek INT(3) NOT NULL)");
        
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $wiek = $_POST['wiek'];

        mysqli_query($polaczenie, "INSERT INTO $nazwaTabeli (imie, nazwisko, wiek) VALUES ('$imie','$nazwisko','$wiek')");

        mysqli_close($polaczenie);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tworzenie tabeli</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Utwórz tabelę w bazie danych</h2>
        <form action="" method="post">
            <table>
                <tr><td>Nazwa tabeli:</td><td><input type="text" name="nazwaTabeli"></td></tr>
                <tr><td>Imię:</td><td><input type="text" name="imie"></td></tr>
                <tr><td>Nazwisko:</td><td><input type="text" name="nazwisko"></td></tr>
                <tr><td>Wiek:</td><td><input type="number" name="wiek"></td></tr>
                <tr><td colspan="2"><input type="submit" name="zapisz" value="Zapisz"></td></tr>
            </table>
        </form>
    </body>
</html>