<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<body>
    <?php
    $actionUrl = $_SERVER['PHP_SELF'];
    if (isset($_GET['fromPage'])) {
        $actionUrl = $actionUrl . '?fromPage=' . $_GET['fromPage'];
    }

    if (isset($_POST['btnSubmit'])) {
        $stuNo = $_POST["stuNo"];
        $pwd = $_POST["pwd"];
        require_once 'conn.php';
        // $db = new mysqli("localhost", "root", "", "qb", "3308");
        $sql = "SELECT * FROM `student` WHERE `studentNo` = '$stuNo' AND `password` = '$pwd'";

        $result = $db -> query($sql);
        // if (!empty($_POST['stuNo']) == 'admin' && $_POST['pwd'] == "123456") {
        if ($result -> num_rows >= 1) {
            session_start();
            $_SESSION['stuNo'] = $_POST['stuNo'];
            setcookie("stuNo", $_POST["stuNo"], time() + 3600);
            $backUrl = "index.php";
            if (isset($_GET['fromPage'])) {
                $backUrl = $_GET['fromPage'];
            }
            echo "<script>window.location = '{$backUrl}';</script>";
        } else {
            echo "<script>window.alert('用户名或密码错误！');</script>";
        }
    }
    ?>

    <?php
    include 'header.html';
    ?>
    <div id="box">
        <form action="<?=$actionUrl ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="stuNo" placeholder="请输入学号"/><br/>
            <input type="password" name="pwd" placeholder="请输入登录密码"/><br/>
            <input type="text" placeholder="请输入验证码" name="captcha"/><br/>
            <img id="captcha" alt="" src="Captcha.php"><br/>
            <button name="btnSubmit">登录</button>
        </form>
    </div>
    <?php
    include 'footer.html';
    ?>
</body>
</html>