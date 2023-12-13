<?php
session_start();
include("../connect.php");

//$fid=$_GET['id'];

$fid=$_SESSION['tid'];
require_once("../common/admin_header.php");

?>
<div class="container">
		
	<div class="mt-5">
		<table class="table table-striped col-8 mx-auto">
			<thead class="bg-site-color text-white">
				<tr>
				<th>NO</th>
					<th scope="col">FeedBack</th>
					
					<th>Date</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
			 		
		$select0="SELECT * from feedback where fid='$fid'";
$i=0;
		$run0=mysqli_query($conn,$select0);

		while($row=mysqli_fetch_assoc($run0))
		{
			$i++;
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['comment']."</td>";
			echo "<td>".$row['Fdate']."</td>";



			echo "<tr/>";

		}
		?>				
				
	
	
			</tbody>
		</table>
	</div>

	<div class="row">
		<div class="col-xl-8 col-md-8 col-sm-6 col-12 mt-5 mx-auto">
			<div class="card card-color">
				<div class="card-body mx-auto">
				
		<?php


		
						$select2="SELECT * FROM star st where st.fid='$fid' ORDER BY st.starid DESC LIMIT 1";
                       $run2=mysqli_query($conn,$select2);
                        $run2=$run2->fetch_array();
                        $rating=$run2[2];
                        

						?>

	
	<div id="wrap">
		<form action="suggestion.php" method="post">
					<div>
						
						<label for="rating">Rating:</label>

					<div>
						<?php

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
elseif($rating<=40 && $rating>0)
{
	for($i=1;$i<=1;$i++)
	{	
	echo "<span style='font-size:300%;color: #2E86C1;'>&starf;</span>";
	}
}

else
{
	echo "not yet rated.";
}
						?>
	
					</div>
					</div>
					<br>

					<label for="suggestion">Suggestion:</label>
					<br>
					<textarea rows="10" cols="56" name="suggestion">	
					</textarea>
					<input type="hidden" name="id" value="<?php echo $fid ?>">
					<br><br>

				<center><a href=""></a><button name="button2" class="button">Submit</button></a></center>
			</form>
	</div>			
			
		

				</div>
			</div>
		</div>
	</div>
	
</div>

<?php

require_once("../common/footer.php");

?>