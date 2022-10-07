<?php 

$connection = new mysqli("68.183.180.80","user_latihan","123123","LatihanDB");
$data       = mysqli_query($connection, "select * from tbjfw_news");
$data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

echo json_encode($data);

?>