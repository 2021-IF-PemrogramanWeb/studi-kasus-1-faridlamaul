<?php
include "config.php";
session_start();
$login = $_SESSION['login'];
if ($login == "admin") {
    header("location:admin/home.php");
} else {
    header("location:login.php");
}