<?php
// Połączenie z bazą danych
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizza-hut";

$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

// Usunięcie wszystkich danych z bazy danych
$sql = "SET FOREIGN_KEY_CHECKS = 0;"; // Wyłączenie kluczy obcych
$conn->query($sql);

$tables = $conn->query("SHOW TABLES");
while ($row = $tables->fetch_array()) {
    $table = $row[0];
    $conn->query("TRUNCATE TABLE $table");
}

$sql = "SET FOREIGN_KEY_CHECKS = 1;"; // Włączenie kluczy obcych
$conn->query($sql);

echo "Wszystkie dane zostały usunięte z bazy danych.";

// Zamknięcie połączenia
$conn->close();


?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usunięcie danych - Pizza Hut</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Usunięcie danych Pizza Hut</h2>
    <a href="index.php">Powrót do formularza</a>
    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>
</body>