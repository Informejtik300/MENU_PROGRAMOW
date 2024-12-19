<!DOCTYPE html>
<!--
&#9881;	    Koło zębate
&#128274;	Kłódka	
&#128275;	Otwarta kłódka
&#128465;	Kosz na śmieci
&#129534;	Paragon
&#128179;	Karta kredytowa
&#128176;	Sakiewka
&#128232;	Koperta przychodząca
-->
<html>
<head>
    <title>Kasa (BETA)</title>
    <meta charset="utf-8">
    <meta name="description" content="BETA v.1.3">
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div>
        <header>
            <h1>Kasa</h1>
        </header>
        <div id="div">
            <section id="p_lewy">
                <h2>MENU</h2>
                <button class="menu_button" id="menu_1">Kasa</button>
                <button class="menu_button" id="menu_2"></button>
            </section>
            <section id="p_prawy1">
                <form action="" method="post">
                    <table>
                        <tr><td colspan="3"><input class="wyswietlacz" id="wyswietlacz" name="cena" type="number" value="0"></td></tr>
                        <tr><td><input type="button" value="7" class="klawiatura" id="7"></td><td><input type="button" value="8" class="klawiatura" id="8"></td><td><input type="button" value="9" class="klawiatura" id="9"></td></tr>
                        <tr><td><input type="button" value="4" class="klawiatura" id="4"></td><td><input type="button" value="5" class="klawiatura" id="5"></td><td><input type="button" value="6" class="klawiatura" id="6"></td></tr>
                        <tr><td><input type="button" value="1" class="klawiatura" id="1"></td><td><input type="button" value="2" class="klawiatura" id="2"></td><td><input type="button" value="3" class="klawiatura" id="3"></td></tr>
                        <tr><td colspan="2"><input type="button" value="0" class="klawiatura" id="zero"></td><td><input type="submit" class="klawiatura" onclick="stopreset(event)" value="⨠"></td></tr>
                        <script src="java.js"></script>
                    </table>
                </form>
                <table>
                    <?php
                        $polaczenie=mysqli_connect('localhost','root','','kasaparagon');
                        $cena=$_POST["cena"];
                        $dodanie_cen=mysqli_query($polaczenie,"INSERT INTO `cenawyswietlacz` (`id`, `cena`) VALUES (NULL, '$cena');");
                    ?>
                    <?php
                        $usuniecie_cen=mysqli_query($polaczenie,"DELETE FROM cenawyswietlacz");
                        mysqli_close($polaczenie);
                    ?>
                </table>
            </section>
            <section>

            </section>
        </div>
    </div>
</body>
</html>