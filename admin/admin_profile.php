<?php
session_start(); 
require_once("../common/admin_header.php");

?>
<div class="container">
	<div class="row">
		
		<div class="col-xl-10 col-md-10 col-sm-12 mt-5 col-12 mx-xl-auto mx-lg-auto mx-md-auto">
			<div class="card card-color">
				<div class="card-body">
					<!-- <img src="../assets/img/profile2.jpg"> -->
					
						<table class="table table-borderless">
							<?php
							include('../connect.php');

							$admpro=$_SESSION['eid'];
							



							$select1="SELECT * FROM admin where aid=$admpro ";
							$run1=mysqli_query($conn,$select1);
							$run1=$run1->fetch_array();



							?>
							<tbody>
								<tr>
									<td>
										<!-- <div class="profile_pic">
											<a href="admin_image_edit.php?id=<?= $admpro ?>"><img src="<?php echo $run1[5] ?>" style="border-radius: 50%;width: 150px;height: 100px;">
											</a>
										</div> -->
										<div class="image1">
											
												<img src="<?php echo  $run1[5] ?>"  style="border-radius: 50%;width: 150px;height: 100px;" alt="Avatar" class="image">

											
										</div>
									</td>
									<td>								
										<button class="button" style="float: right; margin: 10px auto;" name="submit"><a href="admin_image_edit.php?id=<?= $admpro ?>">Change Picture</a></button>
										
									</td>
								</tr> 
								<form action="adm_ps_chg.php" method="POST" enctype="multipart/form-data" name="form1" onsubmit="return formValidator();">

								<tr>
									<td><label for="st_name">Name</label></td>
									<td><?php echo  $run1[1] ?></td>
								</tr>

								<tr>
									<td><label for="email">Email</label></td>
									<td><?php echo $run1[2] ?></td>
								</tr>



								<tr>
									<td><label for="gender">Gender</label></td>
									<td><?php echo  $run1[3] ?></td>
								</tr>

								<tr>
									<td><label for="password">Password</label></td>
									<td>*********</td>
								</tr>

								<tr>
									<td><label for="chg_pass" >Change Password</label></td>
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