<?php
require 'db.php';
require 'functions.php';

$rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;

if ($rows > 0) {
    for ($i = 0; $i < $rows; $i++) {
        $name = randomName();
        $email = randomEmail();
        $phone = randomPhone();
        $street = randomStreet();
        $city = randomCity();
        $postalCode = randomPostalCode();
        $orderStatus = randomOrderStatus();
        $orderDate = randomOrderDate();
        $paymentMethod = randomPaymentMethod();
        $pizzaSize = randomPizzaSize();
        $pizzaType = randomPizzaType();
        $pizzaCrust = randomPizzaCrust();
        $pizzaToppings = randomPizzaToppings();
        $orderTotal = randomOrderTotal();
        $orderId = randomOrderId();

        // dodanie danych do bazy danych
        $stmt = $pdo->prepare("INSERT INTO customers (name, email, phone, street, city, postal_code, order_status, order_date, payment_method, pizza_size, pizza_type, pizza_crust, pizza_toppings, order_total, order_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $street, $city, $postalCode, $orderStatus, $orderDate, $paymentMethod, $pizzaSize, $pizzaType, $pizzaCrust, $pizzaToppings, $orderTotal, $orderId]);
    }
    echo "<p>Wygenerowano $rows klientów.</p>";
    echo '<a href="index.php">Powrót do formularza</a>';
    echo '<a href="show.php">Pokaż klientów</a>';
    echo '<a href="delete.php">Usuń klientów</a>';
} else {
    echo "<p>Nie podano liczby klientów do wygenerowania.</p>";
}
