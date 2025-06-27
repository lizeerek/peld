<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "TWÓJ_EMAIL@domena.pl";  // <-- zamień na swój adres

    $subject = "Nowa przekładka z formularza PELD";

    $message = "Nowa przekładka meczu:\n\n";
    $message .= "Liga: " . $_POST["liga"] . "\n";
    $message .= "Imię: " . $_POST["imie"] . "\n";
    $message .= "Nazwisko: " . $_POST["nazwisko"] . "\n";
    $message .= "Przeciwnik: " . $_POST["przeciwnik"] . "\n";
    $message .= "Rodzaj przekładki: " . $_POST["rodzaj"] . "\n";
    $message .= "Wina: " . $_POST["wina"] . "\n";
    $message .= "Powód: " . $_POST["powod"] . "\n";
    $message .= "Numer meczu: " . $_POST["mecz"] . "\n";

    $headers = "From: noreply@peld.pl";  // adres nadawcy (można też ustawić serwerowy)

    if (mail($to, $subject, $message, $headers)) {
        echo "Dziękujemy! Przekładka została wysłana.";
    } else {
        echo "Wystąpił błąd podczas wysyłania. Spróbuj ponownie.";
    }
}
?>
