<?php
include("../connect.php");
require_once("../common/admin_header.php");

?>
<div class="container">
	<div class="row">
		<div class="col-xl-8 col-md-8 col-sm-6 col-12 mt-5 mx-auto">
			
			</div>
		</div>
	</div>
	
	<?php

$dept=$_POST['department'];
$sql="SELECT * from faculty where fdept='$dept'";
$result=mysqli_query($conn,$sql);
?>

<div class="mt-5">
		<table class="table table-striped col-8 mx-auto">
			<thead class="bg-site-color text-white">
				<tr>
				
					<th scope="col">Teacher Name</th>
					<th></th>
					
				</tr>
			</thead>
			<tbody>
				<?php
while($row=mysqli_fetch_assoc($result))
{
	?>
	
				<tr>
					<td><?php echo $row['fname'] ?></td>
					<td><a href="saveavg.php?id=<?=$row['fid']?>"><button type="button" class="button">Detail</button></a></td>
				</tr>

				
	
<?php	
			
}
?>
</tbody>
		</table>
	</div>
</div>

<?php

require_once("../common/footer.php");

?>