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
    for ($j = 2; $j < $number; $j++) {
        if ($number % $j === 0) {
            return false;
        }
    }
    return true;
}

$prm_ary = SumOfNumbers(1000);

//$sum = array_sum($prm_ary);
echo array_sum($prm_ary);
