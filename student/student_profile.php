<?php
session_start();
require_once("../common/student_header.php");

include('../connect.php');

$stupro=$_SESSION['eid'];
          //  $destpath=$_SESSION['aimage'];



$select1="SELECT * FROM student where sid=$stupro ";
$run1=mysqli_query($conn,$select1);
$run1=$run1->fetch_array();
$y=$run1[3];
	 			if($y==1)
	 			{
	 				$year="First Year";
	 			}
	 			elseif($y==2)
	 			{
	 				$year="Second Year";
	 			}
	 			elseif($y==3)
	 			{
	 				$year="Third Year";
	 			}
	 			elseif($y==4)
	 			{
	 				$year="Fourth Year";
	 			}
	 			elseif($y==5)
	 			{
	 				$year="Fifth Year";
	 			}


?>
<div class="container">
	<div class="row">
		
		<div class="col-xl-10 col-md-10 col-sm-12 mt-5 col-12 mx-xl-auto mx-lg-auto mx-md-auto">
			<div class="card card-color">
				<div class="card-body">
					<!-- <img src="../assets/img/profile2.jpg"> -->
					
					<table class="table table-borderless">


						<tbody>
							<tr>
								<td>
										<!-- <a href="student_image_edit.php?id=<?= $stupro ?>"><img src="<?php echo $run1[7] ?>" style="border-radius: 50%;width: 150px;height: 100px;">
										</a> -->
										
										<div class="image1">
											
												<img src="<?php echo  $run1[7] ?>" style="border-radius: 50%;width: 150px;height: 100px;" alt="Avatar" class="image">
												<!-- <div class="overlay">
													<div class="text">Change Picture</div>
												</div> -->
											
										</div>

									</td>
									<td>								
										<button class="button" style="float: right; margin: 10px auto;" name="submit"><a href="student_image_edit.php?id=<?= $stupro ?>">Change Picture</a></button>
										
									</td>
								</tr> 
								<form action="stu_ps_chg.php" 
					method="POST" enctype="multipart/form-data" name="form1" onsubmit="return formValidator();">
								<tr>
									<td><label for="st_name">Name</label></td>
									<td><?php echo  $run1[1] ?></td>
								</tr>

								<tr>
									<td><label for="email">Email</label></td>
									<td><?php echo $run1[2] ?></td>
								</tr>

								<tr>
									<td><label for="year">Year</label></td>
									<td> <?php echo $year ?></td>
								</tr>

								<tr>
									<td><label for="gender">Gender</label></td>
									<td><?php echo  $run1[5] ?></td>
								</tr>

								<tr>
									<td><label for="password">Password</label></td>
									<td>*********</td>
								</tr>

								<tr>
									<td><label for="chg_pass">Change Password</label></td>
									<td><input type="password" name="password" id="chg_pass"></td>
									<td><button name="btps">change</button>	</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>


	</div>
</div>

<?php

require_once("../common/footer.php");

?>