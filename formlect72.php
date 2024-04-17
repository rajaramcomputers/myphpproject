<?php
function validate_price($value)
{  // Ensure that $value is a valid price
   global $errors;

   // init array if not defined already
   if(!isset($errors)) $errors = array();

   if( !is_numeric($value) ) $errors['not_number'] = "not numeric";
   if( $value - round($value, 2) != 0 ) $errors['not_dollar'] = "not a dollar amount";
   if( $value < 0 ) $errors['not_non-negative'] = "price cannot be negative";
}

$value = -12.403;
$errors = array();
validate_price($value);
if ($errors) {
    echo "Validation errors found: <br>";
    foreach ($errors as $error) {
        echo "- " . $error . "<br>";
    }
} else {
    echo "Price is valid.";
}
?>