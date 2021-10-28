<?php
include "config.php";
session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
    if (mysqli_num_rows($query) != 0) {
        $get = mysqli_fetch_array($query);
        $level = $get['level'];
        $nama = $get['nama_admin'];
        $_SESSION['nama'] = $nama;
        $_SESSION['login_in'] = $email;
        if ($level == "admin") {
            echo "<script type='text/javascript'>alert('selamat datang $level'); location.href=\"admin/home.php\"</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Login gagal, username atau password salah!'); location.href=\"login.php\"</script>";
    }
} else {
    echo "<script type='text/javascript'>alert('Anda tidak diperkenankan masuk ke halaman ini!'); location.href=\"login.php\"</script>";
}