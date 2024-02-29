<?php

function palindrome($string)
{
    $reversed = "";
    $string = preg_replace('/[^a-z]+/i', '', $string); // to ignore tanda baca and spasi

    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }

    $isPalindrome = $string === $reversed ? "benar" : "salah"; // ternary operator

    return $isPalindrome;
    // return $reversed;
}

echo palindrome("12/02/2021");
