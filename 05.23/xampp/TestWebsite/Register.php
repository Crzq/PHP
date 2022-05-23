<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/register.css"/>
</head>
<body>
<?php
include 'header.html';
?>
<div id="box">
    <form action="RegisterData.php" method="post" enctype="multipart/form-data">
        <input type="text" name="stuNo" placeholder="学号"/><br/>
        <input type="text" name="stuName" placeholder="姓名"/><br/>
        <input type="password" name="pwd" placeholder="密码"/><br/>
        <input type="password" name="confirmPwd" placeholder="确认密码"/><br/>

        <label>班级：<select name="className">
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
        </label>

        性别：
        <label><input type="radio" name="sex" value="男" checked/> 男</label>
        <label><input type="radio" name="sex" value="女"/> 女</label>
        <br/>
        <input type="text" name="mobile" placeholder="手机"/><br/>
        <input type="text" name="email" placeholder="邮箱"/><br/>

        照片 <input type="file" name="img">


        自我介绍 <textarea rows="3" cols="10"></textarea><br/>
        <input type="text" name="captcha" placeholder="验证码"/>
        <img id="captcha" alt="" src="Captcha.php">
        <br/>
        <button type="submit" name="btnSubmit">注册</button>
    </form>
</div>
<?php
include 'footer.html';
?>

<script src="js/register.js"></script>
</body>
</html>



