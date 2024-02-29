<?php

function celciusToFahrenheit($celcius)
{
    return floor(($celcius * 9) / 5 + 32); // floor untuk membulatkan float ke bawah
}

echo celciusToFahrenheit(0) . PHP_EOL;
echo celciusToFahrenheit(9) . PHP_EOL;
echo celciusToFahrenheit(20) . PHP_EOL;
