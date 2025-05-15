<?php

function randomStorageName()
{
    $names = ["Zamrażalka", "Chłodnia", "Suchy"];
    return $names[array_rand($names)];
}

function randomShelf()
{
    return rand(1, 10); // regał 1–10
}

function randomIngredientCount()
{
    return rand(1, 100); // przykładowo 1–100 sztuk danego składnika
}
