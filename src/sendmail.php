<?php
session_start();
require("connect.php");

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $checkbox = $_POST['checkbox'];
    // Fetch user IP
    $user_ip = $_SERVER['REMOTE_ADDR'];

    // Validation inputs form
    if (isset($name)) {
        if (empty($name) || (!preg_match("/^[a-zA-z\s]*$/", $name))) {
            $_SESSION['name'] = "Uzupełnij Imię i nazwisko";
        }
    }

    if (isset($email)) {
        if (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $_SESSION['email'] = "Uzupełnij Adres email";
        }
    }

    if (isset($phone)) {
        if (empty($phone) || (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/", $phone))) {
            $_SESSION['phone'] = "Uzupełnij Telefon";
        }
    }

    if (!isset($checkbox)) {
        $_SESSION['checkbox'] = "Zaznacz checkbox";
    }

    // Message after send form
    if (empty($name) || (!preg_match("/^[a-zA-z\s]*$/", $name)) || empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || empty($phone) || (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/", $phone)) || !isset($checkbox)) {
        $_SESSION['failed_message'] = "Wypełnij poprawnie pola zaznaczone na czerwono!";
    } else {
        $_SESSION['success_message'] = "Pomyślnie wysłano formularz kontaktowy 👋";
    }

    // Adding records to database
    // $sql = "INSERT INTO `form` (`name`, `email`, `phone`, `form_checked_agree`, `user_ip`) VALUES (:name, :email, :phone, :form_checked_agree, :user_ip)";
    // $res = $dbconn->prepare($sql);
    // $exec = $res->execute(array(":name" => $name, ":email" => $email, ":phone" => $phone, ":form_checked_agree" => $checkbox, ":user_ip" => $user_ip));

    // Sending content from form to email
    // $headers = "From: test@gmail.com";
    // $to_email = "krystianselk@gmail.com";
    // $subject = "Mail od strony testowej";
    // $body = "Imię i nazwisko: $name\nAdres e-mail: $email\nNumer telefonu: $phone";

    // if (mail($to_email, $subject, $body, $headers)) {
    //     header("Location:http://localhost/projekt/#contact");
    // } else {
    //     echo "<h1>Email nie został wysłany, coś poszło nie tak...\nSpróbuj ponownie lub skontaktuj się z właścicielem strony<h1>";
    // }
    header("Location:http://localhost/LandingPage/#contact");
} else {
    echo "Wystąpił błąd. Spróbuj później";
}
