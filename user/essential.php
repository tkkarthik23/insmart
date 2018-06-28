<?php
session_start();
require('data.php');
if(isset($_SESSION['sesid']))
{
	$ui=$_SESSION['sesid'];
	$sql="SELECT email, phone, name, status FROM session WHERE sesid='$ui'";
	$query1 = mysqli_query($link, $sql);
	while($rs = mysqli_fetch_array($query1))
		{
			$email=$rs['email'];
			$name=$rs['name'];
			$phone=$rs['phone'];
			$status=$rs['status'];
		}
	$check='inactive';
	if($status==$check)
		{
			header('location:logout.php');
		}
}
else
{
	header('location:../index.php');
}
?>