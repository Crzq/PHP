<?php
header("Content-type:image/png");                       // 设置生成图像格式
$im = imagecreate(120, 30);                         // 新建画布
$bg = imagecolorallocate($im, 0, 0, 255);       // 背景
$sg = imagecolorallocate($im, 255, 255, 255);   // 前景
imagefill($im, 120, 30, $bg);                             // 填充背景
imagestring($im, 7, 8, 5, "image crate", $sg); // 填充字符串
imagepng($im);                                                  // 输出图形
imagedestroy($im);                                              // 销毁资源变量