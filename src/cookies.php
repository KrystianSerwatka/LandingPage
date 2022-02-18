<?php

$user_ip = $_SERVER['REMOTE_ADDR'];

setcookie('UserIPAddress', $user_ip, time() + 300);
