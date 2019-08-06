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
                                        <h4 style="font-size:1.5em;font-weight:bolder;margin-left:33vw">FACULTY DETAILS</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row" style="text-align:center;margin-left:10vw">
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_faculty_details" id="faculty1" value="single">
                                                <label class="form-check-label">Upload Single Faculty Details</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 mt-2">
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="upload_faculty_details" id="faculty2" value="multiple">
                                                <label class="form-check-label">Upload Multiple Faculty Details</label>
                                            </div>
                                        </div>
                                    </div> 
                                    <form action="./src/main.php" method="post" id="card_form" style="display:none" enctype="multipart/form-data">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Faculty Unique Id :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control boxes boxes" name="faculty_uid" placeholder="Faculty Unique Id">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Title :</h5>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control boxes" name="title">
                                                    <option value="" selected disabled>Title</option>
                                                    <option value="Mr">Mr.</option>
                                                    <option value="Mrs">Mrs.</option>
                                                    <option value="Miss">Miss</option>
                                                    <option value="Dr">Dr.</option>
                                                    <option value="Prof">Prof.</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="fname" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Middle Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="mname" placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Last Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="lname" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Father's Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="father_name" placeholder="Father's Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Mother's Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="mother_name" placeholder="Mother's Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Gender :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="gender" id="" class="form-control boxes">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Date of Birth :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control boxes" name="dob">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Religion :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control boxes" name="religion">
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
                                                <h5 class="mt-2">Caste :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="caste" placeholder="Caste">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Nationality :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="nationality" placeholder="Nationality">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Address Line 1 :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="address1" placeholder="Address Line 1">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Address Line 2 :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="address2" placeholder="Address Line 2">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">State :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control boxes" name="state" id="listBox" onchange='selct_district(this.value)'>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">District :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select id='secondlist' class="form-control boxes" name="district">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">City/Village :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="city" placeholder="City/Village">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Postal Code :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="postal" placeholder="Postal Code">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Landline Number :</h5>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" pattern="[1-9]{1}[0-9]{3}" class="form-control boxes" name="std" placeholder="STD">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" pattern="[1-9]{1}[0-9]{7}" class="form-control boxes" name="landline_number" placeholder="Landline Number">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Mobile Number :</h5>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control boxes" value="+91" disabled>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" pattern="[1-9]{1}[0-9]{9}" class="form-control boxes" name="mobile_number" placeholder="Mobile Number">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Fax :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="fax" placeholder="Fax">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Email :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control boxes" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Aadhaar Card(UID) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" format="[1-9]{1}[0-9]{11}" class="form-control boxes" name="aadhaar_card" placeholder="Aadhar Card">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Enrollment ID :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="enrollment_id" placeholder="Enrollment Id without '/'">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Upload Aadhar :</h5>
                                                <small style="color:#737373">(File should be in pdf format)</small>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" name="aadhar_card_file" id="aadhar_card">
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="aadhar_image" style="display:none">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Preview :</h5>
                                            </div>
                                            <div class="col-md-6">
                                            <iframe id="aadhar_file" width="400" height="300" scrolling="0" frameborder="1"></iframe>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Passport Number :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" pattern="[A-Z]{1}[0-9]{7}" class="form-control boxes" name="passport_number" placeholder="Eg: A9999999">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Upload Passport :</h5>
                                                <small style="color:#737373">(File should be in pdf format)</small>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" name="passport" id="passport_pdf">
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="passport_image" style="display:none">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Preview :</h5>
                                            </div>
                                            <div class="col-md-6">
                                            <iframe id="passport_file" width="400" height="300" scrolling="0" frameborder="1"></iframe>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">PAN :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" format="[A_Z]{5}[0-9]{4}[A-Z]{1}" class="form-control boxes" name="pan" placeholder="Eg: AAAAA9999A">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Upload PAN :</h5>
                                                <small style="color:#737373">(File should be in pdf format)</small>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" name="pan_card" id="pan_card">
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="pan_image" style="display:none">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Preview :</h5>
                                            </div>
                                            <div class="col-md-6">
                                            <iframe id="pan_file" width="400" height="300" scrolling="0" frameborder="1"></iframe>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Is Physically Handicapped ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="physically_handicapped" class="form-control boxes">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Is Duplicate ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="duplicate" class="form-control boxes">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Left Institute ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="left_institute" class="form-control boxes" id="left_institute">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="leaving_info" style="display:none">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Relieved Date :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control boxes" name="relieved_date">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Appointment Type :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control boxes" name="appointment_type">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="Regular">Regular</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="Contractual">Contractual</option>
                                                    <option value="Regular/Approved">Regular/Approved</option>
                                                    <option value="Adhoc/Contact">Adhoc/Contact</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Appointment FT/PT :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control boxes" name="appointment_ft">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Part Time">Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Appointment Approved by Government :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="appointment_government" placeholder="Appointment Approved by Government">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Appointment Approved by University :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="appointment_university" placeholder="Appointment Approved by University">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Exact Designation :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="designation" placeholder="Exact Designation">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Programme :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="programme" placeholder="Programme">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Course :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="course" placeholder="Course">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Date of Joining :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control boxes" name="date_of_joining">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">UG :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="ug" placeholder="UG">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">PG :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="pg" placeholder="PG">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Diploma :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="diploma" placeholder="Diploma">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Salary Group :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="numeber" min="0" class="form-control boxes" name="salary_group" placeholder="Salary Group">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Basic Pay (in Rs.) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="basic_pay" placeholder="Basic Pay">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">DA % :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="da" placeholder="DA">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">HRA (in Rs.) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="hra" placeholder="HRA">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Other Allowances (in Rs.) :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="other_allowances" placeholder="Other Allowances">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Gross Pay per month :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="gross_pay" placeholder="Gross Pay">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Pay Scale :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="pay_scale" placeholder="Pay Scale">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">PF Number :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="pf_number" placeholder="PF Number">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Total Gross Salary for the last Financial Year :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="total_gross_salary" placeholder="Total Gross Salary">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Total Tax paid in the last Financial Year :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="total_tax_paid" placeholder="Total Tax paid in the last Financial Year">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Bank Account Number :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="bank_acc_number" placeholder="Account Number">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Bank Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="bank_name" placeholder="Bank Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Bank Branch Name :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="bank_branch" placeholder="Branch Name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">IFSC Code :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="ifsc_code" placeholder="IFSC">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">UG Degree :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="ug_degree" placeholder="UG Degree">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">PG Degree :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="pg_degree" placeholder="PG Degree">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Doctorate Degree :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="doctorate" placeholder="Doctorate Degree">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Other Qualifications :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="qualifications" placeholder="Other Qualifications">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Areas of Specialization :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="specialization" placeholder="Areas of Specialization">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Teaching Experience in Years :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="teaching_experience" placeholder="Teaching Experience">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Research Experience in Years :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="research_experience" placeholder="Research Experience">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Work Experience in Years :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="work_experience" placeholder="Work Experience">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Total Experience in Years :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="total_experience" placeholder="Total Experience">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Other Experience :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="other_experience" placeholder="Other Experience">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Number of Publications in National Journal :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="national_journal_publications" placeholder="Publications in National Journal">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Number of Publications in National Conference :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="national_conference_publications" placeholder="Publications in National Conference">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Number of Publications in International Journal :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="international_journal_publications" placeholder="Publications in International Journal">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Number of Publications in International Conference :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="international_conference_publications" placeholder="Publications in International Conference">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Patents :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="patents" placeholder="Patents">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Number of PG Projects Guided :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="guided_pg_projects" placeholder="PG Projects Guided">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Number of Doctorate Students Guided :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="guided_doctorate_students" placeholder="Doctorate Students Guided">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Number of Books Published :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="0" class="form-control boxes" name="books_published" placeholder="Books Published">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">FY/Common Subject Teacher ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="common_subject_teacher" id="common_subject_teacher" class="form-control boxes">
                                                    <option value="" selected disabled>SELECT`</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3" id="common_subject_info" style="display:none">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">FY/Common Subject :</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control boxes" name="common_subject" placeholder="FY/Common Subject">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Would you like to work as Expert Member on various committees of AICTE ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="committe_work_aicte" class="form-control boxes">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <h5 class="mt-2">Have you ever applied to AICTE for any grants/assistance ?</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="aicte_grants" class="form-control boxes">
                                                    <option value="" selected disabled>SELECT</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-3" style="text-align:center">
                                            <button class="btn btn-success" type="submit" name="faculty_details">Submit</button>
                                        </div>
                                    </form>
                                    <div class="mt-5"  id="card_excel" style="display:none">
                                        <form action="./src/main.php" method="post" style="float:right">
                                            <button class="btn btn-danger btn-sm" name="download_excel_faculty_details" type="submit"><i class="fa fa-download mr-2"></i>Template</button>
                                        </form>
                                        <form action="./src/upload_excel_sheets.php" method="post" enctype="multipart/form-data">
                                            <input type="file" name="sheet">
                                            <button class="btn btn-success btn-sm" type="submit" name="submit" type="submit"><i class="fa fa-upload mr-2"></i>Upload</button>
                                        </form>
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
        $('#left_institute').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#leaving_info').show();
            }
            else {
                $('#leaving_info').hide();
            }
        });
    </script>
    <script>
        $('#common_subject_teacher').change(function() {
            var opt = $(this).val();
            if(opt === 'yes') {
                $('#common_subject_info').show();
            }
            else {
                $('#common_subject_info').hide();
            }
        });
    </script>
    <script>
        $('#faculty1').change(function() {
        var opt = $("input[name='upload_faculty_details']:checked").val();
                if(opt === "single") {
                    $('#card_form').show();
                    $('#card_excel').hide();
                }
        });
        $('#faculty2').change(function() {
        var opt = $("input[name='upload_faculty_details']:checked").val();
                if(opt === "multiple") {
                    $('#card_form').hide();
                    $('#card_excel').show();
                }
        });
    </script>
    <script type="text/javascript">
        $('#aadhar_card').change(function PreviewImage() {
                $('#aadhar_image').show();
                pdffile=document.getElementById("aadhar_card").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#aadhar_file').attr('src',pdffile_url);
        });
    </script>
    <script type="text/javascript">
        $('#passport_pdf').change(function PreviewImage() {
                $('#passport_image').show();
                pdffile=document.getElementById("passport_pdf").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#passport_file').attr('src',pdffile_url);
        });
    </script>
    <script type="text/javascript">
        $('#pan_card').change(function PreviewImage() {
                $('#pan_image').show();
                pdffile=document.getElementById("pan_card").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#pan_file').attr('src',pdffile_url);
        });
    </script>
</body>
</html>