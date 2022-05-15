<?php
header("Content-type:image/png");
$im = imagecreate(80, 20);
$bg = imagecolorallocate($im, 255, 255, 0);
$sg = imagecolorallocate($im, 0, 0, 0);
$ag = imagecolorallocate($im, 231, 104, 50);
imagefill($im, 120, 30, $bg);
$str = 'qwertyuiopasdfghjklzxcvbnm123456789QWERTYUIOPASDFGHJKLZXCVBNM';
$len = strlen($str) - 1;
for ($i = 0; $i <4; ++$i) {
    $str1 = $str[mt_rand(0, $len)]; // 取随机字符串
    imagechar($im, 7, 16 * $i + 7, 2, $str1, $sg);
}
for ($i = 0; $i < 100; ++$i) {
    imagesetpixel($im, rand() % 80, rand() % 20, $ag);
}
imagepng($im);
imagedestroy($im);