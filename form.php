<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator danych - Pizza Hut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-5">🍕 Generator danych Pizza Hut</h1>

        <div class="row g-4">

            <!-- Formularz generatora -->

            <!-- Klienci -->
            <div class="col-md-6">
                <div class="card shadow-sm bg-light border-primary">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-fill"></i> Generowanie klientów</h5>
                        <form action="/generate/generateCustomers.php" method="POST">
                            <select name="rows" class="form-select mb-3">
                                <option value="100000">100000</option>
                                <option value="50000">50000</option>
                                <option value="10000">10000</option>
                                <option value="5000">5000</option>
                                <option value="1000">1000</option>
                                <option value="100">100</option>
                                <option value="10">10</option>
                            </select>
                            <button class="btn btn-primary w-100">Generuj klientów</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Zamówienia -->
            <div class="col-md-6">
                <div class="card shadow-sm  border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi-bag-check"></i> Generowanie zamówień</h5>
                        <form action="/generate/generateOrders.php" method="POST">
                            <select name="rows" class="form-select mb-3">
                                <option value="100000">100000</option>
                                <option value="50000">50000</option>
                                <option value="10000">10000</option>
                                <option value="5000">5000</option>
                                <option value="1000">1000</option>
                                <option value="100">100</option>
                                <option value="10">10</option>
                            </select>
                            <button class="btn btn-primary w-100">Generuj zamówienia</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Płatności -->
            <div class="col-md-6">
                <div class="card shadow-sm  border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi-credit-card-2-back"></i> Generowanie płatności</h5>
                        <form action="/generate/generatePayments.php" method="POST">
                            <select name="rows" class="form-select mb-3">
                                <option value="100000">100000</option>
                                <option value="50000">50000</option>
                                <option value="10000">10000</option>
                                <option value="5000">5000</option>
                                <option value="1000">1000</option>
                                <option value="100">100</option>
                                <option value="10">10</option>
                            </select>
                            <button class="btn btn-primary w-100">Generuj płatności</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Dostawcy -->
            <div class="col-md-6">
                <div class="card shadow-sm bg-light border-primary">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi-truck"></i> Generowanie dostawców</h5>
                        <form action="/generate/generateDeliveries.php" method="POST">
                            <select name="rows" class="form-select mb-3">
                                <option value="10000">10000</option>
                                <option value="1000">1000</option>
                                <option value="100">100</option>
                                <option value="10">10</option>
                            </select>
                            <button class="btn btn-primary w-100">Generuj dostawców</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Dania -->
            <div class="col-md-6">
                <div class="card shadow-sm bg-light border-primary">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-bullseye"></i> Generowanie dań</h5>
                        <form action="/generate/generateDishes.php" method="POST">
                            <select name="rows" class="form-select mb-3">

                                <option value="5000">5000</option>
                                <option value="1000">1000</option>
                                <option value="100">100</option>
                                <option value="10">10</option>
                            </select>
                            <button class="btn btn-primary w-100">Generuj dania</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Adresy -->
            <div class="col-md-6">
                <div class="card shadow-sm border-secondary ">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi-geo-alt-fill"></i> Generowanie adresów</h5>
                        <form action="/generate/generateAdress.php" method="POST">
                            <select name="rows" class="form-select mb-3">
                                <option value="100000">100000</option>
                                <option value="50000">50000</option>
                                <option value="10000">10000</option>
                                <option value="5000">5000</option>
                                <option value="1000">1000</option>
                                <option value="100">100</option>
                                <option value="10">10</option>
                            </select>
                            <button class="btn btn-primary w-100">Generuj adresy</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Składniki -->
            <div class="col-md-6">
                <div class="card shadow-sm border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi-basket"></i> Generowanie składników</h5>
                        <form action="/generate/generateIngredients.php" method="POST">
                            <select name="rows" class="form-select mb-3">
                                <option value="100">100</option>
                                <option value="10">10</option>
                            </select>
                            <button class="btn btn-primary w-100">Generuj składniki</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Pracownicy -->
            <div class="col-md-6">
                <div class="card shadow-sm bg-light border-primary">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi-person-badge"></i> Generowanie pracowników</h5>
                        <form action="/generate/generateEmployees.php" method="POST">
                            <select name="rows" class="form-select mb-3">
                                <option value="10000">10000</option>
                                <option value="1000">1000</option>
                                <option value="100">100</option>
                                <option value="10">10</option>
                            </select>
                            <button class="btn btn-primary w-100">Generuj pracowników</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Magazyny -->
            <div class="col-md-6">
                <div class="card shadow-sm bg-light border-primary">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi-box-seam"></i> Generowanie magazynów</h5>
                        <form action="/generate/generateStorages.php" method="POST">
                            <select name="rows" class="form-select mb-3">

                                <option value="100">100</option>
                                <option value="10">10</option>
                            </select>
                            <button class="btn btn-primary w-100">Generuj magazyny</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Opinie -->
            <div class="col-md-6">
                <div class="card shadow-sm border-secondary">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi-chat-left-dots"></i> Generowanie opinii</h5>
                        <form action="/generate/generateReviews.php" method="POST">
                            <select name="rows" class="form-select mb-3">

                                <option value="5000">5000</option>
                                <option value="1000">1000</option>
                                <option value="100">100</option>
                                <option value="10">10</option>
                            </select>
                            <button class="btn btn-primary w-100">Generuj opinie</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="index.php" class="btn btn-outline-secondary">Powrót do formularza</a>
                <p class="mt-3 text-muted">&copy; 2025 Pizza Hut - Dewid Bielecki</p>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>