<?php
require("connect.php");
require("form_data.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkbox = $_POST['checkbox'];
    // Fetch user IP
    $user_ip = $_SERVER['REMOTE_ADDR'];

    // Adding records to database
    $sql = "INSERT INTO `form` (`name`, `email`, `phone`, `form_checked_agree`, `user_ip`) VALUES (:name, :email, :phone, :form_checked_agree, :user_ip)";
    $res = $dbconn->prepare($sql);
    $exec = $res->execute(array(":name" => $name, ":email" => $email, ":phone" => $phone, ":form_checked_agree" => $checkbox, ":user_ip" => $user_ip));

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
