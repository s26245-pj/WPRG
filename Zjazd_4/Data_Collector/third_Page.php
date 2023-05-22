<?php
session_start();

if (isset($_POST['save'])) {
    $_SESSION['people'] = $_POST['person'];
}

$cardNumber = $_SESSION['cardNumber'];
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$email = $_SESSION['email'];
$numberOfUsers = $_SESSION['numberOfUsers'];
$people = $_SESSION['people'];

echo "<h2>Summary</h2>";
echo "<p>Card number: $cardNumber</p>";
echo "<p>Full name of buyer: $firstName $lastName</p>";
echo "<p>Buyer email: $email</p>";
echo "<p>Number of people: $numberOfUsers</p>";
echo "<h3>People:</h3>";
foreach ($people as $person) {
    echo "<p>Imię: " . $person['fname'] . "</p>";
    echo "<p>Nazwisko: " . $person['lname'] . "</p>";
    echo "<p>Email: " . $person['email'] . "</p>";;
}
