<?PHP
$content = fopen($argv[1], "r");

while (($line = fgets($content)) ==! false) {
    $ary = preg_split("/[\s]/", $line);
    $str = $ary[1];
    
    $pattern = preg_split("/[\+\-]/", $ary[1]);
    
    foreach (str_split($pattern[0]) as $val) {
        $left[] = $val;
    }
    foreach (str_split($pattern[1]) as $val) {
        $right[] = $val;
    }
    $leftnumber     = substr($ary[0], 0, count($left));
    $rightnumber    = substr($ary[0], count($left));

    if (strstr($ary[1], "+")) {
        echo $leftnumber + $rightnumber . PHP_EOL;
    } elseif (strstr($ary[1], "-")) {
        echo $leftnumber - $rightnumber . PHP_EOL;
    }

    unset($left);
    unset($right);
    unset($rightnumber);
    unset($leftnumber);
}

fclose($content);
