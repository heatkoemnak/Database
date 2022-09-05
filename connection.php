<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "hdsd";
$conn=new mysqli($hostName,$userName,$password,$databaseName);
if(!$conn){
    die(mysqli_error($conn));
}
?>