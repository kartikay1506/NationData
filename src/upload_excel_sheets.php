<?php
    include 'database.php';
    include 'PHPExcel/IOFactory.php';
    if(isset($_POST['submit'])) {
        $targetdir = "./";
        $allowTypes = array('xlsx','xls','csv');
        $file = $_FILES['sheet']['name'];
        $targetFilePath = $targetdir.$file;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["sheet"]["tmp_name"], $targetFilePath)) {
                // Upload Data from Excel to the Database
                    $objPHPExcel = PHPExcel_IOFactory::load($_FILES['sheet']['name']);
                    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                        $highestRow = $worksheet->getHighestRow();
                        for ($row=2; $row<=$highestRow; $row++) {
                            $faculty_uid = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
                            $title = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
                            $fname = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
                            $mname = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
                            $lname = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(4,$row)->getValue());
                            $father_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(5,$row)->getValue());
                            $mother_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(6,$row)->getValue());
                            $dob = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(7,$row)->getValue());
                            $gender = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(8,$row)->getValue());
                            $religion = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(9,$row)->getValue());
                            $caste = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(10,$row)->getValue());
                            $nationality = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(11,$row)->getValue());
                            $address1 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(12,$row)->getValue());
                            $address2 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(13,$row)->getValue());
                            $state = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(14,$row)->getValue());
                            $district = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(15,$row)->getValue());
                            $city = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(16,$row)->getValue());
                            $postal = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(17,$row)->getValue());
                            $std = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(18,$row)->getValue());
                            $landline_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(19,$row)->getValue());
                            $mobile_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(20,$row)->getValue());
                            $fax = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(21,$row)->getValue());
                            $email = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(22,$row)->getValue());
                            $aadhaar_card = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(23,$row)->getValue());
                            $enrollment_id = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(24,$row)->getValue());
                            $passport_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(25,$row)->getValue());
                            $pan = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(26,$row)->getValue());
                            $physically_handicapped = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(27,$row)->getValue());                              
                            $duplicate = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(28,$row)->getValue());
                            $left_institute = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(29,$row)->getValue());
                            $relieved_date = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(30,$row)->getValue());
                            $appointment_type = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(31,$row)->getValue());
                            $appointment_ft = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(32,$row)->getValue());
                            $appointment_government = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(33,$row)->getValue());
                            $appointment_university = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(34,$row)->getValue());
                            $appointment_government = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(35,$row)->getValue());
                            $designation = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(36,$row)->getValue());
                            $programme = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(37,$row)->getValue());
                            $course = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(38,$row)->getValue());
                            $date_of_joining = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(39,$row)->getValue());
                            $ug = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(40,$row)->getValue());
                            $pg = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(41,$row)->getValue());
                            $diploma = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(42,$row)->getValue());
                            $salary_group = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(43,$row)->getValue());
                            $basic_pay = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(44,$row)->getValue());
                            $da = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(45,$row)->getValue());
                            $hra = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(46,$row)->getValue());
                            $other_allowances = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(47,$row)->getValue());
                            $gross_pay = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(48,$row)->getValue());
                            $pay_scale = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(49,$row)->getValue());
                            $pf_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(50,$row)->getValue());
                            $total_gross_salary = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(51,$row)->getValue());
                            $total_tax_paid = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(52,$row)->getValue());         
                            $bank_acc_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(53,$row)->getValue());
                            $bank_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(54,$row)->getValue());
                            $bank_branch = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(55,$row)->getValue());
                            $ifsc_code = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(56,$row)->getValue());
                            $ug_degree = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(57,$row)->getValue());
                            $pg_degree = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(58,$row)->getValue());
                            $doctorate = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(59,$row)->getValue());
                            $qualifications = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(60,$row)->getValue());
                            $specialization = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(61,$row)->getValue());
                            $teaching_experience = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(62,$row)->getValue());
                            $research_experience = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(63,$row)->getValue());
                            $work_experience = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(64,$row)->getValue());
                            $total_experience = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(65,$row)->getValue());
                            $other_experience = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(66,$row)->getValue());
                            $national_journal_publications = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(67,$row)->getValue());
                            $national_conference_publications = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(68,$row)->getValue());
                            $international_journal_publications = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(69,$row)->getValue());
                            $international_conference_publications = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(70,$row)->getValue());
                            $patents = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(71,$row)->getValue());
                            $guided_pg_projects = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(72,$row)->getValue());
                            $guided_doctorate_students = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(73,$row)->getValue());
                            $books_published = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(74,$row)->getValue());
                            $common_subject_teacher = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(75,$row)->getValue());
                            $common_subject = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(76,$row)->getValue());
                            $committe_work_aicte = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(77,$row)->getValue());
                            $aicte_grants = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(78,$row)->getValue());
                            
                            $sql = "INSERT INTO `faculty_details`(`faculty_unique_id`, `title`, `name`, `father_name`, `mother_name`, `gender`, `date_of_birth`, `religion`, `caste`, `nationality`, `address_line1`, `address_line2`, `state`, `district`, `city_village`, `postal_code`, `landline_number`, `mobile_number`, `fax`, `email`, `aadhar_card_number`, `enrollment_id`, `passport_number`, `pan_number`, `is_physically_handicapped`, `is_duplicate`, `left_institute`, `relieved_date`, `appointment_type`,`appointment_ft_pt`,  `appointment_approved_government`, `appointment_approved_university`, `exact_designation`, `programme`, `course`, `date_of_joining`, `ug`, `pg`, `diploma`, `salary_group`, `basic_pay`, `da`, `hra`, `other_allowance`, `gross_pay_per_month`, `pay_scale`, `pf_number`, `total_gross_salary_last_year`, `total_tax_paid_last_year`, `bank_account_number`, `bank_name`, `bank_branch_name`, `ifsc_code`, `ug_degree`, `pg_degree`, `doctorate_degree`, `other_qualifications`, `areas_specialization`, `teaching_experience_years`, `research_experience_years`, `work_experience_years`, `total_experience_years`, `other_experience_years`, `number_publications_national_journal`, `number_publications_national_conference`, `number_publications_international_journal`, `number_publications_international_conference`, `patents`, `number_pg_projects_guided`, `number_doctorate_students_guided`, `number_books_published`, `common_subject_teacher`, `common_subject`, `expert_member_aicte_committe`, `aicte_grants_assistance`) VALUES ('$faculty_uid','$title','$name','$father_name','$mother_name','$gender','$dob','$religion','$caste','$nationality','$address1','$address2','$state','$district','$city','$postal','$landline','$mobile_number','$fax','$email','$aadhaar_card','$enrollment_id','$passport_number','$pan','$physically_handicapped','$duplicate','$left_institute','$relieved_date','$appointment_type','$appointment_ft','$appointment_government','$appointment_university','$designation','$programme','$course','$date_of_joining','$ug','$pg','$diploma','$salary_group','$basic_pay','$da','$hra','$other_allowances','$gross_pay','$pay_scale','$pf_number','$total_gross_salary','$total_tax_paid','$bank_acc_number','$bank_name','$bank_branch','$ifsc_code','$ug_degree','$pg_degree','$doctorate','$qualifications','$specialization','$teaching_experience','$research_experience','$work_experience','$total_experience','$other_experience','$national_journal_publications','$national_conference_publications','$international_journal_publications','$international_conference_publications','$patents','$guided_pg_projects','$guided_doctorate_students','$books_published','$common_subject_teacher','$common_subject','$committe_work_aicte','$aicte_grants');";
                            $res = mysqli_query($conn, $sql);
                                if ($res) {
                                    unlink($file);
                                    header("Location:../faculty_details.php?task=success");
                                } 
                                else {
                                    echo "Error";
                                        }
                                    }
                                }
                            }
            } 

    }

    if(isset($_POST['submit_course_details'])) {
        $targetdir = "./";
        $allowTypes = array('xlsx','xls','csv');
        $file = $_FILES['sheet']['name'];
        $targetFilePath = $targetdir.$file;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["sheet"]["tmp_name"], $targetFilePath)) {
                    // Upload Data from Excel to the Database
                    $objPHPExcel = PHPExcel_IOFactory::load($_FILES['sheet']['name']);
                    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                        $highestRow = $worksheet->getHighestRow();
                        for ($row=2; $row<=$highestRow; $row++) {
                            $affiliating_board = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                            $department = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                            $full_part_time = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                            $shift = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                            $accreditation_from = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                            $accreditation_type = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                            $accreditation_date = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                            $accreditation_ref_no = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                            $accreditation_till = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                            $nri = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                            $pio = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
                            $applying_for = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
                            $number_divisions = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
                            $board_recommendation = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
                            $state_recommendation = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(14, $row)->getValue());
                            $annual_fee = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
                            $faculty_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(16, $row)->getValue());
                            $mode_conduct = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(17, $row)->getValue());
            
                            $sql = "INSERT INTO course_details(affiliating_university, department, full_part_time, shift, accreditation_form, accreditation_type, accreditation_letter_date, accreditation_ref_no, accreditation_till, nri, pio, applying_for, number_of_division, university_board_recommendation, state_recommendation, annual_fees_approved, number_of_faculty, mode_of_conduct) VALUES ('$affiliating_board','$department','$full_part_time','$shift','$accreditation_from','$accreditation_type','$accreditation_date','$accreditation_ref_no','$accreditation_till','$nri','$pio','$applying_for','$number_divisions','$board_recommendation','$state_recommendation','$annual_fee','$faculty_number','$mode_conduct');";
                            $res = mysqli_query($conn, $sql);
                            if ($res) {
                                unlink($file);
                                header("Location:../course_details.php?task=success");
                            } else {
                                echo "Error";
                            }
                        }
                    }
                }
            }   
    }


    if(isset($_POST['submit_vocational_course_details'])) {
        $targetdir = "./";
        $allowTypes = array('xlsx','xls','csv');
        $file = $_FILES['sheet']['name'];
        $targetFilePath = $targetdir.$file;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["sheet"]["tmp_name"], $targetFilePath)) {
                 // Upload Data from Excel to the Database
                 $objPHPExcel = PHPExcel_IOFactory::load($_FILES['sheet']['name']);
                 foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                     $highestRow = $worksheet->getHighestRow();
                     for ($row=2; $row<=$highestRow; $row++) {
                        $program = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                        $course = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                        $level = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                        $intake_applied = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                        $intake_approved = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                
                        $sql = "INSERT INTO vocational_course(`program`, `course`, `level`, `intake_applied`, `approved_applied`) VALUES ('$program','$course','$level','$intake_applied','$intake_approved');";
                        $res = mysqli_query($conn, $sql);
                        if($res) {
                            unlink($file);
                            header("Location:../vocational_courses.php?task=success");
                        }
                        else {
                            echo("Error");
                        }
                     }
                 }
            }
        }
    }


    if(isset($_POST['submit_land_details'])) {
        $targetdir = "./";
        $allowTypes = array('xlsx','xls','csv');
        $file = $_FILES['sheet']['name'];
        $targetFilePath = $targetdir.$file;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["sheet"]["tmp_name"], $targetFilePath)) {
                // Upload Data from Excel to the Database
                $objPHPExcel = PHPExcel_IOFactory::load($_FILES['sheet']['name']);
                foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                    $highestRow = $worksheet->getHighestRow();
                     for ($row=2; $row<=$highestRow; $row++) {
                        $land_pieces = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                        $land_registered_with = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                        $registration_date = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                        $hilly_area_land = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                        $fsi = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                        
                        $land_piece_area1 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                        $max_distance = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                        $north_south = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                        $latitude_degree = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                        $latitude_minute = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                        $latitude_second = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
                        $east_west = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
                        $longitude_degree = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
                        $longitude_minute = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
                        $longitude_second = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(14, $row)->getValue());
                        $ownership_details = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
                        $is_land_mortgaged = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(16, $row)->getValue());
                        $mortgaged_purpose = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(17, $row)->getValue());
                        $institute_use_campus = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(18, $row)->getValue());
                        $land_use_certificate = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(19, $row)->getValue());
                        $land_use_certificate_date = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(20, $row)->getValue());
                        $additional_land_merger = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(21, $row)->getValue());
                        $land_area_merger = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                
                        $sql = "INSERT INTO `land_details`(`land_registered_with`, `date_of_registration`, `land_in_hilly_area`, `FSI`, `number_of_pieces`, `land_pieces_area1`, `max_distance`, `latitude_degree`, `latitude_minute`, `latitude_second`, `longitude_degree`, `longitude_minute`, `longitude_second`, `ownership_details`, `is_land_mortagaged`, `mortgaged_purpose`, `instittute_going_campus_merger`, `land_certified_issue_by`, `land_certified_issue_date`, `additional_land_for_merger`, `total_land_after_merger`) VALUES ('$land_registered_with','$registration_date','$hilly_area_land','$fsi','$land_pieces','$land_piece_area1','$max_distance','$latitude_degree','$latitude_minute','$longitude_second','$longitude_degree','$longitude_minute','$longitude_second','$ownership_details','$is_land_mortgaged','$mortgaged_purpose','$institute_use_campus','$land_use_certificate','$land_use_certificate_date','$additional_land_merger','$land_area_merger')";
                        $res = mysqli_query($conn, $sql);
                        if($res) {
                            unlink($file);
                            header("Location:../land_details.php?task=success");
                        }
                        else {
                            echo("Error");
                        }
                     }
                }
            }
        }
    }

    if(isset($_POST['submit_laboratory_details'])) {
        $targetdir = "./";
        $allowTypes = array('xlsx','xls','csv');
        $file = $_FILES['sheet']['name'];
        $targetFilePath = $targetdir.$file;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["sheet"]["tmp_name"], $targetFilePath)) {
                // Upload Data from Excel to the Database
                $objPHPExcel = PHPExcel_IOFactory::load($_FILES['sheet']['name']);
                foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                    $highestRow = $worksheet->getHighestRow();
                    for ($row=2; $row<=$highestRow; $row++) {
                        $program = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                        $level = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                        $course = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                        $yearly_experiments_budget = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                        $yearly_consumables_budget = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                        $is_research_pg = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                        $name_laboratory = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                        $lab_major_equipments = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                        $investment_till_date = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                        $building_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                        $building_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(10, $row)->getValue());

                        $sql = "INSERT INTO `laboratory_details`(`program`, `level`, `course`, `year_budget_equip`, `year_budget_consumable`, `is_researchlab_pg`, `name_laboratory`, `lab_major_equipment`, `investment_till_date`, `building_name`, `building_number`) VALUES ('$program','$level','$course','$yearly_experiments_budget','$yearly_consumables_budget','$is_research_pg','$name_laboratory','$lab_major_equipments','$investment_till_date','$building_name','$building_number');";

                        $res = mysqli_query($conn, $sql);
                        if($res) {
                            unlink($file);
                            header("Location:../laboratory_details.php?task=success");
                        }
                        else {
                            echo("Error");
                        }
                    }
                }
            }
        }
    }


    if(isset($_POST['submit_instructional_details'])) {
        $targetdir = "./";
        $allowTypes = array('xlsx','xls','csv');
        $file = $_FILES['sheet']['name'];
        $targetFilePath = $targetdir.$file;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["sheet"]["tmp_name"], $targetFilePath)) {
                // Upload Data from Excel to the Database
                $objPHPExcel = PHPExcel_IOFactory::load($_FILES['sheet']['name']);
                foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                    $highestRow = $worksheet->getHighestRow();
                    for ($row=2; $row<=$highestRow; $row++) {
                        $program = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                        $level = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                        $room_type = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                        $room_id_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                        $area_room = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                        $building_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                        $building_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                        $readiness_flooring = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                        $readiness_wall_painting = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                        $readiness_lighting = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                        $readiness_furniture = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
                        $air_conditioning = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(11, $row)->getValue());

                        $sql = "INSERT INTO `instructional_area`(`program`, `level`, `room_type`, `room_name`, `area_of_room`, `building_name`, `building_no`, `readiness_of_flooring`, `readiness_of_wall`, `readiness_of_electrification`, `readiness_of_furniture`, `air_conditioning`) VALUES ('$program','$level','$room_type','$room_id_name','$area_room','$building_name','$building_number','$readiness_flooring','$readiness_wall_painting','$readiness_lighting','$readiness_furniture','$air_conditioning');";
                        $res = mysqli_query($conn, $sql);
                        if($res) {
                            unlink($file);
                            header("Location:../instructional_area.php?task=success");
                        }
                        else {
                            echo("Error");
                        }
                    }
                }
            }
        }
    }


    if(isset($_POST['submit_student_enrollment_details'])) {
        $targetdir = "./";
        $allowTypes = array('xlsx','xls','csv');
        $file = $_FILES['sheet']['name'];
        $targetFilePath = $targetdir.$file;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["sheet"]["tmp_name"], $targetFilePath)) {
                // Upload Data from Excel to the Database
                $objPHPExcel = PHPExcel_IOFactory::load($_FILES['sheet']['name']);
                foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                    $highestRow = $worksheet->getHighestRow();
                    for ($row=2; $row<=$highestRow; $row++) {
                        $programme_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                        $university_board = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                        $shift = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                        $general_male = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                        $general_female = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                        $obc_male = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                        $obc_female = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                        $sc_male = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                        $sc_female = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                        $st_male = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                        $st_female = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
                        $handicapped_male = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
                        $handicapped_female = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
                        $minority_male = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
                        $minority_female = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(14, $row)->getValue());
                        $tfw_male = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
                        $tfw_female = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(16, $row)->getValue());
                        $nri_male = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(17, $row)->getValue());
                        $nri_female = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(18, $row)->getValue());
                        $pio_male = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(19, $row)->getValue());
                        $pio_female = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(20, $row)->getValue());

                        $sql = "INSERT INTO `student_enrolment_details`(`programme`, `affiliating_university`, `shift`, `general_male_excluding_minority`, `general_female_excluding_minority`, `obc_male`, `obc_female`, `sc_male`, `sc_female`, `st_male`, `st_female`, `physically_handicapped_male`, `physically_handicapped_female`, `minority_male`, `minority_female`, `tfw_male`, `tfw_female`, `nri_male`, `nri_female`, `pio_male`, `pio_female`) VALUES ('$programme_name','$university_board','$shift','$general_male','$general_female','$obc_male','$obc_female','$sc_male','$sc_female','$st_male','$st_female','$handicapped_male','$handicapped_female','$minority_male','$minority_female','$tfw_male','$tfw_female','$nri_male','$nri_female','$pio_male','$pio_female');";

                        $res = mysqli_query($conn, $sql);
                        if($res) {
                            unlink($file);
                            header("Location:../student_enrollment_details.php?task=success");
                        }
                        else {
                            echo("Error");
                        }
                    }
                }
            }
        }   
    }


    if(isset($_POST['submit_pg_scholarship_details'])) {
        $targetdir = "./";
        $allowTypes = array('xlsx','xls','csv');
        $file = $_FILES['sheet']['name'];
        $targetFilePath = $targetdir.$file;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["sheet"]["tmp_name"], $targetFilePath)) {
                // Upload Data from Excel to the Database
                $objPHPExcel = PHPExcel_IOFactory::load($_FILES['sheet']['name']);
                foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                    $highestRow = $worksheet->getHighestRow();
                    for ($row=2; $row<=$highestRow; $row++) {
                        $title = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                        $first_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                        $middle_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                        $last_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                        $mothers_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                        $fathers_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                        $dob = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                        $gender = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                        $address_line1 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                        $address_line2 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                        $address_line3 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
                        $home_state = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
                        $home_district = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
                        $country = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
                        $pincode = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(14, $row)->getValue());
                        $resident_phone = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
                        $mobile_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(16, $row)->getValue());
                        $email = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(17, $row)->getValue());
                        $alternate_email = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(18, $row)->getValue());
                        $religion = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(19, $row)->getValue());
                        $category = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(20, $row)->getValue());
                        $reserve_category = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(21, $row)->getValue());
                        $is_physically_handicapped = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(22, $row)->getValue());
                        $is_economically_backward = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(23, $row)->getValue());
                        $have_aadhar_card = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(24, $row)->getValue());
                        $aadhar_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(25, $row)->getValue());
                        $enrollment_id = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(26, $row)->getValue());
                        $have_npr_card = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(27, $row)->getValue());
                        $npr_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(28, $row)->getValue());
                        $student_status = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(29, $row)->getValue());
                        $level = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(30, $row)->getValue());
                        $program = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(31, $row)->getValue());
                        $course = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(32, $row)->getValue());
                        $course_id = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(33, $row)->getValue());
                        $shift = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(34, $row)->getValue());
                        $full_part_time = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(35, $row)->getValue());
                        $admission_type = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(36, $row)->getValue());
                        $date_admission = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(37, $row)->getValue());
                        $academic_year = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(38, $row)->getValue());
                        $record_created_on = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(39, $row)->getValue());
                        $admitted_tfw = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(40, $row)->getValue());
                        $left_course = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(41, $row)->getValue());
                        $course_leaving_date = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(42, $row)->getValue());
                        $roll_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(43, $row)->getValue());
                        $percentage_marks1 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(44, $row)->getValue());
                        $percentage_marks2 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(45, $row)->getValue());
                        $percentage_marks3 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(46, $row)->getValue());
                        $percentage_marks4 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(47, $row)->getValue());
                        $percentage_marks5 = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(48, $row)->getValue());
                        $exam_type = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(49, $row)->getValue());
                        $gate_gpat_exam_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(50, $row)->getValue());
                        $gate_gpat_score = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(51, $row)->getValue());
                        $gate_gpat_valid_from = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(52, $row)->getValue());
                        $gate_gpat_valid_to = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(53, $row)->getValue());
                        $percentage_gpat_marks = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(54, $row)->getValue());
                        $gate_examination_paper = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(55, $row)->getValue());
                        $marks_100_gate = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(56, $row)->getValue());
                        $qualifying_marks_gate = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(57, $row)->getValue());
                        $institute_fee_paid = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(58, $row)->getValue());
                        $home_hostel = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(59, $row)->getValue());
                        $hostel_month_fees = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(60, $row)->getValue());
                        $claimed_upto_month = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(61, $row)->getValue());
                        $claimed_upto_year = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(62, $row)->getValue());
                        $paid_upto_month = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(63, $row)->getValue());
                        $paid_upto_year = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(64, $row)->getValue());

                        $sql = "INSERT INTO `pg_scholarship`(`title`, `first_name`, `middle_name`, `last_name`, `mothers_name`, `fathers_name`, `dob`, `gender`, `address_line1`, `address_line2`, `address_line3`, `home_state`, `home_district`, `country`, `pincode`, `resident_phone`, `mobile_number`, `email`, `alternate_email`, `religion`, `caste`, `reserve_category`, `physically_handicapped`, `economically_backward`, `have_aadhar_card`, `aadhar_number`, `enrollment_id`, `have_npr_card`, `npr_number`, `student_status`, `level`, `program`, `course`, `course_id`, `shift`, `full_part_time`, `admission_type`, `date_admission`, `academic_year`, `record_created_on`, `admitted_tfw`, `left_course`, `course_leaving_date`, `roll_number`, `marks1`, `marks2`, `marks3`, `marks4`, `marks5`, `exam_type`, `gate_gpat_exam_number`, `gate_gpat_score`, `gate_gpat_valid_from`, `gate_gpat_valid_to`, `percentage_marks_gpat`, `gate_examination_paper`, `marks_gate_100`, `qualifying_marks_gate`, `institute_fees_paid`, `home_hostel`, `hostel_fee_month`, `claimed_upto_month`, `claimed_upto_year`, `paid_upto_month`, `paid_upto_year`) VALUES ('$title','$first_name','$middle_name','$last_name','$mothers_name','$fathers_name','$dob','$gender','$address_line1','$address_line2','$address_line3','$home_state','$home_district','$country','$pincode','$resident_phone','$mobile_number','$email','$alternate_email','$religion','$category','$reserve_category','$is_physically_handicapped','$is_economically_backward','$have_aadhar_card','$aadhar_number','$enrollment_id','$have_npr_card','$npr_number','$student_status','$level','$program','$course','$course_id','$shift','$full_part_time','$admission_type','$date_admission','$academic_year','$record_created_on','$admitted_tfw','$left_course','$course_leaving_date','$roll_number','$percentage_marks1','$percentage_marks2','$percentage_marks3','$percentage_marks4','$percentage_marks5','$exam_type','$gate_gpat_exam_number','$gate_gpat_score','$gate_gpat_valid_from','$gate_gpat_valid_to','$percentage_gpat_marks','$gate_examination_paper','$marks_100_gate','$qualifying_marks_gate','$institute_fee_paid','$home_hostel','$hostel_month_fees','$claimed_upto_month','$claimed_upto_year','$paid_upto_month','$paid_upto_year');";

                        $res  =  mysqli_query($conn, $sql);
                        if($res) {
                            unlink($file);
                            header("Location:../pg_scholarship.php?task=suucess");
                        }
                        else {
                            echo("Error");
                        }
                    }
                }
            }
        }
    }


    if(isset($_POST['submit_building_details'])) {
        $targetdir = "./";
        $allowTypes = array('xlsx','xls','csv');
        $file = $_FILES['sheet']['name'];
        $targetFilePath = $targetdir.$file;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["sheet"]["tmp_name"], $targetFilePath)) {
                // Upload Data from Excel to the Database
                $objPHPExcel = PHPExcel_IOFactory::load($_FILES['sheet']['name']);
                foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                    $highestRow = $worksheet->getHighestRow();
                    for ($row=2; $row<=$highestRow; $row++) {
                        $building_status = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                        $building_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                        $building_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                        $sanctioned_builtup_area = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(3, $row)->getValue());
                        $constructed_builtup_area = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(4, $row)->getValue());
                        $built_up_area_planned = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(5, $row)->getValue());
                        $built_up_area_ready = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                        $approved_carpet_area_instructional = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(7, $row)->getValue());
                        $constructed_carpet_area_instructional = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(8, $row)->getValue());
                        $carpet_area_instructional = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(9, $row)->getValue());
                        $approved_carpet_area_administrative = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(10, $row)->getValue());
                        $constructed_carpet_area_administrative = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(11, $row)->getValue());
                        $carpet_area_administrative = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(12, $row)->getValue());
                        $approved_carpet_area_amenities = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(13, $row)->getValue());
                        $constructed_carpet_area_amenities = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(14, $row)->getValue());
                        $carpet_area_amenities = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(15, $row)->getValue());
                        $access_circulation_area = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(16, $row)->getValue());
                        $total_area_approved = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(17, $row)->getValue());
                        $total_area_constructed = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(18, $row)->getValue());
                        $activities_conducted_building = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(19, $row)->getValue());
                        $activities  = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(20, $row)->getValue());
                        $non_aicte_courses = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(21, $row)->getValue());
                        $toilet_area = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(22, $row)->getValue());
                        $access_circulation_area_norms = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(23, $row)->getValue());
                        $building_plan_authority = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(24, $row)->getValue());
                        $building_plan_approval_date = mysqli_real_escape_string($conn,$worksheet->getCellByColumnAndRow(25, $row)->getValue());
                        $approval_number = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(26, $row)->getValue());

                        $sql = "INSERT INTO `building_details`(`building_status`, `building_name`, `building_number`, `sanctioned_built_area`, `constructed_built_area`, `built_up_area_planned`, `built_up_area_ready`, `approved_carpet_area_instructional`, `constructed_carpet_area_instructional`, `carpet_area_instructional`, `approved_carpet_area_administrative`, `constructed_carpet_area_administrative`, `carpet_area_administrative`, `approved_carpet_area_amenities`, `constructed_carpet_area_amenities`, `carpet_area_amenities`, `access_circulation_area`, `total_area_approved`, `total_area_constructed`, `activities_conducted_building`, `activities_other_than_courses`, `non_aicte_approved_courses`, `toilet_area`, `access_circulation_area_norms`, `building_plan_approving_authority`, `approval_date`, `approval_number`) VALUES ('$building_status','$building_name','$building_number','$sanctioned_builtup_area','$constructed_builtup_area','$built_up_area_planned','$built_up_area_ready','$approved_carpet_area_instructional','$constructed_carpet_area_instructional','$carpet_area_instructional','$approved_carpet_area_administrative','$constructed_carpet_area_administrative','$carpet_area_administrative','$approved_carpet_area_amenities','$constructed_carpet_area_amenities','$carpet_area_amenities','$access_circulation_area','$total_area_approved','$total_area_constructed','$activities_conducted_building','$activities','$non_aicte_courses','$toilet_area','$access_circulation_area_norms','$building_plan_authority','$building_plan_approval_date','$approval_number')";
                        $res = mysqli_query($conn, $sql);
                        if($res) {
                            unlink($file);
                            header("Location:../building_details.php?task=success");
                        }
                        else {
                            echo("Error");
                        }
                    }
                }
            }
        }
    }
?>
