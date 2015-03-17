<?php
$fh = fopen($argv[1], 'r');

Class JsonMenuIds
{
    public getItemLimit ($ary) {
        return count($ary['menu']['items']);
    }

    public validateExistItem ($ary) {
        if (!isset($ary['menu']['items'][$i])){
          return continue;
        }
        return;
    }

    public countItems ($ary) {
        if ( array_key_exists('label', $ary['menu']['items'][$i]) ) {
            return $ary['menu']['items'][$i]['id'];
        }
    }
}

$jmi = new JsonMenuIds();

while ($line = fgets($fh)) {
    $sum    = 0;
    $ary    = json_decode(trim($line), true);
    $limit  = $jmi->getItemLimit($ary);

    for ($i = 0; $i < $limit; $i++) {
        $jmi->validateExistItem($ary);
        $sum += $jmi->countItems($ary);
    }
    echo $sum . PHP_EOL;
}
