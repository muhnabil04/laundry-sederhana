<?php
include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];

if ($nama != "" && $alamat != "" && $tlp != "") {
    $sql = mysqli_query($koneksi, "insert into tb_outlet values('','$nama','$alamat','$tlp')");
}

header("location:data_outlet.php");
