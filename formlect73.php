<?php
$a = "123";

if (is_int($a)) {
    echo "$a is an integer.<br>";
} else {
    echo "$a is not an integer.<br>";
}

if (ctype_digit($a)) {
    echo "$a is a valid number.<br>";
} else {
    echo "$a is not a valid number.<br>";
}
?>