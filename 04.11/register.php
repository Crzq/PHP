<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
    <style>
        body {
            margin: 0;
            text-align: center;
        }

        #reg {
            width: 370px;
            border: 1px solid blue;
            line-height: 40px;
            margin: 0 auto;
            padding-left: 100px;
            padding-top: 15px;
            padding-bottom: 15px;
            text-align: left;
            font-size: 14px;
        }

        .error {
            color: red;
        }
    </style>

</head>
<body>
<h1>用户注册</h1>
<form action="RegisterData.php" method="post" enctype="multipart/form-data">
    <div id="reg">
        <div>
            学号：<input type="text" name="stuNo"/>
        </div>
        <div>
            姓名：<input type="text" name="stuName"/>
        </div>
        <div>
            密码：<input type="password" name="pwd"/>
            <div style="margin-left:-28px;">
                确认密码：<input type="password" name="confirmPwd"/>
            </div>
            <div>
                班级：<select name="className">
                    <option value="计网2001班">计网2001班</option>
                    <option value="计网2002班">计网2002班</option>
                    <option value="计应2001班">计应2001班</option>
                    <option value="计应2002班">计应2002班</option>
                    <option value="计应2003班">计应2003班</option>
                    <option value="计应2004班">计应2004班</option>
                    <option value="计应2005班">计应2005班</option>
                    <option value="计应2006班">计应2006班</option>
                </select>
            </div>
            <div>
                性别：<input type="radio" name="sex" value="男" checked>男
                <input type="radio" name="sex" value="女">女
            </div>
            <div>
                手机：<input type="text" name="mobile"/>
            </div>
            <div>
                邮箱：<input type="text" name="email"/>
            </div>
            <div>
                自我介绍：<textarea rows="3" cols="10"></textarea>
            </div>
            <div>
                图片：<input type="file" name="img"/>
            </div>
            <div>
                验证码：<input type="text" name="yanzhengma"/>
                <img alt="" src="captcha.php">
            </div>

            <div style="margin-left:-28px;">
                <input type="submit" name="btnSubmit" value="注册"/>
            </div>
        </div>
</form>

