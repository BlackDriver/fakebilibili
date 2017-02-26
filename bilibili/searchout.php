<?php

require_once 'connect.php';

$search = addslashes($_POST['search']);
$sql = "SELECT "