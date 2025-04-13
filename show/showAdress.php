<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("SELECT * FROM adress ORDER BY id_adress DESC");
$adress = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adresy - Pizza Hut</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Lista adresów</h2>
    <a href="/../index.php">Powrót do formularza</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Miasto</th>
                <th>Ulica</th>
                <th>Nr domu</th>
                <th>Nr mieszkania</th>
                <th>Kod pocztowy</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adress as $address) : ?>
                <tr>
                    <td><?= htmlspecialchars($address['id_adress']) ?></td>
                    <td><?= htmlspecialchars($address['city']) ?></td>
                    <td><?= htmlspecialchars($address['street']) ?></td>
                    <td><?= htmlspecialchars($address['house']) ?></td>
                    <td><?= htmlspecialchars($address['apartment']) ?></td>
                    <td><?= htmlspecialchars($address['postal_code']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>
</body>