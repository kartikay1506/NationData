<?php 
    include 'database.php';
    session_start();
    if(isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $login_type = mysqli_real_escape_string($conn, $_POST['login_type']);

        $sql = "SELECT * FROM login_details WHERE username = '$username';";
        $res = mysqli_query($conn, $sql);
        $resultChk = mysqli_num_rows($res);
        if($resultChk < 1) {
            echo('<script>alert("No User Found");
            window.location = "../login.php";</script>');
            //header("Location:../signup.php");
        }
        else {
            while($row = mysqli_fetch_assoc($res)) {
                $user = $row['login_type'];
                if($user !== $login_type) {
                    echo('<script>alert("Invalid Login Type! Please Login Again");
                    window.location = "../login.php";</script>');
                }
                $pass = $row['password'];
                if(strcmp($password,$pass) == 0) {
                    $_SESSION['usertype'] = $row['login_type'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['password'] = $row["password"];
                    if($_SESSION['usertype'] === 'data user') {
                        header("Location:../index_admin.php?login=successful");
                    }
                    else {
                        header("Location:../index.php?login=successful");
                    }
                }
                else {
                    echo('<script>alert("Wrong Password! Please Login Again.");
                    window.location = "../login.php";</script>');
                    //header("location:../login.php");
                }
            }
        }
    }

    if(isset($_POST['signup'])) {
        $login_type = mysqli_real_escape_string($conn, $_POST['login_type']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        //$email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $re_password = mysqli_real_escape_string($conn, $_POST['re_password']);
        if(strcmp($password,$re_password) == 0) {
            $sql = "INSERT INTO login_details(login_type,email,username,password) VALUES('$login_type','$email','$username','$password');";
            $res = mysqli_query($conn, $sql);
            if($res) {
                echo('<script>alert("User Created Successfully");
                window.location = "../login.php?signup=successful";</script>');
                //header("Location:../login.php?signup=successful");
            }
        }
    }
    if(!isset($_SESSION['username'])) {
        header("Location:./login.php");
    }
?>