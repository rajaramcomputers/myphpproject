<?php
// Set the image content type header
header("Content-type: image/png");

// Define image dimensions
$imageWidth = 580;
$imageHeight = 280;

// Create a new image resource
$image = imagecreate($imageWidth, $imageHeight) or die("Failed to create image");

// Define background and text colors
$bgcolour = ImageColorAllocate($image, 80, 200, 255);
$fgcolour = ImageColorAllocate($image, 255, 255, 100);

// Create a standard font text element
ImageString($image, 10, 60, 50, "Hello there!", $fgcolour);

// Get the absolute path to the font file
$fontPath = realpath(__DIR__ . '/fonts/SCRIPTBL.TTF');

// Check if font exists and is readable
if (!is_readable($fontPath)) {
  die("Font file not found or inaccessible: " . $fontPath);
}

// Create a script font text element
$success = imagettftext($image, 40, 0, 30, 160, $fgcolour, $fontPath, "Testing Script True Type Font");

// Check for errors during text rendering
if (!$success) {
  die("Failed to render text with imagettftext");
}

// Output the image as PNG and clean up resources
ImagePng($image);
imagedestroy($image);
?>
