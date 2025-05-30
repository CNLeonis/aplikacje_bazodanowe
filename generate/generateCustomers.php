<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsCustomers.php';


$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {
    $adressStmt = $pdo->query("SELECT id_adress FROM adress");
    $adresses = $adressStmt->fetchAll(PDO::FETCH_COLUMN);
    for ($i = 0; $i < $rows; $i++) {
        $name = randomName();
        $email = randomEmail($name);
        $phone = randomPhone();
        $idAdress = $adresses[array_rand($adresses)];



        // dodanie danych do bazy danych
        $stmt = $pdo->prepare("INSERT IGNORE INTO customers (name, email, phone, adress_id) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $idAdress]);
    }
    echo "<p>Wygenerowano $rows klientów.</p>";
    echo "<br>";
    echo '<a href="/../index.php">Powrót do formularza</a>';
    echo "<br>";
    echo '<a href="/show/showCustomers.php">Pokaż klientów</a>';
} else {
    echo "<p>Nie podano liczby klientów do wygenerowania.</p>";
}
