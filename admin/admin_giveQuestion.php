<?php
include('../connect.php');
require_once("../common/admin_header.php");

?>
<div class="container">
	<div class="row">
		<div class="mt-5 mx-auto">
			<table class="table table-striped">
				<thead class="bg-site-color text-white">
					<tr>
						<th scope="col">No.</th>
						<th scope="col">Question</th>
						<th scope="col">Edit</th>
					</tr>
				</thead>
				<tbody>


<?php
	 		

	 		$select0="SELECT * from question ";
	 		$run0=mysqli_query($conn,$select0);
	 		while($row=mysqli_fetch_assoc($run0))
	 		{
	 			echo "<tr>";
	 			
	 			echo "<td>".$row['qid']."</td>";
	 			echo "<td>".$row['question']."</td>";
	 			?>

									</div>
								</div>
							</div>
						


	 			<td><div data-toggle="modal" data-target="#exampleModal"><a href="admin_edit_question.php?id=<?=$row['qid']?>">
	 				<img src='../assets/img/edit.png'></a></div></td>

	 				<?php 
	 			echo "</tr>";
	 		}
	 	?>
					
						
						
		
					
					


				</tbody>
			</table>
		</div>
		
	</div>
</div>

<?php

require_once("../common/footer.php");

?>