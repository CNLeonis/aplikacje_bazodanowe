<?php


function randomPaymentMethod()
{
    $methods = array("Gotówka", "Karta kredytowa", "Przelew bankowy", "Kryptowaluta");
    return $methods[array_rand($methods)];
}
