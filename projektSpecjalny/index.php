<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
    </head>
    <body background="galeria/tło.jpg">
        <div id="logowanie">
            <?php
                session_start();
                $polaczenie = mysqli_connect('localhost','root','','bibliotekaszkolna');
                if (isset($_SESSION['zalogowanoPS'])){
                    $daneLogowania = mysqli_fetch_array(mysqli_query($polaczenie, "SELECT id_ucznia, imie FROM konta WHERE email='{$daneOdLogowania[0]}' AND haslo='{$daneOdLogowania[1]}'"));
                    echo "Witaj {$daneLogowania[1]}";
                    echo "<button class='przyciskiLogin' onclick='window.location.href=`wyloguj.php`>Wyloguj</button>";
                } else {
                    echo "<button class='przyciskiLogin' onclick='window.location.href=`logowanie/`'>Logowanie</button>";
                    echo "<button class='przyciskiLogin' onclick='window.location.href=`rejstracja/`'>Rejstracja</button>";
                }
            ?>
        </div>
        <div id="strona">
            <header>
                <img src="galeria/baner1.jpg" alt="Baner1" id="zdjBaneru1">
            </header>
            <section id="p_lewy">

            </section>
            <section id="p_srodkowy">

            </section>
            <section id="p_prawy">

            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>
<?php
    mysqli_close($polaczenie);
?>