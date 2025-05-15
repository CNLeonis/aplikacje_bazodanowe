<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("SELECT * FROM ingredients ORDER BY id_ingredient DESC");
$ingredients = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Składniki - Pizza Hut</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <h2>Lista składników</h2>
    <a href="/../index.php">Powrót</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa składnika</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ingredients as $ingredient): ?>
                <tr>
                    <td><?= htmlspecialchars($ingredient['id_ingredient']) ?></td>
                    <td><?= htmlspecialchars($ingredient['name']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>