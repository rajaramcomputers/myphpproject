<?php
$purchase = array('thing one', 'thing two');

if (isset($_POST['secret']) && $_POST['secret'] == 96) {
    $purchase = unserialize(urldecode($_POST['purchase']));

    if (is_array($purchase)) {
        echo "The purchase value is: " . print_r($purchase, true);
    }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
    <input type='hidden' name='secret' value=96>
    <input type='hidden' name='purchase' value="<?php echo urlencode(serialize($purchase)); ?>">
    <input type='submit' value='Submit'>
</form>