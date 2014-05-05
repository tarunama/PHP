<?PHP
$content = fopen($argv[1], "r");

while (($line = fgets($content)) ==! false) {
    $ary[] = preg_split("/[\s]/", $line);
    $pattern = preg_split("/[\+\-]/", $ary[0][1]);
    var_dump($pattern);
}

fclose($content);
/*
foreach ($ary[1] as $val) {
    if ($val === "+" || $val === "-") {

    }
}
foreach ($ary as $val) {
    $pattern = preg_split("[\+-]", $val);
}

*/
