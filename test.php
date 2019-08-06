<?php 
	require_once './src/auth.php';
	if($_SESSION['usertype'] != 'nodal officer') {
		echo('<script>alert("You do not have the Permission to Access This Page");
		window.location = "./index.php";
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
							<div class="card" style="height:50vh">
								<h3 class="mt-5 ml-3">Welcome to One Nation One Data Portal</h3>
								<!-- <form action="./src/get_details.php" method="post">
									
								</form> -->
								<a href="./report1.php"><button class="btn btn-primary" name="report1" type="submit">Report</button></a>
                                <a href="./src/logout.php">Logout</a>
                                
                            
							<div class="card">
								<div class="card-header">
									<div class="card-title">Doughnut Chart</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="doughnutChart" style="width: 25%; height: 25%"></canvas>
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
    var doughnutChart = document.getElementById('doughnutChart').getContext('2d');
    var myDoughnutChart = new Chart(doughnutChart, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [10, 20, 30],
					backgroundColor: ['#f3545d','#fdaf4b','#1d7af3']
				}],

				labels: [
				'',
				'Yellow',
				'Blue'
				]
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				layout: {
					padding: {
						left: 20,
						right: 20,
						top: 20,
						bottom: 20
					}
				}
			}
		});
</script>
</body>
</html>