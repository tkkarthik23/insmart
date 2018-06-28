<?php 
require('data.php');

$category=$_GET['category'];
if($category!="")
{
$sql="SELECT subcat from subcategory where cat='$category'";
$res=mysqli_query($link,$sql);
echo '<select name="subcat" class="form-control selectform selcls">';
echo '<option value="" selected disabled hidden>Select Category</option>';
while($row=mysqli_fetch_array($res))
{		
		
		echo '<option value="';
		echo $row['subcat'];
		echo '">';
		echo $row['subcat'];
		echo '</option>';
}
echo "</select>";
}
?>