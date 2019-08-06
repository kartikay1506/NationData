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
					<div class="card">
						<div class="card-header">
							<div class="row">
								<button class="btn btn-primary btn-back ml-2" style="color:white"><a href="./index.php" style="color:white"><i class="fa fa-arrow-left mr-2"></i>Back</a></button>
								<h4 style="font-size:1.5em;font-weight:bolder;margin-left:33vw">ORGANIZATION DETAILS</h4>
							</div>
						</div>
                        <div class="card-body">
						<form action="./src/main.php" method="post">
							<div class="row mt-3">
								<div class="col-md-3">
									<h5 class="mt-2">Governing Body :</h5>
								</div>
								<div class="col-md-6">
									<select class="form-control boxes" name="governing_body">
										<option selected disabled>SELECT</option>
										<option value="Central Government">Central Government</option>
										<option value="State Government">State Government</option>
										<option value="Local Body">Local Body</option>
										<option value="University">University</option>
										<option value="Private Aided">Private Aided</option>
										<option value="Private Un-Aided">Private Un-Aided</option>
										<option value="Autonomous">Autonomous</option>
									</select>
								</div>
							</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Name :</h5>
										</div>
										<div class="col-md-6">
											<input class="form-control boxes" type="text" name="institution_name" placeholder="Trust/Society/Company">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">State/UT :</h5>
										</div>
										<div class="col-md-6">
											<select class="form-control boxes" name="state" id="listBox" onchange='selct_district(this.value)'>
											</select>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">District :</h5>
										</div>
										<div class="col-md-6">
											<select id='secondlist' class="form-control boxes" name="district"></select>
												<!-- <select name="district" id="" class="form-control">
													<option selected disabled>Select</option>
												</select> -->
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Town/City/Village :</h5>
										</div>
										<div class="col-md-6">
											<input name="town" class="form-control boxes" placeholder="Town/City/Village">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Pin :</h5>
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control boxes" name="postal" placeholder="Pin">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Address :</h5>
										</div>
										<div class="col-md-6">
											<input class="form-control boxes" type="text" name="institution_address" placeholder="Trust/Society/Company Address">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Landline STD Code :</h5>
										</div>
										<div class="col-md-6">
											<input type="number" class="form-control boxes" name="land_phone_std_code" min="0" placeholder="STD">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Landline Number :</h5>
										</div>
										<div class="col-md-6">
											<input class="form-control boxes" type="number" min="0" name="land_phone_number" placeholder="Land Line Number">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Fax Number :</h5>
										</div>
										<div class="col-md-6">
											<input type="number" min="0" class="form-control boxes" name="fax_number" placeholder="Fax Number">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Email :</h5>
										</div>
										<div class="col-md-6">
											<input type="email" class="form-control boxes" name="email" placeholder="Email">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Website :</h5>
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control boxes" name="institution_website" placeholder="Website">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Registration Number <i class="fa fa-info-circle ml-2" data-toggle="tooltip" title="Registration Number for the Institution"></i></h5>
										</div>
										<div class="col-md-6">
											<input class="form-control boxes" type="text" name="registration_number" placeholder="Registration Number">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Registration Date <i class="fa fa-info-circle ml-2" data-toggle="tooltip" title="Registration Date for the Institution"></i></h5>
										</div>
										<div class="col-md-6">
											<input type="date" class="form-control boxes" name="registration_date">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Registered With :</h5>
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control boxes" name="registered_with" placeholder="Registered With">
										</div>
									</div>
									<h4 class="mt-4" style="font-weight:bolder;font-size:1.3em">Trustee Details</h4>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Trust Type :</h5>
										</div>
										<div class="col-md-6">
											<select class="form-control boxes" name="company_type">
												<option selected disabled>SELECT</option>
												<option value="Trust">Trust</option>
												<option value="Society">Society</option>
												<option value="Section 8 Company">Section 8 Company</option>
												<option value="Section 25 Company">Section 25 Company</option>
											</select>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Name :</h5>
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control boxes" name="company_name" placeholder="Trust/Society/Company Name">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Contact :</h5>
										</div>
										<div class="col-md-6">
											<input type="number" min="0" class="form-control boxes" name="company_contact" placeholder="Contact">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-3">
											<h5 class="mt-2">Email :</h5>
										</div>
										<div class="col-md-6">
											<input type="email" class="form-control boxes" name="company_email" placeholder="Email">
										</div>
									</div>
									<div class="mt-3" style="text-align:center">
										<button class="btn btn-success" type="submit" name="organization_details">Submit</button>
									</div>
								</form>
                                </div>
							</div>
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