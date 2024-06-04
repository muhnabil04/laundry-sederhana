<?php
include "koneksi.php";

$id_outlet = $_POST['id_outlet'];
$role = $_POST['role'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);


if ($id_outlet != "" && $role != "" && $nama != "" && $username != "" && $password != "") {

    $sql = mysqli_query($koneksi, "INSERT INTO tb_user (id_outlet, role, nama, username, password) VALUES ('$id_outlet', '$role', '$nama', '$username', '$password')");
}

header("location:data_pengguna.php");
