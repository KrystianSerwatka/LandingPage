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
    $current_date = date('H:i:s');
    $add_five_mins = strtotime("+5 minutes", strtotime($current_date));
    $added_five_mins = date('h:i:s', $added_five_mins);
    $_SESSION['added_five_mins'] = $added_five_mins;
} else {
    echo "<h1>Nie ma takiego ip w bazie danych</h1>";
}
