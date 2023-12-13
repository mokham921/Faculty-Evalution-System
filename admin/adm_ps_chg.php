<?php
session_start();
include('../connect.php');
if(isset($_POST['btps']))
{
	$newps=$_POST['password'];
	 $admpro=$_SESSION['eid'];
	   $select1="UPDATE admin set aps='$newps' where aid='$admpro' ";
	$run1=mysqli_query($conn,$select1);

}
?>