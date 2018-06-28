<?php
if(isset($_SESSION['sesid']))
{
$link = mysqli_connect("localhost","root","","insmart");
// Check connection
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
}
else
{
	header('location:../index.php');
}
?>