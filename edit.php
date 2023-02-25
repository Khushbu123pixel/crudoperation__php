<?php
include("connect.php");

$getid = $_GET['editid'];

$seledittwo = "SELECT * FROM `crud` WHERE `id` = '$getid'";


$qry = mysqli_query($conn, $seledittwo);

$selassoc = mysqli_fetch_assoc($qry);

$id = $selassoc['id'];
$name = $selassoc['name'];
$mobile = $selassoc['mobile'];
$email = $selassoc['email'];


if(isset($_POST['updateedit'])) {
	$upid =  $_POST['upid'];
	$upname =  $_POST['upname'];
	$upmobile =  $_POST['upmobile'];
	$upemail =  $_POST['upemail'];
     


	$seleditt = "UPDATE `crud` SET `name`='$upname',`mobile`='$upmobile',`email`='$upemail' WHERE `id` = '$getid'";
	$qry = mysqli_query($conn,$seleditt);

	if($qry) {
		header("location: name.php");
	}
}

// $seledit = "UPDATE `insertdeleteedittable` SET `id`=[value-1],`firstname`=[value-2],`lastname`=[value-3],`email`=[value-4] WHERE `id` = '$getid'";



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form method="POST" action="">
   <input type="text" name="upid" value="<?php echo $id; ?>"><br><br>
	<input type="text" name="upname" value="<?php echo $name; ?>"><br><br>
	<input type="text" name="upmobile" value="<?php echo $mobile ; ?>"><br><br>
	<input type="text" name="upemail" value="<?php echo $email; ?>"><br><br>
	<input type="submit" name="updateedit" value="Update">

</form>
</body>
</html>