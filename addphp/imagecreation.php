<?php
header("Content-type: image/png");//example of header

$image = imagecreate(280, 180) or die("Failed to create");

$bgcolour = ImageColorAllocate($image, 100, 200, 255);
$fgcolour = ImageColorAllocate($image, 255, 0, 255);

ImageString($image, 10, 60, 50, "Hello there!", $fgcolour);

ImagePng($image);
Imagedestroy($image);
?>
