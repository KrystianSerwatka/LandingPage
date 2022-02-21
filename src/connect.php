<?php

$dbhost = "localhost";
$dbname = "test";
$dbuser = "root";
$dbpassword = "";
$dbconn = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpassword);

try {
    $db_conn = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpassword);
} catch (PDOException $e) {
    echo 'Błąd połączenia z bazą danych';
}
