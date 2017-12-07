<?php
    session_start();
    $id = $_GET['id'];
    var_dump($_SESSION['infomation'][$id]);
    if(isset($_SESSION['infomation'][$id]))
    {
        unset($_SESSION['infomation'][$id]);
    }
    header("location:14_session_cookies.php");