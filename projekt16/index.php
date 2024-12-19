<?php
    if (isset($_COOKIE['mojeCiastko'])) {
        echo "Witaj " . $_COOKIE['mojeCiastko'];
    } else {
        echo "Witaj.<br>Niestety nie pamiętam jak masz na imię.<br>Przypomnę sobie po odświerzeniu na 10 sek.";
        if (isset($_POST['ustaw'])) {
            $imie = $_POST['imie'];
            setcookie('mojeCiastko',"$imie",time() + 10);
        }
    }
?>