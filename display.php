<?php
include 'connection.php';
?>
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
        die(mysql_error($conn));
        
    }
    //if if the result is connected no need to show (whites page)
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

    
<body>
        
    <div class="contianer m-5">
        <div class="add-user m-5">
        
        <button type="button" class="btn btn-primary">
        <a href ="user.php" class="text-light" text-decoration:none>Add User</button>

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
                    $select=mysqli_query($conn,$sql);
                    $row=mysqli_num_rows($select);
                    //if rows has selected
                    if($row){
                        while($result=mysqli_fetch_assoc($select)){
                            //print to the table on web page as result
                            echo "
                            <tr>
                                <td> ".$result['id']."</td>
                                <td>".$result['name']."</td>
                                <td>".$result['email']."</td>
                                <td>".$result['mobile']."</td>
                                <td>".$result['Gender']."</td>
                                <td>
                                <button>Update</button>
                                <button>Delete</button>
                                </td> 
                                
                                
        
                            </tr>";
                            
                            
                        }
                        

                    }
                ?>
                

            </tbody>

    
        
        </table>
    
    </div>

    
</body>