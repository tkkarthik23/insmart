<?php 
include('essential.php');
if(isset($_POST['password']) && isset($_POST['npassword']))
{
$password=SHA1($_POST['password']);
$npassword=SHA1($_POST['npassword']);
$query = "SELECT * FROM users WHERE email='$email' and password='$password'";
$result = mysqli_query($link,$query) or die(mysql_error());
$count =mysqli_num_rows($result);
if($count == 1)
	{
		$sql2="UPDATE users SET password='$npassword' WHERE email='$email'";
		$result2 =mysqli_query($link,$sql2);
		if($result2)
		{
			$ui=$_SESSION['sesid'];
			$status='inactive';
			$sql="UPDATE session SET status='$status' WHERE sesid='$ui'";
			$result =mysqli_query($link,$sql);
			if($result)
			{	
				session_destroy();
				header('location:../index.php?user=user');
			}
		}
	
		else
		{
			echo 'error';
		}
	}
else
	{
		header('location:../priv.php?user=user');
	}
}
else
{
	header('location:index.php');
}
?>
