<?php
$fh = fopen($argv[1], 'r');

function armstrongNumber($num)
{
    $strArray = str_split($num);
    $power = strlen($num);

    $result = 0;
    foreach ($strArray as $val) {
        $result += pow($val, $power);
    }
      
    if ((int)$num === $result) {
        return 'True';
    } else {
        return 'False';
    }
}

while ($test = fgets($fh)) {
    echo armstrongNumber(trim($test)) . PHP_EOL;
}
