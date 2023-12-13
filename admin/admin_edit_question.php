<?php
//require_once("../library/connection.php");
include("../connect.php");
require_once("../common/admin_header.php");
$id=$_GET['id'];


$sql="SELECT * FROM question  WHERE qid='$id'";
$result=mysqli_query($conn,$sql);
$qust=mysqli_fetch_assoc($result);
//header("Location:restaurant_typecreate.php");


?>

<div class="container">
	<form action="question_edit_code.php" method="POST">
		<input type="hidden" name="id" value="<?=$id?>">

		<div class="form-group">
			<label for="name">Question</label>

			<input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?=$qust['question']?>">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

</div>

<?php
require_once("../common/footer.php");
?>


