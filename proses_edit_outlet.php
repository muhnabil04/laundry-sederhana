<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];

if ($nama != "" && $alamat != "" && $tlp != "") {
    $sql = mysqli_query($koneksi, "UPDATE tb_outlet SET 
        nama='$nama', alamat='$alamat', tlp='$tlp' 
        WHERE id='$id'");
}

header("location:data_outlet.php");
