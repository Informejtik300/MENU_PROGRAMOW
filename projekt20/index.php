<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
    </head>
    <body>
        <fieldset>
            <legend>Wpisz dane</legend>
            <form action="" method="post">
                <input type="text" name="imie" placeholder="Wpisz swoje imię" required>
                <input type="text" name="nazwisko" placeholder="Wpisz swoje nazwisko" required>
                <input type="date" name="dataUr" required>
                <select name="plec">
                    <option value="M">Mężczyzna</option>
                    <option value="K">Kobieta</option>
                </select>
                <input type="submit" name="zapisz" value="Zapisz">
            </form>
        </fieldset>
        <?php
            //połączenie z bazą danych
            $polaczenie = mysqli_connect('localhost','root','','projekt20');

            if (isset($_POST['zapisz'])){
                //pobieranie danych z formularza
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $dataUr = $_POST['dataUr'];
                $plec =$_POST['plec'];

                //obliczanie wieku
                $rokUr = date('Y', strtotime($dataUr));
                $rok = date('Y');
                $wiek = $rok - $rokUr;

                //zapis do bazy danych
                mysqli_query($polaczenie, "INSERT INTO uzytkownicy (id,imie,nazwisko,wiek,dataurodzenia,plec) VALUES (NULL,'$imie','$nazwisko','$wiek','$dataUr','$plec')");
            }

            //zamknięcie połączenia z bazą danych
            mysqli_close($polaczenie);
        ?>
    </body>
</html>