<?php

function randomDeliveryName()
{
    $names = array(
        "Uber Eats",
        "Pyszne.pl",
        "Glovo",
        "Bolt Food",
        "Wolt",
        "Takeaway.com",
        "Deliveroo",
        "Just Eat",
        "DoorDash",
        "Postmates",
        "Zomato",
        "Foodpanda",
        "Swiggy",
        "Grubhub",
        "SkipTheDishes",
    );
    return $names[array_rand($names)];
}
function randomPhone()
{
    $prefixes = array("400", "401", "402", "403", "404", "405", "406", "500", "501", "502", "503", "504", "505", "700", "789", "546", "345", "456", "567", "769", "600", "601", "602", "603", "604", "605", "606", "607", "608", "609");
    return $prefixes[array_rand($prefixes)] . rand(100000, 999999);
}
