<?php

function calculate (&$v1, &$v2){
    $tmp = $v1;
    $v1 = $v2;
    $v2 = $tmp;
}
$a = 5; $b=10;

calculate($a, $b);

echo $a. "  " . $b;

$indexedArray = array();
$indexedArray[0] = 1;
$indexedArray[1] = 'Hi';

echo $indexedArray[0]. "\n";
echo $indexedArray[1]. "\n";




?>
