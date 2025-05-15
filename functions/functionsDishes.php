<?php

function randomDish()
{
    $dishes = [
        //  Pizze
        [
            'name' => 'Margherita',
            'ingredients' => 'sos pomidorowy, ser mozzarella, bazylia',
            'category' => 'Pizza'
        ],
        [
            'name' => 'Pepperoni',
            'ingredients' => 'sos pomidorowy, ser mozzarella, pepperoni',
            'category' => 'Pizza'
        ],
        [
            'name' => 'Hawajska',
            'ingredients' => 'sos pomidorowy, ser mozzarella, szynka, ananas',
            'category' => 'Pizza'
        ],
        [
            'name' => 'Vegetariana',
            'ingredients' => 'sos pomidorowy, ser mozzarella, papryka, pieczarki, cebula, oliwki',
            'category' => 'Pizza'
        ],
        [
            'name' => 'BBQ Chicken',
            'ingredients' => 'sos BBQ, ser mozzarella, kurczak, cebula czerwona',
            'category' => 'Pizza'
        ],
        //  Napoje
        [
            'name' => 'Pepsi',
            'ingredients' => 'napój gazowany',
            'category' => 'Napoje'
        ],
        [
            'name' => '7UP',
            'ingredients' => 'napój gazowany',
            'category' => 'Napoje'
        ],
        [
            'name' => 'Mirinda',
            'ingredients' => 'napój gazowany',
            'category' => 'Napoje'
        ],
        [
            'name' => 'Lipton Ice Tea',
            'ingredients' => 'napój herbaciany',
            'category' => 'Napoje'
        ],
        //  Makarony
        [
            'name' => 'Spaghetti Bolognese',
            'ingredients' => 'makaron spaghetti, sos bolognese, parmezan',
            'category' => 'Makaron'
        ],
        [
            'name' => 'Penne Carbonara',
            'ingredients' => 'makaron penne, sos carbonara, boczek, parmezan',
            'category' => 'Makaron'
        ],
        //  Lody
        [
            'name' => 'Lody waniliowe',
            'ingredients' => 'lody waniliowe',
            'category' => 'Lody'
        ],
        [
            'name' => 'Lody czekoladowe',
            'ingredients' => 'lody czekoladowe',
            'category' => 'Lody'
        ],
        [
            'name' => 'Lody truskawkowe',
            'ingredients' => 'lody truskawkowe',
            'category' => 'Lody'
        ]
    ];

    return $dishes[array_rand($dishes)];
}

function randomDishPrice($category)
{
    switch ($category) {
        case 'Pizza':
            return round(rand(2500, 4500) / 100, 2); // 25.00 – 45.00 zł
        case 'Napoje':
            return round(rand(500, 1500) / 100, 2); // 5.00 – 15.00 zł
        case 'Makaron':
            return round(rand(2000, 3500) / 100, 2); // 20.00 – 35.00 zł
        case 'Lody':
            return round(rand(800, 2000) / 100, 2); // 8.00 – 20.00 zł
        default:
            return round(rand(1000, 3000) / 100, 2); // 10.00 – 30.00 zł
    }
}
