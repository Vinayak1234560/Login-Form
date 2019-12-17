<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = 'test';
$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
	die("connection could not be established". $conn->connect_error);
}
echo "connection established.";
?>
