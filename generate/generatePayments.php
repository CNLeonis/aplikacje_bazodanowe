<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsPayments.php';

$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {

    $stmt = $pdo->query("SELECT id_order FROM orders where id_order NOT IN (SELECT order_id FROM payments) ORDER BY RAND() LIMIT $rows");
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($orders as $orderId) {
        $payment_method = randomPaymentMethod();

        $stmtInsert = $pdo->prepare("INSERT INTO payments (payment_method, order_id) VALUES (?, ?)");
        $stmtInsert->execute([$payment_method, $orderId['id_order']]);
    }
    echo "<br>";
    echo "Generowanie $rows płatności zakończone sukcesem.";
    echo "<br>";
    echo "<br>";
    echo "<a href='/../index.php'>Powrót</a>";
    echo "<br>";
    echo "<a href='/../show/showPayments.php'>Pokaż płatności</a>";
    echo "<br>";
} else {
    echo "Nie podano liczby płatności do wygenerowania.";
    echo "<br>";
}
