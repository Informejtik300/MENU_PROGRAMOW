<!DOCTYPE html>
<html>
    <head>
        <title>Sekcje i SQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <div>
            <header>

            </header>
            <nav>
                <?php
                $polaczenie=mysqli_connect('localhost','root','','komis');
                $zapytanie=mysqli_query($polaczenie,"SELECT * FROM samochody");
                while($wiersz=mysqli_fetch_array($zapytanie)){
                    echo "<section>{$wiersz[1]}<br>{$wiersz[2]}<br>{$wiersz[3]}<br>{$wiersz[4]}<br>{$wiersz[5]}</section>";
                }
                mysqli_close($polaczenie);
                ?>
            </nav>
        </div>
    </body>
</html>