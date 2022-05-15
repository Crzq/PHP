<?php
// 返回给定长度的随机字符串
function random_text($count, $rm_similar = false) {
	// 创建字符数组
	$char = array_flip(array_merge(range(0, 9), range('A', 'Z')));
	// 删除容易引起混淆的相似单词
	if($rm_similar) {
		unset($char[0], $char[1], $char[2], $char['I'], $char['O'], $char['Z']);
	}
	// 生成随机字符文本
	for ($i = 0, $text = ""; $i <$count; $i++) {
		$text .= array_rand($chars);
	}
	return $text;
}	
?>