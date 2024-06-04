<?php
include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']); // Fix the case of $_POST

$sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
$cek = mysqli_fetch_assoc($sql);

if ($cek) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $cek['role'];
    header('location:home.php');
} else {
    header('location:login.php');
}
