<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsDeliveries.php';

$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {
    for ($i = 0; $i < $rows; $i++) {
        $name = randomDeliveryName();
        $phone = randomPhone();



        $iddelivery = $pdo->lastInsertId();
        $stmtOrder = $pdo->query("SELECT id_order FROM orders WHERE order_type = 'Dostawa' ORDER BY RAND() LIMIT 1");
        $order = $stmtOrder->fetch(PDO::FETCH_ASSOC);
        if ($order) {
            $stmt = $pdo->prepare("INSERT INTO deliveries (delivery_name, phone, order_id) VALUES (?, ?,?)");
            $stmt->execute([$name, $phone, $order['id_order']]);
        }
    }

    echo "<p>Generowanie $rows dostawców zakończone sukcesem </p>";
    echo "<br>";
    echo "<br>";
    echo '<a href="../index.php">Powrót</a>';
    echo '<a href="../show/showDeliveries.php">Pokaż dostawców</a>';
} else {
    echo "<p>No number of deliveries specified.</p>";
}
