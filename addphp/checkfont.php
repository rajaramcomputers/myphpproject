
<?php
$fontFilePath = __DIR__ . '/fonts/SCRIPTBL.TTF';

if (file_exists($fontFilePath)) {
    echo "The font file exists.";
} else {
    echo "The font file does not exist.";
}
phpinfo();
?>
