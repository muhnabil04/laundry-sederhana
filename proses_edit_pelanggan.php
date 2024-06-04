<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tlp = $_POST['tlp'];

if ($nama != "" && $alamat != "" && $jenis_kelamin != "" && $tlp != "") {
    $sql = mysqli_query($koneksi, "UPDATE tb_member SET 
        nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tlp='$tlp' 
        WHERE id='$id'");
}

header("location:data_pelanggan.php");
