<?php
function random_text($count,$rm=false){
    $chars=array_flip(array_merge(range(0, 9),range('A', 'Z'),range('a','z')));
    
    if ($rm) {
        unset($chars[0],$chars['o'],$chars['O'],$chars[1],$chars['I']);
    }
    for ($i = 0,$text=''; $i < $count; $i++) {
        $text.=array_rand($chars);
    }
    return $text;
}
$text1=random_text(5);

header("Content-type: image/png");
$im1=imagecreate(60, 25);
$ag=imagecolorallocate($im1,56, 142, 60);
$bg=imagecolorallocate($im1,255,255,255);
imagefill($im1,120,30,$ag);
imagestring($im1,7,8,5,$text1,$bg);
imagepng($im1);
imagedestroy($im1);
?>