<?php
// 包含生成给定长度字符串的自定义函数 functions.php
include 'functions.php';
// 开启或继续会话，保存图形验证码到会话中供其他页面调用
if (!isset($_SESSION)) {
    session_start();
}
// 创建 65px × 20px 大小的图像
$im = imagecreate(50, 20);
// 文字不出现原因找到了，是因为文字没有处于背景之中
// 为一幅图像分配颜色: imagecolorallocate
$bg = imagecolorallocate($im, 0, 0, 255);
// 取得随机字符串
$text = random_text(5);
// echo $text;
// 输出字符到图形上
$sg = imagecolorallocate($im, 255, 255, 255);
//imagefill($im, 120, 30, $bg);                             // 填充背景
imagestring($im, 5, 0, 0, $text, $sg);
// 保存验证码到会话，用于比较验证
$_SESSION['captcha'] = $text;
// 输出图像
header("Content-type:image/png"); // 定义header, 声明图片文件
imagepng($im);
imagedestroy($im);


