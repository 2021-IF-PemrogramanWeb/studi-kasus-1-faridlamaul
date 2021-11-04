<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studi-kasus-1";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}