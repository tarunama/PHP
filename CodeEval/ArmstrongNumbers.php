<?php
$fh = fopen($argv[1], 'r');

while ($test = fgets($fh)) {
    $inputNum = trim($test);
    $strArray = str_split($inputNum);
    $power = strlen($inputNum);
    
    $result = 0;
    foreach ($strArray as $val) {
        $result += pow($val, $power);
    }
      
    if ((int)$inputNum === $result) {
        echo 'True' . PHP_EOL;
    } else {
        echo 'False' . PHP_EOL;
    }
}
