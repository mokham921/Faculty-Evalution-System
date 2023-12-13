<?php
session_start();
include('../connect.php');
if(isset($_POST['btps']))
{
	$newps=$_POST['password'];
	 $stupro=$_SESSION['eid'];
	   $select1="UPDATE student set sps='$newps' where sid='$stupro'";
	$run1=mysqli_query($conn,$select1);

}
header("Location:student_profile.php");
?>