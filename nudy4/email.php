<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
 
    // Adres odbiorcy
    $to = "test2@localhost.com";
 
    // Nagłówki
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";
 
    // Wysyłanie e-maila
    if (mail($to, $subject, $message, $headers)) {
        echo "Wiadomość została wysłana!";
    } else {
        echo "Wystąpił błąd przy wysyłaniu wiadomości.";
    }
}
?>