<!DOCTYPE html>
<html>
<head>
    <title>Wszystkie samochody</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
<h1>Wszystkie samochody</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Marka</th>
        <th>Model</th>
        <th>Cena</th>
    </tr>

    <?php
    $servername = "localhost";
    $username = "shad";
    $password = "root";
    $dbname = "Cars";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Nie udało się połączyć z bazą danych: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM samochody ORDER BY rok ASC";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><a href='car_info.php?id=" . $row["id"] . "'>" . $row["id"] . "</a></td>";
            echo "<td>" . $row["marka"] . "</td>";
            echo "<td>" . $row["model"] . "</td>";
            echo "<td>" . $row["cena"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Brak samochodów</td></tr>";
    }
    $conn->close();



    ?>
</table>

</body>
</html>
