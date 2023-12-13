

<?php
session_start(); 
require_once("../common/student_header.php");
include("../connect.php");
$id=$_GET['id'];
$_SESSION['tid']=$id;

?>
<div class="container">
	
	<div class="row">
		<form action="stu_point_feedback.php" method="POST">

			<div class="col-10 mt-5 mx-auto">
				<div class="card">
					<div class="card-body card-color">

						<table cellspacing="20" class="space">



							<?php

							$select0="SELECT * from question ";
							$run0=mysqli_query($conn,$select0);

							while($row=mysqli_fetch_assoc($run0))
							{
								echo "<tr>";

								echo "<td>".$row['qid']."</td>";
								$i=$row['qid'];
								echo "<td>".$row['question']."</td>";
								echo "</tr>";


								echo "<tr><td></td><td>";

								echo "<input type='radio' name='ans[$i]' value='10'

								
								><label>Strongly Agree</label>";
								echo "<input type='radio' name='ans[$i]' value='7'><label>Agree</label>";
								echo "<input type='radio' name='ans[$i]' value='5'><label>Neutral</label>";
								echo "<input type='radio' name='ans[$i]' value='3'><label>Disagree</label>";
								echo "<input type='radio' name='ans[$i]' value='0'><label>Strongly Disagree</label>";
								echo "</td></tr>";
							}
							?>

						</table>

						
					</div>
				</div>
			</div>
			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-12 mt-5 mx-auto">
				<div class="card">
					<div class="card-body card-color">
						<div class="header">
							<h2>Let's Give Feedback!</h2>
						</div>			

						<div>
							<textarea class="col-12 mt-5 mx-auto" rows="10" cols="50" name="Feedback"></textarea><br>

						</div>
						<div>
							<a href="student_answerQuestion.php">
								<button class="button" style="float: right; margin: 10px auto;" name="submit">Submit</button>
							</a>

						</div>
					</div>
				</div>
			</div>

		</form>
	</div>



</div>

<?php

require_once("../common/footer.php");

?>