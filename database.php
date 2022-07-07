<?php
$dbConnection = mysqli_connect("localhost","root","","green_rental_project");

if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL';
    exit();
}
?>