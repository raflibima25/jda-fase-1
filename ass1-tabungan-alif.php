<?php

function tabungan($tabungan, $addMonth, $month): int
{
    $total = 0;
    $numMonths = 0;

    for ($i = 1; $i <= $month; $i++) {
        $total += $tabungan;
        if ($i > 1) {
            $numMonths += $addMonth;
            $total += $numMonths;
        }
    }

    return $total;
}

echo tabungan(100000, 50000, 2) . PHP_EOL;
