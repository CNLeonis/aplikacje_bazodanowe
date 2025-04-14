<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("SELECT * FROM deliveries ORDER BY id_delivery DESC");
$deliveries = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Deliveries - Pizza Hut</title>
    <link rel="stylesheet" href="/../style.css">
</head>

<body>
    <h2>Personel dostawców</h2>
    <a href="/../index.php">Powrót</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa dostawcy</th>
                <th>Nr telefonu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deliveries as $d): ?>
                <tr>
                    <td><?= htmlspecialchars($d['id_delivery']) ?></td>
                    <td><?= htmlspecialchars($d['delivery_name']) ?></td>
                    <td><?= htmlspecialchars($d['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>
</body>

</html>