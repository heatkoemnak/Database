<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "hdsd";
$conn=new mysqli('localhost','root','','hdsd');
if(!$conn){
    die(mysqli_error($conn));
}
?>