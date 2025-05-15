<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsStorages.php';

$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {
    for ($i = 0; $i < $rows; $i++) {
        $storageName = randomStorageName();
        $ingredientCount = randomIngredientCount();
        $shelf = randomShelf();

        $stmt = $pdo->prepare("INSERT INTO storages (ingredient_count, storage_name, shelf) VALUES (?, ?, ?)");
        $stmt->execute([$ingredientCount, $storageName, $shelf]);
    }

    echo "<p>Wygenerowano $rows wpisów magazynowych.</p>";
    echo '<a href="/../index.php">Powrót</a><br>';
    echo '<a href="/../show/showStorages.php">Pokaż magazyn</a><br>';
} else {
    echo "<p>Nie podano liczby wpisów do wygenerowania.</p>";
}
