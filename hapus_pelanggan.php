<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "delete from tb_member where id='$id'");

header("location:data_pelanggan.php");
