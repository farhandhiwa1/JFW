<?php 

$connection = new mysqli("68.183.180.80", "user_latihan", "123123", "LatihanDB");
$title      = $_POST['title']; 
$descr      = $_POST['descr'];
$gambar     = $_POST['gambar'];
$linknews   = $_POST['linknews'];

$result = mysqli_query($connection, "insert into tbjfw_news set title='$title', descr='$descr', gambar='$gambar', linknews='$linknews'");

if($result){
    echo json_encode([
        'message' => 'Data input successfully'
    ]);
}else{
    echo json_encode([
        'message' => 'Data Failed to input'
    ]);
}

?>