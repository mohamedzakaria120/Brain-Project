<?php
$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "patient");
$con = mysqli_connect("localhost", "root", "", "patient");

if (mysqli_connect_errno())
{
    echo "faild to connect to MYSQL:".mysqli_connect_error();
}
?>