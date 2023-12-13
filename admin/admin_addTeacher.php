<?php
session_start();
include('../connect.php');

require_once("../common/admin_header.php");

?>
<div class="container">
	<div class="row">
		<div class="col-xl-10 col-md-10 col-sm-6 col-12 mt-5 mx-auto">
			<div class="card card-color">
				<div class="card-body mx-auto">
					<form action="add_mem_facu.php" method="POST">

						<table class="table table-borderless space">

							<tbody>
								<tr>
									<td><label for="st_name">Name</label></td>

									<td><input type="text" name="tc_name" id="tc_name">
										<!-- <span class="error">*<?php echo $nameErr; ?></span> -->
									</td>
								</tr>

								<tr>
									<td><label for="email">Email</label></td>

									<td><input type="text" name="tc_email" id="email">
										<!--  <span class="error">*<?php echo $emailErr; ?> </span> -->
									</td>
								</tr>

								<tr>
									<td><label for="department">Department</label></td>

									<td>
										<select name="department">
											<option value="fs">Faculty of Information Science</option>
											<option value="hd">Hardware Department</option>
											<option value="md">Myanmar Department</option>
											<option value="ed">English Department</option>
										</select>
									</td>
								</tr>

								<tr>
									<td><label for="gender">Gender</label></td>
									<td>Female:<input type="radio" name="tc_gender" value="female">
										Male:<input type="radio" name="tc_gender" value="male">
									</td>
								</tr>

								<tr>
									<td><label for="password">Password</label></td>
									<td><input type="password" name="tc_password" id="password">
										<!-- <span class="error">*<?php echo $passwordErr; ?></span> -->
									</td>
								</tr>
							</tbody>
						</table>
						<center><button class="button" name="button4">Add Teacher</button>
							<a href="admin_adddeleteMembers.php"><button class="button">Back</button></a></center>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<?php
	require_once("../common/footer.php");
?>