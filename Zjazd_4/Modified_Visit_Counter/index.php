<?php
session_start();

$cookie_name = "visits";
$cookie_value = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : 1;
$session = isset($_SESSION['visits']) ? $_SESSION['visits'] : 1;

if ($cookie_value != $session) {
    $cookie_value++;
    setcookie($cookie_name, $cookie_value, time() + 3600);
    $_SESSION['visits'] = $cookie_value;
} else {
    setcookie($cookie_name, $cookie_value, time() + 3600);
}

$max_visits = 100;
if ($cookie_value % 5 === 0 && $cookie_value <= $max_visits && !isset($_GET['refresh'])) {
    echo "Hello! You visited this site $cookie_value times!";
} else {
    echo "Visit us again!";
}

