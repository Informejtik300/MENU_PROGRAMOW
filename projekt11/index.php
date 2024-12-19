<!DOCTYPE html>
<html>
    <head>
        <title>--projekt 11--</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <div>
            <form action="" method="post">
                <table>
                    <tr><th>Marka:</th><td><input type="text" class="text" name="marka"></td></tr>
                    <tr><th>Model:</th><td><input type="text" class="text" name="model"></td></tr>
                    <tr><th>Rocznik:</th><td><input type="number" class="text" name="rocznik"></td></tr>
                    <tr><th>Kolor:</th><td><input type="text" class="text" name="kolor"></td></tr>
                    <tr><th>Stan:</th><td><input type="text" class="text" name="stan"></td></tr>
                    <tr><td><input type="submit" value="Zapisz" name="submit"></td><td><input type="reset" value="Wyczyść"></td></tr>
                </table>
            </form>
            <?php
                $poloczenie=mysqli_connect('localhost','root','','komis');
                if (isset($_POST['submit'])) {
                    $marka=$_POST["marka"];
                    $model=$_POST["model"];
                    $rocznik=$_POST["rocznik"];
                    $kolor=$_POST["kolor"];
                    $stan=$_POST["stan"];
                    $zapytanie=mysqli_query($poloczenie,"INSERT INTO `samochody` (`id`, `marka`, `model`, `rocznik`, `kolor`, `stan`) VALUES (NULL, '$marka', '$model', '$rocznik', '$kolor', '$stan');");
                }
                mysqli_close($poloczenie);
            ?>
        </div>
    </body>
</html>