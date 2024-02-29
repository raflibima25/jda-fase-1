<?php

$disc_value = 0;

$tot_belanja = 7550000;
$bayar = 9000000;
$kembalian = 0;

if ($bayar < $tot_belanja) {
    $kembalian = 0;
} else if ($tot_belanja >= 2000000 && $tot_belanja < 5000000) {
    // $disc_value = ($tot_belanja / 100) * 5;
    $disc_value = $tot_belanja * 0.05;
    $tot_belanja = $tot_belanja - $disc_value;
    $kembalian = $bayar - $tot_belanja;
} else if ($tot_belanja >= 5000000 && $tot_belanja < 10000000) {
    $disc_value = $tot_belanja * 0.1;
    $tot_belanja = $tot_belanja - $disc_value;
    $kembalian = $bayar - $tot_belanja;
} else if ($tot_belanja >= 10000000) {
    $disc_value = $tot_belanja * 0.2;
    $tot_belanja = $tot_belanja - $disc_value;
    $kembalian = $bayar - $tot_belanja;
}

echo number_format($kembalian);
