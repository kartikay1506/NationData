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
                                <div class="card-header"><h4 style="font-size:1.5em;font-weight:bolder;margin-left:15vw">STUDENT ENROLLMENT DETAILS</h4></div>
                                <div class="card-body">
									<div class="row" style="text-align:center;margin-left:10vw">
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_enrollment_details" id="enrollment1" value="single">
                                                <label class="form-check-label">Upload Single Enrollment Details</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_enrollment_details" id="enrollment2" value="multiple">
                                                <label class="form-check-label">Upload Multiple Enrollment Details</label>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="./src/main.php" method="POST" id="card_form" style="display:none">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Programme :</h5>
                                            </div>
                                            <div class="col-md-6">
												<input type="text" class="form-control" name="programme_name" placeholder="Programme">
                                            </div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Affiliating University / Board :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="university_board" placeholder="University / Board">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Shift :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="shift" placeholder="Shift">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">General excluding Minority :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="general_male" placeholder="Male">
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="general_female" placeholder="Female">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">OBC (including VJ, NT-DT, SBC, Other)<i class="fa fa-info-circle ml-3" data-toggle="tooltip" title="VJ = Vimukta Jati, NT = Nomedic Tribes, DT = Denotified Tribes, SBC = Special Backward Classes"></i></h5>
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="obc_male" placeholder="Male">
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="obc_female" placeholder="Female">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">SC :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="sc_male" placeholder="Male">
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="sc_female" placeholder="Female">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">ST :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="st_male" placeholder="Male">
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="st_female" placeholder="Female">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Physically Handicapped :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="handicapped_male" placeholder="Male">
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="handicapped_female" placeholder="Female">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Minority :</h5>
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="minority_male" placeholder="Male">
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="minority_female" placeholder="Female">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">TFW<i class="fa fa-info-circle ml-2" data-toggle="tooltip" title="TFW = Tution Fee Waiver"></i></h5>
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="tfw_male" placeholder="Male">
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="tfw_female" placeholder="Female">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">NRI<i class="fa fa-info-circle ml-2" data-toggle="tooltip" title="Non Resident of India"></i></h5>
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="nri_male" placeholder="Male">
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="nri_female" placeholder="Female">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">PIO<i class="fa fa-info-circle ml-2" data-toggle="tooltip" title="Person of Indian Origin"></i></h5>
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="pio_male" placeholder="Male">
											</div>
											<div class="col-md-3">
												<input type="number" class="form-control" min="0" name="pio_female" placeholder="Female">
											</div>
										</div>
										<div class="mt-3" style="text-align:center">
											<button class="btn btn-success" type="submit" name="student_enrollment_details">Submit</button>
										</div>
									</form>
									<div class="mt-5"  id="card_excel" style="display:none">
										<form action="./src/main.php" method="post" style="float:right">
											<button class="btn btn-danger btn-sm" name="download_excel_student_enrollment_details" type="submit"><i class="fa fa-download mr-2"></i>Template</button>
										</form>
										<form action="./src/upload_excel_sheets.php" method="post" enctype="multipart/form-data">
											<input type="file" name="sheet">
											<button class="btn btn-success btn-sm" type="submit" name="submit_student_enrollment_details" type="submit"><i class="fa fa-upload mr-2"></i>Upload</button>
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
<script>
        $('#enrollment1').change(function() {
        var opt = $("input[name='upload_enrollment_details']:checked").val();
                if(opt === "single") {
                    $('#card_form').show();
                    $('#card_excel').hide();
                }
        });
        $('#enrollment2').change(function() {
        var opt = $("input[name='upload_enrollment_details']:checked").val();
                if(opt === "multiple") {
                    $('#card_form').hide();
                    $('#card_excel').show();
                }
        });
    </script>
</body>
</html>