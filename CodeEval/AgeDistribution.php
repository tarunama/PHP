<?php
$fh = fopen($argv[1], "r");

while ($n = trim(fgets($fh)))
{
    if (0 > $n) {
        echo 'This program is for humans';
    }
    elseif (0 <= $n && $n <= 2) {
        echo "Still in Mama's arms";
    }
    elseif (3 === $n || 4 === $n) {
        echo 'Preschool Maniac';
    }
    elseif (5 <= $n && 11 >= $n) {
        echo 'Elementary school';
    }
    elseif (15 <= $n && 18 >= $n) {
        echo 'High school';
    }
    elseif (19 <= $n && 22 >= $n) {
        echo 'College';
    }
    elseif (23 <= $n && 65 >= $n) {
        echo 'Working for the man';
    }
    else {
        echo 'The Golden Years';
    }
    echo PHP_EOL;
}
