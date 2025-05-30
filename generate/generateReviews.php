<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsReviews.php';

$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {

    $stmt = $pdo->query("SELECT id_order, customer_id FROM orders ORDER BY RAND() LIMIT $rows");


    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($orders as $order) {
        $rating = randomRating();
        $comment = randomComment();

        $stmtInsert = $pdo->prepare("INSERT INTO reviews (customer_id, order_id, rating, comment) VALUES (?, ?, ?, ?)");
        $stmtInsert->execute([$order['customer_id'], $order['id_order'], $rating, $comment]);
    }

    echo "<p>Wygenerowano " . count($orders) . " opinii.</p>";
    echo '<a href="/../index.php">Powrót</a><br>';
    echo '<a href="/../show/showReviews.php">Pokaż opinie</a><br>';
} else {
    echo "<p>Nie podano liczby opinii do wygenerowania.</p>";
}
