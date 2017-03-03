<?php

session_start();
$_SESSION['username'] = true;

if (isset($_SESSION['username']) && $_SESSION['username'] === true) {
    $lifetime = 24 * 3600 * 30;
    setcookie(session_name(),session_id(),time() + $lifetime,"/session/");
} else {
        header('location:login.html');
}