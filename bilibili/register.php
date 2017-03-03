<?php

require_once 'connect.php';
session_start();

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if(!isset($_POST['submit'])){
    exit('非法访问!');
}
if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
    exit('错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if(strlen($password) < 6){
    exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}

if ($username && $password) {
    $sql = "SELECT username FROM users WHERE username='$username'";
    $res = mysqli_query($mysqli,$sql);
    $rows= mysqli_num_rows($res);
    if($rows) {
        echo "已有人注册此名，请重新选择名字!";
        echo '<a href="javascript:history.back(-1);">返回</a>';
        exit;
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $hash=md5($password);
        $ins = "INSERT INTO users(username,password) VALUES ('$username','$hash')";
        $result = mysqli_query($mysqli,$ins);
        if ($result) {
            echo "祝贺你，注册成功!";
            echo "<a href=login.html>登入</a>";
            header("refresh:2;url=login.html");
            exit;
        } else {
            echo '抱歉！添加数据失败：'. $mysqli -> error.'<br />';
            echo '点击此处 <a href="register.html">返回</a> 重试';
        }
    }

    mysqli_free_result($res);
    mysqli_close($mysqli);
}

