<?php 
require_once("./../db.php"); 
$id=$_GET['id']; 
		$res=mysqli_query($conn,"SELECT* from images WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['image_name']; 
}
$folder="./../assets/images/upload/";
unlink($folder.$deleteimage);
$result=mysqli_query($conn,"DELETE from images WHERE id=$id") ; 
if($result)
{
	 header("location:index.php?action=delete");
}
?> 