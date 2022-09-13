<?php
$hostName = "localhost";
$userName = "id19561442_root";
$password = "E8Fu\Zk#]u{#f1Cc";
$databaseName = "id19561442_signup";
$conn=new mysqli($hostName,$userName,$password,$databaseName);
if(!$conn){
    die(mysqli_error($conn));
}
?>
