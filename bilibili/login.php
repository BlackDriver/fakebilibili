<?php

    require_once 'connect.php';
    session_start();

    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    $hash=md5($password);

    if ($username && $password){
        $sql = "SELECT * FROM users WHERE username='$username' and password='$hash'";
        $res = mysqli_query($mysqli,$sql);
        $rows= mysqli_num_rows($res);
        if($rows) {
            header("location:index.php");
            exit;
        } else {
            echo "登入失败，请验证！";
        }
        mysqli_free_result($res);
        mysqli_close($mysqli);
    }
