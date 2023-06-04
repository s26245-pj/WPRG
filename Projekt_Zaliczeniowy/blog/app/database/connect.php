<?php

$host ='localhost';
$user = 'shad';
$password = 'root';
$dbname = 'blog';

$conn = new MySqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
} else {
    echo 'Database connection successful!';
}
