<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("SELECT * FROM dishes ORDER BY id_dish DESC");
$dishes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Dania - Pizza Hut</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <h2>Lista dań</h2>
    <a href="/../index.php">Powrót</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Cena</th>
                <th>Składniki</th>
                <th>Kategoria</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dishes as $dish): ?>
                <tr>
                    <td><?= htmlspecialchars($dish['id_dish']) ?></td>
                    <td><?= htmlspecialchars($dish['name']) ?></td>
                    <td><?= htmlspecialchars($dish['price']) ?> zł</td>
                    <td><?= htmlspecialchars($dish['ingredients']) ?></td>
                    <td><?= htmlspecialchars($dish['category']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>