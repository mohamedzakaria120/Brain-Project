<?php
$conn =mysqli_connect('localhost' , 'root' , '' , 'patient');
if (!$conn){
    die ('Error'.mysql_connect_error());
}
