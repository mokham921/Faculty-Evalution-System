<?php
include('../connect.php');
require_once("../common/admin_header.php");

?>
<div class="container">
	<div class="header">
		<h2>Edit the Question</h2>
	</div>
	<form action="update1.php" method="POST">

	 <table class="table table-striped">
	 	<tr>
	 		<th>No.</th>
	 		<th>Questions</th>
	 		<th>Edit</th>
	 	</tr>
<?php
	 		

	 		$select0="SELECT * from question ";
	 		$run0=mysqli_query($conn,$select0);
	 		while($row=mysqli_fetch_assoc($run0))
	 		{
	 			
	 			
	 			
	 			
	 			?>

	 	<tr>
	 		<td><?php echo $row['qid'] ?></td>
	 		<td id="edit1"><?php echo $row['question'] ?></td>
	 		<td><img src="../assets/img/edit.png" onclick="edit1();"></td>
	 	</tr>
<?php 
	 			echo "</tr>";
	 		}
	 	?>
	 	
	 </table>

	

	<a href="#btn"><button class="button" name="save" style="margin:0 0 20px 1000px;">Save</button></a>
</div>

	

	<?php

require_once("../common/footer.php");

?>