<!DOCTYPE html>
<html>
<head>
    <title>Strona Główna</title>
    <style>
        .menu {
            text-align: center;
            margin-top: 40px;
            background-color: #f1f1f1;
        }

        .menu a {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            font-size: 40px;
        }
        h1 {
            text-align: center;
        }

        table {
            margin: 0 auto;
        }

        th {
            padding-right: 50px;
        }

    </style>
</head>
<body>
<h1>Car Page</h1>

<div class="menu">
    <a href="index.php">Strona główna</a>
    <a href="all_cars.php">Wszystkie samochody</a>
    <a href="add_car.php">Dodaj samochód</a>
</div>
<table>
    <tr>
        <th>Marka</th>
        <th>Model</th>
        <th>Cena</th>
        <th>Rok</th>
        <th>Opis</th>
    </tr>

    <?php
    $servername = "localhost";
    $username = "shad";
    $password = "root";
    $dbname = "Cars";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Nie udało się połączyć z bazą danych: " . mysqli_connect_error());
    }

    mysqli_select_db($conn, $dbname);
    $sql = "SELECT * FROM samochody ORDER BY cena ASC LIMIT 5";
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
