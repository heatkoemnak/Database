<?php
include 'connection.php';
//delete database
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "DELETE FROM data_insert WHERE id= $id";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("location:display.php");
    }
    else{
        die();
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    
</head>

</html>
<?php
//insert the data in the database
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $sex=$_POST['sex'];
    $sql="INSERT INTO `data_insert`(`name`, `email`,`mobile`,`Gender`) VALUES ('$name','$email','$mobile','$sex')";
    $result=mysqli_query($conn,$sql);
    //check connection
    if(!$result){//if the result is not connected

        //show me something wrong in line
        die("connection failed".$conn->$connect_error);
        
    }
    //if if the result is connected no need to show (whites page)
}


?>
    
<body>
        
    <div class="contianer m-5">
        <div class="add-user m-5">
        
        <button type="button" class="btn btn-primary">
        <a href ="user_data.php" class="text-light">Add User</button>

        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th >ID</th>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Mobile</th>
                    <th >Gender</th>
                    <th >Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                //select data from rows
                    $sql="Select * from `data_insert`";
                    $result=mysqli_query($conn,$sql);
                    
                    //if rows has selected
                    if(!$result){
                        die("connection failed".$conn->$connect_error);
                    }
                    //read data from rows
                    while($row=$result->fetch_assoc()){
                            //print to the table on web page as result
                            echo "
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[mobile]</td>
                                <td>$row[Gender]</td>
                                <td>

                                <button class='btn btn-primary btn-sm'>
                                <a href='update.php' class='text-light'>Update<a/></button>
                                <button class='btn btn-primary btn-sm'>
                                <a href='?id=$row[id]' class='text-light'>Delete<a/></button>
                                
                                </td>
                                
                            </tr>";
                    }
                    
                ?>
                

            </tbody>

    
        
        </table>
    
    </div>

    
</body>