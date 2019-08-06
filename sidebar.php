<?php
    echo('<div class="user mt-4">
    <div class="avatar-sm float-left mr-2">
        <img src="./assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
    </div>
    <div class="info">
        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
            <span>
                <p class="mt-2">'.$_SESSION['username'].'</p>
                <span class="caret"></span>
            </span>
        </a>
        <div class="clearfix"></div>

        <div class="collapse in" id="collapseExample">
            <ul class="nav">
                <li>
                    <a href="#profile">
                        <span class="link-collapse">My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="./src/logout.php">
                        <span class="link-collapse">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
    <ul class="nav">
        <li class="nav-item active">
            <a href="./index.php">
                <i class="fa fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./organization_details.php">
                <i class="fa fa-university"></i><span>Organization Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./registrar_details.php">
                <i class="fa fa-user"></i><span>Registrar Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./faculty_details.php">
                <i class="fa fa-user"></i><span>Faculty Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./program_details.php">
                <i class="fa fa-user"></i><span>Program Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./course_details.php">
                <i class="fa fa-user"></i><span>Course Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./vocational_courses.php">
                <i class="fa fa-user"></i><span>Vocational Courses</span>
        </a>
        </li>
        <li class="nav-item">
            <a href="./land_details.php">
                <i class="fa fa-user"></i><span>Land Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./land_details_per_registration.php">
                <i class="fa fa-user"></i><span>Land Details Per Registration</span>
        </a>
        </li>
        <li class="nav-item">
            <a href="./building_details.php">
                <i class="fa fa-user"></i><span>Building Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./laboratory_details.php">
                <i class="fa fa-user"></i><span>Laboratory Details</span>
        </a>
        </li>
        <li class="nav-item">
            <a href="./administrative_area.php">
                <i class="fa fa-user"></i><span>Administrative Area</span>
        </a>
        </li>
        <li class="nav-item">
            <a href="./amenities_area.php">
                <i class="fa fa-user"></i><span>Amenities Area</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./circulation_area.php">
                <i class="fa fa-user"></i><span>Circulation Area</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./instructional_area.php">
                <i class="fa fa-user"></i><span>Instructional Area</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./computational_facility.php">
                <i class="fa fa-user"></i><span>Computational Facility</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./institute_digital_payments.php">
                <i class="fa fa-user"></i>
                <span>Digital Payments</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./institute_grievances_processed.php">
                <i class="fa fa-user"></i>
                <span>Grievances</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./national_level_programs.php">
                <i class="fa fa-user"></i>
                <span>National Level Programs</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./industry_mou_information.php">
                <i class="fa fa-user"></i>
                <span>Industry MOU Information</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./yoga_day_celebration.php">
                <i class="fa fa-user"></i>
                <span>Yoga Day Celebration</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./aicte_survey.php">
                <i class="fa fa-user"></i>
                <span>AICTE Survey</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./student_enrollment_details.php">
                <i class="fa fa-user"></i>
                <span>Student Enrollment Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="./pg_scholarship.php">
                <i class="fa fa-user"></i>
                <span>PG Scholarship</span>
            </a>
        </li>
    </ul>
');
?>