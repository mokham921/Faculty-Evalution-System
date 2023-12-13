<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Project Structure</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.ico">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../assets/library/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="../assets/library/fontawesome/css/fontawesome.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/library/bootstrap/css/bootstrap.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="../assets/css/style.css">

	<script type="text/javascript" src="../assets/js/sidenav_overlay.js"></script>
	<script type="text/javascript" src="../assets/js/password.js"></script>
	<script type="text/javascript" src="../assets/js/table.js"></script>
	<script type="text/javascript" src="../assets/js/editQuestion.js"></script>
	<script type="text/javascript" src="../assets/js/option.js"></script>




</head>
<body>
	<div class="top-bar">
		FACULTY EVALUATION SYSTEM
	</div>

		<!-- <div class="banner-body">
			<h1>Evaluation</h1>
			<h1></h1>	
						
		</div> -->
		<div class="banner">
			<div class="bd-example">
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="../assets/img/Admin_manageMembers.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							<!-- <h5>First slide label</h5>
								<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
							</div>
						</div>
						<div class="carousel-item">
							<img src="../assets/img/Admin_editquestion.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							<!-- <h5>Second slide label</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
							</div>
						</div>
						<div class="carousel-item">
							<img src="../assets/img/Admin_giveRatingandSuggestion.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							<!-- <h5>Third slide label</h5>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
							</div>
						</div>
						<div class="carousel-item">
							<img src="../assets/img/Admin_receiveFeedback.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							<!-- <h5>Third slide label</h5>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
							</div>
						</div>
						<a href="javascript:void(0)" onclick="openNav()"><img src="../assets/img/arrow2.png" alt=""  style="width: 50px; height: 50px;  transform: translate(-40%, 450%);"></a>
					</div>
				<!-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>			 -->	

			</div>
		</div>

		<div id="mySidenav" class="sidenav">

			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="../assets/img/arrow.png" alt="" style="width: 50px; height: 50px;  transform: translate(100%, 450%);"></a>
			<a href="Admin_Profile.php"><img src="../assets/img/girl.jpg" alt="" style="width: 100px; height: 135px; border-radius: 50% ;"></a>
			<div class="text">
				<a href="Admin_AddDeleteMembers.php">Manage Members</a>
				<a href="Admin_giveQuestion.php" >Edit Questions</a>
				<a href="Admin_give_rating1.php">Give Rating</a>
				<a href="management.php">Manage Classes</a>
			</div>
		</div>

	</div>	

	<!-- Use any element to open the sidenav -->
	<!-- <a href="javascript:void(0)" onclick="openNav()"><img src="img/arrow2.png" alt=""  style="width: 50px; height: 50px;  transform: translate(-40%, 500%);"></a> -->

	<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->


	<div class="site-nav">
		<nav class="navbar navbar-expand-lg navbar-light bg-site-color">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto text-primary">
					<li class="nav-item active">
						<a class="nav-link" href="../admin/admin_home.php">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../admin/admin_profile.php">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../admin/admin_activity.php">Activities</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../login.php">Sign Out</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
