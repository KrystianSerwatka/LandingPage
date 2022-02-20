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
    $_SESSION['hide_button'] = time();
    $_SESSION['show_timer'] = time();
    $currentDate = date('H:i:s');
    $addFiveMins = strtotime("+5 minutes", strtotime($currentDate));
    $addedFiveMins = date('h:i:s', $addFiveMins);
    $_SESSION['added_five_mins'] = $addedFiveMins;
} else {
    echo "<h1>Nie ma takiego ip w bazie danych</h1>";
}
