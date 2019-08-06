<?php 
	require_once './src/auth.php';
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
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
							
						<!-- <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							
						</div> -->
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col">
							<div class="card">
                                <div class="card-body">
                                    <form action="./src/main.php" method="post">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Name of College/Institution :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="institution_name" pattern="[A-Za-z]">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Postal Address Line 1 :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="address1" pattern="[0-8A-Za-z]">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Postal Address Line 2 :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="address2" pattern="[0-8A-Za-z]">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">State :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="state" id="listBox" onchange='selct_district(this.value)'>
												</select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">District :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select id='secondlist' class="form-control" name="district">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">City :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="city" pattern="[A-Za-z]">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Pin Code :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" pattern="[0-8]" maxlength="6" class="form-control" name="pincode">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Website :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="website">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Total Area (in sqm) :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" min="0" class="form-control" name="total_area">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Total Constructed Area(in sqm):</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" min="0" class="form-control" name="total_constructed_area">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Year of Establishment :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" name="establishment_year">
                                                    <option value="">SELECT</option>
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
                                        </div>
                                        <h4 class="mt-3">College Contact Details</h4>
                                        <div class="row mt-2">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Name of Principal :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="principal_name" pattern="[A-Za-z]">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Contact No :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" min="0" maxlength="10" class="form-control" name="principal_contact" pattern="[0-8]">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Email :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="principal_email">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Name of College Nodal Officer :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nodal_officer_name" pattern="[A-Za-z]">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Designation</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nodal_officer_designation">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Telephone No (with STD code) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" max="99999999999" class="form-control" name="nodal_officer_telephone">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Mobile No :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" max="9999999999" class="form-control" name="nodal_officer_mobile">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Email :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="nodal_officer_email">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Name of University to which Affiliated :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" pattern="[A-za-z]" class="form-control" name="affiliating_university">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Name of Other Universities to which Affiliated :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" pattern="[A-za-z]" class="form-control" name="other_affiliating_university[]">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Statutory Body through which Recognized :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="statutory_body" id="statutory_body">
                                                    <option value="">SELECT</option>
                                                    <option value="All India Council of Technical Education (AICTE)">All India Council of Technical Education (AICTE)</option>
                                                    <option value="University Grants Commission (UGC)">University Grants Commission (UGC)</option>
                                                    <option value="Pharmacy Council of India (PCI)">Pharmacy Council of India (PCI)</option>
                                                    <option value="Medical Council of India (MCI)">Medical Council of India (MCI)</option>
                                                    <option value="Central Council for Indian Medicine (CCIM)">Central Council for Indian Medicine (CCIM)</option>
                                                    <option value="Dental Council of India (DCI)">Dental Council of India (DCI)</option>
                                                    <option value="Council of Architecture">Council of Architecture</option>
                                                    <option value="National Council for Teacher Education (NCTE)">National Council for Teacher Education (NCTE)</option>
                                                    <option value="Indian Council for Agricultural Research (ICAR)">Indian Council for Agricultural Research (ICAR)</option>
                                                    <option value="National Council for Hotel Management & Catering Technology">National Council for Hotel Management & Catering Technology</option>
                                                    <option value="Rehabilitation Council of India">Rehabilitation Council of India</option>
                                                    <option value="Indian Nursing Council (INC)">Indian Nursing Council (INC)</option>
                                                    <option value="Central Council of Homeopathy (CCH)">Central Council of Homeopathy (CCH)</option>
                                                    <option value="Veterinary Council of India (VCI)">Veterinary Council of India (VCI)</option>
                                                    <option value="Bar Council of India (BCI)">Bar Council of India (BCI)</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="statutory_body_others" style="display:none">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Please Specify :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="statutory_body_others">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Year of Affiliation with University :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" name="affiliation_year">
                                                <option value="">SELECT</option>
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
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Location of College/Institution :</h5>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="college_location" value="rural">Rural
                                                </div>
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="college_location" value="urban">Urban
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Geographical Referencing :</h5>
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <label for="college_latitude">Latitude (in degree) :</label>
                                                <input type="number" class="form-control" name="college_latitude">
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <label for="college_longitude">Longitude (in degree) :</label>
                                                <input type="number" class="form-control" name="college_longitude">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Type of College/Institution :</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" name="college_type"> 
                                                    <option value="">SELECT</option>
                                                    <option value="Affiliated College">Affiliated College</option>
                                                    <option value="Constituent College">Constituent College</option>
                                                    <option value="Recognised Centre">Recognised Centre</option>
                                                    <option value="PG Centre and Off Campus Centre">PG Centre and Off Campus Centre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Whether College is Autonomous :</h5>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="whether_autonomous" value="yes">Yes
                                                </div>
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="whether_autonomous" value="no">No
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Management of College/Institution :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" name="college_management">
                                                    <option value="">SELECT</option>
                                                    <option value="Central Government">Central Government</option>
                                                    <option value="State Government">State Government</option>
                                                    <option value="Local Body">Local Body</option>
                                                    <option value="University">University</option>
                                                    <option value="Private Aided">Private Aided</option>
                                                    <option value="Private Un-Aided">Private Un-Aided</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Is it a specialized Institution :</h5>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="is_specialized_college" value="yes" id="specialized1">Yes
                                                </div>
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="is_specialized_college" value="no" id="specialized2">No
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="specialized_show" style="display:none">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Select Any one Please :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" id="specialisation_select" name="specialisation_college">
                                                    <option value="">SELECT</option>
                                                    <option value="Agriculture">Agriculture</option>
                                                    <option value="Architecture">Architecture</option>
                                                    <option value="Arts">Arts</option>
                                                    <option value="Commerce">Commerce</option>
                                                    <option value="Computer Application">Computer Application</option>
                                                    <option value="Education/Teacher Education">Education/Teacher Education</option>
                                                    <option value="Engineering & Technology">Engineering & Technology</option>
                                                    <option value="Fine Arts">Fine Arts</option>
                                                    <option value="Fisheries">Fisheries</option>
                                                    <option value="Hotel & Tourism Management">Hotel & Tourism Management</option>
                                                    <option value="Journalism & Mass Communication">Journalism & Mass Communication</option>
                                                    <option value="Law">Law</option>
                                                    <option value="Management">Management</option>
                                                    <option value="Medical-Allopathy">Medical-Allopathy</option>
                                                    <option value="Medical-Ayurveda">Medical-Ayurveda</option>
                                                    <option value="Medical-Dental">Medical-Dental</option>
                                                    <option value="Medical-Homeopathy">Medical-Homeopathy</option>
                                                    <option value="Medical-Others">Medical-Others</option>
                                                    <option value="Nursing">Nursing</option>
                                                    <option value="Oriental Learning">Oriental Learning</option>
                                                    <option value="Para Medical">Para Medical</option>
                                                    <option value="Pharmacy">Pharmacy</option>
                                                    <option value="Physiotherapy">Physiotherapy</option>
                                                    <option value="Sanskrit">Sanskrit</option>
                                                    <option value="Science">Science</option>
                                                    <option value="Sports/Yoga/Physical Education">Sports/Yoga/Physical Education</option>
                                                    <option value="Veterinary & Animal Sciences">Veterinary & Animal Sciences</option>
                                                    <option value="others">Others (Please Specify)</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3" id="specialisation_others" style="display:none">
                                                <input type="text" class="form-control" pattern="[A-Za-z]" name="specialisation_college_others">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Whether the college is running only diploma level course(s) :</h5>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="only_diploma_courses" value="yes" id="only_diploma1">Yes
                                                </div>
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="only_diploma_courses" value="no" id="only_diploma2">No
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="only_diploma_courses_types" style="display:none">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Select any one Type :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" name="only_diploma_courses_type">
                                                    <option value="">SELECT</option>
                                                    <option value="Technical/Polytechnic">Technical/Polytechnic</option>
                                                    <option value="Nursing">Nursing</option>
                                                    <option value="Teacher Training">Teacher Training</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Is it Evening College/Institution:</h5>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="is_evening_college" value="yes">Yes
                                                </div>
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="is_evening_college" value="no">No
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Whether the College/Institution is exclusively meant for girls :</h5>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="is_exclusive_girls" value="yes">Yes
                                                </div>
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="is_exclusive_girls" value="no">No
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Staff Quarter Available  :</h5>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="staff_quarter_available" value="yes" id="staff_quarter1">Yes
                                                </div>
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="staff_quarter_available" value="no" id="staff_quarter2">No
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="staff_quarter_number" style="display:none">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">If Yes,</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <th>Category</th>
                                                        <th>Number</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Teaching Staff</td>
                                                            <td>
                                                                <input type="number" min="0" class="form-control" name="teaching_staff_quarters">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Non-Teaching Staff</td>
                                                            <td>
                                                                <input type="number" min="0" class="form-control" name="non_teaching_staff_quarters">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total</td>
                                                            <td>
                                                                <input type="number" min="0" class="form-control" name="total_staff_quarters">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Does the College/Institute has Student Hostel</h5>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="has_student_hostel" value="yes" id="student_hostel1">Yes
                                                </div>
                                                <div class="form-check-inline">
                                                    <input type="radio" class="form-check-input" name="has_student_hostel" value="no" id="student_hostel2">No
                                                </div>
                                            </div>
                                        </div>
                                        <div id="student_hostel_info" style="display:none">
                                            <div class="row mt-3">
                                                <div class="col-md-3">
                                                    <h5 class="mt-2">Number of Hostel :</h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" min="0" class="form-control" name="number_hostel" id="number_hostel_input">
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-danger btn-sm" type="button" id="number_hostel_button"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <table class="table table-bordered" id="student_hostel_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name of Hostel</th>
                                                            <th>Hostel Type</th>
                                                            <th>Intake Capacity</th>
                                                            <th>Number of Students Residing</th>
                                                            <th style="width:5vw">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" pattern="[A-Za-z]" name="hostel_name">
                                                            </td>
                                                            <td>
                                                                <select name="hostel_type" class="form-control">
                                                                    <option value="">SELECT</option>
                                                                    <option value="Boys">Boys Hostel</option>
                                                                    <option value="Girls">Girls Hostel</option>
                                                                    <option value="Hostel for Married Students">Hostel for Married Students</option>
                                                                    <option value="Transit Hostel">Transit Hostel</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input type="number" min="0" class="form-control" name="hostel_intake_capacity">
                                                            </td>
                                                            <td>
                                                                <input type="number" min="0" class="form-control" name="residing_students_number">
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">List of Departments :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-sm" type="button" id="table_add"><i class="fa fa-plus mr-2"></i>Add Department</button>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <table class="table table-bordered" id="department_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name of the Department</th>
                                                            <th style="width:10vw">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr id="row1">
                                                            <td>
                                                                <input type="text" class="form-control" name="department_name[]">
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-danger ml-3 btn_delete" id="1" type="button">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Regular Program Details :</h5>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <table class="table table-bordered table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th>Level</th>
                                                            <th>Name of Programme</th>
                                                            <th>Discipline/Subject</th>
                                                            <th>Broad Discipline Group Category</th>
                                                            <th>Broad Discipline Group Name</th>
                                                            <th>Intake</th>
                                                            <th>Admission Criteria</th>
                                                            <th>Course Duration
                                                                <div class="row">
                                                                    <div class="col">Year</div>
                                                                    <div class="col">Month</div>
                                                                </div>
                                                            </th>
                                                            <th>Type</th>
                                                            <th>Examination System</th>
                                                            <th>Statutory Body through which Approved</th>
                                                            <th>University through which Approved</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <select name="program_level" class="form-control">
                                                                    <option value="">SELECT</option>
                                                                    <option value="Under Graduate">Under Graduate</option>
                                                                    <option value="Post Graduate">Post Graduate</option>
                                                                    <option value="Diploma">Diploma</option>
                                                                    <option value="PG Diploma">PG Diploma</option>
                                                                    <option value="M.Phil">M.Phil</option>
                                                                    <option value="Certificate">Certificate</option>
                                                                    <option value="Integrated">Integrated</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <button class="btn btn-success" type="submit">Submit</button>
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
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
    <script>
		$('#statutory_body').change(function() {
		var opt = $(this).val();
		if(opt === "others") {
			$('#statutory_body_others').show();
		}
		else {
			$('#statutory_body_others').hide();
		}
		});
	</script>
    <script>
        $('#specialized1').change(function() {
        var opt = $("input[name='is_specialized_college']:checked").val();
                if(opt === "yes") {
                    $('#specialized_show').show();
                }
        });
        $('#specialized2').change(function() {
        var opt = $("input[name='is_specialized_college']:checked").val();
                if(opt === "no") {
                    $('#specialized_show').hide();
                }
        });
    </script>
    <script>
		$('#specialisation_select').change(function() {
		var opt = $(this).val();
		if(opt === "others") {
			$('#specialisation_others').show();
		}
		else {
			$('#specialisation_others').hide();
		}
		});
	</script>
    <script>
        $('#only_diploma1').change(function() {
        var opt = $("input[name='only_diploma_courses']:checked").val();
                if(opt === "yes") {
                    $('#only_diploma_courses_types').show();
                }
        });
        $('#only_diploma2').change(function() {
        var opt = $("input[name='only_diploma_courses']:checked").val();
                if(opt === "no") {
                    $('#only_diploma_courses_types').hide();
                }
        });
    </script>
    <script>
        $('#staff_quarter1').change(function() {
        var opt = $("input[name='staff_quarter_available']:checked").val();
                if(opt === "yes") {
                    $('#staff_quarter_number').show();
                }
        });
        $('#staff_quarter2').change(function() {
        var opt = $("input[name='staff_quarter_available']:checked").val();
                if(opt === "no") {
                    $('#staff_quarter_number').hide();
                }
        });
    </script>
    <script>
        $('#student_hostel1').change(function() {
        var opt = $("input[name='has_student_hostel']:checked").val();
                if(opt === "yes") {
                    $('#student_hostel_info').show();
                }
        });
        $('#student_hostel2').change(function() {
        var opt = $("input[name='has_student_hostel']:checked").val();
                if(opt === "no") {
                    $('#student_hostel_info').hide();
                }
        });
    </script>
    <script>
        $('#number_hostel_button').click(function() {
        var opt = $('#number_hostel_input').val();
        var data = '<tr><td><input type="text" class="form-control" pattern="[A-Za-z]" name="hostel_name"></td><td><select name="hostel_type" class="form-control"><option value="">SELECT</option><option value="Boys">Boys Hostel</option><option value="Girls">Girls Hostel</option><option value="Hostel for Married Students">Hostel for Married Students</option>option value="Transit Hostel">Transit Hostel</option></select></td><td><input type="number" min="0" class="form-control" name="hostel_intake_capacity"></td><td><input type="number" min="0" class="form-control" name="residing_students_number"></td><td></td></tr>';
        for(var i=1;i<opt;i++) {
            $('#student_hostel_table').append(data);
        }
        });
    </script>
    <script>
        $(document).ready(function() {
            var i = 1;
            $('#table_add').click(function() {
                i++;
                var mark = '<tr id="row'+i+'"><td><input type="text" class="form-control" name="department_name[]"></td><td><button class="btn btn-sm btn-danger btn_delete ml-3" id="'+i+'" type="button"><i class="fa fa-trash"></i></button></td></tr>';
                $('#department_table').append(mark);
            });
        });
        $(document).on('click','.btn_delete',function() {
            var button_id = $(this).attr('id');
            $('#row'+button_id).remove();
        });
    </script>
</body>
</html>