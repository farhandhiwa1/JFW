<?php 
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "INSERT into tbjfw_user (username,password,level) VALUES ('$username','$password','$level')";

    $query = mysqli_query($koneksi, $sql);

    header("location:signin.php");
 ?>