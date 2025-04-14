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
        "Mazurska",
        "Podlaska",
        "Pomorska",
        "Zachodniopomorska",
        "Lubuska",
        "Małopolska",
        "Śląska",
        "Opolska",
        "Dolnośląska",
        "Kujawska",
        "Pomorska",
        "Warmińska",
        "Mazowiecka",
        "Podkarpacka",
        "Świętokrzyska",
        "Lubuska",




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
        "Rzeszów",
        "Białystok",
        "Gorzów Wielkopolski",
        "Koszalin",
        "Radom",
        "Słupsk",
        "Tychy",
        "Chorzów",
        "Gliwice",
        "Zabrze",
        "Dąbrowa Górnicza",
        "Jaworzno",
        "Nowy Sącz",
        "Stalowa Wola",
        "Tarnobrzeg",
        "Kielce",
        "Częstochowa",
        "Olsztyn",
        "Elbląg",
        "Toruń",
        "Płock",
        "Siedlce",
        "Legnica",
        "Lubin",
        "Wałbrzych",
        "Jelenia Góra",
        "Nowa Sól",
        "Głogów",
        "Świdnica",
        "Zgorzelec",
        "Bolesławiec",
        "Lubań"
    );
    return $cities[array_rand($cities)];
}
function randomPostalCode()
{
    return rand(10, 99) . "-" . rand(100, 999);
}
