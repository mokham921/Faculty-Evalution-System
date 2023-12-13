<?php
session_start();
include('../connect.php');
echo "<br>include valid";

if(isset($_POST['button3']))
{  

	
	$name=$_POST['stname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$year=$_POST['year'];
	$major=$_POST['major'];
    if(isset($_POST['gender']))
    {
    	$gender=$_POST['gender'];
    }
    

 
echo $name."post valid";
//////////////////

$select="SELECT * from student where sname='$name'";

$run=mysqli_query($conn,$select);
$count=mysqli_num_rows($run);

///////////auto increase id........
	$query = "Select Max(sid) From student  ";
	$returnD = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($returnD);
	$maxRows = $result['Max(sid)'];
	if(empty($maxRows)){
        $lastRow = $maxRows = 1;      
    }else{
		$lastRow = $maxRows + 1 ;

    }
    echo $lastRow;

/////////////////////////
    $_SESSION["ID"]=$lastRow;


    $destination_folder="../upload/";
    $destination_file="mdzs.jpg";

$destination_path=$destination_folder.$destination_file;

//$_SESSION['aimage']=$destination_path;
   


if($count==0)
{
	$que="INSERT INTO student(sid,sname,semail,syear,ssection,sgender,sps,simage)
 	VALUES('$lastRow','$name','$email','$year','$major','$gender','$password','$destination_path')";
 	$que1=mysqli_query($conn,$que);
 	if($que1)
 	{
 		
 		
 		echo "<script>
 		alert('Successfully Registered');
 		</script>";
 	}
}

else
{
	
	
	echo "<script>
	alert('User name already exit');
	</script>";
}

}

header("Location:admin_adddeleteMembers.php");

?>