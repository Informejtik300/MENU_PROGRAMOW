<!DOCTYPE html>
<html>
    <head>
        <title>Wysyłanie emaila</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="email.php" method="post">
            <fieldset>
                <legend>Zawartosc emaila</legend>
                <input type="email" name="email" required>
                <input type="text" name="subject" required>
                <input type="text" name="message" required>
                <input type="submit" value="Wyslij e-mail">
            </fieldset>
        </form>
    </body>
</html>