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
            <option value="50000">50000</option>
            <option value="10000">10000</option>
            <option value="5000">5000</option>
            <option value="1000">1000</option>
            <option value="100">100</option>
            <option value="10">10</option>
        </select>
        <button type="submit">Generuj klientów</button>
    </form>

    <hr>

    <h3>Generowanie zamówień</h3>
    <form action="/../generate/generateOrders.php" method="POST">
        <label for="rows">Liczba zamówień do wygenerowania:</label>
        <select name="rows" id="rows" required>
            <option value="50000">50000</option>
            <option value="10000">10000</option>
            <option value="5000">5000</option>
            <option value="1000">1000</option>
            <option value="100">100</option>
            <option value="10">10</option>
        </select>
        <button type="submit">Generuj zamówienia</button>
    </form>

    <hr>
    <h3>Generowanie płatności</h3>
    <form action="/../generate/generatePayments.php" method="POST">
        <label for="rows">Liczba płatności do wygenerowania:</label>
        <select name="rows" id="rows" required>
            <option value="50000">50000</option>
            <option value="10000">10000</option>
            <option value="5000">5000</option>
            <option value="1000">1000</option>
            <option value="100">100</option>
            <option value="10">10</option>
        </select>
        <button type="submit">Generuj płatności</button>
    </form>
    <hr>
    <h3>Generowanie dostawców</h3>
    <form action="/../generate/generateDeliveries.php" method="POST">
        <label for="rows">Liczba dostawców do wygenerowania:</label>
        <select name="rows" id="rows" required>
            <option value="10">10</option>
            <option value="100">100</option>
            <option value="1000">1000</option>
        </select>
        <button type="submit">Generuj dostawców</button>
    </form>
    <hr>
    <h3>Generowanie dań</h3>
    <form action="/generate/generateDishes.php" method="POST">
        <label for="rows">Liczba dań do wygenerowania:</label>
        <select name="rows" required>
            <option value="50000">50000</option>
            <option value="10000">10000</option>
            <option value="5000">5000</option>
            <option value="1000">1000</option>
            <option value="100">100</option>
            <option value="10">10</option>
        </select>
        <button type="submit">Generuj dania</button>
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
            <option value="10000">10000</option>
            <option value="50000">50000</option>
        </select>
        <button type="submit">Generuj adresy</button>
    </form>


    <hr>
    <h3>Generowanie dane magazynowe</h3>
    <form action="/generate/generateStorages.php" method="POST">
        <label for="rows">Liczba wpisów magazynowych:</label>
        <select name="rows" required>
            <option value="10">10</option>
            <option value="100">100</option>
        </select>
        <button type="submit">Generuj magazyn</button>
    </form>
    <hr>
    <h3>Generuj składniki</h3>
    <form action="/generate/generateIngredients.php" method="POST">
        <label for="rows">Liczba składników:</label>
        <select name="rows" required>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
        </select>
        <button type="submit">Generuj składniki</button>
    </form>
    <hr>
    <h3>Generuj pracowników</h3>
    <form action="/generate/generateEmployees.php" method="POST">
        <label for="rows">Liczba pracowników:</label>
        <select name="rows" required>
            <option value="200">200</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>

        </select>
        <button type="submit">Generuj pracowników</button>
    </form>
    <hr>
    <h3>Generowanie opinii</h3>
    <form action="/generate/generateReviews.php" method="POST">
        <label for="rows">Liczba opinii do wygenerowania:</label>
        <select name="rows" required>
            <option value="5000">5000</option>
            <option value="2000">2000</option>
            <option value="1000">1000</option>
            <option value="100">100</option>
            <option value="10">10</option>
        </select>
        <button type="submit">Generuj opinie</button>
    </form>

    <hr>
    <a href="index.php">Powrót do formularza</a>

    <footer>
        <p>&copy; 2025 Pizza Hut - Dewid Bielecki</p>
    </footer>
</body>




</html>