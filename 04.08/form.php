<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>学<span class="space"></span>号：<input type="text" name="stuId" id="stuId"></label><br/>
    <label>姓<span class="space"></span>名：<input type="text" name="stuName" id="stuName"></label><br/>
    <label>密<span class="space"></span>码：<input type="password" name="pwd" id="pwd1"></label><br/>
    <label>确认密码：<input type="password" name="pwd" id="pwd2"></label><br/>
    <label>班<span class="space"></span>级：<select id="className" name="className">
            <option value="计网2001班">计网2001班</option>
            <option value="计网2002班">计网2002班</option>
        </select></label><br/>
    性<span class="space"></span>别：
    <label>男<input type="radio" name="gender"></label>
    <label>女<input type="radio" name="gender"></label><br/>
    <label>手<span class="space"></span>机：<input type="text" name="tel" id="tel"></label><br/>
    <label>邮<span class="space"></span>箱：<input type="text" name="mail" id="mail"></label><br/>
    <label>验<span class="space"></span>证：<input type="text" name="captcha" id="captcha"></label>
    <img id="img" src="captcha.php" alt="图片加载不出来"/><br/>
    <button type="submit" name="submit">注册</button>
</form>

<?php
if (isset($_POST["captcha"]) && isset($_SESSION["captcha"])) {
    if ($_POST["captcha"] == $_SESSION["captcha"]) {
        echo "注册成功";
    } else {
        echo "验证码不正确";
    }
}
?>

<script>
    const inputs = document.getElementsByTagName('input');
    inputs[4].style.width = '10px';
    inputs[5].style.width = '10px';
    document.getElementById('className').style.marginBottom = '10px';
</script>
</body>
</html>