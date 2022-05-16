<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<link rel="stylesheet" type="text/css" href="css/Register.css"/>
</head>
<body>
    <?php
    include 'Header.html';
    ?>
<h1>用户注册</h1>
<form action="registerdata.php" method="post" enctype="multipart/form-data">
<div id="reg">

    <input type="text" name="stuNo" placeholder="学号" <?php if (isset($_COOKIE["stuNo"])) {echo "value='".$_COOKIE["stuNo"]."'";} ?>/>


    <input type="text" name="stuName" placeholder="姓名"/>

    <input type="password" name="pwd" placeholder="密码"/>

    <input type="password" name="confirmPwd" placeholder="确认密码"/>


    <div id="className">
        班级：<select name="className">
        <option value="-- 选择班级 --">-- 选择班级 --</option>
        <option value="计网2001班">计网2001班</option>
        <option value="计网2002班">计网2002班</option>
        <option value="计应2001班">计应2001班</option>
        <option value="计应2002班">计应2002班</option>
        <option value="计应2003班">计应2003班</option>
        <option value="计应2004班">计应2004班</option>
        <option value="计应2005班">计应2005班</option>
        <option value="计应2006班">计应2006班</option>
    </select><br/>
    </div>
    <span class="gender">性别：</span>
    <input id="radio1" type="radio" name="sex" value="男" checked/><span class="boy">男</span>
    <input id="radio2" type="radio" name="sex" value="女"/><span class="girl">女</span>
    

    <input type="text" name="mobile" placeholder="手机"/>

    <input type="text" name="email" placeholder="邮箱"/>

    照片：<input type="file" name="img"/>

    自我介绍：<textarea rows="3" cols="10"></textarea>

    <input type="text" name="captcha" placeholder="验证码"/>
    <img alt="" src="Captcha.php">
    <br/>
    <button type="submit" name="btnSubmit">注册</button>
</form>
<?php
include 'Footer.html';
?>

<script>
    document.getElementById('className').style.marginLeft = "-290px";
    document.getElementsByName('sex')[0].className = "sex";
    document.getElementsByName('sex')[1].className = "sex";

    document.getElementsByName('mobile')[0].style.marginTop = "40px";

    
</script>



