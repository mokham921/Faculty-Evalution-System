<?php
include("../connect.php");

$aid=$_POST['id'];
echo $aid;

$cover=$_FILES['image'];


$desfolder="../upload/";
$filename=time()."_".uniqid(rand());
$file_array=explode(".", $cover['name']);
$ext=end($file_array);
$desfile=$filename.".".$ext;
$despath=$desfolder.$desfile;
move_uploaded_file($cover['tmp_name'],$despath);


$sql="UPDATE admin set aimage='$despath' where aid='$aid'";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "Uploaded";
}
header("Location:admin_profile.php");



?>