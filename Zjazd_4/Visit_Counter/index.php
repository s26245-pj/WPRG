<?php
$cookie_name = "visits";
$cookie_value = 1;

if(isset($_COOKIE[$cookie_name])) {
    $cookie_value = intval($_COOKIE[$cookie_name]) + 1;
}

setcookie($cookie_name, $cookie_value, time() + 3600);

$max_visits = 100;
if($cookie_value % 5 === 0 && $cookie_value <= $max_visits) {
    echo "Hello! You visited this site $cookie_value times!";
} else {
    echo "Visit us again!";
}

