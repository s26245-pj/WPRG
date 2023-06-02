<?php

$id = $_GET['id'];
    $servername = "localhost";
    $username = "shad";
    $password = "root";
    $dbname = "Cars";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Nie udało się połączyć z bazą danych: " . mysqli_connect_error());
    }

$sql = "SELECT * FROM samochody WHERE id = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $marka = $row["marka"];
    $model = $row["model"];
    $cena = $row["cena"];
    $rok = $row["rok"];
    $opis = $row["opis"];

    echo "<h1>Informacje o samochodzie</h1>";
    echo "<p><strong>ID:</strong> $id</p>";
    echo "<p><strong>Marka:</strong> $marka</p>";
    echo "<p><strong>Model:</strong> $model</p>";
    echo "<p><strong>Cena:</strong> $cena</p>";
    echo "<p><strong>Rok:</strong> $rok</p>";
    echo "<p><strong>Opis:</strong> $opis</p>";
} else {
    echo "<p>Nie znaleziono informacji o samochodzie.</p>";

}
$conn->close();

