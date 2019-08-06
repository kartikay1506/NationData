<?php
    include 'database.php';
    include 'PHPExcel/IOFactory.php';
    if(isset($_POST['submit'])) {
        $file = $_FILES['sheet']['name'];
        $objPHPExcel = PHPExcel_IOFactory::load($file);
        foreach($objPHPExcel->getWorksheetIterator() as $worksheet) {
            $highestRow = $worksheet->getHighestRow();
            for($row=1; $row<=$highestRow; $row++) {
                $name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
                $email = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
                $sql = "INSERT INTO excel(`name`,`email`) VALUES('$name','$email');";
                $res = mysqli_query($conn, $sql);
                if($res) {
                    echo("Success");
                }
                else {
                    echo("Error");
                }
            }
        }
    }

    /* if(isset($_POST['yoga_day_celebration'])) {
        $insertValues = '';
        $institution_name = mysqli_real_escape_string($conn, $_POST['institution_name']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $district = mysqli_real_escape_string($conn, $_POST['district']);
        $institution_address = mysqli_real_escape_string($conn, $_POST['institution_address']);
        $activities = mysqli_real_escape_string($conn, $_POST['activities']);
        $number_students = mysqli_real_escape_string($conn, $_POST['number_students']);
        $number_faculty = mysqli_real_escape_string($conn, $_POST['number_faculty']);

        $sql = "INSERT INTO `yoga_day_celebration`(`institute_name`, `institute_address`, `institute_state`, `institute_city`, `list_activities_yoga_day`, `students_participated`, `faculty_participated`, `photo`, `date`) VALUES ('$institution_name','$institution_address','$state','$district','$activities','$number_students','$number_faculty','$insertValues', NOW())";
        echo($sql);
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
    } */

    /* if(isset($_POST['download_excel_faculty_details'])) {
        // We'll be outputting an Excel Sheet
        header('Content-type: application/vnd.ms-excel');

        // It will be called Faculty_Details.xls
        header('Content-Disposition: attachment; filename="Faculty_Details.xls"');

        // The Excel source is in faculty_details.xls
        readfile('faculty_details.xls');
    } */

$output = '';
/* if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $query = "INSERT INTO tbl_excel(excel_name, excel_email) VALUES ('".$name."', '".$email."')";
    mysqli_query($connect, $query);
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$email.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
} */
?>