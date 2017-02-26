<?php

    require_once 'connect.php';
    session_start();

    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    $hash=md5($password);
    if(empty($username) || empty($password))
    {
        echo '<script>alert("请完整填写表单");</script>';
    } else {
            $sql = "SELECT * FROM users WHERE username='$username' and password='$hash'";
            $res = mysqli_query($mysqli,$sql);
            $rows= mysqli_num_rows($res);
            if($rows) {
                $_SESSION['username']=$username;
                echo "登录成功,3秒后返回首页</br>";
                echo "<a href='index.php'>如果浏览器没有反应请点击此链接</a>";
                header("refresh:3;url=index.php");
                exit;
            } else {
                echo "登录失败，请验证！";
            }
            mysqli_free_result($res);
            mysqli_close($mysqli);
    }

