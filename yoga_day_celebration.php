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
                                <div class="card-header"><h4 style="font-size:1.5em;font-weight:bolder;margin-left:12vw">YOGA DAY CELEBRATION ON 21st JUNE</h4></div>
                                <div class="card-body">
									<form action="./src/main.php" method="post" enctype="multipart/form-data">
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Institute Name :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="institution_name" placeholder="Institute Name">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Institute Address :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="institution_address" placeholder="Institute Address">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">State :</h5>
											</div>
											<div class="col-md-6">
												<select class="form-control" name="state" id="listBox" onchange='selct_district(this.value)'>
                                                </select>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">District :</h5>
											</div>
											<div class="col-md-6">
												<select id='secondlist' class="form-control" name="district"></select>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Activities Conducted :<i class="fa fa-info-circle ml-3" data-toggle="tooltip" title="List of various activities conducted related to Celebration of Yoga Day"></i></h5>
											</div>
											<div class="col-md-6">
												<textarea class="form-control" rows="5" name="activities" placeholder="List of Activities (Max 500 Words)"></textarea>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Number of Students Participated :</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="number_students" placeholder="0">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Number of Faculty Participated:</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="number_faculty" placeholder="0">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Attach Few Photographs :<i class="fa fa-info-circle ml-3" data-toggle="tooltip" title="Upload atleast 8 photographs"></i></h5>
											</div>
											<div class="col-md-3">
												<input type="file" name="photos[]" multiple>
											</div>
										</div>
										<div class="mt-3" style="text-align:center">
											<button class="btn btn-success ml-2 mt-3" name="yoga_day_celebration" type="submit">Submit</button>
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