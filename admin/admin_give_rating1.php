<?php
include("../connect.php");
require_once("../common/admin_header.php");

?>
<div class="container">
	<div class="row">
		<div class="col-xl-8 col-md-8 col-sm-6 col-12 mt-5 mx-auto">
			<div class="card card-color">
				<div class="card-body mx-auto">
					<form action="admin_give_rating2.php" method="POST" >
						<table class="table table-borderless">

							<tbody>
								<tr>
									<td><label for="department">Department</label></td>
									<td>
										<select name="department" style="width: 280px">
											<option value="fs">Faculty of Information Science</option>
											<option value="hd">Hardware Department</option>
											<option value="md">Myanmar Department</option>
											<option value="ed">English Department</option>
										</select>
									</td>
									<td><button class="button">Search</button></td>
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