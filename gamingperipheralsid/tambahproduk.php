<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$gambar = $_FILES['gambar']['name'];
$tipe = $_POST['tipe'];
$link = $_POST['link'];

$sql = "INSERT into tbjfw_product (nama,gambar,tipe,link) VALUES ('$nama', '$gambar', '$tipe', '$link')";

$query = mysqli_query($koneksi,$sql);

header("location:home_admin.php");
?>