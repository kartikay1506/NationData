<?php 
	require_once './src/auth.php';
	if($_SESSION['usertype'] != 'nodal officer') {
		echo('<script>alert("You do not have the Permission to Access This Page");
		window.location = "./index_admin.php";
		</script>');
	}s
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
										<h4 style="font-size:1.5em;font-weight:bolder;margin-left:33vw">PROGRAM DETAILS</h4>
									</div>
								</div>
                                <div class="card-body">
									<div class="row">
										<div class="col-md-10">
											<form action="./src/main.php" method="post">
												<table>
													<thead>
														<tr>
															<th></th>
															<th style="width:30vw">Program</th>
															<th style="width:15vw">New/Existing Program</th>
															<th  style="width:15vw">Year Started</th>
														</tr>
													</thead>
													<tbody id="program">
														<tr id="row1">
															<td>
																<div class="form-check-inline">
																	<input type="checkbox" class="form-check-input" name="optradio" value="1">
																</div>	
															</td>
															<td>
																<div class="form-group">
																	<input type="text" class="form-control boxes" name="program[]" placeholder="Program" required>
																</div> 
															</td>
															<td>
																<div class="form-group">
																	<select class="form-control boxes" name="new_program[]" required>
																		<option value="" selected disabled>SELECT</option>
																		<option value="New">New Program</option>
																		<option value="Existing">Existing Program</option>
																	</select>
																</div>
															</td>
															<td>
																<div class="form-group">
																	<select class="form-control boxes" name="year_started[]" required>
																		<option value="" selected disabled>SELECT</option>
																		<option value="2020">2020</option>
																		<option value="2019">2019</option>
																		<option value="2018">2018</option>
																		<option value="2017">2017</option>
																		<option value="2016">2016</option>
																		<option value="2015">2015</option>
																		<option value="2014">2014</option>
																		<option value="2013">2013</option>
																		<option value="2012">2012</option>
																		<option value="2011">2011</option>
																		<option value="2010">2010</option>
																		<option value="2009">2009</option>
																		<option value="2008">2008</option>
																		<option value="2007">2007</option>
																		<option value="2006">2006</option>
																		<option value="2005">2005</option>
																		<option value="2004">2004</option>
																		<option value="2003">2003</option>
																		<option value="2002">2002</option>
																		<option value="2001">2001</option>
																		<option value="2000">2000</option>
																		<option value="1999">1999</option>
																		<option value="1998">1998</option>
																		<option value="1997">1997</option>
																		<option value="1996">1996</option>
																		<option value="1995">1995</option>
																		<option value="1994">1994</option>
																		<option value="1993">1993</option>
																		<option value="1992">1992</option>
																		<option value="1991">1991</option>
																		<option value="1990">1990</option>
																		<option value="1989">1989</option>
																		<option value="1988">1988</option>
																		<option value="1987">1987</option>
																		<option value="1986">1986</option>
																		<option value="1985">1985</option>
																		<option value="1984">1984</option>
																		<option value="1983">1983</option>
																		<option value="1982">1982</option>
																		<option value="1981">1981</option>
																		<option value="1980">1980</option>
																		<option value="1979">1979</option>
																		<option value="1978">1978</option>
																		<option value="1977">1977</option>
																		<option value="1976">1976</option>
																		<option value="1975">1975</option>
																		<option value="1974">1974</option>
																		<option value="1973">1973</option>
																		<option value="1972">1972</option>
																		<option value="1971">1971</option>
																		<option value="1970">1970</option>
																		<option value="1969">1969</option>
																		<option value="1968">1968</option>
																		<option value="1967">1967</option>
																		<option value="1966">1966</option>
																		<option value="1965">1965</option>
																		<option value="1964">1964</option>
																		<option value="1963">1963</option>
																		<option value="1962">1962</option>
																		<option value="1961">1961</option>
																		<option value="1960">1960</option>
																		<option value="1959">1959</option>
																		<option value="1958">1958</option>
																		<option value="1957">1957</option>
																		<option value="1956">1956</option>
																		<option value="1955">1955</option>
																		<option value="1954">1954</option>
																		<option value="1953">1953</option>
																		<option value="1952">1952</option>
																		<option value="1951">1951</option>
																		<option value="1950">1950</option>
																		<option value="1949">1949</option>
																		<option value="1948">1948</option>
																		<option value="1947">1947</option>
																		<option value="1946">1946</option>
																		<option value="1945">1945</option>
																		<option value="1944">1944</option>
																		<option value="1943">1943</option>
																		<option value="1942">1942</option>
																		<option value="1941">1941</option>
																		<option value="1940">1940</option>
																		<option value="1939">1939</option>
																		<option value="1938">1938</option>
																		<option value="1937">1937</option>
																		<option value="1936">1936</option>
																		<option value="1935">1935</option>
																		<option value="1934">1934</option>
																		<option value="1933">1933</option>
																		<option value="1932">1932</option>
																		<option value="1931">1931</option>
																		<option value="1930">1930</option>
																		<option value="1929">1929</option>
																		<option value="1928">1928</option>
																		<option value="1927">1927</option>
																		<option value="1926">1926</option>
																		<option value="1925">1925</option>
																		<option value="1924">1924</option>
																		<option value="1923">1923</option>
																		<option value="1922">1922</option>
																		<option value="1921">1921</option>
																		<option value="1920">1920</option>
																		<option value="1919">1919</option>
																		<option value="1918">1918</option>
																		<option value="1917">1917</option>
																		<option value="1916">1916</option>
																		<option value="1915">1915</option>
																		<option value="1914">1914</option>
																		<option value="1913">1913</option>
																		<option value="1912">1912</option>
																		<option value="1911">1911</option>
																		<option value="1910">1910</option>
																		<option value="1909">1909</option>
																		<option value="1908">1908</option>
																		<option value="1907">1907</option>
																		<option value="1906">1906</option>
																		<option value="1905">1905</option>
																		<option value="1904">1904</option>
																		<option value="1903">1903</option>
																		<option value="1902">1902</option>
																		<option value="1901">1901</option>
																		<option value="1900">1900</option>
																	</select>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
												<div class="mt-3" style="text-align:center">
													<button class="btn btn-success" name="program_details" type="submit">Submit</button>
												</div>
											</form>
										</div>
										<div class="col-md-2" style="margin-top:6vh">
											<button class="btn btn-success btn-sm" type="button" name="add_program" id="add_program" style="width:40px;margin-right:10px"><i class="fa fa-plus"></i></button>
											<button class="btn btn-danger btn-sm" type="button" id="remove_program" style="width:40px"><i class="fa fa-trash"></i></button>
										</div>
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
	var i = 1;
		$('#add_program').click(function() {
		i++;
		var code = '<tr id="row'+i+'"><td><div class="form-check-inline"><input type="checkbox" class="form-check-input" name="optradio" value="'+i+'"></div></td><td><div class="form-group"><input type="text" class="form-control boxes" name="program[]" placeholder="Program" required></div></td><td><div class="form-group"><select class="form-control boxes" name="new_program[]" required><option value="" selected disabled>SELECT</option><option value="New">New Program</option><option value="Existing">Existing Program</option></select></div></td><td><div class="form-group"><select class="form-control boxes" name="year_started[]" required><option value="" selected disabled>SELECT</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option></select></div></td></tr>';
		$('#program').append(code);
		});	
</script>
<script>
	$('#remove_program').click(function() {
		var options = [];
		
		$.each($("input[name='optradio']:checked"), function(){
			options.push($(this).val());
		});
		$.each(options, function(index,value) {
			$('#row'+value).remove();
		});
	});
</script>
</body>
</html>