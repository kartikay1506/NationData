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
                                <div class="card-header"><h4 style="font-size:1.5em;font-weight:bolder;margin-left:6vw">DETAILS OF GRIEVANCES PROCESSED BY THE INSTITUTE</h4></div>
                                <div class="card-body">
									<div class="row">
										<div class="col-md-10">
											<form action="./src/main.php" method="post">
												<table>
													<thead>
														<tr>
															<th></th>
															<th style="width:18vw">Grievances for the Month</th>
															<th>Total Number of<br>Grievances Received</th>
															<th>Total Number of<br>Grievances Disposed</th>
															<th>Total Number of<br>Grievances Pending</th>
														</tr>
													</thead>
													<tbody id="grievances">
														<tr id="row1">
															<td>
																<div class="form-check-inline">
																	<input type="checkbox" class="form-check-input" name="optradio" value="1">
																</div>	
															</td>
															<td>
																<div class="form-group">
																	<select name="month[]" class="form-control">
																	<option value="" selected disabled>SELECT</option>
																		<option value="january">January</option>
																		<option value="february">February</option>
																		<option value="march">March</option>
																		<option value="april">April</option>
																		<option value="may">May</option>
																		<option value="june">June</option>
																		<option value="july">July</option>
																		<option value="august">August</option>
																		<option value="september">September</option>
																		<option value="october">October</option>
																		<option value="november">November</option>
																		<option value="december">December</option>
																	</select>
																</div>
															</td>
															<td>
																<div class="form-group">
																	<input type="number" min="0" class="form-control" name="total_grievances_received[]" placeholder="0">
																</div>
															</td>
															<td>
																<div class="form-group">
																	<input type="number" min="0" class="form-control" name="total_grievances_disposed[]" placeholder="0">
																</div>
															</td>
															<td>
																<div class="form-group">
																	<input type="number" min="0" class="form-control" name="total_grievances_pending[]" placeholder="0">
																</div>
															</td>
														</tr>
													</tbody>
												</table>
												<div class="mt-3" style="text-align:center">
													<button class="btn btn-success" name="institute_grievances_processed" type="submit">Submit</button>
												</div>
											</form>
										</div>
										<div class="col-md-2" style="margin-top:9vh">
											<button class="btn btn-success btn-sm" type="button" name="add_grievance" id="add_grievance" style="width:40px;margin-right:10px"><i class="fa fa-plus"></i></button>
											<button class="btn btn-danger btn-sm" type="button" id="remove_grievance" style="width:40px"><i class="fa fa-trash"></i></button>
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
	var i = 1;
		$('#add_grievance').click(function() {
		i++;
		var code = '<tr id="row'+i+'"><td><div class="form-check-inline"><input type="checkbox" class="form-check-input" name="optradio" value="'+i+'"></div></td><td><div class="form-group"><select name="month[]" class="form-control"><option value="" selected disabled>SELECT</option><option value="january">January</option><option value="february">February</option><option value="march">March</option><option value="april">April</option><option value="may">May</option><option value="june">June</option><option value="july">July</option><option value="august">August</option><option value="september">September</option><option value="october">October</option><option value="november">November</option><option value="december">December</option></select></div></td><td><div class="form-group"><input type="number" min="0" class="form-control" name="total_grievances_received[]" placeholder="0"></div></td><td><div class="form-group"><input type="number" min="0" class="form-control" name="total_grievances_disposed[]" placeholder="0"></div></td><td><div class="form-group"><input type="number" min="0" class="form-control" name="total_grievances_pending[]" placeholder="0"></div></td></tr>';
		$('#grievances').append(code);
		});	
</script>
<script>
	$('#remove_grievance').click(function() {
		var options = [];
		$.each($("input[name='optradio']:checked"), function(){
			options.push($(this).val());
		});
		$.each(options, function(index,value) {
			$('#row'+value).remove();
		});
	});
</script>
	<!-- <script>
		$(document).ready(function() {
			var i = 1;
			$('.grievances-add').click(function() {
				var code = '<div class="row" id="row1"><div class="col-md-3"><div class="form-group"><label for="month">Grievances for the Month :</label><select name="month[]" class="form-control" style="margin-top:1.6em;"><option value="january">January</option><option value="february">February</option><option value="march">March</option><option value="april">April</option><option value="may">May</option><option value="june">June</option><option value="july">July</option><option value="august">August</option><option value="september">September</option><option value="october">October</option><option value="november">November</option><option value="december">December</option></select></div></div><div class="col-md-2"><div class="form-group"><label for="total_grievances_received">Total number of<br> Grievances Received :</label><input type="number" min="0" class="form-control" name="total_grievances_received[]" placeholder="0"></div></div><div class="col-md-2"><div class="form-group"><label for="total_grievances_disposed">Total Number of<br> Grievances Disposed :</label><input type="number" min="0" class="form-control" name="total_grievances_disposed[]" placeholder="0"></div></div><div class="col-md-2"><div class="form-group"><label for="total_grievances_pending">Total Number of<br> Grievances Pending :</label><input type="number" min="0" class="form-control" name="total_grievances_pending[]" placeholder="0"></div></div><div class="col-md-1"><div class="form-group"><button class="btn btn-danger btn-sm grievances-remove" style="margin-top:4.8em" type="button"><i class="fa fa-trash"></i></button></div></div></div>';
				$('#grievances').append(code);
			});

			$(document).on("click",".grievances-remove",function() {
				$(this).parent().remove();
			});
		});
	</script> -->
</body>
</html>