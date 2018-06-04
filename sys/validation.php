<?php

if (!isset($_SESSION)) session_start();
include_once("connection.php");
include "functions/functions.php";
$status_necessario = 5;

if ($_SESSION['usuarioLevel'] != $status_necessario) {
    session_destroy();
    header("Location: login");
    exit;
}

$pos = strrpos($_SERVER['REQUEST_URI'], '/');
$link = $pos === false ? $_SERVER['REQUEST_URI'] : substr($_SERVER['REQUEST_URI'], $pos + 1);

$url = explode('-add', $link);
$url = $url[0];

$url2 = explode('-del', $link);
$url2 = $url2[0];

?>