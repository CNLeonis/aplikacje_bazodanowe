<?php
/* ==========================================================
   PERFORMANCE TEST – Pizza Hut  (z EXPLAIN/ANALYZE)
   ========================================================== */

ini_set('max_execution_time', -1);
ini_set('memory_limit',        '-1');

require_once 'db.php';




/* ─────────  konfiguracja  ───────── */
$DEBUG_PLANS = true;   // ← włącz / wyłącz wypisywanie planów

/* ─────────  połączenie  ───────── */
$pdo = $pdo ?? $conn ?? new PDO(
    'mysql:host=localhost;dbname=pizza-hut;charset=utf8mb4',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);



/* ─────────  helpery  ───────── */
function formatTime(float $t): string
{
    return number_format($t * 1000, 2) . ' ms';
}

/**
 * Wyświetla plan wykonania z ANALYZE (MariaDB) lub EXPLAIN ANALYZE (MySQL 8).
 */
function debugPlan(PDO $db, string $sql, string $tag = ''): void
{
    global $DEBUG_PLANS;
    if (!$DEBUG_PLANS) return;

    $ver     = $db->query('SELECT VERSION()')->fetchColumn();
    $isMaria = stripos($ver, 'mariadb') !== false;

    $prefix = $isMaria ? 'ANALYZE FORMAT=JSON ' : 'EXPLAIN ANALYZE ';
    $stmt   = $db->query($prefix . $sql);

    echo "<details style='margin:4px 0'><summary style='cursor:pointer;
          background:#ddd;padding:2px 6px;font-family:monospace'>
          PLAN " . htmlspecialchars($tag) . "</summary><pre style='margin:0;
          background:#222;color:#0f0;overflow:auto;'>";

    if ($isMaria) {
        // pojedynczy wiersz/kolumna JSON
        $json = $stmt->fetchColumn();
        echo htmlspecialchars(
            json_encode(json_decode($json, true), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );
    } else {
        // wiele wierszy, kolumna "EXPLAIN"
        foreach ($stmt as $row) echo htmlspecialchars($row['EXPLAIN']) . PHP_EOL;
    }
    echo "</pre></details>";
}

function showTableCounts(PDO $db): void
{
    $tables = [
        'adress',
        'customers',
        'deliveries',
        'dishes',
        'employees',
        'ingredients',
        'orders',
        'payments',
        'reviews',
        'storages'
    ];
    $total = 0;

    echo "<h2>Liczba rekordów w tabelach</h2>
          <table border='1' cellspacing='0'>
          <tr><th>Tabela</th><th>Liczba</th></tr>";

    foreach ($tables as $t) {
        $cnt   = $db->query("SELECT COUNT(*) FROM `$t`")->fetchColumn();
        $total += $cnt;
        echo "<tr><td>$t</td><td>$cnt</td></tr>";
    }
    echo "<tr style='font-weight:bold;background:#f0f0f0'>
            <td>SUMA</td><td>$total</td></tr>
          </table><br>";
}

/* ─────────  główne testy  ───────── */
function runPizzaHutTests(PDO $db, bool $useFulltext): array
{
    $r = [];

    /* ---------- Test 1 ---------- */
    $sql1 = <<<SQL
SELECT c.id_customer, c.name,
       agg.total_orders,
       a.city, a.street
FROM (
    SELECT customer_id, COUNT(*) AS total_orders
    FROM orders 
    GROUP BY customer_id
    HAVING COUNT(*) > 3
) agg
JOIN customers c ON c.id_customer = agg.customer_id
JOIN adress a    ON c.adress_id   = a.id_adress
ORDER BY agg.total_orders DESC
LIMIT 100;
SQL;
    $t0 = microtime(true);
    $db->query($sql1);
    $r['Klienci + zamówienia + adres'] = microtime(true) - $t0;
    debugPlan($db, $sql1, 'Test 1');

    /* ---------- Test 2 ---------- */
    $sql2 = <<<SQL
SELECT e.id_employee, e.name, a.city, a.street, a.postal_code
FROM employees e
JOIN adress a ON e.id_adress = a.id_adress
ORDER BY e.name
LIMIT 100;

SQL;
    $t0 = microtime(true);
    $db->query($sql2);
    $r['Pracownicy + adres'] = microtime(true) - $t0;
    debugPlan($db, $sql2, 'Test 2');

    /* ---------- Test 3 ---------- */
    if ($useFulltext) {
        $sql3 = "SELECT id_review,comment
                 FROM reviews
                 WHERE MATCH(comment) AGAINST('+pizza +ser' IN BOOLEAN MODE)

                 LIMIT 100";
    } else {
        $sql3 = "SELECT id_review,comment
                 FROM reviews
                 WHERE comment LIKE '%pizza%' OR comment LIKE '%ser%'
                 LIMIT 100";
    }
    $t0 = microtime(true);
    $db->query($sql3);
    $r['Recenzje'] = microtime(true) - $t0;
    debugPlan($db, $sql3, 'Test 3 ' . ($useFulltext ? 'FT' : 'LIKE'));

    return $r;
}

/* ─────────  mini-wykres i porównanie  ───────── */
function barChart(array $res): void
{
    $max = max($res) * 1000 ?: 1;
    echo "<div style='margin:15px 0'>";
    foreach ($res as $k => $t) {
        $w = ($t * 1000) / $max * 100;
        echo "<div style='margin:6px 0'>
                <strong>$k</strong> – " . formatTime($t) . "
                <div style='height:18px;background:#4CAF50;width:{$w}%'></div>
              </div>";
    }
    echo "</div>";
}

function compare(array $no, array $yes): void
{
    echo "<h2>Porównanie czasów</h2>
          <table border='1' cellspacing='0' width='70%'>
          <tr><th>Test</th><th>Bez indeksów</th><th>Z indeksami</th><th>Poprawa</th></tr>";

    foreach ($yes as $k => $tYes) {
        $tNo = $no[$k] ?? null;
        $imp = $tNo ? (1 - $tYes / $tNo) * 100 : 0;
        echo "<tr>
                <td>$k</td>
                <td>" . formatTime($tNo) . "</td>
                <td>" . formatTime($tYes) . "</td>
                <td>" . number_format($imp, 2) . "%</td>
              </tr>";
    }
    echo "</table><br>";
}

/* ==========================================================
   URUCHOMIENIE
   ========================================================== */

echo "<h1>Performance Test - Pizza Hut</h1>";
showTableCounts($pdo);

/* -------- Etap 1: bez indeksów -------- */
echo "<h2>Etap 1: Bez indeksów</h2>";
require 'remove_indexes.php';
$without = runPizzaHutTests($pdo, false);
barChart($without);

/* -------- Etap 2: po dodaniu indeksów -------- */
echo "<h2>Etap 2: Z indeksami</h2>";
require 'add_indexes.php';
$with = runPizzaHutTests($pdo, true);
barChart($with);

/* -------- Podsumowanie -------- */
compare($without, $with);
