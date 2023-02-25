<?php
include 'connect.php';
if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];


   $sql="INSERT into crud (name,email,mobile) values('$name','$email','$mobile')";
   $results=mysqli_query($conn,$sql);
   if($results){
    // echo "data inserted sucessfully";
    header('location:name.php');
   }else {
        die("Connection failed: " . $conn->connect_error);

   }
   }
   ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
</head>
<body>
    <form action="#" method= "post">
  <div class="form-group">
    <label> Name</label>
    <input type="text" class="form-control" 
    placeholder="Enter your name" name="name">
</div><br></br>

<div class="form-group">
    <label> Email</label>
    <input type="text" class="form-control" 
    placeholder="Enter your email" name="email">
</div><br></br>

<div class="form-group">
    <label> Mobile</label>
    <input type="text" class="form-control" 
    placeholder="Enter your mobile number" name="mobile">
</div><br></br>

    <button type="submit" name="submit" class="btn btn-primary">Submit</>
  
</form>
</div>
</body>
</html>