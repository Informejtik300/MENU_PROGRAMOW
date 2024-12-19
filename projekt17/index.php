<?php
    //Formularz
    $formularz = "
        <form action='' method='post'>
            <label>Podaj imię</label><input type='text' name='imie' placeholder='Miejsce na imię'><br>
            <input type='submit' name='ustaw' value='Ustaw imię'>
        </form>
    ";

    if (isset($_COOKIE['ciastko'])) {
        echo "Witaj " . $_COOKIE['ciastko'];
    } else {
        echo $formularz;
        if (isset($_POST['ustaw'])) {
            setcookie('ciastko', $_POST['imie'], time() + 15);
        }
    }
?>