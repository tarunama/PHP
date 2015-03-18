<?php

function SumOfNumbers ($n)
{
    $ary = array();
    $count = 0;
    $number = 2;

    while ($count < $n) {
    	if (checkPrime($number)) {
            $ary[] = $number;
            $count++;
        }
        $number++;
    }
    return $ary;
}

function checkPrime ($number)
{
    for ($i = 1; $i < $number; $i++) {
        if ($number % $j === 0 && $i === 1) {
            return false;
        }
    }
    return true;
}

$prm_ary = SumOfNumbers(1000);

echo array_sum($prm_ary);
