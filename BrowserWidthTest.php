<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>js实时获取浏览器窗口大小示例</title>
</head>
<body>
<div id="result"></div>
<script>
// 定义事件侦听器函数
function displayWindowSize() {
	// 获取窗口的宽度和高度，不包括滚动条
	var w = document.documentElement.clientWidth;
	var h = document.documentElement.clientHeight;
	// 在div元素中显示结果
	document.getElementById("result").innerHTML = "宽: " + w + ", " + "高: " + h;
}
// 将事件侦听器函数附加到窗口的resize事件
window.addEventListener("resize", displayWindowSize);
// 第一次调用该函数
displayWindowSize();
</script>
</body>
</html>
