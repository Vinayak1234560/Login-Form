<?php
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$servername = "localhost";
$password = "";
$database = "test";
$con = new mysqli($servername,"root",$password,$database);
$sql="INSERT INTO student_vinayak(username,firstname,lastname,password,email,gender) VALUES('$username','$firstname','$lastname','$password','$email','$gender')";
$result = $con->query($sql);
if($result===TRUE){
	echo  "Welcome $firstname";
}else{
	echo" error creating values".$con->error;
}
mysqli_close($con);
?>
