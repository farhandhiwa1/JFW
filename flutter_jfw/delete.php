<?php 

    $connection = new mysqli("68.183.180.80", "user_latihan", "123123", "LatihanDB");

    $id = $_POST['id'];

    $result = mysqli_query($connection, "delete from tbjfw_news where id_news=".$id);

    if($result){
        echo json_encode([
            'message' => 'Data delete successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to delete'
        ]);
    }

?>