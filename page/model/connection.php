<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","news");

if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL : ".mysqli_connect_error();
}
else
{
	echo "";
}
?>