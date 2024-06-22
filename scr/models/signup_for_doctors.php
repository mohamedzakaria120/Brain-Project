<?php
$conn = new mysqli('localhost', 'root', "", 'patient');

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])){
    $username = stripcslashes(strtolower($_POST['username']));
    $address = stripcslashes($_POST['address']);
    $password = stripcslashes($_POST['password']);
    $mobile = stripcslashes($_POST['mobile']);
    $email = stripcslashes($_POST['email']);
    $character = stripcslashes($_POST['character']);

    // استخدام mysqli_real_escape_string بعد التأكد من تعريف المتغير $conn
    $username = htmlentities(mysqli_real_escape_string($conn, $username));
    $address = htmlentities(mysqli_real_escape_string($conn, $address));
    $password = htmlentities(mysqli_real_escape_string($conn, $password));
    $md5_pass = md5($password);
    $mobile = htmlentities(mysqli_real_escape_string($conn, $mobile));
    $email = htmlentities(mysqli_real_escape_string($conn, $email));
    $character = htmlentities(mysqli_real_escape_string($conn, $character));
    
    $err_s = 0; 

    if(empty($username)){
        $user_error = 'please enter user name !';
        $err_s = 1;
    }
    elseif (strlen($username) < 6 || is_numeric($username)) {
        $user_error = 'Your name needs to have at least 6 letters and should not be a number.<br>';
        $err_s = 1;
    }

    if(empty($password)){
        $pass_error = 'please enter password';
        $err_s = 1;
    }
    elseif (strlen($password) < 6){
        $pass_error = 'Your password needs to have at least 6 letters.<br>';
        $err_s = 1;
        include ('signing up to doctors.php'); 
    }
    else {
        if ($err_s == 0){
            $sql = "INSERT INTO users (`username`, `address`, `password`, `md5_pass`, `mobile`, `email`, `character`)
                    VALUES ('$username', '$address', '$password', '$md5_pass', '$mobile', '$email', '$character')";      
            if (mysqli_query($conn, $sql)) {
                echo '<script type="text/javascript">
                        alert("Account created successfully");
                        window.location="signing up to doctors.php";
                      </script>';
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
}
?>
