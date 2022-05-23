<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/Login.css"/>
</head>
<body>
    <?php
    $actionurl = $_SERVER['PHP_SELF'];
    if (isset($_GET['frompage'])) {
        $actionurl = $actionurl . '?frompage=' . $_GET['frompage'];
    }
    if (isset($_POST['btnSubmit'])) {
        // if (!empty($_POST['stuNo']) == 'admin' && $_POST['pwd'] == "123456") {
            if (!empty($_POST['stuNo']) && $_POST['pwd'] == "123456") {
                session_start();
                $_SESSION['stuNo'] = $_POST['stuNo'];
            setcookie("stuNo", $_POST["stuNo"], time() + 3600);
            $backurl = "index.php";
            if (isset($_GET['frompage'])) {
                $backurl = $_GET['frompage'];
            }
            echo "<script>window.location = '{$backurl}';</script>";
        } else {
            echo "<script>window.alert('用户名或密码错误！');</script>";
        }
    }
    ?>

    <?php
    include 'Header.html';
    ?>
    <div id="box">
        <form action="<?=$actionurl ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="stuNo" placeholder="请输入学号" <?php if (isset($_COOKIE['stuNo'])) {echo "value='" . $_COOKIE['stuNo']."'";} ?>/><br/>
            <input type="password" name="pwd" placeholder="请输入登录密码"/><br/>
            <input type="text" placeholder="请输入验证码" name="captcha"/><br/>
            <img id="yzm" alt="" src="Captcha.php"><br/>
            <button name="btnSubmit">登录</button>
        </form>
    </div>
    <?php
    include 'Footer.html';
    ?>
</body>
</html>