<!DOCTYPE html>
<html>
    <head>
        <title>TEST</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <div>
            <table>
                <tr><th>ID</th><th>MARKA</th><th>MODEL</th><th>ROCZNIK</th><th>KOLOR</th><th>STAN</th></tr>
                <?php
                    $poloczenie = mysqli_connect('localhost','root','','komis');
                    $zapytanie = mysqli_query($poloczenie, "SELECT * FROM samochody");
                    while ($wiersz = mysqli_fetch_array($zapytanie)) {
                        echo "<tr><td>{$wiersz[0]}</td><td>{$wiersz[1]}</td><td>{$wiersz[2]}</td><td>{$wiersz[3]}</td><td>{$wiersz[4]}</td><td>{$wiersz[5]}</td></tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>