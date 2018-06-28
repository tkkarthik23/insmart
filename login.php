<?php session_start();
if(isset($_SESSION['sesid']))
{
	header('location:user/index.php');
}

require('data.php');
if(isset($_POST['email']) && isset($_POST['password'])) 
	{
	$email = $_POST['email'];
	$password = $_POST['password'];
	require('browser.php');
	$enpwd = SHA1($password);
	$uid = uniqid();
	$status='active';
	$query = "SELECT * FROM users WHERE email='$email' and password='$enpwd'";
	$result = mysqli_query($link,$query) or die(mysql_error());
	$count =mysqli_num_rows($result);
	if($count == 1)
	{				 
					 $sql="SELECT phone, name FROM users WHERE email='$email'";
					 $query1 = mysqli_query($link, $sql);
					 while($rs = mysqli_fetch_array($query1))
					 {
						 $phone=$rs['phone'];
						 $name=$rs['name'];
					 }
					$sql2 = "INSERT INTO session (sesid, email, phone, browser, status, name) VALUES ('$uid','$email','$phone','$browser','$status','$name')";
					$result1 =mysqli_query($link,$sql2);
					if($result1)
						{
							$_SESSION['sesid']=$uid;
							header('location:index.php');
							
						}
					else     
						{
							echo "some problem at  session insertion";
						}
	}
	else
	{
		header('location:log.php?user1=user1');
	}
	}
else
	{
		header('location:log.php');
	}
?>