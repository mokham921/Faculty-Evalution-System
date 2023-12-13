<?php

require_once("../common/admin_header.php");
include('../connect.php');



$select1="SELECT * FROM suggestion s ORDER BY s.SDate  ";
$run1=mysqli_query($conn,$select1);
while($row=mysqli_fetch_assoc($run1))
{
	$arr[]=array($row['advice'],$row['SDate'],$row['fid']);
}

$arrlen=sizeof($arr);
if($arrlen==0)
{
	?>
	<div class="col-xl-4 col-md-4 col-sm-6 col-12 mt-3">
				<div class="card card-color">
					<div class="card-body">
<?php echo "No activity Yet!!!";?>
					</div>
				</div>
			</div>
			<?php
}
else
{

?>
<div class="container">
	<div class="row">
		<?php

		for($j=0;$j<$arrlen;$j++)
		{
			$ffid=(int)$arr[$j][2];
			$select4="SELECT fname from Faculty where fid='$ffid'";
			$run4=mysqli_query($conn,$select4);
			$run4=$run4->fetch_array();
			$fname=$run4[0];

			?>

			<div class="col-xl-4 col-md-4 col-sm-6 col-12 mt-3">
				<div class="card card-color">
					<div class="card-body">
						<p class="name">
						<?php echo $fname ?></p>
						<p class="rating">
							<?php
							$ffid=(int)$arr[$j][2];
							$select6="SELECT avgstar from star where fid=$ffid";
							$run6=mysqli_query($conn,$select6);
							$run6=$run6->fetch_array();
							$rating=$run6[0];

							if($rating<=100 && $rating>80)
							{
								for($i=1;$i<=5;$i++)
								{	
									echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
								}
							}


							elseif($rating<=80 && $rating>60)
							{
								for($i=1;$i<=4;$i++)
								{	
									echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
								}
							}

							elseif($rating<=60 && $rating>40)
							{
								for($i=1;$i<=3;$i++)
								{	
									echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
								}
							}


							elseif($rating<=40 && $rating>20)
							{
								for($i=1;$i<=2;$i++)
								{	
									echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
								}
							}

							elseif($rating<=20 && $rating>0)
							{
								for($i=1;$i<=1;$i++)
								{	
									echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
								}
							}
							else
							{
								echo "No rating star";
							}

							?>


						</p>
						<p class="suggestion"><?php echo $arr[$j][0] ?></p>
						<p class="date"><?php echo $arr[$j][1] ?></p>
					</div>
				</div>

			</div>


			<?php 
		}
	}
		?>

	</div>
</div>

<?php

require_once("../common/footer.php");

?>