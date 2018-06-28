<?php
include('essential.php');
$query = "SELECT * FROM storedetails WHERE email='$email'";
$result = mysqli_query($link,$query) or die(mysql_error());
$count =mysqli_num_rows($result);
if($count == 1)
{
	header('location:card.php');
}
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
$default='#';
if(isset($_POST['fb']))
 {
	$fb=$_POST['fb'];
 }
else
{
$fb=$default;
}
if(isset($_POST['twitter']))
{
$twitter=$_POST['twitter'];
}
else
{
$twitter=$default;
}
$tmpname = addslashes(file_get_contents($_FILES['storeimg']['tmp_name']));
$sql="INSERT INTO storedetails(name, owner, phone, email, city, state, catagorie, subcatagorie, image, address, services, fb, twitter ) VALUES('$storename','$name','$phone','$email','$city','$state','$categorie','$subcat','$tmpname','$address','$services','$fb','$twitter')";
$result =mysqli_query($link,$sql);
if($result)
	{
		header('location:card.php');
	}
else
	{
		echo 'not done';
	}
}
else
{

}
?>