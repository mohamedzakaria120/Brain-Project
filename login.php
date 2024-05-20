<?php
session_start();
include ('inc/connection.php');

if(isset($_POST['mobile']) && isset($_POST['password'])){

    $mobile = stripcslashes($_POST['mobile']);
    $md5_pass = md5($_POST['password']);
    $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);

    $mobile = htmlentities(mysqli_real_escape_string($conn, $mobile));
    $password = htmlentities(mysqli_real_escape_string($conn, $md5_pass));

    if(empty($mobile)){
        $mob_error = 'please enter phone number!';
        $err_s = 1;
    }

    if(empty($password)){
        $pass_error = 'please enter password';
        $err_s = 1;
        include('Log in page.html');
    }

    if (!isset($err_s)){
        $sql = "SELECT id, mobile, md5_pass, `character` FROM users WHERE mobile='$mobile' AND md5_pass='$md5_pass'";
        $results = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($results);

        if ($row['mobile'] === $mobile && $row['md5_pass'] === $md5_pass){
            $_SESSION['mobile'] = $row['mobile'];
            $_SESSION['id'] = $row['id'];

            // Check for a specific mobile and password
            if ($row['character'] === 'doctor') {
                // Redirect to the appropriate page for a doctor
                header('location:patient_information.php');
                exit();
            }
                elseif (($row['character'] === 'admin') ){
                    header('location:signing up to doctors.html');
                    exit();

                }
                
             else {
                // Redirect to the appropriate page for a regular user
                header('location:index.php');
                exit();
            }
        }
        else {
            header('location:Log in page.html');
            exit();
        }
    }
}
?>
