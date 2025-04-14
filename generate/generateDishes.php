<?php
require __DIR__ . '/../db.php';
require __DIR__ . '/../functions/functionsDishes.php';

$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {
    for ($i = 0; $i < $rows; $i++) {
        $name = randomDishName();
        $price = randomDishPrice();
        $ingredients = randomIngredients();
        $category = randomCategory();

        $stmt = $pdo->prepare("INSERT INTO dishes (name, price, ingredients, category) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $price, $ingredients, $category]);
    }

    echo "<p>Wygenerowano $rows dań.</p>";
    echo '<a href="/../index.php">Powrót</a><br>';
    echo '<a href="/../show/showDishes.php">Pokaż dania</a><br>';
} else {
    echo "<p>Nie podano liczby dań do wygenerowania.</p>";
}
