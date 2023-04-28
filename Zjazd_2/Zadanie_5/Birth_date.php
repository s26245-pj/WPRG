<!DOCTYPE html>
<html>
<head>
    <title>Summary</title>
</head>
<body>
<h1>Some information calculated from Your birth date</h1>
</body>
<?php
$birth_date = $_GET['birth_date'];

if(!empty($birth_date)) {

    $birthDateObj = new DateTime($birth_date);
    $weekDayOfBirth = $birthDateObj->format('l');

    $currentYear = (int) date('Y');
    $yearOfBirth = (int) $birthDateObj->format('Y');
    $age = $currentYear - $yearOfBirth;

    $nextBirthdayYear = $currentYear;
    $nextBirthdayDate = new DateTime($birth_date . " +$age years");
    if ($nextBirthdayDate < new DateTime()) {
        $nextBirthdayYear++;
        $nextBirthdayDate->modify("+1 year");
    }

    $daysToNextBirthday = floor(($nextBirthdayDate->getTimestamp() - time()) / (60 * 60 * 24));


    echo "<p>You were born on $weekDayOfBirth. You are $age years old and there are
            $daysToNextBirthday days until Your next birthday</p>";
} else {
    echo "Please provide me Your birth date";
}

?>
</html>
