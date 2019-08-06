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
                                <div class="card-header"><h4 style="font-size:1.5em;font-weight:bolder;margin-left:18vw">COMPUTATIONAL FACILITY</h4></div>
                                <div class="card-body">
                                    <form action="./src/main.php" method="post">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">PCs exclusively available to Students :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="number_pc_students" placeholder="PCs for Students" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">PCs available in Library :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="number_pc_library" placeholder="PCs in Library" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">PCs available in Administrative Office :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="number_pc_administrative" placeholder="PCs in Administrative Office" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">PCs available to Faculty Member :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="number_pc_faculty" placeholder="PCs for Faculty" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Number of PCs in Language Lab:</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="number_pc_language" placeholder="PCs in Language Lab" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Internet Bandwidth (in Mbps) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="internet_bandwidth" placeholder="Mbps" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Internet Contention Ratio :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="internet_contention_ratio" placeholder="Contention Ratio" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Printers available to Students :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="number_printers_students" placeholder="Printers for Students" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Number of Legal System Software :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="number_system_software" placeholder="Legal System Software" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Number of Legal Application Software :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="number_application_software" placeholder="Legal Application Software" required>
                                            </div>
										</div>
										<div class="mt-3" style="text-align:center">
											<button class="btn btn-success" name="computational_facility" type="submit">Submit</button>
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