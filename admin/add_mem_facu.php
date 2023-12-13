<?php
session_start();
include('../connect.php');
//echo "<br>include valid";

if(isset($_POST['button4']))
{  

	
	$name=$_POST['tc_name'];
	$email=$_POST['tc_email'];
	$password=$_POST['tc_password'];
	
	$dept=$_POST['department'];
	if(isset($_POST['tc_gender']))
	{
		$gender=$_POST['tc_gender'];
	}
	if(empty($name) && empty($email) && empty($password) )
	{
		echo "<script>
		alert('Please Fill');
		location.assign('admin_adddeleteMembers.php');
		</script>";

	}
	else
	{
 /*   if(empty($name))
{
	$nameErr = "Name is required";
}
else
{
	$name = test_input($name);
}


if(empty($email))
{
	$emailErr = "Email is required";
}
else
{
	$email = test_input($email);
}

if(empty($password))
{
	$passwordErr = "Password is required";
}
else
{
	$password = test_input($password);
}


}*/

echo $name."post valid";
//////////////////

$select="SELECT * FROM faculty WHERE fname='$name'";

$run=mysqli_query($conn,$select);
$count=mysqli_num_rows($run);
//echo $count;

///////////auto increase id........
$query = "Select Max(fid) From faculty  ";
$returnD = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($returnD);
$maxRows = $result['Max(fid)'];
if(empty($maxRows)){
	$lastRow = $maxRows = 1;      
}else{
	$lastRow = $maxRows + 1 ;

}
//echo $lastRow;

/////////////////////////
$destination_folder="../upload/";
$destination_file="mdzs.jpg";

$destination_path=$destination_folder.$destination_file;


if($count==0)
{
	$que="INSERT INTO faculty(fid,fname,femail,fdept,fgender,fps,fimage)
	VALUES('$lastRow','$name','$email','$dept','$gender','$password','$destination_path')";

	$que1=mysqli_query($conn,$que);
	if($que1)
	{

 		//header("Location:admin_adddeleteMembers.php");
		echo "<script>
		alert('Successfully Added');
		location.assign('admin_adddeleteMembers.php');
		</script>";
	}
}


else
{
	echo "<script>
	alert('User name already exit! Please Retry!');
	location.assign('admin_adddeleteMembers.php');
	</script>";

}
}

}

//$nameErr = $emailErr = $passwordErr = "";

/*if(empty($name))
{
	$nameErr = "Name is required";
}
else
{
	$name = test_input($name);
}


if(empty($email))
{
	$emailErr = "Email is required";
}
else
{
	$email = test_input($email);
}

if(empty($password))
{
	$passwordErr = "Password is required";
}
else
{
	$password = test_input($password);
}*/


?>