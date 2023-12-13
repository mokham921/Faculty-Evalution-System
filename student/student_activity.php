<?php
session_start();
require_once("../common/student_header.php");
include('../connect.php');

	$stuact=$_SESSION['eid'];

$select2="SELECT count(fdid) as co from feedback where sid='$stuact'";
$run2=mysqli_query($conn,$select2);
$row2=$run2->fetch_array();
$co=$row2[0];


	$select1="SELECT * FROM feedback where sid='$stuact' ORDER BY fdid DESC LIMIT 0,$co";
	$run1=mysqli_query($conn,$select1);
	while($row=mysqli_fetch_assoc($run1))
	{
		$arr[]=array($row['comment'],$row['Fdate'],$row['fid']);
	}
	if($co==0)
	{
		echo "No Activity Yet!!!";
	}
	else
	{
	



	for($j=0;$j<$co;$j++)
	{

?>

<div class="container">
	<div class="row">
		<div class="col-12 mt-5 mx-auto">
			<div class="card">
				<div class="card-body card-color">
				
						<?php 
						$ffid=(int)$arr[$j][2];
						$select4="SELECT fname from Faculty where fid=$ffid";
						$run4=mysqli_query($conn,$select4);
						$run4=$run4->fetch_array();
						$fname=$run4[0];

						
						?>
						<p><?php echo $fname ?></p>

						<p><?php echo $arr[$j][0] ?></p>

						<p><?php echo $arr[$j][1] ?></p>	
				</div>
			</div>
		</div>

		
	</div>
</div>

<?php 
		}
	}
		
		?>

<?php

require_once("../common/footer.php");

?>