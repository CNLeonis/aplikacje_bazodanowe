<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("SELECT * FROM payments ORDER BY id_payment DESC");
$payments = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Płatności - Pizza Hut</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Lista płatności</h2>
    <a href="/../index.php">Powrót do formularza</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID Płatności</th>
                <th>Metoda płatności</th>
                <th>ID Zamówienia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payments as $payment) : ?>
                <tr>
                    <td><?= htmlspecialchars($payment['id_payment']) ?></td>
                    <td><?= htmlspecialchars($payment['payment_method']) ?></td>
                    <td><?= htmlspecialchars($payment['order_id']) ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>
</body>