<?php

require_once 'db.php';

$pdo = $pdo ?? $conn ?? new PDO(
    'mysql:host=localhost;dbname=pizza-hut;charset=utf8mb4',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

/** true → indeks już istnieje */
function indexExists(PDO $pdo, string $table, string $idx): bool
{
    $q = $pdo->prepare("SHOW INDEX FROM `$table` WHERE Key_name = :idx");
    $q->execute(['idx' => $idx]);
    return (bool) $q->fetch();
}

/* ---------- sprawdzamy silnik i wersję ---------- */
$verStr = $pdo->query('SELECT VERSION()')->fetchColumn();   // np. '10.6.16-MariaDB' albo '8.0.36'
$isMaria = stripos($verStr, 'mariadb') !== false;
$hasFunctional = !$isMaria && version_compare($verStr, '8.0.13', '>=');

/* ---------- lista indeksów do stworzenia ---------- */
$create = [
    [
        'table' => 'orders',
        'index' => 'idx_orders_customer_id',
        'sql'   => "ALTER TABLE orders 
                DROP INDEX IF EXISTS idx_orders_customer_id,
                ADD INDEX idx_orders_customer_id_order (customer_id, id_order)"
    ],

    [
        'table' => 'adress',
        'index' => 'idx_adress_city_id',
        'sql'   => "CREATE INDEX idx_adress_city_id ON adress (city, id_adress)"
    ],

    [
        'table' => 'employees',
        'index' => 'idx_employees_idadress_name',
        'sql'   => "ALTER TABLE employees
                    ADD INDEX idx_employees_idadress_name (id_adress, name)"
    ],
    [
        'table' => 'reviews',
        'index' => 'idx_reviews_ft',
        'sql'   => "CREATE FULLTEXT INDEX idx_reviews_ft ON reviews (comment)"
    ],
];

/* ---------- wykonujemy ---------- */
foreach ($create as $c) {
    if (indexExists($pdo, $c['table'], $c['index'])) {
        echo "Indeks {$c['index']} już istnieje - pomijam.<br>";
        continue;
    }
    try {
        $pdo->exec($c['sql']);
        echo "Dodano indeks {$c['index']} w tabeli {$c['table']}<br>";
    } catch (PDOException $e) {
        echo "<span style='color:red'>Błąd przy {$c['index']} – {$e->getMessage()}</span><br>";
    }
}
