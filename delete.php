 
<?php
include("connect.php");
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];

	$sql = "DELETE FROM `crud` WHERE `id` = '$id'"; 
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "Delete successfull";
	}else{
			die(mysqli-error($con));
		}
	}
?>
