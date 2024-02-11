<?php

declare(strict_types=1); // untuk membuat PHP lebih ketat dalam tipe data di parameter dengan di argument

include "function.php"; // export file

echo kelilingPersegi(5, 5); // panggil func di function.php

echo "<br>";

function luasSegitiga($alas, $tinggi)
{
    echo $alas * $tinggi / 2;
}

luasSegitiga(8, 12);

echo "<br>";

// mengatur default param
function luasPersegi($panjang = 10, $lebar)
{
    echo $panjang * $lebar;
}

luasPersegi(10, 10);

echo "<br>";

// mengatur tipe data pada param
function luasLingkaran(float $phi, int $jari)
{
    return $phi * $jari * 2;
}

$hasil = luasLingkaran(3.14, 2);
echo $hasil * 2;
