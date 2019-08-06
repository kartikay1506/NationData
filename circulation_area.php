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

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="./assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<?php include './src/header.php';?>
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<?php include './sidebar.php';?>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner mt-3">
					<div class="row mt--2">
						<div class="col">
							<div class="card">
                                <div class="card-header"><h4 style="font-size:1.5em;font-weight:bolder;margin-left:21vw">CIRCULATION AREA</h4></div>
                                <div class="card-body">
									<form action="./src/main.php" method="post">
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Area Type :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="area_type" placeholder="Area Type">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Building Name :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="building_name" placeholder="Building Name">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Building Number :</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="building_number" placeholder="Building Number">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Average Carpet Area :</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="avg_carpet_area" placeholder="Average Carpet Area">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Flooring :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="flooring" placeholder="Flooring">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Painting Done :</h5>
											</div>
											<div class="col-md-6">
												<select class="form-control" name="painting_done">
													<option value="" selected disabled>SELECT</option>
                                                	<option value="yes">Yes</option>
                                                	<option value="no">No</option>
                                                </select>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Sanitary Fittings Done :</h5>
											</div>
											<div class="col-md-6">
												<select class="form-control" name="sanitary_fittings">
													<option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                    	                            <option value="no">No</option>
                                                </select>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Electrification & Lightning :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="electrification_lightning" placeholder="Electrification & Lightning">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Furniture :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="furniture" placeholder="Furniture">
											</div>
										</div>
										<div class="mt-3" style="text-align:center">
											<button class="btn btn-success" type="submit" name="circulation_area">Submit</button>
										</div>
                                    </form>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<?php include './src/footer.php';?>
			</footer>
		</div>
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