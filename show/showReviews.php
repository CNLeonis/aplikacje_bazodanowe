<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("SELECT r.*, c.name AS customer_name FROM reviews r JOIN customers c ON r.id_customer = c.id_customer ORDER BY r.review_date DESC");
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów - Pizza Hut</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Opinie klientów</h2>
    <a href="/../index.php">Powrót do formularza</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Klient</th>
                <th>ID Zamówienia</th>
                <th>Ocena</th>
                <th>Komentarz</th>
                <th>Data opinii</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reviews as $review) : ?>
                <tr>
                    <td><?= htmlspecialchars($review['id_review']) ?></td>
                    <td><?= htmlspecialchars($review['customer_name']) ?></td>
                    <td><?= htmlspecialchars($review['id_order']) ?></td>
                    <td><?= htmlspecialchars($review['rating']) ?>/5</td>
                    <td><?= htmlspecialchars($review['comment']) ?></td>
                    <td><?= htmlspecialchars($review['review_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>
</body>

</html>