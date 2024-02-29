<?php

function tokoFarida($bayar)
{

    $discValue = 0;

    if ($bayar > 20000) {
        $discValue = $bayar * 0.1;
        $bayar -= $discValue;
    } else if ($bayar > 15000) {
        $discValue = $bayar * 0.07;
        $bayar -= $discValue;
    } else if ($bayar > 10000) {
        $discValue = $bayar * 0.05;
        $bayar -= $discValue;
    }

    return ceil($bayar); // membulatkan desimal keatas
}

echo tokoFarida(17000);
