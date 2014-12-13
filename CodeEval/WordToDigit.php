<?php
$fh = fopen($argv[1], 'r');

function wordToDigit($numListString)
{
    $numArr = explode(';', $numListString);
    $end = count($numArr);
    $result = '';
    for ($i = 0; $i < $end; $i++) {
        if ($numArr[$i] === 'zero') {
            $result .= '0';
        } elseif ($numArr[$i] === 'one') {
            $result .= '1';
        } elseif ($numArr[$i] === 'two') {
            $result .= '2';
        } elseif ($numArr[$i] === 'three') {
            $result .= '3';
        } elseif ($numArr[$i] === 'four') {
            $result .= '4';
        } elseif ($numArr[$i] === 'five') {
            $result .= '5';
        } elseif ($numArr[$i] === 'six') {
            $result .= '6';
        } elseif ($numArr[$i] === 'seven') {
            $result .= '7';
        } elseif ($numArr[$i] === 'eight') {
            $result .= '8';
        } elseif ($numArr[$i] === 'nine') {
            $result .= '9';
        }
    }
    return $result;
}

while ($test = fgets($fh)) {
    echo wordToDigit(trim($test)) . PHP_EOL;    
}
