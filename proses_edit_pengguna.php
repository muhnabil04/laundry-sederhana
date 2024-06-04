<?php
include "koneksi.php";

$id = $_POST['id'];
$id_outlet = $_POST['id_outlet'];
$role = $_POST['role'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

if ($id != "" && $id_outlet != "" && $role != "" && $nama != "" && $username != "" && $password != "") {

    $sql = mysqli_query($koneksi, "UPDATE tb_user SET id_outlet = '$id_outlet', role = '$role', nama = '$nama', username = '$username', password = '$password' WHERE id = '$id'");
}

header("location:data_pengguna.php");
