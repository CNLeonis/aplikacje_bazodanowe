<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsAdress.php';

$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {
    for ($i = 0; $i < $rows; $i++) {
        $city = randomCity();
        $street = randomStreet();
        $house = rand(1, 100);
        $apartment = rand(1, 50);
        $postalCode = randomPostalCode();

        // dodanie danych do bazy danych
        $stmt = $pdo->prepare("INSERT INTO adress (city, street, house, apartment, postal_code) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$city, $street, $house, $apartment, $postalCode]);
    }
    echo "<p>Wygenerowano $rows adresów.</p>";
    echo "<br>";
    echo '<a href="/../index.php">Powrót</a>';
    echo "<br>";
    echo '<a href="/show/showAdress.php">Pokaż adresy</a>';
} else {
    echo "<p>Nie podano liczby adresów do wygenerowania.</p>";
}
