<?php
// Hier zou je de authenticatie logica plaatsen, zoals het controleren van de gebruikersnaam en wachtwoord in een database.
// Voor dit voorbeeld gebruiken we een eenvoudige controle waarbij de gebruikersnaam "admin" en het wachtwoord "password" zijn.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Controleer of de gebruikersnaam en het wachtwoord overeenkomen
    if ($username === 'admin' && $password === 'password') {
        // Gebruiker is succesvol ingelogd, je zou hier door kunnen verwijzen naar een dashboardpagina of iets dergelijks.
        header('Location: dashboard.php');
        exit;
    } else {
        // Ongeldige gebruikersnaam of wachtwoord
        echo "Ongeldige gebruikersnaam of wachtwoord. Probeer opnieuw.";
    }
}
?>
