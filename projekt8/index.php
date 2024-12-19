<?php
    $polaczenie=mysqli_connect("localhost","root","","komis");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Połączenie z bazą danych</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <ul>
            <?php
                $zapytanie=mysqli_query($polaczenie,"SELECT * FROM samochody");
                while ($wiersz=mysqli_fetch_array($zapytanie)) {
                    echo "<li>{$wiersz[0]} {$wiersz[1]} {$wiersz[2]} {$wiersz[3]} {$wiersz[4]} {$wiersz[5]}</li>";  
                }
                echo "<br><br>";
                $zapytanie2=mysqli_query($polaczenie,"SELECT * FROM zamowienia");
                while ($wiersz2=mysqli_fetch_array($zapytanie2)) {
                    echo "<li>{$wiersz2[0]} {$wiersz2[1]} {$wiersz2[2]} {$wiersz2[3]} {$wiersz2[4]}</li>";  
                }
            ?>
        </ul>
        <table>
            <tr><th>id</th><th>marka</th><th>model</th><th>rocznik</th></tr>
            <?php
                $zapytanie3=mysqli_query($polaczenie,"SELECT * FROM samochody");
                while ($wiersz3=mysqli_fetch_array($zapytanie3)) {
                    echo "<tr><td>{$wiersz3[0]}</td><td>{$wiersz3[1]}</td><td>{$wiersz3[2]}</td><td>{$wiersz3[3]}</td></tr>";
                }
            ?>
        </table>
    </body>
</html>
<?php
    mysqli_close($polaczenie);
?>