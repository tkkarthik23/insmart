
<?php
session_start();
if(isset($_SESSION['sesid']))
{
	header('location:user/index.php');
}

require('data.php');
if(isset($_POST['fname']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['state']) && isset($_POST['city']) && isset($_POST['address'])) 
{
$name=$_POST['fname'];
$password=$_POST['password'];
$email=$_POST['email'];

$phone=$_POST['mobile'];
$state=$_POST['state'];
$city=$_POST['city'];
echo $city;
$adress=$_POST['address'];
require('browser.php');
$status='active';
$count1='1';
$uid = uniqid();
$enpwd = SHA1($password);
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($link,$query);
$count =mysqli_num_rows($result);
if($count == $count1)
	{
		header('location:registration.php?email=email');
	}
else
	{	
		
		$sql = "INSERT INTO users (name, email, password, phone, address, state, city) VALUES ('$name','$email','$enpwd','$phone','$adress','$state','$city')";
		$result =mysqli_query($link,$sql);
		if($result)
		{
			$sql2 = "INSERT INTO session (sesid, email, phone, browser, status, name) VALUES ('$uid','$email','$phone','$browser','$status','$name')";
			$result1 =mysqli_query($link,$sql2);
			if($result1)
			{
				$_SESSION['sesid']=$uid;
				header('location:index.php?email=email');

			}
			else
			{
				echo "some problem";
			}
		}
		else
		{
			echo "some error";
		}
	}
}
else
{
	header('location:registration.php?reg=reg');
}



?>