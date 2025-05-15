<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("SELECT * FROM storages ORDER BY id_storage DESC");
$storages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Magazyn - Pizza Hut</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <h2>Lista wpisów w magazynie</h2>
    <a href="/../index.php">Powrót</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ilość składników</th>
                <th>Typ magazynu</th>
                <th>Regał</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($storages as $storage): ?>
                <tr>
                    <td><?= htmlspecialchars($storage['id_storage']) ?></td>
                    <td><?= htmlspecialchars($storage['ingredient_count']) ?></td>
                    <td><?= htmlspecialchars($storage['storage_name']) ?></td>
                    <td><?= htmlspecialchars($storage['shelf']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>