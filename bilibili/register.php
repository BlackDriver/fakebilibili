<?php

header("Content-Type: text/html; charset=utf-8");

$mysqli = new mysqli('localhost', 'root', '', 'mysql');
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}

$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

if ($username && $password) {
    $sql = "SELECT username FROM users WHERE username='$username'";
    $res = mysqli_query($mysqli,$sql);
    $rows= mysqli_num_rows($res);
    if($rows) {
        echo "已有人注册此名，请重新选择名字!";
        echo "<a href=register.html>返回</a>";
        exit;
    } else {
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $hash=md5($password);
        $ins = "INSERT INTO users(username,password) VALUES ('$username','$hash')";
        $result = mysqli_query($mysqli,$ins);
        if ($result) {
            echo "祝贺你，注册成功!";
            echo "<a href=login.html>登入</a>";
            exit;
        } else {
            echo '抱歉！添加数据失败：'. $mysqli -> error.'<br />';
            echo '点击此处 <a href="register.html">返回</a> 重试';
        }
    }

    mysqli_free_result($res);
    mysqli_close($mysqli);
}

