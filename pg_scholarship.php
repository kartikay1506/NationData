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
                                <div class="card-header"><h4 style="font-size:1.5em;font-weight:bolder">PG SCHOLARSHIP (GATE / GPAT) FOR ENGINEERING AND PHARMACY</h4></div>
                                <div class="card-body">
                                    <div class="row" style="text-align:center;margin-left:10vw">
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_scholarship_details" id="scholarship1" value="single">
                                                <label class="form-check-label">Upload Single Scholarship Details</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_scholarship_details" id="scholarship2" value="multiple">
                                                <label class="form-check-label">Upload Multiple Scholarship Details</label>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="./src/main.php" method="post" id="card_form" style="display:none">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Title :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="title">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Miss">Miss</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">First Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Middle Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Last Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Mother's Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="mothers_name" placeholder="Mother's Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Father's Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="fathers_name" placeholder="Father's Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Date of Birth :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" name="dob">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Gender :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="gender">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Permanent Address Line 1 :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="address_line1" placeholder="Address 1">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Permanent Address Line 2 :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="address_line2" placeholder="Address 2">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Permanent Address Line 3 :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="address_line3" placeholder="Address 3">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Home State :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="home_state" id="listBox" onchange='selct_district(this.value)'>
											</select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Home District :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select id='secondlist' class="form-control" name="home_district"></select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Country :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="country" placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Pincode :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" min="0" name="pincode" placeholder="Pincode">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Resident Phone :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" min="0" name="resident_phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Mobile Number :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" min="0" name="mobile_number" placeholder="Mobile">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Email Address :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Alternate Email Address :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="alternate_email" placeholder="Alternate Email">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Religion :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="religion">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="Hinduism">Hinduism</option>
                                                    <option value="Buddhism">Buddhism</option>
                                                    <option value="Christianity">Christianity</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Jainism">Jainism</option>
                                                    <option value="Sikhism">Sikhism</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Category as per Caste/Validity Certificate :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="category" placeholder="Category">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Reserve Category ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="reserve_category">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Is Physically Handicapped ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="is_physically_handicapped">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Is Economically Backward :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="is_economically_backward">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Do you have an Aadhar Card ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="have_aadhar_card" id="have_aadhar_card">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div style="display:none" id="aadhar_card_info">
                                            <div class="row mt-3">
                                                <div class="col-md-3">
                                                    <h5 class="mt-2">Aadhar ID :</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" class="form-control" name="aadhar_number" placeholder="Aadhar ID">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-3">
                                                    <h5 class="mt-2">Enrollment ID :</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" class="form-control" name="enrollment_id" placeholder="Enrollment ID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Do you have National Population Register(NPR) card ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="have_npr_card" id="have_npr_card">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" style="display:none" id="npr_card_info">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">NPR Card Number :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="npr_number" placeholder="NPR Card Number">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                                <div class="col-md-3">
                                                    <h5 class="mt-2">Student Status :</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="student_status" placeholder="Status">
                                                </div>
                                            </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Level :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="level" class="form-control">
                                                    <option value="">SELECT</option>
                                                    <option value="Under Graduate">Under Graduate</option>
                                                    <option value="Post Graduate">Post Graduate</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="PG Diploma">PG Diploma</option>
                                                    <option value="M.Phil">M.Phil</option>
                                                    <option value="Certificate">Certificate</option>
                                                    <option value="Integrated">Integrated</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Program :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="program" placeholder="Program">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Course :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="course" placeholder="Course">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Course ID :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="course_id" placeholder="Course ID">
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
                                                <h5 class="mt-2">Full Time / Part Time :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="full_part_time">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Part Time">Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Admission Type :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="admission_type">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="Regular Admission">Regular Admission</option>
                                                    <option value="Open Admission">Open Admission</option>
                                                    <option value="Rolling Admission">Rolling Admission</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Date of Admission :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" name="date_admission">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Academic Year :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="academic_year" placeholder="Academic Year">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Record Created on :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" name="record_created_on">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Admitted under TFW<i class="fa fa-info-circle ml-2" data-toggle="tooltip" title="TFW = Tution Fee Waiver"></i></h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="admitted_tfw">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Left the Course ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="left_course" id="left_course">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" style="display:none" id="left_course_info">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Course Leaving Date :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" name="course_leaving_date">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Roll Number :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="roll_number" min="0" placeholder="Roll Number">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Year 1 (% Marks) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="percentage_marks1" placeholder="% Marks">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Year 2 (% Marks) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="percentage_marks2" placeholder="% Marks">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Year 3 (% Marks) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="percentage_marks3" placeholder="% Marks">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Year 4 (% Marks) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="percentage_marks4" placeholder="% Marks">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Year 5 (% Marks) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="percentage_marks5" placeholder="% Marks">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Exam Type :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="exam_type" placeholder="Exam Type">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">GATE / GPAT Exam Number :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="gate_gpat_exam_number">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">GATE / GPAT Score :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="gate_gpat_score">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">GATE / GPAT Score Valid From :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" name="gate_gpat_valid_from" placeholder="Valid From">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">GATE / GPAT Score Valid To : </h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" name="gate_gpat_valid_to" placeholder="Valid To">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">% Marks Obtained in GPAT:</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="percentage_gpat_marks" placeholder="% Marks">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Gate Examination Paper :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="gate_examination_paper" placeholder="Gate Examination Paper">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Marks out of 100 in GATE :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="marks_100_gate" placeholder="Out of 100">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Qualifying Marks in GATE :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="qualifying_marks_gate" placeholder="Qualifying Marks">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Institute Fees Paid :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="institute_fee_paid" placeholder="Rs">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Home / Hostel ?</h5>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <select class="form-control" name="home_hostel" id="home_hostel">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="home">Home</option>
                                                    <option value="hostel">Hostel</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="home_hostel_info" style="display:none">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Hostel Fees/Month :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control" name="hostel_month_fees" placeholder="Rs">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Claimed Upto Month :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="claimed_upto_month">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Claimed Upto Year :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="claimed_upto_year">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <?php $i = 2020;
                                                        for($i = 2020; $i >= 1900; $i--) {
                                                            $option = '<option value="'.$i.'">'.$i.'</option>';
                                                            echo($option);
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Paid Upto Month :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="paid_upto_month">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Paid Upto Year :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="paid_upto_year">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <?php $i = 2020;
                                                        for($i = 2020; $i >= 1900; $i--) {
                                                            $option = '<option value="'.$i.'">'.$i.'</option>';
                                                            echo($option);
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                            <div class="mt-3" style="text-align:center">
                                        <button class="btn btn-success" type="submit" name="pg_scholarship">Submit</button>
                                        </div>
                                    </form>
                                    <div class="mt-5"  id="card_excel" style="display:none">
										<form action="./src/main.php" method="post" style="float:right">
											<button class="btn btn-danger btn-sm" name="download_excel_pg_scholarship_details" type="submit"><i class="fa fa-download mr-2"></i>Template</button>
										</form>
										<form action="./src/upload_excel_sheets.php" method="post" enctype="multipart/form-data">
											<input type="file" name="sheet">
											<button class="btn btn-success btn-sm" type="submit" name="submit_pg_scholarship_details" type="submit"><i class="fa fa-upload mr-2"></i>Upload</button>
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
        $('#left_course').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#left_course_info').show();
            }
            else {
                $('#left_course_info').hide();
            }
        });
    </script>
    <script>
        $('#have_aadhar_card').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#aadhar_card_info').show();
            }
            else {
                $('#aadhar_card_info').hide();
            }
        });
    </script>
    <script>
        $('#have_npr_card').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#npr_card_info').show();
            }
            else {
                $('#npr_card_info').hide();
            }
        });
    </script>
    <script>
        $('#home_hostel').change(function() {
            var opt = $(this).val();
            if(opt === 'hostel') {
                $('#home_hostel_info').show();
            }
            else {
                $('#home_hostel_info').hide();
            }
        });
    </script>
    <script>
        $('#scholarship1').change(function() {
        var opt = $("input[name='upload_scholarship_details']:checked").val();
                if(opt === "single") {
                    $('#card_form').show();
                    $('#card_excel').hide();
                }
        });
        $('#scholarship2').change(function() {
        var opt = $("input[name='upload_scholarship_details']:checked").val();
                if(opt === "multiple") {
                    $('#card_form').hide();
                    $('#card_excel').show();
                }
        });
    </script>
</body>
</html>