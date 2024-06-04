<?php
include "koneksi.php";


$id = $_POST['id'];
$id_outlet = $_POST['id_outlet'];
$jenis = $_POST['jenis'];
$nama_paket = $_POST['nama_paket'];
$harga = $_POST['harga'];



if ($id_outlet != "" && $jenis != "" && $nama_paket != "" && $harga != "") {
    $sql = mysqli_query($koneksi, "UPDATE tb_paket SET id_outlet = '$id_outlet', jenis = '$jenis', nama_paket = '$nama_paket', harga = '$harga' WHERE id = '$id'");
}

header("location:data_paket.php");
