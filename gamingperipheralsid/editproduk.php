<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$gambar = $_FILES['gambar']['name'];
$link = $_POST['link'];

$sql = "UPDATE tbjfw_product set id_produk='$id', nama='$nama', gambar='$gambar', link='$link' WHERE id_produk=$id ";

$query = mysqli_query($koneksi,$sql);

// var_dump($query);

header("location:home_admin.php");
?>