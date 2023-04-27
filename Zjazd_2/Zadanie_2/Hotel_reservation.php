<!DOCTYPE html>
<html>
<head>
    <title>Summary</title>
</head>
<body>
<h1>Reservation summary</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $persons = $_POST['persons'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $card_number = $_POST['card_number'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $kid_bed = isset($_POST['kid_bed']) ? 'yes' : 'no';
    $facilities = isset($_POST['facilities']) ? implode(', ', $_POST['facilities']) : 'None';

    $num_of_guests = isset($_POST['num_of_guests']) ? $_POST['num_of_guests'] : 0;


    echo "Number of people: $persons<br>";
    echo "Name: $name<br>";
    echo "Last Name: $lastname<br>";
    echo "Address: $address<br>";
    echo "Debit Card: $card_number<br>";
    echo "E-mail: $email<br>";
    echo "Arrival date: $date<br>";
    echo "Arrival hour: $hour<br>";
    echo "Addiotional bed for child: $kid_bed<br>";
    echo "Other facilities: $facilities<br>";
} else {
    echo "Something went wrong...";
}
?>
</body>
</html>
