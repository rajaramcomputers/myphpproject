<?php
$indexedArray = [1, "Hi"];

echo $indexedArray[0] . "\n";
echo $indexedArray[1] . "\n";

echo nl2br(implode("\n", $indexedArray));

$associativeArray = array();

$associativeArray['age']= 17;

echo "The age is {$associativeArray['age']} <br>";
echo "The age is $associativeArray[age]";
?>