<?php

function randomRating()
{
    return rand(1, 5);
}

function randomComment()
{
    $comments = [
        "Super szybka dostawa i pyszna pizza!",
        "Zamówienie przyszło zimne, nie polecam.",
        "Pizza ok, ale czas oczekiwania zbyt długi.",
        "Mega smaczna, jak zawsze!",
        "Obsługa klienta na najwyższym poziomie.",
        "Zamówiłem inną pizzę niż dostałem.",
        "Wszystko zgodnie z opisem, polecam.",
        "Pizza była zbyt słona.",
        "Dostawa była opóźniona o 30 minut.",
        "Nie podobało mi się, że nie było sosu czosnkowego.",
        "Średnia jakość, mogło być lepiej.",
        "Najlepsza pizza w mieście!",
        "Cena do jakości idealna.",
        "Nie polecam, pizza była przypalona.",
        "Zamówienie było niekompletne.",
        "Dostawca był bardzo miły.",
        "Pizza była zimna, ale smaczna.",
        "Zamówienie przyszło szybciej niż się spodziewałem.",
        "Nie mogę się doczekać, żeby zamówić ponownie!",
        "Pizza była zbyt tłusta.",
        "Zamówienie było gotowe na czas.",
        "Nie było sosu, który zamówiłem.",
        "Pizza była idealnie wypieczona.",
        "Zamówienie było zrealizowane bez problemów.",
        "Nie podobało mi się, że nie było gratisów.",
        "Zamówienie było zrealizowane zgodnie z moimi oczekiwaniami.",
        "Pizza była zbyt mała jak na tę cenę.",
        "Zamówienie było zrealizowane szybko i sprawnie.",
        "Nie podobało mi się, że nie było możliwości śledzenia zamówienia.",
        "Pizza była bardzo smaczna, ale zbyt droga.",

    ];
    return $comments[array_rand($comments)];
}
