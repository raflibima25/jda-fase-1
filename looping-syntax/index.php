<?php

// +=n / -=n = penambahan/pengurangan senilai n

// Perulangan FOR
for ($i = 1; $i <= 10; $i++) {
    echo "Anga ke $i <br>";
}

// while
$i = 1; // variabel index
while ($i <= 10) {
    echo "Anga ke $i <br>";
    $i++;
}

// do - while
do {
    echo "Anga ke $i <br>";
    $i++;
} while ($i <= 10);

// foreach
$fruits = ["Mangga", "Alpukat", "Jeruk", "Rambutan"];

foreach ($fruits as $item) {
    echo "$item <br>";
}

// array asosiatif
$barang = array(
    "nama" => "Handphone",
    "merk" => "Realme",
    "harga" => 100000,
);

foreach ($barang as $key => $item) {
    echo $key . " = $item <br>";
}
