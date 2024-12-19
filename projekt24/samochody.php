<!DOCTYPE html>
<html>
    <head>
        <title>Wynajmujemy samochody</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <header>
            <h1>Wynajem samochodów</h1>
        </header>
        <section id="pLewy">
            <h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
            <?php
                $polaczenie = mysqli_connect('localhost','root','','wynajem');
                $zapytanie = mysqli_query($polaczenie, "SELECT samochody.id, samochody.model, samochody.kolor FROM samochody WHERE samochody.marka='Toyota' AND samochody.rocznik=2014;");
                if (mysqli_num_rows($zapytanie) > 0) {
                    while ($wiersz = mysqli_fetch_array($zapytanie)) {
                        echo "{$wiersz[0]} Toyota {$wiersz[1]}. Kolor: {$wiersz[2]}";
                    }
                }
            ?>
            <h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
            <?php
                $zapytanie = mysqli_query($polaczenie, "SELECT samochody.id, samochody.marka, samochody.model, samochody.rocznik FROM samochody;");
                if (mysqli_num_rows($zapytanie) > 0) {
                    while ($wiersz = mysqli_fetch_array($zapytanie)) {
                        echo "{$wiersz[0]} {$wiersz[1]} {$wiersz[2]} {$wiersz[3]}<br>";
                    }
                }
            ?>
        </section>
        <section id="pSrodkowy">
            <h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
            <?php
                $zapytanie = mysqli_query($polaczenie, "SELECT samochody.id, samochody.model, zamowienia.telefon FROM samochody INNER JOIN zamowienia on samochody.id=zamowienia.Samochody_id;");
                if (mysqli_num_rows($zapytanie) > 0) {
                    while ($wiersz = mysqli_fetch_array($zapytanie)) {
                        echo "{$wiersz[0]} {$wiersz[1]} {$wiersz[2]}<br>";
                    }
                }
            ?>
        </section>
        <section id="pPrawy">
                <h2>NASZA OFERTA</h2>
                <ul>
                    <li>Fiat</li>
                    <li>Toyota</li>
                    <li>Opel</li>
                    <li>Mercedes</li>
                </ul>
                <p>Tu pobierzesz naszą <a href="komis.sql" download>bazę danych</a></p>
                <p>Autor strony: 000000000000</p>
        </section>
    </body>
</html>