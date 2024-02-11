<?php

// Pengkondisian
$nilai = 78;
$alpha = 4;

if ($nilai >= 70) {
    echo "Lulus";
} else if ($nilai <= 70) {
    echo "Tidak lulus";
} else {
    echo "Nama tidak ada";
}

// nested if
if ($nilai > 70) {
    if ($alpha > 3) {
        echo "Tidak lulus \n";
    } else {
        echo "Lulus";
    }
}

echo "<br>";

// switch case
$kode_menu = 10;
$harga = 0;
$paket_menu = "";

switch ($kode_menu) {
    case 1:
        $paket_menu = "Nasi Ayam";
        $harga = 12000;
        break;

    case 2:
        $paket_menu = "Nasi Bebek";
        $harga = 16000;
        break;

    case 3:
        $paket_menu = "Nasi Lele";
        $harga = 14000;
        break;

    default:
        $paket_menu = "Paket yang anda pilih salah";
}

echo "Anda memilih $paket_menu <br/>";
echo "Harga $harga";
