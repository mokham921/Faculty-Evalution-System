<?php
session_start();
require_once("../common/student_header.php");


include("../connect.php");

$syr=$_SESSION['syear'];
$ssec=$_SESSION['ssection'];

$sql1="SELECT f.fid,f.fname,f.fdept from faculty f,section s,tech t where t.seid=s.seid AND t.fid=f.fid AND s.yid='$syr' AND s.class='$ssec'";
$result1=mysqli_query($conn,$sql1);



?>
<div class="container">
	
	<table class="table table-hover mt-5 col-8 mx-auto" id="">
		<div class="text_center">
			<thead>
				<tr>
					<th scope="col">Teacher Name</th>
				</tr>
			</thead>
			
			<tbody>

				<?php 
while($row1=mysqli_fetch_assoc($result1))
{
	$dept=$row1['fdept'];
	 			if($dept=='fs')
	 			{
	 				$de="Faculty of Information Science";
	 			}
	 			elseif($dept=='ed')
	 			{
	 				$de="English Department";
	 			}
	 			elseif($dept=='md')
	 			{
	 				$de="Myanmar Department";
	 			}
	 			elseif($dept=='hd')
	 			{
	 				$de="Hardware Department";
	 			}
	?>
			<tr>
					<td><a href="student_answerQuestion1.php?id=<?=$row1['fid'] ?>" style="text-decoration: none"><?php echo $row1['fname']."(".$de.")"?></a></td>
				</tr>
				<?php
			}
			?>

			</tbody>
		
		</div>
		
	</table>


</div>

<?php

require_once("../common/footer.php");

?>