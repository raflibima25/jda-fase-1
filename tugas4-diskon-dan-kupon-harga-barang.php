<?php

function hitungKupon($kupon)
{
    $nilai_awal_kupon = 100;
    for ($i = 1; $i < $kupon; $i++) {
        $nilai_awal_kupon *= 2;
    }
    return $nilai_awal_kupon;
}

function hitungKembalian($tot_belanja, $bayar)
{

    $disc_value = 0;
    $kembalian = 0;

    if ($bayar < $tot_belanja) {
        $kembalian = 0;
    } else if ($tot_belanja < 2000000) {
        // $disc_value = $tot_belanja * 0;
        // $tot_belanja = $tot_belanja - $disc_value;
        $kembalian = $bayar - $tot_belanja + hitungKupon(5);
    } else if ($tot_belanja >= 2000000 && $tot_belanja < 5000000) {
        $disc_value = $tot_belanja * 0.05;
        $tot_belanja = $tot_belanja - $disc_value;
        $kembalian = $bayar - $tot_belanja + hitungKupon(7);
    } else if ($tot_belanja >= 5000000 && $tot_belanja < 10000000) {
        $disc_value = $tot_belanja * 0.1;
        $tot_belanja = $tot_belanja - $disc_value;
        $kembalian = $bayar - $tot_belanja + hitungKupon(10);
    } else if ($tot_belanja >= 10000000) {
        $disc_value = $tot_belanja * 0.2;
        $tot_belanja = $tot_belanja - $disc_value;
        $kembalian = $bayar - $tot_belanja + hitungKupon(12);
    }

    return $kembalian;
}

echo hitungKembalian(7550000, 9000000);
echo "<br>";
echo number_format(hitungKupon(10));
