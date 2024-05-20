<?php
if (isset($_POST["submit"])) {
    $targetDir = "uploads/";
    $targetFilePath = $targetDir . basename($_FILES["upload"]["name"]);

    // Check if the uploaded file is a valid image
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        exit;
    }

    // Check if the uploaded file is not too large
    if (file_exists($targetFilePath)) {
        echo "Sorry, file already exists.";
        exit;
    }
    if ($_FILES["upload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        exit;
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $targetFilePath)) {
        echo "The file " . basename($_FILES["upload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>