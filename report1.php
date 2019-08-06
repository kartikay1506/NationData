<?php 
	require_once './src/auth.php';
	include './src/database.php';
	if($_SESSION['usertype'] != 'data user') {
		echo('<script>alert("You do not have the Permission to Access This Page");
		window.location = "./index.php";
		</script>');
	}
	$sql = "SELECT * FROM organisation_details";
    $res = mysqli_query($conn, $sql);
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
    
    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="./DataTables/datatables.min.css"/>

</head>
<style>
.main-header1 {
  background: #ffffff;
  min-height: 60px;
  width: 100%;
  z-index: 1001;
  box-shadow: 0px 0px 5px rgba(18, 23, 39, 0.5);
}
.main-panel1 {
  height: 100vh;
  min-height: 100%;
  transition: all .3s; 
}
.footer {
  border-top: 1px solid #eee;
  padding: 15px;
  background: #ffffff;
  position: absolute;
  width: 100%;
  margin-top: 7%;
}
</style>
<body>
	<div class="wrapper">
		<div class="main-header1">
			<?php include './src/header.php';?>
		</div>
		<div class="main-panel1">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col">
							<div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-md-6">
                                    <div class="table-responsive">
										<table id="report1" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th>University Name</th>
                                                    <th>Address</th>
													<th>State</th>
													<th>District</th>
													<th>City</th>
                                                    <th>Contact</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
													<?php 
														while($row = mysqli_fetch_assoc($res)) {
															echo('<tr>
															<td>'.$row['name'].'</td>
															<td>'.$row['state'].'</td>
															<td>'.$row['district'].'</td>
															<td>'.$row['city'].'</td>
															<td>'.$row['address'].'</td>
															<td>'.$row['land_phone_no'].'</td>
															<td>'.$row['email_id'].'</td>
															</tr>');
														}
													?>
											</tbody>
										</table>
									</div>
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

	<!-- Sweet Alert -->
	<script src="./assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
    <script src="./assets/js/atlantis.min.js"></script>
    
    <!-- Data Table -->
    <script type="text/javascript" src="./DataTables/datatables.min.js"></script>
    
</body>
    <script>
        $('#report1').DataTable();
    </script>
</html>