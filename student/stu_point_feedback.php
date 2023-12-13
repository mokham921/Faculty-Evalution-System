<?php
session_start();
include('../connect.php');
 $sum=0;
	$tid=$_SESSION['tid'];
	echo $tid."<br/>";
	$ssid=$_SESSION['eid'];
	echo $ssid."<br/>";
 
if(isset($_POST['submit']))
{


if(isset($_POST['ans']) && isset($_POST['ans']) && isset($_POST['ans'])
&& isset($_POST['ans']) && isset($_POST['ans']) && isset($_POST['ans'])
&& isset($_POST['ans']) && isset($_POST['ans']) && isset($_POST['ans'])
&& isset($_POST['ans']))
//if(!empty($_POST['ans']))
/*{
	echo "<script>
	alert('No');
	location.assign('student_answerQuestion1.php');
	</script>";
	die();

}*/




  { 	
  	$query = "Select Max(rid) From rating ";
	$returnD = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($returnD);
	$maxRows = $result['Max(rid)'];
	if(empty($maxRows)){
        $lastRow = $maxRows = 1;      
    }else{
		$lastRow = $maxRows + 1 ;

    
       
  /* foreach($_POST['ans'] as $No=>$value)
		{
			if($value==0)
			{
				$c=0;break;
			}
		}

		if($c==0)
	
		die();*/
		

//if(!empty($_POST['ans']))

	//{
		foreach($_POST['ans'] as $No=>$value)
		{
			
			 echo $No."    ".$value."<br>";
		

			$sum+=$value;

			}
			echo $sum."<br>";
			$que="INSERT INTO rating(rid,sid,fid,mark)
 	VALUES('$lastRow','$ssid','$tid','$sum')";
 	$que1=mysqli_query($conn,$que) or die("cannot insert");
 	if($que1)
 	{
 		echo "Successfully added";
 	}
 /*}
 else
 {
 	echo" No";
 }*/
 	


//write insert into rating table sum using lastRow;
	//  echo "    sum: ".$sum;




//this is feedback operation

	$query1 = "SELECT Max(fdid) FROM feedback ";
	$returnD1 = mysqli_query($conn, $query1);
	$result1 = mysqli_fetch_assoc($returnD1);
	$maxRows1 = $result1['Max(fdid)'];
	if(empty($maxRows1)){
        $lastRow1 = $maxRows1 = 1;      
    }else{
		$lastRow1 = $maxRows1 + 1 ;

    }
   

  echo "<br>".$lastRow1;

			$fb=$_POST['Feedback'];
		echo "<br>".$fb;	

$date= date("Y/m/d");

$que1="INSERT INTO feedback(fdid,sid,fid,comment,Fdate) VALUES('$lastRow1','$ssid','$tid','$fb','$date')";
 	$que11=mysqli_query($conn,$que1) or die( "cannot insert feedback");
 	if($que11)
 	{
 		echo "<script>
 		alert('Successfully Post');
 		</script>";
 	}


	 //write insert feedback// 
}
}
else
{
	echo "No";
}
}


//header("Location:saveavg.php");


?>