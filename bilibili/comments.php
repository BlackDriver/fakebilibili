<?php

require_once 'connect.php';
session_start();
$message = mysqli_query($mysqli,'SELECT * from comments');
$time = time();
$content = trim($_POST['content']);

if(isset($_SESSION["password"])){
    echo "您无权进行评论，请先登录，<a href='login.html'>点击此链接返回登录界面</a>";
    header("refresh:3;url=login.html");
    exit;
} else {
    if (empty($content)) {
        echo '<script>alert("请输入评论内容");</script>';
    } else {
        $sql = "INSERT INTO comments(name,content,time) VALUES ($username,$content,$time)";
        $res = mysqli_query($mysqli,$sql);
        // $row = mysqli_fetch_row($res);
        // while($row) {
        //     echo $row['username'];
        //     echo $row['content'];
        //     echo '发表于';
        //     echo $row['date'];
        // }
        if (!mysqli_query($mysqli,"SET @a=':error'")) {
            printf("错误信息:%s\n",mysqli_error($mysqli));
        }
        if ($res) {
            header('location:');
        } else {
            echo '抱歉！添加数据失败：'. $mysqli -> error.'<br />';
        }
        mysqli_free_result();
    }
}

