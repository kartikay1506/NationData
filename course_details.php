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
										<h4 style="font-size:1.5em;font-weight:bolder;margin-left:33vw">COURSE DETAILS</h4>
									</div>
								</div>
                                <div class="card-body">
									<div class="row" style="text-align:center;margin-left:10vw">
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_course_details" id="course1" value="single">
                                                <label class="form-check-label">Upload Single Course Details</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_course_details" id="course2" value="multiple">
                                                <label class="form-check-label">Upload Multiple Course Details</label>
                                            </div>
                                        </div>
                                    </div>
									<form action="./src/main.php" method="post" id="card_form" style="display:none">
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Affiliating University/Board :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control boxes" id="affiliating_board" name="affiliating_board" placeholder="Affiliating University/Board">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Department :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control boxes" name="department" placeholder="Department">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Full Time/Part Time :</h5>
											</div>
											<div class="col-md-3">
												<select class="form-control boxes" name="full_part_time">
                                                    <option value="full time">Full Time</option>
                                                    <option value="part time">Part Time</option>
                                                </select>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Shift :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control boxes" name="shift" placeholder="Shift">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Accreditation From :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control boxes" name="accreditation_from" placeholder="Accreditation From">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Accreditation Type :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control boxes" name="accreditation_type" placeholder="Accreditation Type">
											</div>
										</div>
                                        <div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Accreditation Letter Ref No :</h5>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control boxes" name="accreditation_ref_no" placeholder="Ref No">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Accreditation Letter Date :</h5>
											</div>
											<div class="col-md-3">
												<input type="date" class="form-control boxes" name="accreditation_date" placeholder="Accreditation Letter Date">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Accreditation Till :</h5>
											</div>
											<div class="col-md-3">
												<input type="date" class="form-control boxes" name="accreditation_till" placeholder="Accreditation Till">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2" data-toggle="tooltip" title="Non-Resident of India">NRI :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" min="0" class="form-control boxes" name="nri" placeholder="NRI">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2" data-toggle="tooltip" title="Person of Indian Origin">PIO :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" min="0" class="form-control boxes" name="pio" placeholder="PIO">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Applying For :</h5>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control boxes" name="applying_for" placeholder="Applying For">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Number of Divisions :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" min="0" class="form-control boxes" name="number_divisions" placeholder="Number of Divisions">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">University/Board Recommendation :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control boxes" name="board_recommendation" placeholder="University/Board Recommendation">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">State/Govt Recommendation :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control boxes" name="state_recommendation" placeholder="State/Govt Recommendation">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Annual Fees Approved :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" min="0" class="form-control boxes" name="annual_fee" placeholder="Annual Fees Approved">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Number of Faculty :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" min="0" class="form-control boxes" name="faculty_number" placeholder="Number of Faculty">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Mode of Conduct :</h5>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control boxes" name="mode_conduct" placeholder="Mode of Conduct">
											</div>
										</div>
                                        <button class="btn btn-success" id="this-button" type="submit" name="course_details">Submit</button>
									</form>
									<div class="mt-5" style="display:none" id="card_excel">
										<form action="./src/main.php" method="post" style="float:right">
											<button class="btn btn-danger btn-sm" name="download_excel_course_details" type="submit"><i class="fa fa-download mr-2"></i>Template</button>
										</form>
										<form action="./src/upload_excel_sheets.php" method="post" enctype="multipart/form-data">
											<input type="file" name="sheet">
											<button class="btn btn-success btn-sm" type="submit" name="submit_course_details" type="submit"><i class="fa fa-upload mr-2"></i>Upload</button>
										</form>
									</div>
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
	<script>
        $('#course1').change(function() {
        var opt = $("input[name='upload_course_details']:checked").val();
                if(opt === "single") {
                    $('#card_form').show();
                    $('#card_excel').hide();
                }
        });
        $('#course2').change(function() {
        var opt = $("input[name='upload_course_details']:checked").val();
                if(opt === "multiple") {
                    $('#card_form').hide();
                    $('#card_excel').show();
                }
        });
    </script>
</body>
</html>