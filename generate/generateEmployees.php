<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsEmployees.php';


$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {

    // pobierz dostępne adresy
    $adressStmt = $pdo->query("SELECT id_adress FROM adress");
    $adresses = $adressStmt->fetchAll(PDO::FETCH_COLUMN);

    if (count($adresses) === 0) {
        exit("<p>Brak dostępnych adresów. Najpierw wygeneruj adresy.</p>");
    }
    for ($i = 0; $i < $rows; $i++) {
        $name = randomName();
        $email = randomEmail($name);
        $phone = randomPhone();
        $position = randomPosition();
        $idAdress = $adresses[array_rand($adresses)];



        // dodanie danych do bazy danych
        $stmt = $pdo->prepare("INSERT INTO employees (name, email, phone, position, id_adress) VALUES (?, ?, ?,?,?)");
        $stmt->execute([$name, $email, $phone, $position, $idAdress]);
    }
    echo "<p>Wygenerowano $rows pracowników</p>";
    echo "<br>";
    echo '<a href="/../index.php">Powrót do formularza</a>';
    echo "<br>";
    echo '<a href="/show/showEmployees.php">Pokaż pracowników</a>';
} else {
    echo "<p>Nie podano liczby pracowników do wygenerowania.</p>";
}
