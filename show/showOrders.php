<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("SELECT * FROM orders ORDER BY id_order DESC");
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamówienia - Pizza Hut</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Lista zamówień</h2>
    <a href="/../index.php">Powrót do formularza</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data zamówienia</th>
                <th>Status zamówienia</th>
                <th>Typ zamówienia</th>
                <th>ID klienta</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) : ?>
                <tr>
                    <td><?= htmlspecialchars($order['id_order']) ?></td>
                    <td><?= htmlspecialchars($order['order_date']) ?></td>
                    <td><?= htmlspecialchars($order['order_status']) ?></td>
                    <td><?= htmlspecialchars($order['order_type']) ?></td>
                    <td><?= htmlspecialchars($order['customer_id']) ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>

</html>