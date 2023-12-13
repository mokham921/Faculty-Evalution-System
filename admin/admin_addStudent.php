<?php

require_once("../common/admin_header.php");

?>
<div class="container">
	<div class="row">
		<div class="col-xl-10 col-md-10 col-sm-6 col-12 mt-5 mx-auto">
			<div class="card card-color">
				<div class="card-body mx-auto">
					<form action="add_mem_stu.php" method="POST">
						<table class="table table-borderless space">

							<tbody>
								<tr>
									<td><label for="st_name">Name</label></td>

									<td><input type="text" name="stname" id="st_name"></td>
								</tr>

								<tr>
									<td><label for="email">Email</label></td>

									<td><input type="text" name="email" id="email"></td>
								</tr>

								<tr>
									<td><label for="year">Year</label></td>

									<td>
										<select name="year" onclick="checkAlert(event);">
											<option value="1">First Year</option>
											<option value="2">Second Year</option>	
											<option value="3">Third Year</option>					
											<option value="4">Fourth Year</option>
											<option value="5">Fifth Year</option>
										</select>
										
									</td>
								</tr>

								<tr>
									<td><label for="major">Section</label></td>

									<td>
										<div id="firstyr">
											<select name="major" id="myselect">
												<option value="A" >Section A</option>
												<option value="B">Section B</option>
												<option value="C">Section C</option>
												<option value="D">Section D</option>
												<option value="E">Section E</option>
											</select>
										</div>
										<div id="secondyr">
											<select name="major" id="myselect">
												<option value="A" >Section A</option>
												<option value="B">Section B</option>
												<option value="C">Section C</option>
												<option value="D">Section D</option>
												<option value="E">Section E</option>
											</select>											
										</div>
										<div id="thirdyr">
											<select name="major" id="myselect">
												<option value="A1">Section A(CS)</option>
												<option value="B1">Section B(CS)</option>
												<option value="C1">Section C(CS)</option>
												<option value="D1">Section A(CT)</option>
											</select>
										</div>
										<div id="fourthyr">
											<select name="major" id="myselect">
												<option value="SE">Software Engineering</option>
												<option value="KE">KnowLedge Engineering</option>
												<option value="HPC">High Performance Computing</option>
												<option value="BIS">Business Information System</option>
												<option value="ES">Embedded System</option>
												<option value="NE">Network Engineering</option>
											</select>
										</div>
										<div id="fifthyr">
											<select name="major" id="myselect">
												<option value="SE">Software Engineering</option>
												<option value="KE">KnowLedge Engineering</option>
												<option value="HPC">High Performance Computing</option>
												<option value="BIS">Business Information System</option>
												<option value="ES">Embedded System</option>
												<option value="NE">Network Engineering</option>
											</select>
										</div>

										
									</td>
								</tr>

								

								<tr>
									<td><label for="gender">Gender</label></td>
									<td>Female:<input type="radio" name="gender" value="female">
										Male:<input type="radio" name="gender" value="male">
									</td>
								</tr>


								<tr>
									<td><label for="password">Password</label></td>

									<td><input type="password" name="password" id="password"></td>
								</tr>
							</tbody>
						</table>
						<center><a href="#"><button class="button" name="button3">Add Student</button></a>
							<a href="admin_adddeleteMembers.php"><button type="button" class="button">Back</button></a></center>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

	<?php

	require_once("../common/footer.php");

	?>