<?php

$port    = 2333;
$message = trim($_POST['danmu']);

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("无法创建socket\n");
$result = socket_connect($socket, "127.0.0.1", $port) or die("无法连接到服务器\n");

socket_write($socket, $message, strlen($message));

$result = socket_read ($socket, 1024);

socket_close($socket);

