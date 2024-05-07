<?php
session_start();

// Controleer of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg de ingevulde waarden van het formulier
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["reg_password"];
    $confirm_password = $_POST["confirm_password"];

    // Controleer of alle velden zijn ingevuld
    if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($password) || empty($confirm_password)) {
        $error = "Gelieve alle velden in te vullen.";
    } else {
        // Controleer of het wachtwoord overeenkomt met de bevestiging
        if ($password !== $confirm_password) {
            $error = "Het ingevoerde wachtwoord komt niet overeen met de bevestiging.";
        } else {
            // Voer hier verdere logica uit, zoals het opslaan van de gegevens in een database

            // Voor dit voorbeeld slaan we de gegevens op in sessievariabelen
            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] = $lastname;
            $_SESSION["email"] = $email;
            $_SESSION["phone"] = $phone;

            // Doorsturen naar een beveiligde pagina of een bedankpagina
            header("Location: bedankt_registratie.php");
            exit();
        }
    }
}
?>
