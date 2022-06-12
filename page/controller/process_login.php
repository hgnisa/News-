<?php 
session_start();
$succcess = mysqli_connect("localhost","root","", "news");
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($succcess, "SELECT * FROM admin WHERE username='$username' AND password='$password'")or die(mysql_error());

if(mysqli_num_rows($query)==1){
	header("location:../view/index.php");			
}
else{
    header("location:../../index.php");
    $message = "Username or password is incorrect";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

 ?>