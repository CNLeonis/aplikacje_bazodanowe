<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("SELECT * FROM customers ORDER BY id_customer DESC");
$customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klienci - Pizza Hut</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Lista klientów</h2>
    <a href="/../index.php">Powrót do formularza</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imię i nazwisko</th>
                <th>Email</th>
                <th>Telefon</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?= htmlspecialchars($customer['id_customer']) ?></td>
                    <td><?= htmlspecialchars($customer['name']) ?></td>
                    <td><?= htmlspecialchars($customer['email']) ?></td>
                    <td><?= htmlspecialchars($customer['phone']) ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>
</body>



</html>