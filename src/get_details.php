<?php 
    include 'database.php';
    $abc = '';
    $name = array('1','2');
    $state = array();
    $district = array();
    $city = array();
    $address = array();
    $contact = array();
    $email = array();
    if(isset($_POST['report'])) {
        $sql = "SELECT * FROM organisation_details WHERE name = 'b'";
        $res = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($res)) {
            $abc = $row['name'];
            $name[] = $abc;
            /* $name[] = $row['name'];
            $state[] = $row['state'];
            $district[] = $row['district'];
            $city[] = $row['city'];
            $address[] = $row['address'];
            $contact[] = $row['land_phone_no'];
            $email[] = $row['email_id']; */
        }
        echo($abc);
        //echo('<script>window.location = "../report1.php";</script>');
        //header("Location:../report1.php");
    }
?>