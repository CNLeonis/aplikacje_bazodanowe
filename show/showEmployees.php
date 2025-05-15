<?php
require __DIR__ . '/../db.php';

$stmt = $pdo->query("
    SELECT e.*, a.city, a.street, a.house, a.apartment
    FROM employees e
    JOIN adress a ON e.id_adress = a.id_adress
    ORDER BY id_employee DESC
");
$employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Pracownicy - Pizza Hut</title>
</head>

<body>
    <h2>Lista pracowników</h2>
    <a href="/../index.php">Powrót do formularza</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imię</th>
                <th>Email</th>
                <th>Stanowisko</th>
                <th>Telefon</th>
                <th>Miasto</th>
                <th>Ulica</th>
                <th>Nr domu</th>
                <th>Nr mieszkania</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $emp): ?>
                <tr>
                    <td><?= htmlspecialchars($emp['id_employee']) ?></td>
                    <td><?= htmlspecialchars($emp['name']) ?></td>
                    <td><?= htmlspecialchars($emp['email']) ?></td>
                    <td><?= htmlspecialchars($emp['position']) ?></td>
                    <td><?= htmlspecialchars($emp['phone']) ?></td>
                    <td><?= htmlspecialchars($emp['city']) ?></td>
                    <td><?= htmlspecialchars($emp['street']) ?></td>
                    <td><?= htmlspecialchars($emp['house']) ?></td>
                    <td><?= htmlspecialchars($emp['apartment']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>