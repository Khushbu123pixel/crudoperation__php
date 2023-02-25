<?php
include 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
        <button class="btn btn-primary my-5"><a href="user.php"class="text-light">ADD suser</a>
    
</button>
<table class="table">
  
<tr>
<th scope="col">SL NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">operations</th>
      
    </tr>
  </thead>
  <tbody>
  
    <?php

    $sql="SELECT * FROM `crud`";
    $qryname=mysqli_query($conn,$sql);
    
    // if(count($qryname)>0){
    //   $sn=1;
      foreach($qryname as $sql){
          ?> <tr>
            <td><?php echo $sql['id']; ?></td>
<td><?php echo $sql['name']; ?></td>
<td><?php echo $sql['email']; ?></td>
<td><?php echo $sql['mobile']; ?></td>
<td><a href="edit.php?editid=<?php echo $sql['id']; ?>">Edit</a></td>
<td><a href="delete.php?deleteid=<?php echo $sql['id']; ?>">Delete</a></td>
</tr> <?php
    // $sn++; }
    // }else{
          






















    // if($result){
    //  while($row=mysqli_fetch_assoc($qryname)){
    //  $id = $row['id'];
    //  $name =  $row['name'];
    //  $email = $row['email'];
    //  $mobile = $row['mobile'];
    // echo '<tr>
    // <th scope="row">'.$id.'</th>
    // <td>'.$name.'</td>
    // <td>'.$email.'</td>
    // <td>'.$mobile.'</td>
    //  <td>
    //   <button class="btn btn-primary"><a href="edit.php?editid='.$id.'" class="text-light">Update</a></button>
    //   <button class ="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
    // </td>
    // </tr>';

    // <td>
    // <tr>
    // </tr></td>

     }
     ?>
  






    <!-- // "<tr><td>".$id."</td><td>".$name."</td><td>".$email."</td><td><a href='edit.php?edit=$id' >Edit</a></td><td>
    // </td><td><a href='delete.php?deleteid=$id' >Delete</a></td></tr>"; -->

    
    


  </body>
</html>