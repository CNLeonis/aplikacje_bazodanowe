<!DOCTYPE html>

<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator danych - Pizza Hut</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Generator danych Pizza Hut</h2>

    <h3>Generowanie klientów</h3>
    <form action="/../generate/generateCustomers.php" method="POST">
        <label for="rows">Liczba klientów do wygenerowania:</label>
        <select name="rows" id="rows" required>
            <option value="10">10</option>
            <option value="100">100</option>
            <option value="1000">1000</option>
            <option value="5000">5000</option>
        </select>
        <button type="submit">Generuj klientów</button>
    </form>

    <hr>

    <h3>Generowanie adresów</h3>
    <form action="/../generate/generateAdress.php" method="POST">
        <label for="rows">Liczba adresów do wygenerowania:</label>
        <select name="rows" id="rows" required>
            <option value="10">10</option>
            <option value="100">100</option>
            <option value="1000">1000</option>
            <option value="5000">5000</option>
        </select>
        <button type="submit">Generuj adresy</button>
    </form>
    <a href="index.php">Powrót do formularza</a>

    <hr>

    <h3>Generowanie zamówień</h3>
    <form action="/../generate/generateOrders.php" method="POST">
        <label for="rows">Liczba zamówień do wygenerowania:</label>
        <select name="rows" id="rows" required>
            <option value="10">10</option>
            <option value="100">100</option>
            <option value="1000">1000</option>
            <option value="5000">5000</option>
        </select>
        <button type="submit">Generuj zamówienia</button>
    </form>
    <a href="index.php">Powrót do formularza</a>

    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>
</body>




</html>