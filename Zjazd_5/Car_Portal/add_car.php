<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $marka = $_POST["marka"];
    $model = $_POST["model"];
    $cena = $_POST["cena"];
    $rok = $_POST["rok"];
    $opis = $_POST["opis"];


    $servername = "localhost";
    $username = "shad";
    $password = "root";
    $dbname = "Cars";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Nie udało się połączyć z bazą danych: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ('$marka', '$model', $cena, $rok, '$opis')";

    if (mysqli_query($conn, $sql)) {
        echo "Samochód został dodany pomyślnie.";
    } else {
        echo "Wystąpił błąd podczas dodawania samochodu: " . mysqli_error($conn);
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dodaj samochód</title>
    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
        }

        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
<h1>Dodaj samochód</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="marka" placeholder="Marka" required>
    <input type="text" name="model" placeholder="Model" required>
    <input type="number" name="cena" placeholder="Cena" required>
    <input type="number" name="rok" placeholder="Rok" required>
    <textarea name="opis" placeholder="Opis"></textarea>
    <input type="submit" value="Dodaj samochód">
</form>

</body>
</html>
