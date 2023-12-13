<?php
session_start();
require_once("../common/student_header.php");

	
	
	include('../connect.php');


	$stuact=$_SESSION['eid'];

	$sql1="SELECT syear,ssection from student where sid='$stuact'";
	$result=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result);

	$syr=$row1['syear'];
	$ssec=$row1['ssection'];

	$_SESSION['syear']=$syr;
	$_SESSION['ssection']=$ssec;





	$select1="SELECT * FROM feedback where sid=$stuact ORDER BY fdid DESC LIMIT 0,10";
	$run1=mysqli_query($conn,$select1);
	while($row=mysqli_fetch_assoc($run1))
	{
		$arr[]=array($row['comment'],$row['Fdate'],$row['fid']);
	}
	

	$select2="SELECT count(fdid) as co from feedback where sid='$stuact'";
$run2=mysqli_query($conn,$select2);
$row2=$run2->fetch_array();
$co=$row2[0];

if($co==0)
{
	?>
	<div class="row">
		
		<div class="col-10 mt-5 mx-auto">
			<div class="card">
				<div class="card-body card-color">
					<?php echo "No Feedback Yet!!! 
					Let's Give Feedback!!!"
					?>

				</div>
			</div>
		</div>
	</div>
	<?php
}
else
{


if($co==1)
{
	$count=1;
}
elseif($co==2)
{
	$count=2;
}
elseif($co==3)
{
	$count=3;

}
elseif($co==4)
{
	$count=4;
}
elseif($co==5)
{
	$count=5;
}
elseif($co==6)
{
	$count=6;
}
else
{
	$count=6;
}






	for($j=0;$j<$count;$j++)
	{

?>

<div class="container">
	<div class="row">
		
		<div class="col-10 mt-5 mx-auto">
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