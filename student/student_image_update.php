<?php
include("../connect.php");

$sid=$_POST['id'];


$cover=$_FILES['image'];


$desfolder="../upload/";
$filename=time()."_".uniqid(rand());
$file_array=explode(".", $cover['name']);
$ext=end($file_array);
$desfile=$filename.".".$ext;
$despath=$desfolder.$desfile;
move_uploaded_file($cover['tmp_name'],$despath);


$sql="UPDATE student set simage='$despath' where sid='$sid'";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "Uploaded";
}

header("Location:student_profile.php");



?>