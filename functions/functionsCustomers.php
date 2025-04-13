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
        "Natalia",
        "Katarzyna",
        "Wojciech",
        "Emilia",
        "Aleksandra",
        "Szymon",
        "Oliwia",
        "Maja",
        "Krzysztof",
        "Patryk",
        "Ewa",
        "Barbara",
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
        "Mazur",
        "Jankowski",
        "Krawczyk",
        "Piotrowski",
        "Grabowski",
        "Pawlak",
        "Nowicki",
        "Kozłowski",
        "Król",
        "Wieczorek",
        "Jasiński",
        "Bąk",
        "Walczak",
    );
    return $names[array_rand($names)] . " " . $surnames[array_rand($surnames)];
}


function randomEmail($name = '')
{
    $domains = array("gmail.com", "wp.pl", "o2.pl", "onet.pl", "interia.pl", "gazeta.pl", "poczta.pl");

    if (empty($name)) {
        $namePart = 'user';
    } else {
        $nameParts = explode(' ', strtolower($name));
        $first = isset($nameParts[0]) ? $nameParts[0] : 'user';
        $last = isset($nameParts[1]) ? $nameParts[1] : '';
        $namePart = $first . '.' . $last;
    }

    return $namePart . rand(1000, 9999) . '@' . $domains[array_rand($domains)];
}
function randomPhone()
{
    $prefixes = array("400", "401", "402", "403", "404", "405", "406", "500", "501", "502", "503", "504", "505", "700", "789", "546", "345", "456", "567", "769", "600", "601", "602", "603", "604", "605", "606", "607", "608", "609");
    return $prefixes[array_rand($prefixes)] . rand(100000, 999999);
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

function randomOrderTotal()
{
    return round(rand(20, 100) + rand(0, 99) / 100, 2);
}
