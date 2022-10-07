<?php 
include 'koneksi.php';

$id = $_POST['id'];
$title = $_POST['title'];
$descr = $_POST['descr'];
$gambar = $_FILES['gambar']['name'];
$linknews = $_POST['linknews'];

$sql = "UPDATE tbjfw_news set id_news='$id', title='$title', descr='$descr', gambar='$gambar', linknews='$linknews' WHERE id_news=$id ";

$query = mysqli_query($koneksi,$sql);

// var_dump($query);

header("location:home_admin.php");
?>