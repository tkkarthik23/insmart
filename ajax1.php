<?php 
require('data.php');

$state=$_GET['state'];
echo $state;
if($state!="")
{
$sql="SELECT city from city where state='$state'";
$res=mysqli_query($link,$sql);
echo '<select name="city" class="form-control selectform selcls">';
echo '<option value="" selected disabled hidden>Select city</option>';
while($row=mysqli_fetch_array($res))
{		
		
		echo '<option value="';
		echo $row['city'];
		echo '">';
		echo $row['city'];
		echo '</option>';
}
echo "</select>";
}
?>