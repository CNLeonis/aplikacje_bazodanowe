<?php
function randomName()
{
    $names = array(
        "Anna",
        "Kamil",
        "Piotr",
        "Alicja",
        "Marek",
        "Zofia",
        "Tomasz",
        "Franciszek",
        "Julia",
        "Hanna",
        "Jakub",
        "Michał",
    );
    $surnames = array(
        "Kowalska",
        "Nowak",
        "Wiśniewski",
        "Wójcik",
        "Kowalczyk",
        "Kamiński",
        "Michalski",
        "Wistowski",
        "Zielinski",
        "Tarczynski",
        "Szymanski",
        "Dudek",
        "Kaczmarek",
    );
    return $names[array_rand($names)] . " " . $surnames[array_rand($surnames)];
}


function randomEmail($name = '')
{
    $domains = array("gmail.com", "wp.pl", "o2.pl", "onet.pl", "interia.pl", "interia.pl", "gazeta.pl", "poczta.pl");
    $namePart = strtolower(str_replace(' ', '.', $name ?: 'user'));
    return $namePart . rand(1000, 9999) . '@' . $domains[array_rand($domains)];
}

function randomPhone()
{
    $prefixes = array("400", "401", "402", "403", "404", "405", "406", "500", "501", "502", "503", "504", "505", "700", "789", "546", "345", "456", "567", "769", "600", "601", "602", "603", "604", "605", "606", "607", "608", "609");
    return $prefixes[array_rand($prefixes)] . rand(100000, 999999);
}
function randomStreet()
{
    $streets = array(
        "Kwiatowa",
        "Słoneczna",
        "Złota",
        "Wiosenna",
        "Leśna",
        "Polna",
        "Morska",
        "Górska",
        "Rynkowska",
        "Bławatna",
    );
    return $streets[array_rand($streets)] . " " . rand(1, 100);
}
function randomCity()
{
    $cities = array(
        "Warszawa",
        "Kraków",
        "Wrocław",
        "Poznań",
        "Gdańsk",
        "Szczecin",
        "Lublin",
        "Katowice",
        "Łódź",
        "Bydgoszcz",
    );
    return $cities[array_rand($cities)];
}
function randomPostalCode()
{
    return rand(10, 99) . "-" . rand(100, 999);
}
function randomOrderStatus()
{
    $statuses = array("Złożone", "W trakcie realizacji", "Zrealizowane", "Anulowane");
    return $statuses[array_rand($statuses)];
}
function randomPaymentMethod()
{
    $methods = array("Gotówka", "Karta kredytowa", "Przelew bankowy", "Kryptowaluta");
    return $methods[array_rand($methods)];
}
function randomPizzaSize()
{
    $sizes = array("Mała", "Średnia", "Duża");
    return $sizes[array_rand($sizes)];
}
function randomPizzaType()
{
    $types = array("Margherita", "Pepperoni", "Hawajska", "Wegetariańska", "BBQ Chicken", "Meat Lovers", "Capricciosa", "Fungi", "Quattro Stagioni", "Diavola");
    return $types[array_rand($types)];
}
function randomPizzaCrust()
{
    $crusts = array("Cienkie", "Grube", "Brzeg serowy", "Bezglutenowe");
    return $crusts[array_rand($crusts)];
}
function randomPizzaToppings()
{
    $toppings = array("Ser", "Pieczarki", "Szynka", "Salami", "Papryka", "Cebula", "Oliwki", "Ananas", "Krewetki", "Kurczak");
    shuffle($toppings);
    return implode(", ", array_slice($toppings, 0, rand(1, 5)));
}
function randomOrderDate()
{
    $start = strtotime("2025-01-01");
    $end = strtotime("2025-12-31");
    $timestamp = rand($start, $end);
    return date("Y-m-d H:i:s", $timestamp);
}
function randomOrderTotal()
{
    return round(rand(20, 100) + rand(0, 99) / 100, 2);
}
function randomOrderId()
{
    return rand(100000, 999999); // większy zakres, mniejsze ryzyko kolizji
}
