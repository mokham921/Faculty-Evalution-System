<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,'thpj');
if(mysqli_connect_errno())
{
	echo "Failed to connect to Mysql".mysqli_connect_error();
}



?>
