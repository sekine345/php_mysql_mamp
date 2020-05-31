<?php
    $flag = true;
    // user_number
    if($_POST["user_number"]==""){
        $flag = false;
    }
    // user_name
    if($_POST["user_name"]==""){
        $flag = false;
    }
    // user_password
    if($_POST["user_password"]==""){
        $flag = false;
    }
    // password check
    if($_POST["user_password"] != $_POST["user_password2"]){
        $flag = false;
    }
    // 転送
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/¥¥');
    if($flag){
        $extra = "stockList.php";
        $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/¥¥');
        header("Location: http://$host$uri/$extra");
        exit();
    }
    else{
        $extra = "userRegister.html";
        $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/php/¥¥') . "/html";
        header("Location: http://$host$uri/$extra");
        exit();
    }

?>