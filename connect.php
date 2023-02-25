<?php
$sv = "localhost";
$username = "root";
$password = "";
$dbname = "crudoperation";

$conn = mysqli_connect($sv, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
//   echo "Connected successfully";
  ?>