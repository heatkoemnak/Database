<?php
include 'connection.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="UPDATE `data_insert` SET `id`='$id',`name`='$name',`email`='$email',`mobile`=' $mobile',`Gender`='$sex'' WHERE 1
    $result=mysqli_query($conn,$sql);
    
    if($result){
        header("location:delete.php");

    }else{
        die("connection failed".$conn->$connect_error);
        
    }
}
?>