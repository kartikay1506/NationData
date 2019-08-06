<?php
    include 'database.php';
    include 'PHPExcel/IOFactory.php';


    if(isset($_POST['organization_details'])) {
        $governing_body = mysqli_real_escape_string($conn, $_POST['governing_body']);
        $institution_name = mysqli_real_escape_string($conn, $_POST['institution_name']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $district = mysqli_real_escape_string($conn, $_POST['district']);
        $town = mysqli_real_escape_string($conn, $_POST['town']);
        $postal = mysqli_real_escape_string($conn, $_POST['postal']);
        $institution_address = mysqli_real_escape_string($conn, $_POST['institution_address']);
        $land_phone_std_code = mysqli_real_escape_string($conn, $_POST['land_phone_std_code']);
        $land_phone_number = mysqli_real_escape_string($conn, $_POST['land_phone_number']);
        $fax_number = mysqli_real_escape_string($conn, $_POST['fax_number']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $institution_website = mysqli_real_escape_string($conn, $_POST['institution_website']);
        $registration_number = mysqli_real_escape_string($conn, $_POST['registration_number']);
        $registration_date = mysqli_real_escape_string($conn, $_POST['registration_date']);
        $registered_with = mysqli_real_escape_string($conn, $_POST['registered_with']);
        $company_type = mysqli_real_escape_string($conn, $_POST['company_type']);
        $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
        $company_contact = mysqli_real_escape_string($conn, $_POST['company_contact']);
        $company_email = mysqli_real_escape_string($conn, $_POST['company_email']);

        $sql = "INSERT INTO `organisation_details`(`governing_body`, `name`, `state`, `district`, `city`, `pin_no`, `address`, `land_phone_std_code`, `land_phone_no`, `fax_no`, `email`, `website`, `registration_no`, `registered_with`, `registration_date`, `company_type`, `company_name`, `company_contact`, `company_email`) VALUES ('$governing_body','$institution_name','$state','$district','$town','$postal','$institution_address','$land_phone_std_code','$land_phone_number','$fax_number','$email','$institution_website','$registration_number','$registered_with','$registration_date','$company_type','$company_name','$company_contact','$company_email');";
        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../organization_details.php?task=success");
        }
        else {
            echo(mysqli_error($conn));
        }
    }

    if(isset($_POST['registrar_details'])) {
        $registrar_id = '';
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $name = mysqli_real_escape_string($conn, $_POST['registrar_name']);
        $registration_number = mysqli_real_escape_string($conn, $_POST['registration_number']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $std_code = mysqli_real_escape_string($conn, $_POST['std_code']);
        $alternate_mobile_number = mysqli_real_escape_string($conn, $_POST['alternate_mobile_number']);
        $district = mysqli_real_escape_string($conn, $_POST['district']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $postal = mysqli_real_escape_string($conn, $_POST['postal']);
        $alternate_email = mysqli_real_escape_string($conn, $_POST['alternate_email']);

        $sql = "INSERT INTO registrar_details(registration_no,title,name,state,std_code,mobile_no,district,address,postal_code,email_id) VALUES('$registration_number','$name','$title','$state','$std_code','$alternate_mobile_number','$district','$address','$postal','$alternate_email');";
        echo($sql);
        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../registrar_details.php?task=success");
        }
       else {
           echo("Error");
       }
    }
    
    if(isset($_POST['faculty_details'])) {
        $faculty_uid = mysqli_real_escape_string($conn, $_POST['faculty_uid']);
        $duplicate = mysqli_real_escape_string($conn, $_POST['duplicate']);
        $left_institute = mysqli_real_escape_string($conn, $_POST['left_institute']);
        $relieved_date = mysqli_real_escape_string($conn, $_POST['relieved_date']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $mname = mysqli_real_escape_string($conn, $_POST['mname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
        $mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
        $postal = mysqli_real_escape_string($conn, $_POST['postal']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $district = mysqli_real_escape_string($conn, $_POST['district']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $address1 = mysqli_real_escape_string($conn, $_POST['address1']);
        $address2 = mysqli_real_escape_string($conn, $_POST['address2']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $religion = mysqli_real_escape_string($conn, $_POST['religion']);
        $caste= mysqli_real_escape_string($conn, $_POST['caste']);
        $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
        $physically_handicapped = mysqli_real_escape_string($conn, $_POST['physically_handicapped']);
        $passport_number = mysqli_real_escape_string($conn, $_POST['passport_number']);
        $pan = mysqli_real_escape_string($conn, $_POST['pan']);
        $aadhaar_card = mysqli_real_escape_string($conn, $_POST['aadhaar_card']);
        $enrollment_id = mysqli_real_escape_string($conn, $_POST['enrollment_id']);
        $std = mysqli_real_escape_string($conn, $_POST['std']);
        $landline_number = mysqli_real_escape_string($conn, $_POST['landline_number']);
        $mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
        $fax = mysqli_real_escape_string($conn, $_POST['fax']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $appointment_type = mysqli_real_escape_string($conn, $_POST['appointment_type']);
        $appointment_government = mysqli_real_escape_string($conn, $_POST['appointment_government']);
        $appointment_university = mysqli_real_escape_string($conn, $_POST['appointment_university']);
        $designation = mysqli_real_escape_string($conn, $_POST['designation']);
        $programme = mysqli_real_escape_string($conn, $_POST['programme']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $date_of_joining = mysqli_real_escape_string($conn, $_POST['date_of_joining']);
        $ug = mysqli_real_escape_string($conn, $_POST['ug']);
        $pg = mysqli_real_escape_string($conn, $_POST['pg']);
        $diploma = mysqli_real_escape_string($conn, $_POST['diploma']);
        $appointment_ft = mysqli_real_escape_string($conn, $_POST['appointment_ft']);
        $bank_acc_number = mysqli_real_escape_string($conn, $_POST['bank_acc_number']);
        $bank_name = mysqli_real_escape_string($conn, $_POST['bank_name']);
        $bank_branch = mysqli_real_escape_string($conn, $_POST['bank_branch']);
        $ifsc_code = mysqli_real_escape_string($conn, $_POST['ifsc_code']);
        $salary_group = mysqli_real_escape_string($conn, $_POST['salary_group']);
        $basic_pay = mysqli_real_escape_string($conn, $_POST['basic_pay']);
        $da = mysqli_real_escape_string($conn, $_POST['da']);
        $hra = mysqli_real_escape_string($conn, $_POST['hra']);
        $other_allowances = mysqli_real_escape_string($conn, $_POST['other_allowances']);
        $gross_pay = mysqli_real_escape_string($conn, $_POST['gross_pay']);
        $pay_scale = mysqli_real_escape_string($conn, $_POST['pay_scale']);
        $pf_number = mysqli_real_escape_string($conn, $_POST['pf_number']);
        $total_gross_salary = mysqli_real_escape_string($conn, $_POST['total_gross_salary']);
        $total_tax_paid = mysqli_real_escape_string($conn, $_POST['total_tax_paid']);
        $doctorate = mysqli_real_escape_string($conn, $_POST['doctorate']);
        $pg_degree = mysqli_real_escape_string($conn, $_POST['pg_degree']);
        $ug_degree = mysqli_real_escape_string($conn, $_POST['ug_degree']);
        $qualifications = mysqli_real_escape_string($conn, $_POST['qualifications']);
        $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
        $teaching_experience = mysqli_real_escape_string($conn, $_POST['teaching_experience']);
        $research_experience = mysqli_real_escape_string($conn, $_POST['research_experience']);
        $work_experience= mysqli_real_escape_string($conn, $_POST['work_experience']);
        $total_experience= mysqli_real_escape_string($conn, $_POST['total_experience']);
        $other_experience = mysqli_real_escape_string($conn, $_POST['other_experience']);
        $national_journal_publications = mysqli_real_escape_string($conn, $_POST['national_journal_publications']);
        $national_conference_publications = mysqli_real_escape_string($conn, $_POST['national_conference_publications']);
        $international_journal_publications = mysqli_real_escape_string($conn, $_POST['international_journal_publications']);
        $international_conference_publications = mysqli_real_escape_string($conn, $_POST['international_conference_publications']);
        $patents = mysqli_real_escape_string($conn, $_POST['patents']);
        $guided_pg_projects = mysqli_real_escape_string($conn, $_POST['guided_pg_projects']);
        $guided_doctorate_students = mysqli_real_escape_string($c0nn, $_POST['guided_doctorate_students']);
        $books_published = mysqli_real_escape_string($conn, $_POST['books_published']);
        $common_subject_teacher = mysqli_real_escape_string($conn, $_POST['common_subject_teacher']);
        $common_subject = mysqli_real_escape_string($conn, $_POST['common_subject']);
        $committe_work_aicte = mysqli_real_escape_string($conn, $_POST['committe_work_aicte']);
        $aicte_grants = mysqli_real_escape_string($conn, $_POST['aicte_grants']);

        $name = $fname.' '.$mname.' '.$lname;
        $landline = $std.'-'.$landline_number;

        $targetdir1 = "uploads/documents/aadhar-card/";
        $targetdir2 = "uploads/documents/passport/";
        $targetdir3 = "uploads/documents/pan-card/";
        $allowTypes = array('pdf');
        $statusMsg = $errorMsg = $errorUpload = $errorUploadType = '';
        $aadhar_file = '';
        $pan_file = '';
        $passport_file = '';

        if (!empty($_FILES['aadhar_card_file']['name'])) {
                //File Upload Path
                $fileName = basename($_FILES['aadhar_card_file']['name']);
                $targetFilePath = $targetdir1.$faculty_uid."-".$fileName;
                //Check whether file type is valid or not
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to server
                    $tmp = $_FILES["aadhar_card_file"]["tmp_name"];
                    if (move_uploaded_file($tmp, $targetFilePath)) {
                        // Image db insert sql
                       $aadhar_file = $faculty_uid."-".$fileName;
                    } else {
                        //error upload file
                    }
                } else {
                    //error upload type
                }
            }
            if (!empty($_FILES['passport']['name'])) {
                //File Upload Path
                $fileName = basename($_FILES['passport']['name']);
                $targetFilePath = $targetdir2.$faculty_uid."-".$fileName;
                //Check whether file type is valid or not
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to server
                    $tmp = $_FILES["passport"]["tmp_name"];
                    if (move_uploaded_file($tmp, $targetFilePath)) {
                        // Image db insert sql
                       $pan_file = $faculty_uid."-".$fileName;
                    } else {
                        //error upload file
                    }
                } else {
                    //error upload type
                }
            }
            if (!empty($_FILES['pan_card']['name'])) {
                //File Upload Path
                $fileName = basename($_FILES['pan_card']['name']);
                $targetFilePath = $targetdir3.$faculty_uid."-".$fileName;
                //Check whether file type is valid or not
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to server
                    $tmp = $_FILES["pan_card"]["tmp_name"];
                    if (move_uploaded_file($tmp, $targetFilePath)) {
                        // Image db insert sql
                       $passport_file = $faculty_uid."-".$fileName;
                    } else {
                        //error upload file
                    }
                } else {
                    //error upload type
                }
            }

        $sql = "INSERT INTO `faculty_details`(`faculty_unique_id`, `title`, `name`, `father_name`, `mother_name`, `gender`, `date_of_birth`, `religion`, `caste`, `nationality`, `address_line1`, `address_line2`, `state`, `district`, `city_village`, `postal_code`, `landline_number`, `mobile_number`, `fax`, `email`, `aadhar_card_number`, `enrollment_id`, `aadhar_file`, `passport_number`, `passport_file`, `pan_number`, `pan_file`, `is_physically_handicapped`, `is_duplicate`, `left_institute`, `relieved_date`, `appointment_type`,`appointment_ft_pt`,  `appointment_approved_government`, `appointment_approved_university`, `exact_designation`, `programme`, `course`, `date_of_joining`, `ug`, `pg`, `diploma`, `salary_group`, `basic_pay`, `da`, `hra`, `other_allowance`, `gross_pay_per_month`, `pay_scale`, `pf_number`, `total_gross_salary_last_year`, `total_tax_paid_last_year`, `bank_account_number`, `bank_name`, `bank_branch_name`, `ifsc_code`, `ug_degree`, `pg_degree`, `doctorate_degree`, `other_qualifications`, `areas_specialization`, `teaching_experience_years`, `research_experience_years`, `work_experience_years`, `total_experience_years`, `other_experience_years`, `number_publications_national_journal`, `number_publications_national_conference`, `number_publications_international_journal`, `number_publications_international_conference`, `patents`, `number_pg_projects_guided`, `number_doctorate_students_guided`, `number_books_published`, `common_subject_teacher`, `common_subject`, `expert_member_aicte_committe`, `aicte_grants_assistance`) VALUES ('$faculty_uid','$title','$name','$father_name','$mother_name','$gender','$dob','$religion','$caste','$nationality','$address1','$address2','$state','$district','$city','$postal','$landline','$mobile_number','$fax','$email','$aadhaar_card','$enrollment_id','$aadhar_file','$passport_number','$passport_file','$pan','$pan_file','$physically_handicapped','$duplicate','$left_institute','$relieved_date','$appointment_type','$appointment_ft','$appointment_government','$appointment_university','$designation','$programme','$course','$date_of_joining','$ug','$pg','$diploma','$salary_group','$basic_pay','$da','$hra','$other_allowances','$gross_pay','$pay_scale','$pf_number','$total_gross_salary','$total_tax_paid','$bank_acc_number','$bank_name','$bank_branch','$ifsc_code','$ug_degree','$pg_degree','$doctorate','$qualifications','$specialization','$teaching_experience','$research_experience','$work_experience','$total_experience','$other_experience','$national_journal_publications','$national_conference_publications','$international_journal_publications','$international_conference_publications','$patents','$guided_pg_projects','$guided_doctorate_students','$books_published','$common_subject_teacher','$common_subject','$committe_work_aicte','$aicte_grants');";
        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../faculty_details.php?task=success");
        }
        else {
            echo("Error");
        }
    }


    if(isset($_POST['program_details'])) {
        foreach($_POST['program'] as $key=>$val) {
            $program = $_POST['program'][$key];
            $new_program = $_POST['new_program'][$key];
            $year_started = $_POST['year_started'][$key];
            $sql = "INSERT INTO `program_details`(`program`, `new_program`, `year_started`) VALUES ('$program','$new_program','$year_started');";
            $res = mysqli_query($conn, $sql);
            if($res) {
                header("Location:../program_details.php?task=success");
            }
        }
    }

    
    if(isset($_POST['course_details'])) {
        $affiliating_board = mysqli_real_escape_string($conn, $_POST['affiliating_board']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);
        $full_part_time = mysqli_real_escape_string($conn, $_POST['full_part_time']);
        $shift = mysqli_real_escape_string($conn, $_POST['shift']);
        $accreditation_from = mysqli_real_escape_string($conn, $_POST['accreditation_from']);
        $accreditation_type = mysqli_real_escape_string($conn, $_POST['accreditation_type']);
        $accreditation_date = mysqli_real_escape_string($conn, $_POST['accreditation_date']);
        $accreditation_ref_no = mysqli_real_escape_string($conn, $_POST['accreditation_ref_no']);
        $accreditation_till = mysqli_real_escape_string($conn, $_POST['accreditation_till']);
        $nri = mysqli_real_escape_string($conn, $_POST['nri']);
        $pio = mysqli_real_escape_string($conn, $_POST['pio']);
        $applying_for = mysqli_real_escape_string($conn, $_POST['applying_for']);
        $number_divisions = mysqli_real_escape_string($conn, $_POST['number_divisions']);
        $board_recommendation = mysqli_real_escape_string($conn, $_POST['board_recommendation']);
        $state_recommendation = mysqli_real_escape_string($conn, $_POST['state_recommendation']);
        $annual_fee = mysqli_real_escape_string($conn, $_POST['annual_fee']);
        $faculty_number = mysqli_real_escape_string($conn, $_POST['faculty_number']);
        $mode_conduct = mysqli_real_escape_string($conn, $_POST['mode_conduct']);

        $sql = "INSERT INTO course_details(affiliating_university, department, full_part_time, shift, accreditation_form, accreditation_type, accreditation_letter_date, accreditation_ref_no, accreditation_till, nri, pio, applying_for, number_of_division, university_board_recommendation, state_recommendation, annual_fees_approved, number_of_faculty, mode_of_conduct) VALUES ('$affiliating_board','$department','$full_part_time','$shift','$accreditation_from','$accreditation_type','$accreditation_date','$accreditation_ref_no','$accreditation_till','$nri','$pio','$applying_for','$number_divisions','$board_recommendation','$state_recommendation','$annual_fee','$faculty_number','$mode_conduct');";


        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../course_details.php?task=success");
        }
        else {
            echo "Error";
        }
    }

    if(isset($_POST['vocational_courses'])) {
        $program = mysqli_real_escape_string($conn, $_POST['program']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $level = mysqli_real_escape_string($conn, $_POST['level']);
        $intake_applied = mysqli_real_escape_string($conn, $_POST['intake_applied']);
        $intake_approved = mysqli_real_escape_string($conn, $_POST['intake_approved']);

        $sql = "INSERT INTO vocational_course(`program`, `course`, `level`, `intake_applied`, `approved_applied`) VALUES ('$program','$course','$level','$intake_applied','$intake_approved');";
        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../vocational_courses.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['land_details'])) {
        $land_registered_with = mysqli_real_escape_string($conn, $_POST['land_registered_with']);
        $registration_date = mysqli_real_escape_string($conn, $_POST['registration_date']);
        $hilly_area_land = mysqli_real_escape_string($conn, $_POST['hilly_area_land']);
        $fsi = mysqli_real_escape_string($conn, $_POST['fsi']);
        $land_pieces = mysqli_real_escape_string($conn, $_POST['land_pieces']);
        $land_piece_area1 = mysqli_real_escape_string($conn, $_POST['land_piece_area1']);
        //$land_piece_area2 = mysqli_real_escape_string($conn, $_POST['land_piece_area2']);
        //$land_piece_area3 = mysqli_real_escape_string($conn, $_POST['land_piece_area3']);
        $max_distance = mysqli_real_escape_string($conn, $_POST['max_distance']);
        //$north_south = mysqli_real_escape_string($conn, $_POST['north_south']);
        $latitude_degree = mysqli_real_escape_string($conn, $_POST['latitude_degree']);
        $latitude_minute = mysqli_real_escape_string($conn, $_POST['latitude_minute']);
        $latitude_second = mysqli_real_escape_string($conn, $_POST['latitude_second']);
        //$east_west = mysqli_real_escape_string($conn, $_POST['east_west']);
        $longitude_degree = mysqli_real_escape_string($conn, $_POST['longitude_degree']);
        $longitude_minute = mysqli_real_escape_string($conn, $_POST['longitude_minute']);
        $longitude_second = mysqli_real_escape_string($conn, $_POST['longitude_second']);
        $ownership_details = mysqli_real_escape_string($conn, $_POST['ownership_details']);
        $is_land_mortgaged = mysqli_real_escape_string($conn, $_POST['is_land_mortgaged']);
        $mortgaged_purpose = mysqli_real_escape_string($conn, $_POST['mortgaged_purpose']);
        $institute_use_campus = mysqli_real_escape_string($conn, $_POST['institute_use_campus']);
        $land_use_certificate = mysqli_real_escape_string($conn, $_POST['land_use_certificate']);
        $land_use_certificate_date = mysqli_real_escape_string($conn, $_POST['land_use_certificate_date']);
        $additional_land_merger = mysqli_real_escape_string($conn, $_POST['additional_land_merger']);
        $land_area_merger = mysqli_real_escape_string($conn, $_POST['land_area_merger']);

        $sql = "INSERT INTO `land_details`(`land_registered_with`, `date_of_registration`, `land_in_hilly_area`, `FSI`, `number_of_pieces`, `land_pieces_area1`, `max_distance`, `latitude_degree`, `latitude_minute`, `latitude_second`, `longitude_degree`, `longitude_minute`, `longitude_second`, `ownership_details`, `is_land_mortagaged`, `mortgaged_purpose`, `instittute_going_campus_merger`, `land_certified_issue_by`, `land_certified_issue_date`, `additional_land_for_merger`, `total_land_after_merger`) VALUES ('$land_registered_with','$registration_date','$hilly_area_land','$fsi','$land_pieces','$land_piece_area1','$max_distance','$latitude_degree','$latitude_minute','$longitude_second','$longitude_degree','$longitude_minute','$longitude_second','$ownership_details','$is_land_mortgaged','$mortgaged_purpose','$institute_use_campus','$land_use_certificate','$land_use_certificate_date','$additional_land_merger','$land_area_merger')";

        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../land_details.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['land_details_per_registration'])) {
        $land_registration_number = mysqli_real_escape_string($conn, $_POST['land_registration_number']);
        $registration_date = mysqli_real_escape_string($conn, $_POST['registration_date']);
        $area_land = mysqli_real_escape_string($conn, $_POST['area_land']);
        $khasra_number = mysqli_real_escape_string($conn, $_POST['khasra_number']);
        $plot_number = mysqli_real_escape_string($conn, $_POST['plot_number']);
        $land_situated_at = mysqli_real_escape_string($conn, $_POST['land_situated_at']);
        $registered_name = mysqli_real_escape_string($conn, $_POST['registered_name']);
        $ownership_government_lease = mysqli_real_escape_string($conn, $_POST['ownership_government_lease']);
        $land_use_certificate_issued = mysqli_real_escape_string($conn, $_POST['land_use_certificate_issued']);
        $certificate_issuing_authority = mysqli_real_escape_string($conn, $_POST['certificate_issuing_authority']);
        $is_land_mortgaged = mysqli_real_escape_string($conn, $_POST['is_land_mortgaged']);
        $bank_details = mysqli_real_escape_string($conn, $_POST['bank_details']);
        $land_required = mysqli_real_escape_string($conn, $_POST['land_required']);
        $land_available = mysqli_real_escape_string($conn, $_POST['land_available']);

        $sql = "INSERT INTO `land_details_per_registration`(`land_registered_no`, `date_of_registration`, `area_land`, `khasra_no`, `plot_no`, `land_situated_at`, `land_register_name`, `ownership_govlease`, `land_certified_issue`, `land_certified_issue_authority`, `is_land_mortgaged`, `details_of_bank`, `land_required_aicte_approval`, `land_available_1st_approval`) VALUES ('$land_registration_number','$registration_date','$area_land','$khasra_number','$plot_number','$land_situated_at','$registered_name','$ownership_government_lease','$land_use_certificate_issued','$certificate_issuing_authority','$is_land_mortgaged','$bank_details','$land_required','$land_available');";

        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../land_details_per_registration.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['building_details'])) {
        $building_status = mysqli_real_escape_string($conn, $_POST['building_status']);
        $building_name = mysqli_real_escape_string($conn, $_POST['building_name']);
        $building_number = mysqli_real_escape_string($conn, $_POST['building_number']);
        $sanctioned_builtup_area = mysqli_real_escape_string($conn, $_POST['sanctioned_builtup_area']);
        $constructed_builtup_area = mysqli_real_escape_string($conn, $_POST['constructed_builtup_area']);
        $built_up_area_planned = mysqli_real_escape_string($conn, $_POST['built_up_area_planned']);
        $built_up_area_ready = mysqli_real_escape_string($conn, $_POST['built_up_area_ready']);
        $approved_carpet_area_instructional = mysqli_real_escape_string($conn, $_POST['approved_carpet_area_instructional']);
        $constructed_carpet_area_instructional = mysqli_real_escape_string($conn, $_POST['constructed_carpet_area_instructional']);
        $carpet_area_instructional = mysqli_real_escape_string($conn, $_POST['carpet_area_instructional']);
        $approved_carpet_area_administrative = mysqli_real_escape_string($conn, $_POST['approved_carpet_area_administrative']);
        $constructed_carpet_area_administrative = mysqli_real_escape_string($conn, $_POST['constructed_carpet_area_administrative']);
        $carpet_area_administrative = mysqli_real_escape_string($conn, $_POST['carpet_area_administrative']);
        $approved_carpet_area_amenities = mysqli_real_escape_string($conn, $_POST['approved_carpet_area_amenities']);
        $constructed_carpet_area_amenities = mysqli_real_escape_string($conn, $_POST['constructed_carpet_area_amenities']);
        $carpet_area_amenities = mysqli_real_escape_string($conn, $_POST['carpet_area_amenities']);
        $access_circulation_area = mysqli_real_escape_string($conn, $_POST['access_circulation_area']);
        $total_area_approved = mysqli_real_escape_string($conn, $_POST['total_area_approved']);
        $total_area_constructed = mysqli_real_escape_string($conn, $_POST['total_area_constructed']);
        $activities_conducted_building = mysqli_real_escape_string($conn, $_POST['activities_conducted_building']);
        $activities  = mysqli_real_escape_string($conn, $_POST['activities']);
        $non_aicte_courses = mysqli_real_escape_string($conn, $_POST['non_aicte_courses']);
        $toilet_area = mysqli_real_escape_string($conn, $_POST['toilet_area']);
        $access_circulation_area_norms = mysqli_real_escape_string($conn, $_POST['access_circulation_area_norms']);
        $building_plan_authority = mysqli_real_escape_string($conn, $_POST['building_plan_authority']);
        $building_plan_approval_date = mysqli_real_escape_string($conn, $_POST['building_plan_approval_date']);
        $approval_number = mysqli_real_escape_string($conn, $_POST['approval_number']);

        $sql = "INSERT INTO `building_details`(`building_status`, `building_name`, `building_number`, `sanctioned_built_area`, `constructed_built_area`, `built_up_area_planned`, `built_up_area_ready`, `approved_carpet_area_instructional`, `constructed_carpet_area_instructional`, `carpet_area_instructional`, `approved_carpet_area_administrative`, `constructed_carpet_area_administrative`, `carpet_area_administrative`, `approved_carpet_area_amenities`, `constructed_carpet_area_amenities`, `carpet_area_amenities`, `access_circulation_area`, `total_area_approved`, `total_area_constructed`, `activities_conducted_building`, `activities_other_than_courses`, `non_aicte_approved_courses`, `toilet_area`, `access_circulation_area_norms`, `building_plan_approving_authority`, `approval_date`, `approval_number`) VALUES ('$building_status','$building_name','$building_number','$sanctioned_builtup_area','$constructed_builtup_area','$built_up_area_planned','$built_up_area_ready','$approved_carpet_area_instructional','$constructed_carpet_area_instructional','$carpet_area_instructional','$approved_carpet_area_administrative','$constructed_carpet_area_administrative','$carpet_area_administrative','$approved_carpet_area_amenities','$constructed_carpet_area_amenities','$carpet_area_amenities','$access_circulation_area','$total_area_approved','$total_area_constructed','$activities_conducted_building','$activities','$non_aicte_courses','$toilet_area','$access_circulation_area_norms','$building_plan_authority','$building_plan_approval_date','$approval_number')";
        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../building_details.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['laboratory_details'])) {
        $program = mysqli_real_escape_string($conn, $_POST['program']);
        $level = mysqli_real_escape_string($conn, $_POST['level']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $yearly_experiments_budget = mysqli_real_escape_string($conn, $_POST['yearly_experiments_budget']);
        $yearly_consumables_budget = mysqli_real_escape_string($conn, $_POST['yearly_consumables_budget']);
        $is_research_pg = mysqli_real_escape_string($conn, $_POST['is_research_pg']);
        $name_laboratory = mysqli_real_escape_string($conn, $_POST['name_laboratory']);
        $lab_major_equipments = mysqli_real_escape_string($conn, $_POST['lab_major_equipments']);
        $investment_till_date = mysqli_real_escape_string($conn, $_POST['investment_till_date']);
        $building_name = mysqli_real_escape_string($conn, $_POST['building_name']);
        $building_number = mysqli_real_escape_string($conn, $_POST['building_number']);

        $sql = "INSERT INTO `laboratory_details`(`program`, `level`, `course`, `year_budget_equip`, `year_budget_consumable`, `is_researchlab_pg`, `name_laboratory`, `lab_major_equipment`, `investment_till_date`, `building_name`, `building_number`) VALUES ('$program','$level','$course','$yearly_experiments_budget','$yearly_consumables_budget','$is_research_pg','$name_laboratory','$lab_major_equipments','$investment_till_date','$building_name','$building_number');";

        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../laboratory_details.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['administrative_area'])) {
        $room_type = mysqli_real_escape_string($conn, $_POST['room_type']);
        $room_id_name = mysqli_real_escape_string($conn, $_POST['room_id_name']);
        $room_area = mysqli_real_escape_string($conn, $_POST['room_area']);
        $building_name = mysqli_real_escape_string($conn, $_POST['building_name']);
        $building_number = mysqli_real_escape_string($conn, $_POST['building_number']);
        $readiness_of_flooring = mysqli_real_escape_string($conn, $_POST['readiness_of_flooring']);
        $readiness_of_wall_painting = mysqli_real_escape_string($conn, $_POST['readiness_of_wall_painting']);
        $readiness_of_electricity = mysqli_real_escape_string($conn, $_POST['readiness_of_electricity']);
        $readiness_furniture = mysqli_real_escape_string($conn, $_POST['readiness_furniture']);
        $air_conditioning = mysqli_real_escape_string($conn, $_POST['air_conditioning']);

        $sql = "INSERT INTO `administrative_area`(`room_type`, `room_name`, `area_of_room`, `building_name`, `building_number`, `readiness_of_flooring`, `readiness_of_wall`, `readiness_of_electricity`, `readiness_of_furniture`, `air_conditioning`) VALUES ('$room_type','$room_id_name','$room_area','$building_name','$building_number','$readiness_of_flooring','$readiness_of_wall_painting','$readiness_of_electricity','$readiness_furniture','$air_conditioning');";

        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../administrative_area.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['amenities_area'])) {
        $room_type = mysqli_real_escape_string($conn, $_POST['room_type']);
        $room_id_name = mysqli_real_escape_string($conn, $_POST['room_id_name']);
        $room_area = mysqli_real_escape_string($conn, $_POST['room_area']);
        $building_name = mysqli_real_escape_string($conn, $_POST['building_name']);
        $building_number = mysqli_real_escape_string($conn, $_POST['building_number']);
        $readiness_of_flooring = mysqli_real_escape_string($conn, $_POST['readiness_of_flooring']);
        $readiness_of_wall_painting = mysqli_real_escape_string($conn, $_POST['readiness_of_wall_painting']);
        $readiness_of_electricity = mysqli_real_escape_string($conn, $_POST['readiness_of_electricity']);
        $readiness_furniture = mysqli_real_escape_string($conn, $_POST['readiness_furniture']);
        $air_conditioning = mysqli_real_escape_string($conn, $_POST['air_conditioning']);

        $sql = "INSERT INTO amenities_area(`room_type`, `room_name`, `area_of_room`, `building_name`, `building_number`, `readiness_of_flooring`, `readiness_of_wall`, `readiness_of_electricity`, `readiness_of_furniture`, `air_conditioning`) VALUES ('$room_type','$room_id_name','$room_area','$building_name','$building_number','$readiness_of_flooring','$readiness_of_wall_painting','$readiness_of_electricity','$readiness_furniture','$air_conditioning');";

        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../amenities_area.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['circulation_area'])) {
        $area_type = mysqli_real_escape_string($conn, $_POST['area_type']);
        $avg_carpet_area = mysqli_real_escape_string($conn, $_POST['avg_carpet_area']);
        $flooring = mysqli_real_escape_string($conn, $_POST['flooring']);
        $painting_done = mysqli_real_escape_string($conn, $_POST['painting_done']);
        $sanitary_fittings = mysqli_real_escape_string($conn, $_POST['sanitary_fittings']);
        $electrification_lightning = mysqli_real_escape_string($conn, $_POST['electrification_lightning']);
        $furniture = mysqli_real_escape_string($conn, $_POST['furniture']);
        $building_name =  mysqli_real_escape_string($conn, $_POST['building_name']);
        $building_number = mysqli_real_escape_string($conn, $_POST['building_number']);

        $sql = "INSERT INTO `circulation_area`(`area_type`, `average_carpet_area`, `flooring`, `painting_done`, `sanitary_fitting_done`, `electrification_lightning`, `furniture`, `building_name`, `building_number`) VALUES ('$area_type','$avg_carpet_area','$flooring','$painting_done','$sanitary_fittings','$electrification_lightning','$furniture','$building_name','$building_number');";
        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../circulation_area.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['instructional_area'])) {
        $program = mysqli_real_escape_string($conn, $_POST['program']);
        $level = mysqli_real_escape_string($conn, $_POST['level']);
        $room_type = mysqli_real_escape_string($conn, $_POST['room_type']);
        $room_id_name = mysqli_real_escape_string($conn, $_POST['room_id_name']);
        $area_room = mysqli_real_escape_string($conn, $_POST['area_room']);
        $building_name = mysqli_real_escape_string($conn, $_POST['building_name']);
        $building_number = mysqli_real_escape_string($conn, $_POST['building_number']);
        $readiness_flooring = mysqli_real_escape_string($conn, $_POST['readiness_flooring']);
        $readiness_wall_painting = mysqli_real_escape_string($conn, $_POST['readiness_wall_painting']);
        $readiness_lighting = mysqli_real_escape_string($conn, $_POST['readiness_lighting']);
        $readiness_furniture = mysqli_real_escape_string($conn, $_POST['readiness_furniture']);
        $air_conditioning = mysqli_real_escape_string($conn, $_POST['air_conditioning']);

        $sql = "INSERT INTO `instructional_area`(`program`, `level`, `room_type`, `room_name`, `area_of_room`, `building_name`, `building_no`, `readiness_of_flooring`, `readiness_of_wall`, `readiness_of_electrification`, `readiness_of_furniture`, `air_conditioning`) VALUES ('$program','$level','$room_type','$room_id_name','$area_room','$building_name','$building_number','$readiness_flooring','$readiness_wall_painting','$readiness_lighting','$readiness_furniture','$air_conditioning');";
        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../instructional_area.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['computational_facility'])) {
        $number_pc_students = mysqli_real_escape_string($conn, $_POST['number_pc_students']);
        $number_pc_library = mysqli_real_escape_string($conn, $_POST['number_pc_library']);
        $number_pc_administrative = mysqli_real_escape_string($conn, $_POST['number_pc_administrative']);
        $number_pc_faculty = mysqli_real_escape_string($conn, $_POST['number_pc_faculty']);
        $number_pc_language = mysqli_real_escape_string($conn, $_POST['number_pc_language']);
        $internet_bandwidth = mysqli_real_escape_string($conn, $_POST['internet_bandwidth']);
        $internet_contention_ratio = mysqli_real_escape_string($conn, $_POST['internet_contention_ratio']);
        $number_printers_students = mysqli_real_escape_string($conn, $_POSt['number_printers_students']);
        $number_system_software = mysqli_real_escape_string($conn,$_POST['number_system_software']);
        $number_application_software = mysqli_real_escape_string($conn, $_POST['number_application_software']);

        $sql = "INSERT INTO `computational_faculty`(`pc_exclusively_student`, `pc_available_library`, `pc_available_administrativeoffice`, `pc_available_faculty`, `pc_for_language_lab`, `internet_bandwidth`, `internett_contention_ratio`, `printer_available_student`, `no_of_legal_system`, `no_of_legal_application`) VALUES ('$number_pc_students','$number_pc_library','$number_pc_administrative','$number_pc_faculty','$number_pc_language','$internet_bandwidth','$internet_contention_ratio','$number_printers_students','$number_system_software','$number_application_software');";
        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../computationalS_facility.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['institute_digital_payments'])) {
        $quarter = mysqli_real_escape_string($conn, $_POST['quarter']);
        $non_digital_transactions = mysqli_real_escape_string($conn, $_POST['non_digital_transactions']);
        $digital_transactions = mysqli_real_escape_string($conn, $_POST['digital_transactions']);
        $digital_transactions_touchpoint = mysqli_real_escape_string($conn, $_POST['digital_transactions_touchpoint']);
        $bhim_integration = mysqli_real_escape_string($conn, $_POST['bhim_integration']);
        $bhim_qr_touchpoints = mysqli_real_escape_string($conn, $_POST['bhim_qr_touchpoints']);

        $sql = "INSERT INTO `digital_payments`(`quarter`, `non_digital_transactions`, `digital_transactions`, `touchpoints_digital_transactions`, `has_bhim_integration`, `bhim_enabled_touchpoints`) VALUES ('$quarter','$non_digital_transactions','$digital_transactions','$digital_transactions_touchpoint','$bhim_integration','$bhim_qr_touchpoints')";
        $res = mysqli_query($conn, $sql);
        if(res) {
            header("Location:../institute_digital_payments.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['institute_grievances_processed'])) {
        foreach($_POST['month'] as $key=>$val) {
            $month = $_POST['month'][$key];
            $total_grievances_received = $_POST['total_grievances_received'][$key];
            $total_grievances_disposed = $_POST['total_grievances_disposed'][$key];
            $total_grievances_pending = $_POST['total_grievances_pending'][$key];

            $sql = "INSERT INTO `grievances_processed`(`month`, `grievances_received`, `grievances_disposed`, `grievances_pending`) VALUES ('$month','$total_grievances_received','$total_grievances_disposed','$total_grievances_pending');";
            $res = mysqli_query($conn, $sql);
            if($res) {
                header("Location:../institute_grievances_processed.php?task=success");
            }
            else {
                echo("Error");
            }
        }
    }
    
    if(isset($_POST['national_level_programs'])) {
        foreach($_POST['national_event_name'] as $key=>$val) {
            $national_event_name = $_POST['national_event_name'][$key];
            $date_event = $_POST['date_event'][$key];
            $number_faculty = $_POST['number_faculty'][$key];
            $number_student = $_POST['number_student'][$key];

            $sql = "INSERT INTO `national_level_program`(`national_event_name`, `date`, `faculty_involved`, `students_involved`) VALUES ('$national_event_name','$date_event','$number_faculty','$number_student');";
            $res = mysqli_query($conn, $sql);
            if($res) {
                header("Location:../national_level_programs.php?task=success");
            }
            else {
                echo("Error");
            }
        }
    }

    if(isset($_POST['industry_mou_information'])) {
        foreach($_POST['name_organisation'] as $key=>$val) {
            $name_organisation = $_POST['name_organisation'][$key];
            $contact = $_POST['contact'][$key];
            $email = $_POST['email'][$key];
            $sql = "INSERT INTO `industry_mou_information`(`organization_name`, `contact`, `email`) VALUES ('$name_organisation','$contact','$email')";
            $res = mysqli_query($conn, $sql);
            if($res) {
                header("Location:../industry_mou_information.php?task=success");
            }
            else {
                echo("Error");
            }
        }
    }

    if(isset($_POST['yoga_day_celebration'])) {
        $insertValues = '';
        $institution_name = mysqli_real_escape_string($conn, $_POST['institution_name']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $district = mysqli_real_escape_string($conn, $_POST['district']);
        $institution_address = mysqli_real_escape_string($conn, $_POST['institution_address']);
        $activities = mysqli_real_escape_string($conn, $_POST['activities']);
        $number_students = mysqli_real_escape_string($conn, $_POST['number_students']);
        $number_faculty = mysqli_real_escape_string($conn, $_POST['number_faculty']);

        $sql = "INSERT INTO `yoga_day_celebration`(`institute_name`, `institute_address`, `institute_state`, `institute_city`, `list_activities_yoga_day`, `students_participated`, `faculty_participated`, `photo`, `date`) VALUES ('$institution_name','$institution_address','$state','$district','$activities','$number_students','$number_faculty','$insertValues', NOW())";
        $res = mysqli_query($conn, $sql);
        if(!$res) {
            echo("Error");
        }
        $targetdir = "uploads/yoga_day_celebrations/";
        $allowTypes = array('jpg','jpeg','png');
        $statusMsg = $errorMsg = $errorUpload = $errorUploadType = '';
        $insertValuesSQL = [];
        if(!empty(array_filter($_FILES['photos']['name']))) {
            foreach($_FILES['photos']['name'] as $key=>$val) {
                //File Upload Path
                $fileName = basename($_FILES['photos']['name'][$key]);
                $targetFilePath = $targetdir.$fileName;
                //Check whether file type is valid or not
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                if(in_array($fileType, $allowTypes)) {
                    // Upload file to server
                    if(move_uploaded_file($_FILES["photos"]["tmp_name"][$key], $targetFilePath)){
                        // Image db insert sql
                        $insertValuesSQL[]= $fileName;
                    }
                    else{
                        $errorUpload .= $_FILES['photos']['name'][$key].', ';
                    }
                }
                else{
                    $errorUploadType .= $_FILES['photos']['name'][$key].', ';   
                }
            }

            if(count($insertValuesSQL)) {
                $insertValues = implode(',',$insertValuesSQL);
                $sql_photo = "UPDATE `yoga_day_celebration` SET photo = '$insertValues' WHERE institute_name = '$institution_name';";
                echo($sql_photo);
                $res  = mysqli_query($conn, $sql_photo);
                if($res) {
                    $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                    $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                    $errorMsg = !empty($errorUpload)?'->'.$errorUpload.''.$errorUploadType:'->`'.$errorUploadType;
                    $statusMsg = "Files are uploaded successfully.".$errorMsg;
                    header("Location:../yoga_day_celebration.php?task=success");
                }
                else {
                    $statusMsg = "Sorry, there was an error uploading your file.";
                }
            }
        }
        else {
            $statusMsg = 'Please select a file to upload.';
        }
        echo('<script>alert("'.$statusMsg.'")</script>');
    }

    if(isset($_POST['aicte_survey'])) {
        $whether_industry_interact = mysqli_real_escape_string($conn, $_POST['whether_industry_interact']);
        $number_companies_interact = mysqli_real_escape_string($conn, $_POST['number_companies_interact']);
        $student_industry_internship = mysqli_real_escape_string($conn, $_POST['student_industry_internship']);
        $percentage_student_internship = mysqli_real_escape_string($conn, $_POST['percentage_student_internship']);
        $number_student_internship = mysqli_real_escape_string($conn, $_POST['number_student_internship']);
        $industry_spend_time = mysqli_real_escape_string($conn, $_POST['industry_spend_time']);
        $number_industry_experts = mysqli_real_escape_string($conn, $_POST['number_industry_experts']);
        $are_training_organised = mysqli_real_escape_string($conn, $_POST['are_training_organised']);
        $number_training_programmes = mysqli_real_escape_string($conn, $_POST['number_training_programmes']);
        $are_faculty_board_member = mysqli_real_escape_string($conn, $_POST['are_faculty_board_member']);
        $number_faculty_board_member = mysqli_real_escape_string($conn, $_POST['number_faculty_board_member']);
        $has_patent_filed = mysqli_real_escape_string($conn, $_POST['has_patent_filed']);
        $number_patent_filed = mysqli_real_escape_string($conn, $_POST['number_patent_filed']);
        $has_industry_funding_department = mysqli_real_escape_string($conn, $_POST['has_industry_funding_department']);
        $number_funded_department = mysqli_real_escape_string($conn, $_POST['number_funded_department']);
        $industry_live_projects = mysqli_real_escape_string($conn, $_POST['industry_live_projects']);
        $number_live_projects = mysqli_real_escape_string($conn, $_POST['number_live_projects']);
        $industry_consultancy_projects = mysqli_real_escape_string($conn, $_POST['industry_consultancy_projects']);
        $number_consultancy_projects = mysqli_real_escape_string($conn, $_POST['number_consultancy_projects']);
        $worth_consultancy_projects = mysqli_real_escape_string($conn, $_POST['worth_consultancy_projects']);
        $do_companies_placements = mysqli_real_escape_string($conn, $_POST['do_companies_placements']);
        $number_company_placements = mysqli_real_escape_string($conn, $_POST['number_company_placements']);
        $curriculum_revised = mysqli_real_escape_string($conn, $_POST['curriculum_revised']);
        $institution_incubation_startups = mysqli_real_escape_string($conn, $_POST['institution_incubation_startups']);

        $sql = "INSERT INTO `aicte_cii_survey`(`q1`, `q1a`, `q2`, `q2a`, `q2b`, `q3`, `q3a`, `q4`, `q4a`, `q5`, `q5a`, `q6`, `q6a`, `q7`, `q7a`, `q8`, `q8a`, `q9`, `q9a`, `q9b`, `q10`, `q10a`, `q11`, `q12`) VALUES ('$whether_industry_interact','$number_companies_interact','$student_industry_internship','$percentage_student_internship','$number_student_internship','$industry_spend_time','$number_industry_experts','$are_training_organised','$number_training_programmes','$are_faculty_board_member','$number_faculty_board_member','$has_patent_filed','$number_patent_filed','$has_industry_funding_department','$number_funded_department','$industry_live_projects','$number_live_projects','$industry_consultancy_projects','$number_consultancy_projects','$worth_consultancy_projects','$do_companies_placements','$number_company_placements','$curriculum_revised','$institution_incubation_startups');";

        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../aicte_survey.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['student_enrollment_details'])) {
        $programme_name = mysqli_real_escape_string($conn, $_POST['programme_name']);
        $university_board = mysqli_real_escape_string($conn, $_POST['university_board']);
        $shift = mysqli_real_escape_string($conn, $_POST['shift']);
        $general_male = mysqli_real_escape_string($conn, $_POST['general_male']);
        $general_female = mysqli_real_escape_string($conn, $_POST['general_female']);
        $obc_male = mysqli_real_escape_string($conn, $_POST['obc_male']);
        $obc_female = mysqli_real_escape_string($conn, $_POST['obc_female']);
        $sc_male = mysqli_real_escape_string($conn, $_POST['sc_male']);
        $sc_female = mysqli_real_escape_string($conn, $_POST['sc_female']);
        $st_male = mysqli_real_escape_string($conn, $_POST['st_male']);
        $st_female = mysqli_real_escape_string($conn, $_POST['st_female']);
        $handicapped_male = mysqli_real_escape_string($conn, $_POST['handicapped_male']);
        $handicapped_female = mysqli_real_escape_string($conn, $_POST['handicapped_female']);
        $minority_male = mysqli_real_escape_string($conn, $_POST['minority_male']);
        $minority_female = mysqli_real_escape_string($conn, $_POST['minority_female']);
        $tfw_male = mysqli_real_escape_string($conn, $_POST['tfw_male']);
        $tfw_female = mysqli_real_escape_string($conn, $_POST['tfw_female']);
        $nri_male = mysqli_real_escape_string($conn, $_POST['nri_male']);
        $nri_female = mysqli_real_escape_string($conn, $_POST['nri_female']);
        $pio_male = mysqli_real_escape_string($conn, $_POST['pio_male']);
        $pio_female = mysqli_real_escape_string($conn, $_POST['pio_female']);

        $sql = "INSERT INTO `student_enrolment_details`(`programme`, `affiliating_university`, `shift`, `general_male_excluding_minority`, `general_female_excluding_minority`, `obc_male`, `obc_female`, `sc_male`, `sc_female`, `st_male`, `st_female`, `physically_handicapped_male`, `physically_handicapped_female`, `minority_male`, `minority_female`, `tfw_male`, `tfw_female`, `nri_male`, `nri_female`, `pio_male`, `pio_female`) VALUES ('$programme_name','$university_board','$shift','$general_male','$general_female','$obc_male','$obc_female','$sc_male','$sc_female','$st_male','$st_female','$handicapped_male','$handicapped_female','$minority_male','$minority_female','$tfw_male','$tfw_female','$nri_male','$nri_female','$pio_male','$pio_female');";

        $res = mysqli_query($conn, $sql);
        if($res) {
            header("Location:../student_enrollment_details.php?task=success");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['pg_scholarship'])) {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $mothers_name = mysqli_real_escape_string($conn, $_POST['mothers_name']);
        $fathers_name = mysqli_real_escape_string($conn, $_POST['fathers_name']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $address_line1 = mysqli_real_escape_string($conn, $_POST['address_line1']);
        $address_line2 = mysqli_real_escape_string($conn, $_POST['address_line2']);
        $address_line3 = mysqli_real_escape_string($conn, $_POST['address_line3']);
        $home_state = mysqli_real_escape_string($conn, $_POST['home_state']);
        $home_district = mysqli_real_escape_string($conn, $_POST['home_district']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
        $resident_phone = mysqli_real_escape_string($conn, $_POST['resident_phone']);
        $mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $alternate_email = mysqli_real_escape_string($conn, $_POST['alternate_email']);
        $religion = mysqli_real_escape_string($conn, $_POST['religion']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $reserve_category = mysqli_real_escape_string($conn, $_POST['reserve_category']);
        $is_physically_handicapped = mysqli_real_escape_string($conn, $_POST['is_physically_handicapped']);
        $is_economically_backward = mysqli_real_escape_string($conn, $_POST['is_economically_backward']);
        $have_aadhar_card = mysqli_real_escape_string($conn, $_POST['have_aadhar_card']);
        $aadhar_number = mysqli_real_escape_string($conn, $_POST['aadhar_number']);
        $enrollment_id = mysqli_real_escape_string($conn, $_POST['enrollment_id']);
        $have_npr_card = mysqli_real_escape_string($conn, $_POST['have_npr_card']);
        $npr_number = mysqli_real_escape_string($conn, $_POST['npr_number']);
        $student_status = mysqli_real_escape_string($conn, $_POST['student_status']);
        $level = mysqli_real_escape_string($conn, $_POST['level']);
        $program = mysqli_real_escape_string($conn, $_POST['program']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $course_id = mysqli_real_escape_string($conn, $_POST['course_id']);
        $shift = mysqli_real_escape_string($conn, $_POST['shift']);
        $full_part_time = mysqli_real_escape_string($conn, $_POST['full_part_time']);
        $admission_type = mysqli_real_escape_string($conn, $_POST['admission_type']);
        $date_admission = mysqli_real_escape_string($conn, $_POST['date_admission']);
        $academic_year = mysqli_real_escape_string($conn, $_POST['academic_year']);
        $record_created_on = mysqli_real_escape_string($conn, $_POST['record_created_on']);
        $admitted_tfw = mysqli_real_escape_string($conn, $_POST['admitted_tfw']);
        $left_course = mysqli_real_escape_string($conn, $_POST['left_course']);
        $course_leaving_date = mysqli_real_escape_string($conn, $_POST['course_leaving_date']);
        $roll_number = mysqli_real_escape_string($conn, $_POST['roll_number']);
        $percentage_marks1 = mysqli_real_escape_string($conn, $_POST['percentage_marks1']);
        $percentage_marks2 = mysqli_real_escape_string($conn, $_POST['percentage_marks2']);
        $percentage_marks3 = mysqli_real_escape_string($conn, $_POST['percentage_marks3']);
        $percentage_marks4 = mysqli_real_escape_string($conn, $_POST['percentage_marks4']);
        $percentage_marks5 = mysqli_real_escape_string($conn, $_POST['percentage_marks5']);
        $exam_type = mysqli_real_escape_string($conn, $_POST['exam_type']);
        $gate_gpat_exam_number = mysqli_real_escape_string($conn, $_POST['gate_gpat_exam_number']);
        $gate_gpat_score = mysqli_real_escape_string($conn, $_POST['gate_gpat_score']);
        $gate_gpat_valid_from = mysqli_real_escape_string($conn, $_POST['gate_gpat_valid_from']);
        $gate_gpat_valid_to = mysqli_real_escape_string($conn, $_POST['gate_gpat_valid_to']);
        $percentage_gpat_marks = mysqli_real_escape_string($conn, $_POST['percentage_gpat_marks']);
        $gate_examination_paper = mysqli_real_escape_string($conn, $_POST['gate_examination_paper']);
        $marks_100_gate = mysqli_real_escape_string($conn, $_POST['marks_100_gate']);
        $qualifying_marks_gate = mysqli_real_escape_string($conn, $_POST['qualifying_marks_gate']);
        $institute_fee_paid = mysqli_real_escape_string($conn, $_POST['institute_fee_paid']);
        $home_hostel = mysqli_real_escape_string($conn, $_POST['home_hostel']);
        $hostel_month_fees = mysqli_real_escape_string($conn, $_POST['hostel_month_fees']);
        $claimed_upto_month = mysqli_real_escape_string($conn, $_POST['claimed_upto_month']);
        $claimed_upto_year = mysqli_real_escape_string($conn, $_POST['claimed_upto_year']);
        $paid_upto_month = mysqli_real_escape_string($conn, $_POST['paid_upto_month']);
        $paid_upto_year = mysqli_real_escape_string($conn, $_POST['paid_upto_year']);

        $sql = "INSERT INTO `pg_scholarship`(`title`, `first_name`, `middle_name`, `last_name`, `mothers_name`, `fathers_name`, `dob`, `gender`, `address_line1`, `address_line2`, `address_line3`, `home_state`, `home_district`, `country`, `pincode`, `resident_phone`, `mobile_number`, `email`, `alternate_email`, `religion`, `caste`, `reserve_category`, `physically_handicapped`, `economically_backward`, `have_aadhar_card`, `aadhar_number`, `enrollment_id`, `have_npr_card`, `npr_number`, `student_status`, `level`, `program`, `course`, `course_id`, `shift`, `full_part_time`, `admission_type`, `date_admission`, `academic_year`, `record_created_on`, `admitted_tfw`, `left_course`, `course_leaving_date`, `roll_number`, `marks1`, `marks2`, `marks3`, `marks4`, `marks5`, `exam_type`, `gate_gpat_exam_number`, `gate_gpat_score`, `gate_gpat_valid_from`, `gate_gpat_valid_to`, `percentage_marks_gpat`, `gate_examination_paper`, `marks_gate_100`, `qualifying_marks_gate`, `institute_fees_paid`, `home_hostel`, `hostel_fee_month`, `claimed_upto_month`, `claimed_upto_year`, `paid_upto_month`, `paid_upto_year`) VALUES ('$title','$first_name','$middle_name','$last_name','$mothers_name','$fathers_name','$dob','$gender','$address_line1','$address_line2','$address_line3','$home_state','$home_district','$country','$pincode','$resident_phone','$mobile_number','$email','$alternate_email','$religion','$category','$reserve_category','$is_physically_handicapped','$is_economically_backward','$have_aadhar_card','$aadhar_number','$enrollment_id','$have_npr_card','$npr_number','$student_status','$level','$program','$course','$course_id','$shift','$full_part_time','$admission_type','$date_admission','$academic_year','$record_created_on','$admitted_tfw','$left_course','$course_leaving_date','$roll_number','$percentage_marks1','$percentage_marks2','$percentage_marks3','$percentage_marks4','$percentage_marks5','$exam_type','$gate_gpat_exam_number','$gate_gpat_score','$gate_gpat_valid_from','$gate_gpat_valid_to','$percentage_gpat_marks','$gate_examination_paper','$marks_100_gate','$qualifying_marks_gate','$institute_fee_paid','$home_hostel','$hostel_month_fees','$claimed_upto_month','$claimed_upto_year','$paid_upto_month','$paid_upto_year');";

        $res  =  mysqli_query($conn, $sql);
        if($res) {
            header("Location:../pg_scholarship.php?task=suucess");
        }
        else {
            echo("Error");
        }
    }

    if(isset($_POST['download_excel_faculty_details'])) {
        // We'll be outputting an Excel Sheet
        header('Content-type: application/vnd.ms-excel');

        // It will be called Faculty_Details.xls
        header('Content-Disposition: attachment; filename="Faculty_Details.xls"');

        // The Excel source is in faculty_details.xls
        readfile('uploads/excel_sheets/faculty_details.xls');
    }

    if(isset($_POST['download_excel_course_details'])) {
        // We'll be outputting an Excel Sheet
        header('Content-type: application/vnd.ms-excel');

        // It will be called Course_Details.xls
        header('Content-Disposition: attachment; filename="Course_Details.xls"');

        // The Excel source is in course_details.xls
        readfile('uploads/excel_sheets/course_details.xls');
    }

    if(isset($_POST['download_excel_vocational_course_details'])) {
        // We'll be outputting an Excel Sheet
        header('Content-type: application/vnd.ms-excel');

        // It will be called Course_Details.xls
        header('Content-Disposition: attachment; filename="Vocational_Course_Details.xls"');

        // The Excel source is in vocational_course_details.xls
        readfile('uploads/excel_sheets/vocational_course_details.xls');
    }

    if(isset($_POST['download_excel_land_details'])) {
        // We'll be outputting an Excel Sheet
        header('Content-type: application/vnd.ms-excel');

        // It will be called Land_Details.xls
        header('Content-Disposition: attachment; filename="Land_Details.xls"');

        // The Excel source is in land_details.xls
        readfile('uploads/excel_sheets/land_details.xls');
    }

    if(isset($_POST['download_excel_laboratory_details'])) {
        // We'll be outputting an Excel Sheet
        header('Content-type: application/vnd.ms-excel');

        // It will be called Laboratory_Details.xls
        header('Content-Disposition: attachment; filename="Laboratory_Details.xls"');

        // The Excel source is in laboratory_details.xls
        readfile('uploads/excel_sheets/laboratory_details.xls');
    }

    if(isset($_POST['download_excel_instructional_details'])) {
        // We'll be outputting an Excel Sheet
        header('Content-type: application/vnd.ms-excel');

        // It will be called Instructional_Area_Details.xls
        header('Content-Disposition: attachment; filename="Instructional_Area_Details.xls"');

        // The Excel source is in instructional_area_details.xls
        readfile('uploads/excel_sheets/instructional_area_details.xls');
    }

    if(isset($_POST['download_excel_student_enrollment_details'])) {
        // We'll be outputting an Excel Sheet
        header('Content-type: application/vnd.ms-excel');

        // It will be called Student_Enrollment_Details.xls
        header('Content-Disposition: attachment; filename="Student_Enrollment_Details.xls"');

        // The Excel source is in student_enrollment_details.xls
        readfile('uploads/excel_sheets/student_enrollment_details.xls');
    }

    if(isset($_POST['download_excel_pg_scholarship_details'])) {
        // We'll be outputting an Excel Sheet
        header('Content-type: application/vnd.ms-excel');

        // It will be called PG_Scholarship_Details.xls
        header('Content-Disposition: attachment; filename="PG_Scholarship_Details.xls"');

        // The Excel source is in pg_scholarship_details.xls
        readfile('uploads/excel_sheets/pg_scholarship_details.xls');
    }

    if(isset($_POST['download_excel_building_details'])) {
        // We'll be outputting an Excel Sheet
        header('Content-type: application/vnd.ms-excel');

        // It will be called Building_Details.xls
        header('Content-Disposition: attachment; filename="Building_Details.xls"');

        // The Excel source is in building_details.xls
        readfile('uploads/excel_sheets/building_details.xls');
    }
?>