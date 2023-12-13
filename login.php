<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Project Structure</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/library/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/library/fontawesome/css/fontawesome.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/library/bootstrap/css/bootstrap.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<style type="text/css">
		.banner {
			height: 600px;
			background: url('assets/img/slider.jpg') 50% 50% no-repeat;
			background-size: cover;
			position: relative;
		}
				

		.banner-body {
			position: absolute;
			top: 80%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 100%;
		}

		h2 {
			text-align: center; 
		}

		

		#wrap {
			width: 500px;
			padding: 20px 100px 40px 100px;
			margin: 130px auto;
			/* border: 2px solid #004a80; */
			background: #f2f2f2;
			box-shadow: 0 5px 10px rgba(0,0,0,0.16), 0 5px 20px rgba(0,0,0,0.23);
		}

		input[type=text] ,input[type=password] {
			display: block;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>

	<div class="top-bar">
		FACULTY EVALUATION SYSTEM
	</div>


	<div class="banner">
		<div class="banner-body">	
			<h2>You are not logged in!</h2>	
			<center><a href="#btn"><button class="button">Log In</button></a></center>
		</div>

	</div>
	<div class="container">
		<h2 class="mt-5">Teacher Evaluation System</h2>

	<div class="row" id="btn">
		
		<div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 mt-5 col-12 mx-auto">
			<div class="card card-color mb-5">
				<div class="card-body mx-auto">
					
			        <form action="true_php_login.php" method="POST">
					<label for="email">Email</label>
					<input type="text" name="email" id="email">
					
					<label for="password">Password</label>
					<input type="password" name="password" id="password">

					<a href="">Forget Password</a>

					<center><button class="button" name="button">Log In</button></center>
			</form>
				</div>
			</div>
		</div>


	</div>
	</div>
	
	
	<!-- JS -->
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-migrate-3.0.1.js"></script>
	<script type="text/javascript" src="assets/library/bootstrap/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>