<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <title>学生信息管理系统</title>
    <style>
        body {
            overflow: hidden;
        }
    </style>
</head>
<body>
    <?php
    include 'header.html';
    ?>

        


    <div id="greeting">
        <?php
        session_start();
        if (isset($_SESSION['stuNo'])) {
            echo '<p id="greeting">' . $_SESSION['stuNo'] . "，欢迎访问学生信息管理系统！<a href='Logout.php'>注销</a></p>";
        } else {
            echo "<p>欢迎访问学生信息管理系统！</p>";
        }
        ?>

        <!-- <img src="img/bg.png" alt="" width="100%"> -->
<!--        这里应该用 js 做一个判断，到了一定程度，就是 height="100%"-->

        <!--我有个思路：1. body 是 父元素，头部+中间背景图+尾部=body长度
        2. if (header+content+footer) = body's height { 二者接壤 }
        if (header+content+footer) < body's height { 二者有间距 } 此二者指的便是 页脚与图片-->

<!--        为了验证我的猜想，首先要做的事便是看 body's height 是否是改变的。见下方 js 代码-->
    </div>

    <?php
    include 'footer.html';
    ?>

    <script>
        let bodyHeight = document.getElementsByTagName('body')[0].getAttribute('height');
        console.log(bodyHeight);
    </script>
</body>
</html>