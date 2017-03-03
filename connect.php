<?php

header("Content-Type: text/html; charset=utf-8");

$mysqli = new mysqli('localhost', 'root', '1234', 'mysql');
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}

