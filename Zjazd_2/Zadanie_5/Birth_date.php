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

    $weekDayOfBirth = strftime('%A', strtotime($birth_date));

    $currentYear = date('Y');
    $yearOfBirth = date('Y', strtotime($birth_date));
    $age = $currentYear  - $yearOfBirth;

    $nextBirthdayYear = $currentYear;
    $nextBirthdayDate = date('Y-m-d', strtotime($birth_date . " +$age years"));
    if (date('Y-m-d') > $nextBirthdayDate) {
        $nextBirthdayYear++;
        $nextBirthdayDate = date('Y-m-d', strtotime($birth_date . " +$nextBirthdayYear years"));
    }

    $daysToNextBirthday = floor((strtotime($nextBirthdayDate) - time()) / (60 * 60 * 24));

    echo "<p>You were born on $weekDayOfBirth. You are $age years old and there are
            $daysToNextBirthday days until Your next birthday</p>";
} else {
    echo "Please provide me Your birth date";
}

?>
</html>
