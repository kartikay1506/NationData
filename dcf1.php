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
<style>
	.government {
		background-image : url("rashtrapati_bhavan.jpg");
	}
</style>

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
                                <div class="card-header"><i class="fa fa-align-justify mr-2"></i>DCF 1</div>
                                <div class="card-body">
                                    <form action="./src/main.php" method="post">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="city">City :</label>
                                                    <input type="text" class="form-control" name="city" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="pincode">Pin Code :</label>
                                                    <input type="number" min="0" class="form-control" name="pincode" placeholder="Pincode">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="totak_constructed_area">Total Constructed Area(in Sqm) :</label>
                                                    <input type="text" class="form-control" name="totak_constructed_area" placeholder="Total Constructed Area">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="year_university_declared">Year when declared University :</label>
                                                    <input type="date" class="form-control" name="year_university_declared">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="head_name">Name of Vice Chancellor/Director/Head :</label>
                                                    <input type="text" class="form-control" name="head_name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="head_contact">Contact No :</label>
                                                    <input type="number" min="0" class="form-control" name="head_contact" placeholder="Contact Number">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="head_email">Email :</label>
                                                    <input type="text" class="form-control" name="head_email" placeholder="Email">
                                                </div>
                                            </div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="statutory_body">Statutory Body through which Recognized :</label>
													<input type="text" class="form-control" name="statutory_body" placeholder="Statutory Body">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="latitude">Latitude (in degrees) :</label>
													<input type="number" class="form-control" name="latitude" placeholder="Latitude">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="longitude">Longitude (in degrees) :</label>
													<input type="number" class="form-control" name="longitude" placeholder="Longitude">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="is_specialised">Is it a Specialized College/ Institution ?</label>
													<select name="is_specialised" id="is_specialised" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
													<!-- <script>
														$(#is_specialised).change(function() {
															option = $(this).val();
															if(opt == 'yes') {
																$(#specialisation).html("<label for='specialised_institute'>Select Institution Type :</label>
																<select name='specialised_institute' class='form-control'>
																<option value=''>Type 1</option>
																</select>");
															}
														});
													</script> -->
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group" id="specialisation">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="exclusively_girls_institution">Whether the University / University Level Institution is exclusively meant for girls ?</label>
													<select name="exclusively_girls_institution" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-7">
												<div class="form-group">
													<label for="hostel_name">Name of the Hostel :</label>
													<input type="text" class="form-control" name="hostel_name" placeholder="Hostel Name">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="hostel_type">Hostel Type :</label>
													<select name="hostel_type" class="form-control">
														<option value="type1">Type1</option>
														<option value="type2">Type2</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="distance_education_programme">Whether the University offers Programme through Distance Education Mode ?</label>
													<select name="distance_education_programme" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-7">
												<div class="form-group">
													<label for="regional_center_name">Name of the Regional Center :</label>
													<input type="text" class="form-control" name="regional_center_name" placeholder="Name">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="number_study_centers">Number of Study Centers :</label>
													<input type="number" class="form-control" name="number_study_centers">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="state">State/UT :</label>
													<select class="form-control" name="state" id="listBox" onchange='selct_district(this.value)'>
													</select>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="district">District :</label>
													<select id='secondlist' class="form-control" name="district"></select>
													<!-- <select name="district" id="" class="form-control">
														<option selected disabled>Select</option>
													</select> -->
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="is_only_affiliating">Whether the University is constituted from colleges or is only an affiliating University ?</label>
													<select name="is_only_affiliating" class="form-control">
														<option value="constituted of colleges">Constituted of Colleges</option>
														<option value="only affiliating">Only Affiliating University</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="admission_criteria">Admission Criteria :</label>
													<input type="text" class="form-control" name="admission_criteria" placeholder="Criteria">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="examination_system">Examination System :</label>
													<input type="text" class="form-control" name="examination_system" placeholder="Examination System">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="statutory_body">Statutory Body through which Approved :</label>
													<input type="text" class="form-control" name="statutory_body" placeholder="Statutory Body">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="university_approved">University through which Approved :</label>
													<input type="text" class="form-control" name="university_approved" placeholder="University">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="department">Department :</label>
													<input type="text" class="form-control" name="department" placeholder="Department">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="discipline_subject">Discipline/Subject</label>
													<input type="text" class="form-control" name="discipline_subject" placeholder="Discipline/Subject">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="discipline_group_category">Broad Discipline Group Category :</label>
													<input type="text" class="form-control" name="discipline_group_category" placeholder="Group Category">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="discipline_group_name">Broad Discipline Group Name :</label>
													<input type="text" class="form-control" name="discipline_group_name" placeholder="Group Name">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="teaching_pwd_type">Teaching Staff PWD Type :</label>
													<input type="text" class="form-control" name="teaching_pwd_type" placeholder="Type">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="non_teaching_pwd_group">Non-Teaching Staff Group :</label>
													<input type="text" class="form-control" name="non_teaching_pwd_group" placeholder="Group">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="non_teaching_pwd_type">Non-Teaching Staff PWD Type</label>
													<input type="text" class="form-control" name="non_teaching_pwd_type" placeholder="Type">
												</div>
											</div>
										</div>
										<div class="ml-2 mt-2"><h4>Level Wise</h4></div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="ug_male">UG Male :</label>
													<input type="number" min="0" class="form-control" name="ug_male" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="ug_female">UG Female :</label>
													<input type="number" min="0" class="form-control" name="ug_female" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="ug_total">UG Total :</label>
													<input type="number" min="0" class="form-control" name="ug_total" placeholder="0">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="pg_male">PG Male :</label>
													<input type="number" min="0" class="form-control" name="pg_male" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="pg_female">PG Female :</label>
													<input type="number" min="0" class="form-control" name="pg_female" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="pg_total">PG Total :</label>
													<input type="number" min="0" class="form-control" name="pg_total" placeholder="0">
												</div>
											</div>
										</div>
										<div class="ml-2 mt-2"><h4>Caste Wise</h4></div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="sc_male">SC Male :</label>
													<input type="number" min="0" class="form-control" name="sc_male" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="sc_female">SC Female :</label>
													<input type="number" min="0" class="form-control" name="sc_female" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="sc_total">Total :</label>
													<input type="number" min="0" class="form-control" name="sc_total" placeholder="0">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="st_male">ST Male :</label>
													<input type="number" min="0" class="form-control" name="st_male" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="st_female">ST Female :</label>
													<input type="number" min="0" class="form-control" name="st_female" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="st_total">Total :</label>
													<input type="number" min="0" class="form-control" name="st_total" placeholder="0">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="obc_male">OBC Male :</label>
													<input type="number" min="0" class="form-control" name="obc_male" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="obc_female">OBC Female :</label>
													<input type="number" min="0" class="form-control" name="obc_female" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="obc_total">Total :</label>
													<input type="number" min="0" class="form-control" name="obc_total" placeholder="0">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="general_male">General Male :</label>
													<input type="number" min="0" class="form-control" name="general_male" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="general_female">General Female :</label>
													<input type="number" min="0" class="form-control" name="general_female" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="general_total">Total :</label>
													<input type="number" min="0" class="form-control" name="general_total" placeholder="0">
												</div>
											</div>
										</div>
										<div class="ml-2 mt-2"><h4>Category Wise<i class="fa fa-info-circle ml-2" data-toggle="tooltip" title="Hindu, Muslim, PWD etc."></i></h4></div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="category_male">Male :</label>
													<input type="number" min="0" class="form-control" name="category_male" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="category_female">Female :</label>
													<input type="number" min="0" class="form-control" name="category_female" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="category_total">Total :</label>
													<input type="number" min="0" class="form-control" name="category_total" placeholder="0">
												</div>
											</div>
										</div>
										<div class="ml-2 mt-2"><h4>Foreign Students Enrollment</h4></div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="foreign_male">Male :</label>
													<input type="number" min="0" class="form-control" name="foreign_male" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="foreign_female">Female :</label>
													<input type="number" min="0" class="form-control" name="foreign_female" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="foreign_total">Total :</label>
													<input type="number" min="0" class="form-control" name="foreign_total" placeholder="0">
												</div>
											</div>
										</div>
										<div class="ml-2 mt-2"><h4>Examination Results</h4></div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="ug_passed">Total Number of Students Passed in UG :</label>
													<input type="number" min="0" class="form-control" name="ug_passed" placeholder="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="ug_passed_percent">Total Number of Students Passed in UG with 75% :</label>
													<input type="number" min="0" class="form-control" name="ug_passed_percent" placeholder="0">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="pg_passed">Total Number of Students Passed in UG :</label>
													<input type="number" min="0" class="form-control" name="pg_passed" placeholder="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="pg_passed_percent">Total Number of Students Passed in UG with 75% :</label>
													<input type="number" min="0" class="form-control" name="pg_passed_percent" placeholder="0">
												</div>
											</div>
										</div>
										<div class="ml-2 mt-4"><h4>Financial Information</h4></div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label for="grants_distance_education_council">Grants Received from Distance Education Council :</label>
													<input type="number" min="0" class="form-control" name="grants_distance_education_council" placeholder="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="grants_local_bodies">Grants Received from Local Bodies :</label>
													<input type="number" min="0" class="form-control" name="grants_local_bodies" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="other_fees">Other Fees :</label>
													<input type="number" min="0" class="form-control" name="other_fees" placeholder="0">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="interest">Interest :</label>
													<input type="number" min="0" class="form-control" name="interest" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="sale_application">Sale of Application Form :</label>
													<input type="number" min="0" class="form-control" name="sale_application" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="other_income">Other Income :</label>
													<input type="number" min="0" class="form-control" name="other_income" placeholder="0">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label for="total_finance">Total :</label>
													<input type="number" min="0" class="form-control" name="total_finance" placeholder="0">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="allowances_retirement">Allowances and Retirement Benefits :</label>
													<input type="number" min="0" class="form-control" name="allowances_retirement" placeholder="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="buildings_maintenance">Buildings (Construction and Maintenance):</label>
													<input type="number" min="0" class="form-control" name="buildings_maintenance" placeholder="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="grants_colleges">Grants to Colleges :</label>
													<input type="number" min="0" class="form-control" name="grants_colleges" placeholder="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="expenditure_total">Total :</label>
													<input type="number" class="form-control" min="0" name="expenditure_total" placeholder="0">
												</div>
											</div>
										</div>
										<div class="ml-2 mt-4"><h4>Infrastructure Related Data</h4></div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="number_journals">Number of Journals (peer reviewed) subscribed :</label>
													<input type="number" class="form-control" min="0" name="number_journals" placeholder="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="common_room_girls">Seperate Common room exclusively for Girls :</label>
													<select class="form-control" name="common_room_girls">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="toilet_disabled_females">Seperate Toilets for Disabled Females :</label>
													<select name="toilet_disabled_females" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="solar_power">Solar Power Generation :</label>
													<input type="number" class="form-control" min="0" name="solar_power" placeholder="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="connectivity_nkn">Connectivity NKN :</label>
													<input type="number" class="form-control" min="0" name="connectivity_nkn" placeholder="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="connectivity_nmeict">Connectivity NMEICT :</label>
													<input type="number" class="form-control" min="0" name="connectivity_nmeict" placeholder="0">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="grievance_redressal">Grievance Redressal Mechanism :</label>
													<select name="grievance_redressal" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="vigilance_cell">Vigilance Cell :</label>
													<select name="vigilance_cell" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="equal_oppurtunity_cell">Equal Oppurtunity Cell :</label>
													<select name="equal_oppurtunity_cell" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="student_counselor">Counselors for Students :</label>
													<select name="student_counselor" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="clinic_room">Clinic/First Aid Room :</label>
													<select name="clinic_room" class="form-control"></select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="seperate_toilet_girls">Seperate Toilet for Girls :</label>
													<select name="seperate_toilet_girls" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="skill_development_centre">Skill Development Centre :</label>
													<select name="skill_development_centre" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="self_defence_classes">Self Defence Classes for Girls :</label>
													<select name="self_defence_classes" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="disaster_awareness">Whether capacity Building and Training/awareness programmes conducted ?</label>
													<select name="disaster_awareness" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="vulnerability">Whether vulnerability assessment checks were made during the year ?</label>
													<select name="vulnerability" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="mock_drill_conducted">Is any mock drill or rehearsal programme conducted ?</label>
													<select name="mock_drill_conducted" class="form-control">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="scholarship_data">Whether University maintains scholarships data :</label>
													<select name="scholarship_data" class="form-control" id="scholarship_data">
														<option value="no">No</option>
														<option value="yes">Yes</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row" id="scholarship_data_info" style="display:none">
											<div class="col-md-5">
												<div class="form-group">
													<label for="government_scholarship">Total number of students on Government Scholarship :</label>
													<input type="number" class="form-control" name="government_scholarship" min="0" placeholder="0">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label for="government_fellowship">Total number of students on Government Fellowship :</label>
													<input type="number" class="form-control" name="government_fellowship" min="0" placeholder="0">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label for="education_loans">Total number of students on Education Loan :</label>
													<input type="number" class="form-control" name="education_loans" min="0" placeholder="0">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="accreditation">NAAC Accreditation :</label>
													<input type="text" class="form-control" name="accreditation" placeholder="Accreditation">
												</div>
											</div>
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
		$('#scholarship_data').change(function() {
		var opt = $(this).val();
		if(opt === "yes") {
			$('#scholarship_data_info').show();
		}
		else {
			$('#scholarship_data_info').hide();
		}
		});
	</script>
</body>
</html>