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
                                <div class="card-header"><h4 style="font-size:1.5em;font-weight:bolder;margin-left:23vw">AICTE SURVEY</h4></div>
                                <div class="card-body">
                                    <form action="./src/main.php" method="post">
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Does your institute interact with industry on regular basis ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="whether_industry_interact" class="form-control" id="whether_industry_interact">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="interact_companies" style="display:none">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">If yes, Number of Companies your Institute is in regular touch with for the past 2 years:</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control" min="0" name="number_companies_interact">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Do Students of your Institute go to Industry for Internships ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="student_industry_internship" id="student_industry_internship" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div  id="number_percentage_internship" style="display:none">
                                            <div class="row mt-3">
                                                <div class="col-md-4">
                                                    <h5 class="mt-2">If yes, What Percentage of Students go for Internships ?</h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" class="form-control" min="0" name="percentage_student_internship">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-4">
                                                    <h5 class="mt-2">Number of Students who went for Internship in past 2 years:</h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" class="form-control" min="0" name="number_student_internship">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Do Experts from Industry come to spend time with your Faculty and Students ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="industry_spend_time" id="industry_spend_time" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="industry_experts_visit" style="display:none">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">If yes, How many Industry Experts visited your Institute in the past 2 years ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control" min="0" name="number_industry_experts">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Are Training Programmes organised in your Institute ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="are_training_organised" id="training_programme_organised" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="training_programme" style="display:none">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">If yes, How many Training Programmes were organised in the past 2 years ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control" min="0" name="number_training_programmes">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Are your Faculty Members on Boards of Companies ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="are_faculty_board_member" id="faculty_board_member" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="faculty_company_board" style="display:none">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">If yes, Number of such Faculty in past 2 years :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control" min="0" name="number_faculty_board_member">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Has your Institute filed for Patents in the past 2 years ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="has_patent_filed" id="institute_patent_filed" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="patent_filed_info" style="display:none">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">If yes, Number of such Patents Filed in past 2 years :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control" min="0" name="number_patent_filed">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Has Industry funded any Cell / Department / Lab in your Institute in past 2 years ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="has_industry_funding_department" id="industry_funded_department" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="industry_funded_info" style="display:none">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">If yes, Number of such Cell / Department / Lab funded by Industry in past 2 years :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control" min="0" name="number_funded_department">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Does your Institute get live projects from Industry for Diploma/UG/PG Students ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="industry_live_projects" id="live_projects" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="live_projects_info" style="display:none">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Number of Industry Projects received in past 2 years :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control" min="0" name="number_live_projects">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Do you get Consultancy Projects from Industry ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="industry_consultancy_projects" id="consultancy_projects" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div  id="consultancy_projects_info" style="display:none">
                                            <div class="row mt-3">
                                                <div class="col-md-4">
                                                    <h5 class="mt-2">Number of Consultancy Projects received from Industry in past 2 years :</h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" class="form-control" min="0" name="number_consultancy_projects">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-4">
                                                    <h5 class="mt-2">What is the Total Worth of such Projects in Rs ?</h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" class="form-control" min="0" name="worth_consultancy_projects">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Do Companies come to your Institute to provide Placement to Students ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="do_companies_placements" id="company_placements" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="company_placements_info" style="display:none">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Number of Companies which came in past 2 years :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control" min="0" name="number_company_placements">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Does your Curriculum get Revised as per Industry's requirements ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="curriculum_revised" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <h5 class="mt-2">Whether your Institution is having any Incubation for Startups ?</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="institution_incubation_startups" class="form-control">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-3" style="text-align:center">
                                            <button class="btn btn-success" type="submit" name="aicte_survey">Submit</button>
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
        $('#whether_industry_interact').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#interact_companies').show();
            }
            else {
                $('#interact_companies').hide();
            }
        });
    </script>
    <script>
        $('#student_industry_internship').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#number_percentage_internship').show();
            }
            else {
                $('#number_percentage_internship').hide();
            }
        });
    </script>
    <script>
        $('#industry_spend_time').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#industry_experts_visit').show();
            }
            else {
                $('#industry_experts_visit').hide();
            }
        });
    </script>
    <script>
        $('#training_programme_organised').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#training_programme').show();
            }
            else {
                $('#training_programme').hide();
            }
        });
    </script>
    <script>
        $('#faculty_board_member').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#faculty_company_board').show();
            }
            else {
                $('#faculty_company_board').hide();
            }
        });
    </script>
    <script>
        $('#institute_patent_filed').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#patent_filed_info').show();
            }
            else {
                $('#patent_filed_info').hide();
            }
        });
    </script>
    <script>
        $('#industry_funded_department').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#industry_funded_info').show();
            }
            else {
                $('#industry_funded_info').hide();
            }
        });
    </script>
    <script>
        $('#live_projects').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#live_projects_info').show();
            }
            else {
                $('#live_projects_info').hide();
            }
        });
    </script>
    <script>
        $('#consultancy_projects').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#consultancy_projects_info').show();
            }
            else {
                $('#consultancy_projects_info').hide();
            }
        });
    </script>
    <script>
        $('#company_placements').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#company_placements_info').show();
            }
            else {
                $('#company_placements_info').hide();
            }
        });
    </script>
</body>
</html>