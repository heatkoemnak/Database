<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:#F5FFFA;
}

* {
  box-sizing: border-box;
  
}

/* Add padding to containers */
.container {
  border-radius:1%;
  border: 2px solid #f1f1f1;
  /*margin-bottom: 20px;*/
  padding:50px;
  margin: 400px;
  background-color: white;
}
h1{
text-align:center;
}
p{
text-align:center;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background:#F5FFFA;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */

/* Set a style for the submit button */
.registerbtn {
  background-color: #3CB371;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: #D3D3D3;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form  method="post" action="display.php">
  <div class="container">
    <h1>ចុះឈ្មោះ</h1>
    <p>Please fill in this form to create an account.</p>
    
    

    <label><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name">

    <label ><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="email" >
    
    <label ><b>Mobile</b></label>
    <input type="text" name="mobile"  placeholder="Enter mobile phone"  >

    <label><b>Gender</b></label>
    <input type="password" placeholder="Enter Your Gender" name="sex" >
    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="submit">ចុចដើមប្បីចុះឈ្មោះ</button>
    <button type="cancel" class="registerbtn" name="cancel">Cancel</button>
  </div>
  
</form>

</body>
</html>