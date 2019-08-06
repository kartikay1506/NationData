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
                                <div class="card-header"><h4 style="font-size:1.5em;font-weight:bolder;margin-left:16vw">LAND DETAILS PER REGISTRATION</h4></div>
                                <div class="card-body">
									<form action="./src/main.php" method="post">
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land Registration Number :</h5>
											</div>
											<div class="col-md-4">
												<input type="number" min="0" class="form-control" name="land_registration_number" placeholder="Land Registration Number">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Date of Registration :</h5>
											</div>
											<div class="col-md-3">
												<input type="date" class="form-control" name="registration_date" placeholder="Date of Registration">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land Area (in sqm) :</h5>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" name="area_land" placeholder="Land Area">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Khasra Number :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" min="0" class="form-control" name="khasra_number" placeholder="Khasra Number">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Plot Number/Survey Number :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" min="0" class="form-control" name="plot_number" placeholder="Plot Number/Survey Number">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land Situated At :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="land_situated_at" placeholder="Land Situated At">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land Registered in Name of :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="registered_name" placeholder="Registered Name">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Ownership or Government Lease :</h5>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" name="ownership_government_lease" placeholder="Ownership or Government Lease">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land Use Certificate Issued :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="land_use_certificate_issued" placeholder="Land Use Certificate Issued">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Name of Land use Certificate Issuing Authority :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="certificate_issuing_authority" placeholder="Name of Land use Certificate Issuing Authority">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Is this land Mortgaged ?</h5>
											</div>
											<div class="col-md-3">
												<select class="form-control" name="is_land_mortgaged" id="land_mortgaged">
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
											</div>
										</div>
										<div class="row mt-3" id="mortgaged_bank_details" style="display:none">
											<div class="col-md-3">
												<h5 class="mt-2">Details of Bank if Land is Mortgaged :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="bank_details" placeholder="Details of Bank">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land Required at the Time of First AICTE Approval (In Sqm) :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" min="0" class="form-control" name="land_required" placeholder="Land (in Sqm)">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land Available at the Time of First AICTE Approval (In Sqm) :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" min="0" class="form-control" name="land_available" placeholder="Land (in Sqm)">
											</div>
										</div>
                                        <button class="btn btn-success" type="submit" name="land_details_per_registration">Submit</button>
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
	<script>
		$('#land_mortgaged').change(function() {
			var opt = $(this).val();
			if(opt === 'yes') {
				$('#mortgaged_bank_details').show();
			}
			else {
				$('#mortgaged_bank_details').hide();
			}
		});
	</script>
</body>
</html>