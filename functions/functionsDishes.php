<?php

function randomDishName()
{
    $names = [
        "Margherita",
        "Pepperoni",
        "Hawajska",
        "BBQ Chicken",
        "Vegetariana",
        "Capricciosa",
        "Quattro Formaggi",
        "Diavola",
        "Funghi",
        "Toscana"
    ];
    return $names[array_rand($names)];
}

function randomDishPrice()
{
    return round(rand(2000, 4500) / 100, 2); // 20.00 – 45.00 zł
}

function randomIngredients()
{
    $all = ["ser", "pieczarki", "szynka", "salami", "papryka", "cebula", "oliwki", "ananas", "kurczak", "bazylia"];
    shuffle($all);
    return implode(", ", array_slice($all, 2, rand(2, 5)));
}

function randomCategory()
{
    $categories = ["Mięsna", "Wegetariańska", "Klasyczna", "Ostra"];
    return $categories[array_rand($categories)];
}
