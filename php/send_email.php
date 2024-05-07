<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de formulierinvoer
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // E-mailadres waar de e-mail naartoe wordt gestuurd
    $to = 'denutte.matthias@gmail.com';

    // Onderwerp van de e-mail
    $subject = 'Contactformulier Cloud Development';

    // Berichtinhoud
    $email_content = "Naam: $name\n";
    $email_content .= "E-mail: $email\n";
    $email_content .= "GSM-nummer: $phone\n";
    $email_content .= "Bericht:\n$message\n";

    // Headers
    $headers = "From: $name <$email>";

    // E-mail verzenden
    mail($to, $subject, $email_content, $headers);

    // Terug naar de bedankpagina na verzending
    header('Location: bedankt.html');
} else {
    // Als het formulier niet is verzonden, doorsturen naar de homepage
    header('Location: index.html');
}
?>
