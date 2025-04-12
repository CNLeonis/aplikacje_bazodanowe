<!DOCTYPE html>

<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator danych - Pizza Hut</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Generator danych klientów Pizza Hut</h2>
    <form action="generate.php" method="POST">
        <label for="rows">Liczba klientów do wygenerowania:</label>
        <select name="rows" id="rows" required>
            <option value="10">10</option>
            <option value="100">100</option>
            <option value="1000">1000</option>
            <option value="5000">5000</option>
        </select>
        <button type="submit">Generuj</button>
    </form>
    <a href="index.php">Powrót do formularza</a>

    
    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>
</body>




</html>