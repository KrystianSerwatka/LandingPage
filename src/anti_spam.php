<?php
require("connect.php");

$user_ip_cookies = $_COOKIE['UserIPAddress'];

function get_single_value($dbconn, $sql, $parametrs)
{
    $q = $dbconn->prepare($sql);
    $q->execute($parametrs);
    return $q->fetchColumn();
}

$user_ip_database = get_single_value($dbconn, "SELECT user_ip FROM `form` WHERE user_ip=?", [$user_ip_cookies]);

if ($user_ip_cookies == $user_ip_database) {
    echo "<h1>Istnieje takie ip w bazie danych</h1>";
} else {
    echo "<h1>Nie ma takiego ip w bazie danych</h1>";
}
