<?php 
include 'koneksi.php';

$title = $_POST['title'];
$desc = $_POST['desc'];
$gambar = $_FILES['gambar']['name'];
$linknews = $_POST['linknews'];

$sql = "INSERT into tbjfw_news (title,descr,gambar,linknews) VALUES ('$title', '$desc', '$gambar', '$linknews')";

$query = mysqli_query($koneksi,$sql);

header("location:home_admin.php");
?>