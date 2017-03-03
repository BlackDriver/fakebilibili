<?php

$port = 2333;

set_time_limit(0);

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("无法创建socket\n");

$result = socket_bind($socket, "127.0.0.1", $port) or die("无法绑定socket\n");
$result = socket_listen($socket);

$connection = socket_accept($socket);

$input = socket_read($connection, 1024);
$input = trim($input);
$output = strrev($input) . "\n";

socket_write($connection, $output, strlen($output));

socket_close($connection);
socket_close($socket);

