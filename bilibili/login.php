<?php

header("Content-Type: text/html; charset=utf-8");

$mysqli = new mysqli('localhost', 'root', '', 'mysql');
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}

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