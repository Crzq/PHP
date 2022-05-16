<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        #pleaseLogin {
            margin-top: 40px;
            text-align: center;
            
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESISON['stuNo'])) {
        header('Location:Login.php?frompage=StuInfo');
    }
    ?>
<?php
include 'Header.html';
?>

<div id="pleaseLogin">
    <a href="login.php?frompage=student">请先登录</a>
    
</div>

<?php
include 'Footer.html';
?>
</body>
</html>

