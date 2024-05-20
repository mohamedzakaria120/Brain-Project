<?php
$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "doctor");
$con = mysqli_connect("localhost", "root", "", "doctor");
if (mysqli_connect_errno())
{
    echo "faild to connect to MYSQL:".mysqli_connect_error();
}
?>

