<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>
    <?php
    include 'Header.html';
    ?>
    <div>

    <div id="greeting">
        
        <?php
        session_start();
        if (isset($_SESSION['stuNo'])) {
            echo $_SESSION['stuNo'] . "，欢迎访问学生信息管理系统！<a href='Logout.php'>注销</a>";
        } else {
            echo "欢迎访问学生信息管理系统！";
        }
        ?>
    </div>
    <!-- <div>
        <img src="img/bg.png" alt="" width="100%">
    </div> -->

    <?php
    include 'Footer.html';
    ?>

</body>
</html>