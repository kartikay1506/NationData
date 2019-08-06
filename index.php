<?php 
	require_once './src/auth.php';
	if($_SESSION['usertype'] != 'nodal officer') {
		echo('<script>alert("You do not have the Permission to Access This Page");
		window.location = "./index_admin.php";
		</script>');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>One Nation One Data</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="./assets/img/government_logo.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="./assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/atlantis.min.css">
	<link rel="stylesheet" href="./assets/css/custom.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="./assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<!-- Header -->
		<div class="main-header1">
			<?php include './src/header.php';?>
		</div>
		<!-- End Header -->

		<!-- Content Section -->
		<div class="main-panel1">
			<div class="content">
				<div class="page-inner">
					<div class="card" style="height:50vh">
						<h3 class="mt-5 ml-3">Welcome to One Nation One Data Portal</h3>
						<a href="./src/logout.php">Logout</a>
					</div>
					
					<!-- Organization Details -->
					<div class="card">
						<div class="card-header">
							<div class="row">
								<h4 style="font-size:1.3em;font-weight:bolder;margin-left:2vw">ORGANIZATION DETAILS</h4>
								<div class="mr-3" style="margin-left:auto">
									<button class="btn btn-primary btn-back" type="button" style="font-size:1.20em">
										<a href="./organization_details.php" style="color:white"><i class="fa fa-pencil mr-2"></i>Edit</a>
									</button>
								</div>
							</div>
						</div>
						<div class="card-body">
							content
						</div>
					</div>
					<!-- End Organization Details -->

					<!-- Registrar Details -->
					<div class="card">
						<div class="card-header">
							<div class="row">
								<h4 style="font-size:1.3em;font-weight:bolder;margin-left:2vw">REGISTRAR DETAILS</h4>
								<div class="mr-3" style="margin-left:auto">
									<button class="btn btn-primary btn-back" type="button" style="font-size:1.20em">
										<a href="./registrar_details.php" style="color:white"><i class="fa fa-pencil mr-2"></i>Edit</a>
									</button>
								</div>
							</div>
						</div>
						<div class="card-body">
							content
						</div>
					</div>
					<!-- End Registrar Details -->

					<!-- Faculty Details -->
					<div class="card">
						<div class="card-header">
							<div class="row">
								<h4 style="font-size:1.3em;font-weight:bolder;margin-left:2vw">FACULTY DETAILS</h4>
								<div class="mr-3" style="margin-left:auto">
									<button class="btn btn-primary btn-back" type="button" style="font-size:1.20em">
										<a href="./faculty_details.php" style="color:white"><i class="fa fa-pencil mr-2"></i>Edit</a>
									</button>
								</div>
							</div>
						</div>
						<div class="card-body">
							content
						</div>
					</div>
					<!-- End Faculty Details -->

					<!-- Program Details -->
					<div class="card">
						<div class="card-header">
							<div class="row">
								<h4 style="font-size:1.3em;font-weight:bolder;margin-left:2vw">PROGRAM DETAILS</h4>
								<div class="mr-3" style="margin-left:auto">
									<button class="btn btn-primary btn-back" type="button" style="font-size:1.20em">
										<a href="./program_details.php" style="color:white"><i class="fa fa-pencil mr-2"></i>Edit</a>
									</button>
								</div>
							</div>
						</div>
						<div class="card-body">
							content
						</div>
					</div>
					<!-- End Program Details -->

					<!-- Course Details -->
					<div class="card">
						<div class="card-header">
							<div class="row">
								<h4 style="font-size:1.3em;font-weight:bolder;margin-left:2vw">COURSE DETAILS</h4>
								<div class="mr-3" style="margin-left:auto">
									<button class="btn btn-primary btn-back" type="button" style="font-size:1.20em">
										<a href="./course_details.php" style="color:white"><i class="fa fa-pencil mr-2"></i>Edit</a>
									</button>
								</div>
							</div>
						</div>
						<div class="card-body">
							content
						</div>
					</div>
					<!-- End Course Details -->

					<!-- Vocational Course Details -->
					<div class="card">
						<div class="card-header">
							<div class="row">
								<h4 style="font-size:1.3em;font-weight:bolder;margin-left:2vw">VOCATIONAL COURSES</h4>
								<div class="mr-3" style="margin-left:auto">
									<button class="btn btn-primary btn-back" type="button" style="font-size:1.20em">
										<a href="./faculty_details.php" style="color:white"><i class="fa fa-pencil mr-2"></i>Edit</a>
									</button>
								</div>
							</div>
						</div>
						<div class="card-body">
							content
						</div>
					</div>
					<!-- End Vocational Course Details -->

					<!-- Land Details -->
					<div class="card">
						<div class="card-header">
							<div class="row">
								<h4 style="font-size:1.3em;font-weight:bolder;margin-left:2vw">LAND DETAILS</h4>
								<div class="mr-3" style="margin-left:auto">
									<button class="btn btn-primary btn-back" type="button" style="font-size:1.20em">
										<a href="./land_details.php" style="color:white"><i class="fa fa-pencil mr-2"></i>Edit</a>
									</button>
								</div>
							</div>
						</div>
						<div class="card-body">
							content
						</div>
					</div>
					<!-- End Land Details -->

				</div>
			</div>	
		</div>
		<!-- End Content Section -->
		
		<!-- Footer -->
		<?php include './src/footer.php';?>
		<!-- End Footer -->
	</div>
	<!--   Core JS Files   -->
	<script src="./assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="./assets/js/core/popper.min.js"></script>
	<script src="./assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="./assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="./assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="./assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="./assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="./assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="./assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="./assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="./assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="./assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="./assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="./assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="./assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="./assets/js/setting-demo.js"></script>
	<!-- <script src="./assets/js/demo.js"></script> -->
	<!-- State/District Plugin Jquery/JS -->
<script src="./districts-select-list/jquery.js"></script>
<script src="./districts-select-list/state.js"></script>
</body>
</html>