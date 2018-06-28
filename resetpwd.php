<?php
session_start();
if(isset($_SESSION['sesid']))
{
	header('location:user/index.php');
}

require('data.php');
if(isset($_POST['email']) && isset($_POST['rpwd'])  && isset($_POST['otp'])) 
{
	$email=$_POST['email'];
	$pwd=$_POST['rpwd'];
	$enpwd = SHA1($pwd);
	$otp=$_POST['otp'];
	$query = "SELECT * FROM users WHERE email='$email' and reset='$otp'";
	$result = mysqli_query($link,$query) or die(mysql_error());
	$count =mysqli_num_rows($result);
	if($count == 1)
	{
		$sql="UPDATE users SET password='$enpwd' WHERE email='$email'";
		$result =mysqli_query($link,$sql);
		if(!$result)
		{
			echo 'Error';
		}
		else
		{
			header('location:log.php?psw=psw');
		}
	}
	else
	{
		header('location:forgotpwd2.php?user1=user1');
	}
}
else
{
	header('location:index.php?user=user');
}
?>