<?php
session_start();
include('../connect.php');

$tid=$_SESSION['tid'];

$query = "Select Max(starid) From star ";
	$returnD = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($returnD);
	$maxRows = $result['Max(starid)'];
	if(empty($maxRows)){
        $lastRow = $maxRows = 1;      
    }else{
		$lastRow = $maxRows + 1 ;

    }
    

$sum=0;
$select2="SELECT mark from rating where fid='$tid'";
	 		$run2=mysqli_query($conn,$select2);
	 		while($row=mysqli_fetch_assoc($run2))
	 		{
	 			$sum+=$row['mark'];

	 		}
	 		

$select3="SELECT count(*) from rating where fid='$tid'";
$run3=mysqli_query($conn,$select3);
$run3=$run3->fetch_array();
$amount=intval($run3[0]);
$rating=$sum/$amount;
echo $rating;

$date= date("Y/m/d");


$que="INSERT INTO star(starid,fid,avgstar,StDate)
 	VALUES('$lastRow','$tid','$rating','$date')";
 	
 	$que1=mysqli_query($conn,$que);

 //	header("Location:student_answerQuestion.php");

?>