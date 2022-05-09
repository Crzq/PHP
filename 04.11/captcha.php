<?php

include 'functions.php';

if (!isset($_SESSION)) {
    session_start();
}

$width = 65;
$height = 20;
$image = imagecreate($width, $height);
$bg_color = imagecolorallocate($image, 0, 0,0);
$text = random_text(5);
$font = 5;
$x = imagesx($image) / 2 - strlen($text) * imagefontwidth($font) / 2;
$y = imagesy($image) / 2 - imagefontheight($font) / 2;
$fg_color = imagecolorallocate($image, 0xff, 0xff, 0xff);
imagestring($image, $font, $x, $y, $text, $fg_color);
$_SESSION['captcha'] = $text;
header('Content-type:image/png'); 
imagepng($image);
imagedestroy($image);
?>