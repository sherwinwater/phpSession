<?php

session_start();
$width = isset($_GET["width"]) ? htmlentities($_GET["width"]) : 0;
$height = isset($_GET["height"]) ? htmlentities($_GET["height"]) : 0;

if ($width >= 0) {
    $_SESSION['width'] = $width;
}
if ($height >= 0) {
    $_SESSION['height'] = $height;
}
echo "<h1>Screen Resolution:</h1>";
echo "Width: $width<br>";
echo "Height: $height<br>";
?>