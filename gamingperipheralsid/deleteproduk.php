<?php  

include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE from tbjfw_product where id_produk=$id";

$query = mysqli_query($koneksi,$sql);

header("location:home_admin.php");

?>