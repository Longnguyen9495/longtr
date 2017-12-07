<?php
    session_start();
    require_once ('14_session_cookies.php');
    $id = $_GET['id'];
    $pr = $_SESSION['start'];
    if(isset($_SESSION[$pr][$id]))
    {
        var_dump($_SESSION[$pr]);
        unset($_SESSION[$pr][$id]);
    }else
    {
        unset($_SESSION[$pr][$id]);
    }
    header("location:14_session_cookies.php");