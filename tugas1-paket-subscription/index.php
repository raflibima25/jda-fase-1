<?php

$paket_subscription = array(
    "harmony" => 149000,
    "ritme" => 219000,
    "melodi" => 299000
);

$numMonths = 2;

$totalPrice = $paket_subscription["ritme"] * $numMonths;

echo "Total harga: Rp. " . number_format($totalPrice, 0, ",", ".");
