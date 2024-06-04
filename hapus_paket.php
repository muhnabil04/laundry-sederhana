<?php
include 'koneksi.php';
session_start();
if ($_SESSION['role'] != "admin") {
    header('location:login.php');
}

session_start();


$id = $_GET['id'];

$sql = mysqli_query($koneksi, "delete from tb_paket where id='$id'");

header("location:data_paket.php");
