<?php
include 'connection.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "DELETE FROM data_insert WHERE id= $id";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("location:delete.php");
    }
    else{

        die();

    }
}


