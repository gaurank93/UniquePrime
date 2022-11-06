<?php
function isPrime($num)
{
    if ($num == 1)
        return false;
    if ($num == 2)
        return true;
    if ($num % 2 == 0) {
        return false;
    }
    $newNum = ceil(sqrt($num));
    for ($i = 3; $i <= $newNum; $i = $i + 2) {
        if ($num % $i == 0)
            return false;
    }
    return true;
}

function findUniquePrimes($start, $end)
{
    $a = array();
    $r = array();
    for ($i = $start; $end >= $i; $i++) {
        if (isPrime($i)) {
            $a[] = $i;
            if (count($a) > 2 && !in_array($i, $r)) {
                if ($end >= (($a[count($a) - 1] + $a[count($a) - 2]) + 1) && isPrime(($a[count($a) - 1] + $a[count($a) - 2]) + 1)) {
                    $r[] = (($a[count($a) - 1] + $a[count($a) - 2]) + 1);
                }
            }
        }
    }
    $string = implode(", ", $r);
    echo $string;
}

findUniquePrimes(10, 100);