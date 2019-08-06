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
                                <div class="card-header"><h4 style="font-size:1.5em;font-weight:bolder;margin-left:23vw">LAND DETAILS</h4></div>
                                <div class="card-body">
									<div class="row" style="text-align:center;margin-left:10vw">
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_land_details" id="land1" value="single">
                                                <label class="form-check-label">Upload Single Land Details</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_land_details" id="land2" value="multiple">
                                                <label class="form-check-label">Upload Multiple Land Details</label>
                                            </div>
                                        </div>
                                    </div>
									<form action="./src/main.php" method="post" id="card_form" style="display:none">
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Number of Pieces :</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="land_pieces" id="land_pieces" placeholder="Number of Pieces">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land Registered With :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="land_registered_with" placeholder="Land Registered With">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Registration Date :</h5>
											</div>
											<div class="col-md-6">
												<input type="date" class="form-control" name="registration_date" placeholder="Registration Date">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2" data-toggle="tooltip" title="Ex: Hilly, Plain">Land Situated in Terrain ?</h5>
											</div>
											<div class="col-md-6">
												<select class="form-control" name="hilly_area_land" >
													<option value="" selected disabled>SELECT</option>
													<option value="Hilly">Hilly</option>
													<option value="Plain">Plain</option>
													<option value="Sub-Hilly">Sub-Hilly</option>
												</select>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">FSI :</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="fsi" placeholder="FSI">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land Piece Area(in sq.m) :</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="land_piece_area1" placeholder="Land Piece Area">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Max distance in farthest land pieces (Km) :</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="max_distance" placeholder="Max distance">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Latitude(North/South) :</h5>
											</div>
											<div class="col-md-2">
												<input type="number" min="0" class="form-control" name="latitude_degree" placeholder="Degree">
											</div>
											<div class="col-md-2">
												<input type="number" mina="0" class="form-control" name="latitude_minute" placeholder="Minute">
											</div>
											<div class="col-md-2">
												<input type="number" min="0" class="form-control" name="latitude_second" placeholder="Second">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Longitude(East/West) :</h5>
											</div>
											<div class="col-md-2">
												<input type="number" min="0" class="form-control" name="longitude_degree" placeholder="Degree">
											</div>
											<div class="col-md-2">
												<input type="number" mina="0" class="form-control" name="longitude_minute" placeholder="Minute">
											</div>
											<div class="col-md-2">
												<input type="number" min="0" class="form-control" name="longitude_second" placeholder="Second">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Ownership Details :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="ownership_details" placeholder="Ownership Details">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Is the Land Mortgaged ?</h5>
											</div>
											<div class="col-md-6">
												<select class="form-control" name="is_land_mortgaged" id="land_mortgage">
													<option value="" selected disabled>SELECT</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
											</div>
										</div>
										<div class="row mt-3" id="mortgage_purpose" style="display:none">
											<div class="col-md-3">
												<h5 class="mt-2">Mortgaged Purpose :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="mortgaged_purpose" placeholder="Mortgaged Purpose">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land use certificate issued By :</h5>
											</div>
											<div class="col-md-6">
												<input type="text" class="form-control" name="land_use_certificate" placeholder="Land use certificate issued By">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Land use certificate issued Date:</h5>
											</div>
											<div class="col-md-6">
												<input type="date" class="form-control" name="land_use_certificate_date" placeholder="Land use certificate issued Date">
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Do you have any additional land for Merger or New Program?</h5>
											</div>
											<div class="col-md-6">
												<select class="form-control" name="additional_land_merger">
													<option value="" selected disabled>SELECT</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Whether your institute is going to use Of Campus after Merger ?</h5>
											</div>
											<div class="col-md-6">
												<select class="form-control" name="institute_use_campus">
													<option value="" selected disabled>SELECT</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3">
												<h5 class="mt-2">Total Land (in sq.m) after Merger or adding New Program :</h5>
											</div>
											<div class="col-md-6">
												<input type="number" min="0" class="form-control" name="land_area_merger" placeholder="(in sq.m)">
											</div>
										</div>
										<div class="mt-3" style="text-align:center">
											<button class="btn btn-success" name="land_details" type="submit">Submit</button>
										</div>
									</form>
									<div class="mt-5"  id="card_excel" style="display:none">
										<form action="./src/main.php" method="post" style="float:right">
											<button class="btn btn-danger btn-sm" name="download_excel_land_details" type="submit"><i class="fa fa-download mr-2"></i>Template</button>
										</form>
										<form action="./src/upload_excel_sheets.php" method="post" enctype="multipart/form-data">
											<input type="file" name="sheet">
											<button class="btn btn-success btn-sm" type="submit" name="submit_land_details" type="submit"><i class="fa fa-upload mr-2"></i>Upload</button>
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
		$('#land_mortgage').change(function() {
			var opt = $(this).val();
			if(opt === 'yes') {
				$('#mortgage_purpose').show();
			}
			else {
				$('#mortgage_purpose').hide();
			}
		});
	</script>
	<script>
        $('#land1').change(function() {
        var opt = $("input[name='upload_land_details']:checked").val();
                if(opt === "single") {
                    $('#card_form').show();
                    $('#card_excel').hide();
                }
        });
        $('#land2').change(function() {
        var opt = $("input[name='upload_land_details']:checked").val();
                if(opt === "multiple") {
                    $('#card_form').hide();
                    $('#card_excel').show();
                }
        });
    </script>
</body>
</html>