<?php
include("connect.php");


if(isset($_POST['submitinserdetails'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

if(!empty($name) && !empty($mobile) && !empty($email) &&!empty) {



	$sql = "INSERT INTO `crud`( `name`, `mobile`, `email`
	  VALUES ('$name','$mobile','$email')";
$qry = mysqli_query($conn, $sql);
if($qry) {
	echo "<br />inserted successfully";
}

} else {
	echo "<br />all fields must be filled";
}



}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
	
<input type="text" name="name"><br ><br >
<input type="text" name="mobile"><br ><br >
<input type="text" name="email"><br ><br >
<input type="text" name="password"><br ><br >
<input type="submit" name="submitinserdetails" value="insert">

</form>
</body>
</html>