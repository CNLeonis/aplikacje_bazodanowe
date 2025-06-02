<?php

/**
 *  Usuwa indeksy, jeżeli istnieją.
 */
require_once 'db.php';

$pdo = $pdo ?? $conn ?? new PDO(
    'mysql:host=localhost;dbname=pizza-hut;charset=utf8mb4',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$indexes = [
    ['orders',    'idx_orders_customer_date'],
    ['adress',    'idx_adress_lower_city'],
    ['adress',  'idx_adress_city_id'],
    ['employees', 'idx_employees_idadress_name'],
    ['reviews',   'idx_reviews_ft'],
];

foreach ($indexes as [$table, $idx]) {
    try {
        $pdo->exec("ALTER TABLE `$table` DROP INDEX `$idx`");
        echo "Usunięto indeks $idx z tabeli $table<br>";
    } catch (PDOException $e) {
        // Kod 1091 = "Can't DROP 'x'; check that it exists"
        if ($e->getCode() === '42000' || $e->errorInfo[1] == 1091) {
            echo "Indeks $idx nie istnieje w $table - pomijam.<br>";
        } else {
            throw $e;   // coś poważniejszego
        }
    }
}
