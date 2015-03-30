<?php
/*TOFIX
 *fix operator in ifstatement in PHP7
 */

$fh = fopen($argv[1], 'r');

function ageDistribution ($age)
{
    $str = '';
    if ($age < 0) {
        $str = 'This program is for humans';
    }
    elseif (0 <= $age && $age <= 2) {
        $str = "Still in Mama's arms";
    }
    elseif (3 === $age || 4 === $age) {
        $str = 'Preschool Maniac';
    }
    elseif (5 <= $age && 11 >= $age) {
        $str = 'Elementary school';
    }
    elseif (15 <= $age && 18 >= $age) {
        $str = 'High school';
    }
    elseif (19 <= $age && 22 >= $age) {
        $str = 'College';
    }
    elseif (23 <= $age && 65 >= $age) {
        $str = 'Working for the man';
    }
    else {
        $str = 'The Golden Years';
    }
    return $str;
}

while ( $n = trim(fgets($fh)) )
{
    echo ageDistribution((int)$n) . PHP_EOL;
}
