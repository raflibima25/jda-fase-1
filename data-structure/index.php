<?php

// integer
$umur = 22;
echo $umur . "<br>";
echo var_dump($umur); // fungsi menampilkan tipe data
unset($umur); // fungsi menghapus variabel

echo "<br><br>"; // enter

// array numeric
$biodata = ["Bima", 22, 2001];
echo $biodata[0] . "<br>";
print_r($biodata); // fungsi PHP untuk menampilkan data

echo "<br>"; // enter

// array asosiatif
$biodata = array(
    "nama" => "Bima",
    "umur" => 22,
    "hobi" => "Berenang"
);
echo $biodata["hobi"] . "<br>";
print_r($biodata); // fungsi PHP untuk menampilkan data

echo "<br>"; // enter

// array multidimensi
$pakaian = [
    ["Kemeja", 22, 18],
    ["Kaos", 10, 8],
    ["Blazer", 30, 10],
];
echo "Jenis pakaian: " . $pakaian[0][0] . "<br>";
echo "Stock: " . $pakaian[0][1] . "<br>";
echo "Terjual: " . $pakaian[0][2] . "<br>";

echo "<br>"; // enter

// object
$barang = (object) [
    "nama" => "Kemeja",
    "ukuran" => "M",
    "harga" => 100000,
];
echo "Nama: {$barang->nama} <br>";
echo "Ukuran: {$barang->ukuran} <br>";
echo "Harga: {$barang->harga} <br>";


echo "<pre>"; // defines preformatted text
print_r($barang); // fungsi PHP untuk menampilkan data
echo "<pre>";

echo "<br>"; // enter

// object multidimensi
$biodata = (object)[
    "nama" => "Bima",
    "umur" => 22,
    "hobi" => [
        'game' => "ff",
        'laptop' => "lenovo"
    ]
];
$biodata->hobi = (object)$biodata->hobi; // conversi hobi menjadi object
echo "<pre>"; // defines preformatted text
print_r($biodata); // fungsi PHP untuk menampilkan data
echo "<pre>";
echo $biodata->hobi->laptop; // memanggil obj multi

echo "<br><br>"; // enter

// penjumlahan
$bilangan1 = 20;
$bilangan2 = 30;

echo $bilangan1 + $bilangan2;
echo "<br>";
echo $bilangan1 - $bilangan2;
echo "<br>";
echo $bilangan1 * $bilangan2;
echo "<br>";
echo $bilangan1 / $bilangan2;
echo "<br>";
echo $bilangan1 ** $bilangan2; // pemangkatan
echo "<br>";
echo $bilangan1 % $bilangan2; // sisa bagi

echo "<br>"; // enter

// concatenate PHP
echo $biodata["nama"] . $biodata["hobi"] . $barang->harga;

echo "<br>"; // enter

// variable constant = define(name, value, case-insensitive)
// case-insensitive default = false
define("NAMA", "Bima manis");

echo NAMA;
