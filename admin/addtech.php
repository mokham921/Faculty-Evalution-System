
<?php

session_start();
include("../connect.php");

$y=$_SESSION['year'];

$sec=$_SESSION['sec'];


$teclist=$_POST['ch'];


	//$sql="INSERT into tech t,section s (fid,seid) values('$value','$sec') where s.seid=''

$sql="SELECT seid from section s where s.class='$sec' AND s.yid='$y'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$seid=$row['seid'];


	
foreach ($teclist as $key => $value) {

	$sql1="INSERT into tech (fid,seid) values('$value','$seid')";
	$result1=mysqli_query($conn,$sql1);

	header("Location:management.php");
}

?>