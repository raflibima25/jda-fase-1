<?php

$kata = "programmer";
$kata_dicari = "r";
$jumlah = 0;

foreach (str_split($kata) as $item) {
    if ($item == $kata_dicari) {
        $jumlah++;
    }
}

echo "$jumlah <br>";
