<?php
    $to = 'bpejsz@vp.pl';
    $firstname = $_POST["fname"];
    $email = $_POST["email"];
    $text = $_POST["message"];
    $phone = $_POST["phone"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; 
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message = '<table style="width:100%">
        <tr><td><strong>Imię i nazwisko:</strong> '.$firstname.'</td></tr>
        <tr><td><strong>Email:</strong> '.$email.'</td></tr>
        <tr><td><strong>Telefon:</strong> '.$phone.'</td></tr>
        <tr><td><strong>Wiadomość:</strong><br>'.$text.'</td></tr>
    </table>';

    if (@mail($to, 'Nowa wiadomość ze strony www', $message, $headers)) {
        echo 'Wiadomość została wysłana.';
    } else {
        echo 'Wysłanie wiadomości nie powiodło się.';
    }
?>
