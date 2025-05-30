<?php
ini_set('max_execution_time', -1);
ini_set('memory_limit', '-1');

require_once 'db.php';

function formatTime($time)
{
    return number_format($time * 1000, 2) . ' ms';
}
function showTableCounts(PDO $conn)
{
    $tables = ['adress', 'customers', 'deliveries', 'dishes', 'employees', 'ingredients', 'orders', 'payments', 'reviews', 'storages'];
    $totalRecords = 0;

    echo "<h2>Liczba rekordów w tabelach</h2>";
    echo "<table border='1' style='border-collapse: collapse; width: 20%;'>";
    echo "<tr><th>Tabela</th><th>Liczba rekordów</th></tr>";

    foreach ($tables as $table) {
        $stmt = $conn->query("SELECT COUNT(*) AS count FROM `$table`");
        $count = $stmt->fetch(PDO::FETCH_ASSOC)['count'];
        $totalRecords += $count;
        echo "<tr><td>$table</td><td>$count</td></tr>";
    }

    echo "<tr style='font-weight:bold; background:#f0f0f0'><td>SUMA REKORDÓW</td><td>$totalRecords</td></tr>";

    echo "</table><br>";
}

function runPizzaHutTests(PDO $conn)
{
    $results = [];

    // Test 1: Klienci z więcej niż 3 zamówieniami i przypisanym adresem
    echo "<h3>Test 1: Klienci z zamówieniami i adresem</h3>";
    $start = microtime(true);
    $query = <<<SQL
SELECT 
    c.id_customer, 
    c.name, 
    COUNT(o.id_order) AS total_orders,
    a.city, 
    a.street 
FROM customers c
JOIN orders o ON c.id_customer = o.customer_id
JOIN adress a ON c.adress_id = a.id_adress
GROUP BY c.id_customer
HAVING total_orders > 3
ORDER BY total_orders DESC
LIMIT 100
SQL;
    $conn->query($query);
    $results['customer_orders_address'] = microtime(true) - $start;
    echo "Czas wykonania: " . formatTime($results['customer_orders_address']) . "<br>";

    // Test 2: Pracownicy z przypisanym adresem i posortowani po mieście
    echo "<h3>Test 2: Pracownicy z adresami</h3>";
    $start = microtime(true);
    $query = <<<SQL
SELECT 
    e.id_employee, 
    e.name AS employee_name, 
    a.city, 
    a.street, 
    a.postal_code 
FROM employees e
JOIN adress a ON e.id_adress = a.id_adress
ORDER BY a.city ASC, e.name ASC
LIMIT 100
SQL;
    $conn->query($query);
    $results['employees_with_address'] = microtime(true) - $start;
    echo "Czas wykonania: " . formatTime($results['employees_with_address']) . "<br>";

    // Test 3: Dostawy przypisane do dostawców z ostatnich 30 dni
    echo "<h3>Test 3: Dostawy ostatnich 30 dni</h3>";
    $start = microtime(true);
    $query = <<<SQL
SELECT 
    d.id_delivery, 
    d.delivery_name, 
    o.id_order, 
    o.order_date 
FROM deliveries d
JOIN orders o ON d.id_delivery = o.customer_id
WHERE o.order_type = 'dostawa'
AND o.order_date >= CURDATE() - INTERVAL 30 DAY
ORDER BY o.order_date DESC
LIMIT 100
SQL;
    $conn->query($query);
    $results['recent_deliveries'] = microtime(true) - $start;
    echo "Czas wykonania: " . formatTime($results['recent_deliveries']) . "<br>";

    return $results;
}

function generateChart($results)
{
    echo "<h2>Wizualizacja wyników</h2>";
    echo "<div style='margin: 20px 0;'>";
    foreach ($results as $test => $time) {
        $ms = $time * 1000;
        $width = min(100, $ms / 10);
        echo "<div style='margin-bottom: 10px;'>";
        echo "<strong>$test</strong> - " . formatTime($time);
        echo "<div style='height: 20px; background: #4CAF50; width: {$width}%;'></div>";
        echo "</div>";
    }
    echo "</div>";
}

// Start testów
echo "<h1>Performance Test - Pizza Hut</h1>";
$conn = new PDO("mysql:host=localhost;dbname=pizza-hut", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

showTableCounts($conn);
$results = runPizzaHutTests($conn);
generateChart($results);

$conn = null;
