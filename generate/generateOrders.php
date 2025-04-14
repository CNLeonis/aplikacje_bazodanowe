<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsOrders.php';

$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {

    for ($i = 0; $i < $rows; $i++) {

        //get random customer id
        $stmt = $pdo->query("SELECT id_customer FROM customers ORDER BY RAND() LIMIT 1");
        $customer = $stmt->fetchColumn();

        //generate order data base
        $order_date = randomOrderDate();
        $order_status = randomOrderStatus();
        $order_type = randomOrderType();

        //insert order
        $stmtInsert = $pdo->prepare("INSERT INTO orders (order_date, order_status, order_type, customer_id) VALUES (?, ?, ?, ?)");
        $stmtInsert->execute([$order_date, $order_status, $order_type, $customer]);
    }
    echo "<br>";
    echo "Generowanie $rows zamówień zakończone sukcesem.";
    echo "<br>";
    echo "<br>";
    echo "<a href='/../index.php'>Powrót</a>";
    echo "<br>";
    echo "<a href='/../show/showOrders.php'>Pokaż zamówienia</a>";
    echo "<br>";
} else {
    echo "Nie podano liczby zamówień do wygenerowania.";
    echo "<br>";
}
