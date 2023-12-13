<?php
include('../connect.php');
require_once("../common/admin_header.php");

?>
<div class="container">
	<div class="row">
		<div class="col-xl-4 col-md-4 col-sm-6 col-12 mt-5 mx-auto">
			<div class="card card-color">
				<div class="card-body mx-auto">
					<b>Choose Member Types!</b>
					<br><br>

					<input type="radio" class="r1" name="membertype" id="teacher" onclick="show2();">
					<label for="teacher">Teacher</label>
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<input type="radio" class="r1" name="membertype" id="student" onclick="show1();">
					<label for="student">Student</label>
					
				</div>
			</div>
		</div>
	</div>



	<div class="mt-3" id="table2">
			<a href="admin_addTeacher.php"><button type="button" class="button mb-3" style="border-radius: 50%;position: relative; "><span style="font-size: 20px;font-weight: 700px;">+</span></button></a>
		<table class="table table-striped">
			<thead class="bg-site-color text-white">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Department</th>
					<th scope="col">Gender</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>

				<?php
	 		

	 		$select0="SELECT * from faculty ";
	 		$run0=mysqli_query($conn,$select0);
	 		while($row=mysqli_fetch_assoc($run0))
	 		{
	 			$dept=$row['fdept'];
	 			if($dept=='fs')
	 			{
	 				$de="Faculty of Information Science";
	 			}
	 			elseif($dept=='ed')
	 			{
	 				$de="English Department";
	 			}
	 			elseif($dept=='md')
	 			{
	 				$de="Myanmar Department";
	 			}
	 			elseif($dept=='hd')
	 			{
	 				$de="Hardware Department";
	 			}

	 			echo "<tr>";
	 			
	 			echo "<td>".$row['fid']."</td>";
	 			echo "<td>".$row['fname']."</td>";
	 			echo "<td>".$row['femail']."</td>";
	 			echo "<td>".$de."</td>";
	 			echo "<td>".$row['fgender']."</td>";
	 			?>
	 			<td><a href="listdelete.php?id=<?=$row['fid'] ?>"><button type="button" class="button">Delete</button>
	 			</a></td>
	 			
	 			<?php
	 			echo "</tr>";
	 		}
	 	?>
				
					
				
				
			</tbody>
		</table>
	</div>

	<div class="mt-3" id="table1">
		<a href="admin_AddStudent.php"><button type="button" class="button mb-3" style="border-radius: 50%;position: relative; "><span style="font-size: 20px;font-weight: 700px;">+</span></button></a>
		<table class="table table-striped">
			<thead class="bg-site-color text-white">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Year</th>
					<th scope="col">Section</th>
					<th scope="col">Gender</th>
					
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>


				<?php
	 		

	 		$select0="SELECT * from student ";
	 		$run0=mysqli_query($conn,$select0);
	 		while($row=mysqli_fetch_assoc($run0))
	 		{

	 			$y=$row['syear'];
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
	 			echo "<tr>";
	 			
	 			echo "<td>".$row['sid']."</td>";
	 			echo "<td>".$row['sname']."</td>";
	 			echo "<td>".$row['semail']."</td>";
	 			echo "<td>".$year."</td>";
	 			echo "<td>".$row['ssection']."</td>";
	 			echo "<td>".$row['sgender']."</td>";
	 			?>

	 			<td><a href="listdeletestu.php?id=<?=$row['sid'] ?>"><button type="button" class="button">Delete</button>
	 			</a></td>


	 			<?php
	 			
	 			echo "</tr>";
	 		}
	 	?>

				
					
				
				
				
			</tbody>
		</table>
	</div>
</div>

<?php

require_once("../common/footer.php");

?>