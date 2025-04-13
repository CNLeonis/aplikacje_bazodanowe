<?php

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
        "Cicha",
        "Słowiańska",
        "Wielkopolska",
        "Mazurska"
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
        "Toruń",
        "Zielona Góra",
        "Opole",
        "Rzeszów"
    );
    return $cities[array_rand($cities)];
}
function randomPostalCode()
{
    return rand(10, 99) . "-" . rand(100, 999);
}
