<?php
// echo phpinfo();
include 'functions.php';

if (!isset($_SESSION)) {
    session_start();
}

$width = 65;
$height = 20;
$image = imagecreate($width, $height);
$bg_color = imagecolorallocate($image, 0x33, 0x66, 0xff);
$text = random_text(5);
$font = 5;
$fg_color = imagecolorallocate($image, 255, 255, 255);
imagestring($image, $font, 10, 2, $text, $fg_color);
$_SESSION['captcha'] = $text;
header('Content-type:image/png');
imagepng($image);
imagedestroy($image);