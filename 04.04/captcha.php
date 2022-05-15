<!--	--><?php
/*// 包括生成给定长度字符串的自定义函数 function.php
include "functions.php";
// 开启或继续会话，保存图形验证码到会话中供其他页面调用
// echo phpinfo();
if (!isset($_SESSION)) {
	session_start();
}
// 创建65px×20px大小的图形
$width = 65;
$height = 20;
$image = imagecreate($width, $height);
// 为一幅图像分配颜色：imagecolorallocate
$bg_color = imagecolorallocate($image, 0x33, 0x66, 0xff);
// 取得随机字符串
$text = random_text(4);
// 定义字体/位置
$font = 5;
$x = imagesx($image) / 2 - strlen($text) * imagefontwidth($font) / 2;
$y = imagesy($image) / 2 - imagefontheight($font) / 2;
// 输出字符到图形上
$fg_color = imagecolorallocate($image, 0xff, 0xff, 0xff);
imagestring($image, $font, $x, $y, $text, $fg_color);
// 保存验证码到会话，用于比较验证
$_SESSION['captcha'] = $text;
// 输出图形
ob_clean();  //关键代码，防止出现'图像因其本身有错无法显示'的问题。
header('Content-type:image/png'); // 定义header，声明图片文件
imagepng($image);
imagedestroy($image);

*/?>



<?php
// echo phpinfo(); 
$w = 80; //设置图片宽和高
$h = 26;
$str = Array(); //用来存储随机码
$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";//随机挑选其中4个字符，也可以选择更多，注意循环的时候加上，宽度适当调整
for($i = 0;$i < 4;$i++){
   $str[$i] = $string[rand(0,35)];
   $vcode .= $str[$i];
}
session_start(); //启用超全局变量session
$_SESSION["vcode"] = $vcode;
$im = imagecreatetruecolor($w,$h);
$white = imagecolorallocate($im,255,255,255); //第一次调用设置背景色
$black = imagecolorallocate($im,0,0,0); //边框颜色
imagefilledrectangle($im,0,0,$w,$h,$white); //画一矩形填充
imagerectangle($im,0,0,$w-1,$h-1,$black); //画一矩形框
//生成雪花背景
for($i = 1;$i < 200;$i++){
   $x = mt_rand(1,$w-9);
   $y = mt_rand(1,$h-9);
   $color = imagecolorallocate($im,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
   imagechar($im,1,$x,$y,"*",$color);
}
//将验证码写入图案
for($i = 0;$i < count($str);$i++){
   $x = 13 + $i * ($w - 15)/4;
   $y = mt_rand(3,$h / 3);
   $color = imagecolorallocate($im,mt_rand(0,225),mt_rand(0,150),mt_rand(0,225));
   imagechar($im,5,$x,$y,$str[$i],$color);
}
ob_clean();//原来的程序没有这一栏
header("Content-type:image/jpeg"); //以jpeg格式输出，注意上面不能输出任何字符，否则出错
imagejpeg($im);
imagedestroy($im);


?>