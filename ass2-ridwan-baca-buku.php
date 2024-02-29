<?php

function bacaBuku($nextDay, $day): int
{
    $total = 4;

    for ($i = 1; $i < $day; $i++) {
        $total += $nextDay;
    }

    return $total;
}

echo bacaBuku(6, 4);
