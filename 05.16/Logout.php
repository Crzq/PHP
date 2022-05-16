<?php
session_start();
unset($_SESSION['stuNo']);
session_destroy();
header("location:index.php");