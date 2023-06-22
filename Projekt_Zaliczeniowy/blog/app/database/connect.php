<?php

$host ='szuflandia.pjwstk.edu.pl';
$user = 's26245';
$password = 'Mic.Jast';
$dbname = 's26245';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}