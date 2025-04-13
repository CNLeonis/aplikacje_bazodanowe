<?php

function randomOrderDate()
{
    $start = strtotime("2025-01-01");
    $end = strtotime("2025-12-31");
    $randomTimestamp = rand($start, $end);
    return date("Y-m-d", $randomTimestamp);
}

function randomOrderStatus()
{
    $statuses = array("Złożone", "W trakcie realizacji", "Zrealizowane", "Anulowane");
    return $statuses[array_rand($statuses)];
}

function randomOrderType()
{
    $types = array("Dostawa", "Odbiór", "Na miejscu");
    return $types[array_rand($types)];
}
