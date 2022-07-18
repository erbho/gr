<?php
$dbConnection = mysqli_connect("localhost","root","","green_rental_project");
// $dbConnection = mysqli_connect("sql308.epizy.com","epiz_32190800","Ial36MlWn4V","epiz_32190800_green_rental_project");
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL';
    exit();
}
?>