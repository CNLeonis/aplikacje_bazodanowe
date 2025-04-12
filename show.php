<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM customers ORDER BY id DESC");
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
    <a href="index.php">Powrót do formularza</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imię i nazwisko</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Ulica</th>
                <th>Miasto</th>
                <th>Kod pocztowy</th>
                <th>Status zamówienia</th>
                <th>Data zamówienia</th>
                <th>Metoda płatności</th>
                <th>Rozmiar pizzy</th>
                <th>Typ pizzy</th>
                <th>Rodzaj ciasta</th>
                <th>Dodatki do pizzy</th>
                <th>Kwota zamówienia</th>
                <th>ID zamówienia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?= htmlspecialchars($customer['id']) ?></td>
                    <td><?= htmlspecialchars($customer['name']) ?></td>
                    <td><?= htmlspecialchars($customer['email']) ?></td>
                    <td><?= htmlspecialchars($customer['phone']) ?></td>
                    <td><?= htmlspecialchars($customer['street']) ?></td>
                    <td><?= htmlspecialchars($customer['city']) ?></td>
                    <td><?= htmlspecialchars($customer['postal_code']) ?></td>
                    <td><?= htmlspecialchars($customer['order_status']) ?></td>
                    <td><?= htmlspecialchars($customer['order_date']) ?></td>
                    <td><?= htmlspecialchars($customer['payment_method']) ?></td>
                    <td><?= htmlspecialchars($customer['pizza_size']) ?></td>
                    <td><?= htmlspecialchars($customer['pizza_type']) ?></td>
                    <td><?= htmlspecialchars($customer['pizza_crust']) ?></td>
                    <td><?= htmlspecialchars($customer['pizza_toppings']) ?></td>
                    <td><?= htmlspecialchars($customer['order_total']) ?> zł</td>
                    <td><?= htmlspecialchars($customer['order_ID']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>
</body>



</html>