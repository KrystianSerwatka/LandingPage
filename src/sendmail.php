<?php
require("connect.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkbox = $_POST['checkbox'];

    // Adding records to database
    $sql = "INSERT INTO `form` (`name`, `email`, `phone`, `form_checked_agree`) VALUES (:name, :email, :phone, :form_checked_agree)";
    $res = $dbconn->prepare($sql);
    $exec = $res->execute(array(":name" => $name, ":email" => $email, ":phone" => $phone, ":form_checked_agree" => $checkbox));

    // Sending content from form to email
    $headers = "From: test@gmail.com";
    $to_email = "krystianselk@gmail.com";
    $subject = "Mail od strony testowej";
    $body = "Imię i nazwisko: $name\nAdres e-mail: $email\nNumer telefonu: $phone";

    if (mail($to_email, $subject, $body, $headers)) {
        header("Location:http://localhost/projekt/#contact");
    } else {
        echo "<h1>Email nie został wysłany, coś poszło nie tak...\nSpróbuj ponownie lub skontaktuj się z właścicielem strony<h1>";
    }
}
