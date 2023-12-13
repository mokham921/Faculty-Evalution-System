<?php

require_once("../common/admin_header.php");

?>
<div class="container">
	
	<div class="row">
		<div class="col-xl-8 col-md-8 col-sm-10 col-12 mt-5 mx-auto">
			<div class="card card-color">
				<div class="card-body mx-auto">
					<form action="">
						<table class="table table-borderless">

							<tbody>
								<tr>
									<td><label for="st_name">Name</label></td>
									<td><input type="text" name="st_name"></td>
								</tr>								

								<tr>
									<td><label for="department">Department</label></td>
									<td><input type="text" name="department"></td>
								</tr>
								
								
							</tbody>
						</table>
					</form>
						<center><button class="button" onclick="showinfo();">Search</button></center>
					
				</div>
			</div>
		</div>
	</div>
	
	<div id="rating">
		<div class="col-xl-8 col-md-8 col-sm-10 col-12 mt-5 mx-auto">
			<div class="card card-color">
				<div class="card-body mx-auto">
					
					<label for="Rate">Rating:</label>
					<div class="stars" style="float: right;"> 
						<span class="star on"></span>
						<span class="star on"></span>
						<span class="star half"></span>
						<span class="star"></span>
						<span class="star"></span>
					</div>
					
					<br><br>

					<label for="suggestion">Suggestion:</label>
					<br>
					<textarea class="col-12 mt-5 mx-auto" rows="10" cols="56" name="suggestion">
						
					</textarea>
					<br><br>

					<center><a href=""></a><button class="button">Submit</button></a></center>

				</div>
			</div>
		</div>
		

	</div>
</div>
<?php

require_once("../common/footer.php");

?>