<?php
include('essential.php');
$sql1="SELECT city, state FROM users WHERE email='$email'";
$query2 = mysqli_query($link, $sql1);
while($rs1 = mysqli_fetch_array($query2))
	{
		$city=$rs1['city'];
		$state=$rs1['state'];
	}
if(isset($_POST['name']) && isset($_POST['cat']) && isset($_POST['subcat']) && isset($_POST['address'])&& isset($_POST['services'])) 
{
$storename=$_POST['name'];
$categorie=$_POST['cat'];
$subcat=$_POST['subcat'];
$address=$_POST['address'];
$services=$_POST['services'];
$sql2="SELECT fb, twitter FROM storedetails WHERE email='$email'";
$query2 = mysqli_query($link, $sql2);
while($rs2 = mysqli_fetch_array($query2))
	{
		$fb1=$rs2['fb'];
		$twitter2=$rs2['twitter'];

	}
$verify='';
if($_POST['fb']==$verify)
	{
		$fb=$fb1;
	}
else
	{
		$fb=$_POST['fb'];
	}
if($_POST['twitter']==$verify)
	{
		$twitter=$twitter2;
	}
else
	{
		$twitter=$_POST['twitter'];
	}
$tmpname = addslashes(file_get_contents($_FILES['storeimg']['tmp_name']));
$sql="UPDATE storedetails SET name='$storename', catagorie='$categorie', subcatagorie='$subcat', image='$tmpname', address='$address', services='$services', fb='$fb', twitter='$twitter' WHERE email='$email'";
$result =mysqli_query($link,$sql);

if($result)
	{
		header('location:card.php');
	}
else
	{
		echo 'cant update';
	}
}
else
{
	header('location:logout.php');
}
?>