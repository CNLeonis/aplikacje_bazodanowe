<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsDeliveries.php';

$stmtOrders = $pdo->query("SELECT id_order FROM orders WHERE order_type = 'Dostawa'");
$orders = $stmtOrders->fetchAll(PDO::FETCH_ASSOC);

if ($orders) {
    foreach ($orders as $order) {
        $name = randomDeliveryName();
        $phone = randomPhone();
        $stmt = $pdo->prepare("INSERT INTO deliveries (delivery_name, phone, id_order) VALUES (?, ?, ?)");
        $stmt->execute([$name, $phone, $order['id_order']]);
    }
    echo "<p>Generowanie dostaw zakończone sukcesem </p><br>";
    echo "<br><a href=\"../index.php\">Powrót</a>";
    echo "<br><a href=\"../show/showDeliveries.php\">Pokaż dostawców</a>";
} else {
    echo "<p>Brak zamówień typu 'Dostawa'.</p>";
}
