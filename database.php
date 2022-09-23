<?php
// $dbConnection = mysqli_connect("localhost","root","","green_rental_project");
$dbConnection = mysqli_connect("remotemysql.com","uF7XdAdUgq","WfIkguOSuJ","uF7XdAdUgq");
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL';
    exit();
}
?>
