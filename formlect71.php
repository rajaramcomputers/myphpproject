<?php
function validate_price($value) 
{ // Ensure that $value is a valid price
    if( !isset($errors)) $errors = array(); // init array if not defined already
    if( !is_numeric($value) ) $errors['not_number'] = "not numeric";
    if( $value - round($value, 2) != 0 ) $errors['not_dollar'] = "not a dollar amount";
    if( $value < 0 ) $errors['not_non-negative'] = "price cannot be negative";
    return $errors;
}

$errors = validate_price('10.245');
if ($errors) {
    echo "Validation errors found: <br>";
    foreach ($errors as $error) {
        echo "- " . $error . "<br>";
    }
} else {
    echo "Price is valid.";
}
?>