<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsIngredients.php';

$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {
    for ($i = 0; $i < $rows; $i++) {
        $name = randomIngredientName();

        // Sprawdź, czy składnik już istnieje
        $stmtCheck = $pdo->prepare("SELECT COUNT(*) FROM ingredients WHERE name = ?");
        $stmtCheck->execute([$name]);
        if ($stmtCheck->fetchColumn() == 0) {
            $stmt = $pdo->prepare("INSERT INTO ingredients (name) VALUES (?)");
            $stmt->execute([$name]);
        }
    }

    echo "<p>Wygenerowano (lub pominięto powtórzenia) $rows składników.</p>";
    echo '<a href="/../index.php">Powrót</a><br>';
    echo '<a href="/../show/showIngredients.php">Pokaż składniki</a><br>';
} else {
    echo "<p>Nie podano liczby składników do wygenerowania.</p>";
}
