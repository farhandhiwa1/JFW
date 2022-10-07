<?php  

include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE from tbjfw_news where id_news=$id";

$query = mysqli_query($koneksi,$sql);

header("location:home_admin.php");

?>