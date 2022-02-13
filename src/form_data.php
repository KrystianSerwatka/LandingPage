<?php

$user_ip = $_SERVER['REMOTE_ADDR'];

setcookie("UserIPAddress", $user_ip, time() + 300);

if (isset($_COOKIE["UserIPAddress"])) {
    echo "Zostałeś zablokowany na 5min";
} else {
    echo "Coś poszło nie tak";
}
