<?php


$count = 0;
function isPrime($number) {
    global $count;
    if($number < 2) {
        return false;
    }
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
        $count++;
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    if (is_numeric($number) && intval($number) == $number && $number > 0) {
    $number = intval($number);
    $result = isPrime($number);
    echo "The number $number " . ($result ? "is" : "is not") . " a prime number.<br>";
    echo "Number of iterations: $count";
    } else {
    echo "Invalid input. Please enter a positive number.";
    }
}
