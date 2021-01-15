<?php
/*
 * https://en.wikipedia.org/wiki/Fibonacci_number#Identification
 * The question may arise whether a positive integer x is a Fibonacci number.
 * This is true if and only if at least one of
 * 5x^{2}+4}5x^{2}+4 or 5x^{2}-4}5x^{2}-4 is a perfect square
 * */

function isThisFibonacciNumber($var)
{
    $test1 = sqrt(5 * pow($var, 2) + 4);
    $test2 = sqrt(5 * pow($var, 2) - 4);
    // проверим на условие является ли число чистым квадратом:
    if ((float)($test1 - intval($test1)) === (float)0) {
        return true;
    } elseif((float)($test2 - intval($test2)) === (float)0) {
        return true;
    } else {
        return false;
    }
}

$array = [3279, 920, 4181, 8, 337, 13, 918, 4923, 4448, 8, 4756, 4012, 7467, 89, 21, 2400, 4409, 6005, 3172, 55, 5, 6367, 8, 9970, 144, 1, 4360, 407, 7010, 9160, 7149, 9038, 9196, 8625, 662, 1597, 21, 2592, 1597, 5424, 2584, 2937, 1597, 9835, 7960, 2254, 3531, 8034, 9393, 807, 3225, 6765, 399, 3230, 34, 153, 2, 3980, 2093, 9238, 2326, 6453, 89, 4606, 3413, 3, 9950, 2098, 8579, 4914, 7204, 8875];

$sum = 0;
foreach ($array as $var) {
    if (isThisFibonacciNumber($var)) {
        global $sum;
        $sum += $var;
    }
}
echo $sum;