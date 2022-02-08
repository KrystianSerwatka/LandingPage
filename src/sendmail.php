<?php
declare(strict_types=1);
session_start();

$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

$stmt = $dbconn->query('SELECT user_ip FROM form');

// Pokazywanie wszystkich rekordów z user_ip
while($row = $stmt->fetch()){
//    echo $row['user_ip'] . "<br>";
    if ($_SESSION['ip'] === $row['user_ip']){
        setcookie("AddressIP", $row['user_ip'], time() + (60 * 5));
//        echo $_COOKIE["AddressIP"];
//        echo "<br>";
        $currentDate = date('H:i:s');
        $addFiveMins = strtotime("+5 minutes", strtotime($currentDate));
        $addedFiveMins = date('h:i:s', $addFiveMins);
        echo "<h1>Powoli! Spróbuj wysłać kolejny email za pięć minut, dokładnie o: $addedFiveMins </h1>";
        exit();
//        echo "W bazie danych znajduje się takie ip<br>";
    } else {
        echo "W bazie danych nie znajduje się takie ip<br>";
    }
}

error_reporting(E_ALL);
ini_set('display_errors', 1);


// Pobranie danych z formularza oraz wysłanie ich na odpowiedni adres email
//$name = $_POST['name'];
//$email = $_POST['email'];
//$phone = $_POST['phone'];
//$date = date('m/d/Y, H:i:s');
//
//$headers = "From: test@gmail.com";
//$to_email = "krystianselk@gmail.com";
//$subject = "Mail od strony testowej";
//$body = "Imię i nazwisko: $name\nAdres e-mail: $email\nNumer telefonu: $phone\nMail wysłany z dnia oraz godziny: $date\nIp z którego został wysłany mail to: $user_ip";
//
//if (mail($to_email, $subject, $body, $headers)) {
//    echo "<h1>Sukces! Email został wysłany do $to_email...</h1>";
//    header('Location: submit.php');
//} else {
//    echo "<h1>Email nie został wysłany, coś poszło nie tak...\nSpróbuj ponownie lub skontaktuj się z właścicielem strony<h1>";
//}