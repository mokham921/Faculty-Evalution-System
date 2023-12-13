<?php

require_once("../common/admin_header.php");

?>
<div class="container">
	<div class="row">
		<div class="col-xl-8 col-md-8 col-sm-6 col-12 mt-5 mx-auto">
			<div class="card card-color">
				<div class="card-body mx-auto">
					<form action="">
						<table class="table table-borderless">

							<tbody>								

								<tr>
									<td><label for="department">Department</label></td>
									<td><input type="text" name="department"></td>
								</tr>
								
								
							</tbody>
						</table>
						<center><a href="#"><button class="button" onclick="showinfo();">Search</button></a></center>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<?php

require_once("../common/footer.php");

?>