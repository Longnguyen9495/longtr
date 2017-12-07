<?php
    session_start();
    $id = $_GET['id'];
    var_dump($_SESSION['start'][$id]);
    if(isset($_SESSION['start'][$id]))
    {
        unset($_SESSION['start'][$id]);
    }
    header("location:insert.php");