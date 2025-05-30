<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna - Pizza Hut Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="mb-3"><i class="bi bi-house-door-fill"></i> Główna strona</h1>
            <p class="lead">Generator danych do bazy danych Pizza Hut</p>
            <p class="text-muted">Wybierz jedną z opcji poniżej, aby wygenerować dane lub je wyświetlić.</p>
            <p class="text-muted">Wszystkie dane są fikcyjne i służą tylko do celów testowych.</p>
            <p class="text-muted">Wszystkie dane są generowane losowo.</p>
        </div>


        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <?php
            $sections = [
                ["form.php", "Generuj nowe dane", "bi-rocket-takeoff"],
                ["/show/showCustomers.php", "Pokaż klientów", "bi-person-fill"],
                ["/show/showAdress.php", "Pokaż adresy", "bi-geo-alt-fill"],
                ["/show/showOrders.php", "Pokaż zamówienia", "bi-bag-check-fill"],
                ["/show/showPayments.php", "Pokaż płatności", "bi-credit-card-fill"],
                ["/show/showDeliveries.php", "Pokaż dostawców", "bi-truck"],
                ["/show/showDishes.php", "Pokaż dania", "bi bi-bullseye"],
                ["/show/showStorages.php", "Pokaż magazyny", "bi-box-seam"],
                ["/show/showIngredients.php", "Pokaż składniki", "bi-basket"],
                ["/show/showEmployees.php", "Pokaż pracowników", "bi-person-badge"],
                ["/show/showReviews.php", "Pokaż opinie", "bi-chat-left-text"],
                ["delete.php", "Usuń dane", "bi-trash3-fill"],
                ["performance_test.php", "Test wydajności", "bi-speedometer2"],
            ];

            foreach ($sections as [$link, $label, $icon]) {
                echo <<<HTML
                <div class="col">
                    <a href="$link" class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-start gap-2 shadow-sm">
                        <i class="bi $icon fs-4"></i>
                        <span>$label</span>
                    </a>
                </div>
HTML;
            }
            ?>

        </div>

        <div class="text-center mt-5">
            <footer class="text-muted">&copy; 2025 Pizza Hut - Dewid Bielecki</footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>