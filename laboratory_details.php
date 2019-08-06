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
                                <div class="card-header"><h4 style="font-size:1.5em;font-weight:bolder;margin-left:20vw">LABORATORY DETAILS</h4></div>
                                <div class="card-body">
									<div class="row" style="text-align:center;margin-left:10vw">
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_laboratory_details" id="laboratory1" value="single">
                                                <label class="form-check-label">Upload Single Laboratory Details</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_laboratory_details" id="laboratory2" value="multiple">
                                                <label class="form-check-label">Upload Multiple Laboratory Details</label>
                                            </div>
                                        </div>
                                    </div>
									<form action="./src/main.php" method="post" id="card_form" style="display:none">
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Program :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="program" placeholder="Program" required>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Level :</h5>
											</div>
											<div class="col-md-6">
												<select class="form-control" name="level" required>
													<option value="" selected disabled>SELECT</option>
													<option value="Under Graduate">Under Graduate</option>
													<option value="Post Graduate">Post Graduate</option>
													<option value="Diploma">Diploma</option>
													<option value="PG Diploma">PG Diploma</option>
													<option value="Ph.D">Ph.D</option>
													<option value="M.Phil">M.Phil</option>
													<option value="Certificate">Certificate</option>
													<option value="Integrated">Integrated</option>
												</select>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Course :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="course" placeholder="Course" required>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Name of the Laboratory :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="name_laboratory" placeholder="Name of the Laboratory" required>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Is it Research Lab for PG Course?</h5>
											</div>
											<div class="col-md-6">
												<select class="form-control" name="is_research_pg" required>
													<option value="" selected disabled>SELECT</option>
													<option value="yes">Yes</option>
													<option value="no">No</option>
												</select>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Lab/Major Equipments :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="lab_major_equipments" placeholder="Lab/Major Experiments" required>
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
												<h5 class="mt-2">Yearly Budgets for Experiments:</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="yearly_experiments_budget" placeholder="Yearly Budgets" required>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Yearly Budgets for Consumables :</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="yearly_consumables_budget" placeholder="Yearly Budgets" required>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Investment Till Date :</h5>
											</div>
											<div class="col-md-6">
												<input type="date" class="form-control" name="investment_till_date" required>
											</div>
										</div>
										<div class="mt-3" style="text-align:center">
											<button class="btn btn-success" type="submit" name="laboratory_details">Submit</button>
										</div>
									</form>
									<div class="mt-5"  id="card_excel" style="display:none">
										<form action="./src/main.php" method="post" style="float:right">
											<button class="btn btn-danger btn-sm" name="download_excel_laboratory_details" type="submit"><i class="fa fa-download mr-2"></i>Template</button>
										</form>
										<form action="./src/upload_excel_sheets.php" method="post" enctype="multipart/form-data">
											<input type="file" name="sheet">
											<button class="btn btn-success btn-sm" type="submit" name="submit_laboratory_details" type="submit"><i class="fa fa-upload mr-2"></i>Upload</button>
										</form>
									</div>
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