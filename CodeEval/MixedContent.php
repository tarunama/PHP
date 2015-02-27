<?php
$fh = fopen($argv[1], "r");

function removeConnma ($str) {
  return str_replace(",", "", $str);
}

while ($line = fgets($fh)) {
  $inputArr = explode(",", (trim($line)));

  $strArr = array();
  $numArr = array();
  foreach ($inputArr as $val) {
    if (ctype_digit($val)) {
      $numArr[] = $val;
    } else {
      $strArr[] = $val;
    }
  }

  $numArr = array_map("removeConnma", $numArr);
  $strArr = array_map("removeConnma", $strArr);

  $strLen = count($strArr);
  for($i = 0; $i < $strLen; $i++) {
    echo $strArr[$i];
    if ($i !== $strLen - 1) {
      echo ",";
    }
  }

  $numLen = count($numArr);
  if ($numLen !== 0) {
    if ($strLen !== 0) {
      echo "|";
    }
  }

  for($i = 0; $i < $numLen; $i++) {
    echo $numArr[$i];
    if ($i !== $numLen - 1) {
      echo ",";
    }
  }
  echo PHP_EOL;
}
