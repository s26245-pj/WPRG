<?php


$allowed_ips = file('privileged_ips.txt', FILE_IGNORE_NEW_LINES);

// Test Ip for admin
//$_SERVER['REMOTE_ADDR'] = '93.105.93.81';
//Test IP for regular user
$_SERVER['REMOTE_ADDR'] = '93.105.93.83';

$user_ip = isset($_GET['ip']) ? $_GET['ip'] : $_SERVER['REMOTE_ADDR'];


if (in_array($user_ip, $allowed_ips)) {
    include 'Admin.php';
} else {
    include 'Normal_user.php';
}


