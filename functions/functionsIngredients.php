<?php

function randomIngredientName()
{
    $ingredients = [
        "Ser mozzarella",
        "Pieczarki",
        "Szynka parmeńska",
        "Salami",
        "Papryka",
        "Cebula czerwona",
        "Oliwki",
        "Ananas",
        "Sos pomidorowy",
        "Kurczak",
        "Krewetki",
        "Bazylia",
        "Sos BBQ",
        "Parmezan",
        "Czosnek",
        "Tuńczyk",
        "Sos czosnkowy",
        "Sos chili",
        "Ser feta",
        "Brokuły",
        "Sos pesto",
        "Ser pleśniowy",
        "Sos curry",
        "Zioła prowansalskie",
        "Ser cheddar",
        "Sos tzatziki",
        "Papryczki jalapeño",
        "Kukurydza",
        "Cukinia",
        "Bakłażan",
        "Rukola",
        "Słonecznik",
        "Orzechy włoskie",
        "Słodka papryka",
        "Kardamon",
        "Gałka muszkatołowa",
        "Pietruszka"


    ];
    return $ingredients[array_rand($ingredients)];
}
