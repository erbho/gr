<?php
include('database.php');

if($_GET['op']=='checkLogin'){
    checkLogin($_POST['username'],$_POST['password']);
}

if($_GET['op']=='logout'){
    logout();
}

if($_GET['op']=='resetPassword'){
    resetPassword($_POST['newPassword'],$_POST['newPasswordConfirmation']);
}

if($_GET['op']=='addNewCar'){
    addNewCar($_POST['new-carName'],$_POST['new-carRent'],$_POST['new-carImg'],$_POST['new-carEngine'],$_POST['new-carMP'],$_POST['new-carMT'],$_POST['new-carBatteryCapacity'],$_POST['new-carRange'],$_POST['new-carSeating'],$_POST['new-carWeight'],$_POST['new-carDimensions']);
}

/* if($_GET['op'=='deletCar']){
    deletCar();
} */

/* if($_GET['op'=='createOrder']){
    createOrder();
} */



function checkLogin($username,$password){

    global $dbConnection;

    $staffQ = mysqli_query($dbConnection,"SELECT * from `staff` where `username`='".$username."'");
    $staff = mysqli_fetch_assoc($staffQ);

    if($username == $staff['username'] && $password == $staff['password']){
        session_start();
        $_SESSION['name'] = $staff['name'];
        $_SESSION['email'] = $staff['email'];

        header("Location: ./staff-index.php");
    }else header("Location: ./staff-login.php");
}


function logout(){
    session_start();
    session_destroy();
    header('location: ./');
}


function resetPassword($newPassword,$newPasswordConfirmation){
    global $dbConnection;

    $updatePassword = "UPDATE `staff` SET `password`= '$newPassword' WHERE `staff`.`name`='{$_POST['name']}'";

    if($newPassword==$newPasswordConfirmation){

        mysqli_query($dbConnection, $updatePassword);
        echo '<script>alert("Success to reset the new password");
        window.location="./staff-index.php";</script>';

        
    }else{
        echo '<script>alert("Failed to reset the new password");window.location="./staff-index.php";</script>';

    }
}

function addNewCar($carName,$carRent,$carImg,$carEngine,$carMP,$carMT,$carBatteryCapacity,$carRange,$carSeating,$carWeight,$carDimensions){
    global $dbConnection;

    $updatePassword = "INSERT INTO `green_rental_project`.`car`(`name`, `price`, `image`, `engine type`, `max_motor_power`, `max_motor_torque`, `gross_battery_capacity`, `electric_range`, `seating`, `weight`, `dimensions`) VALUES ('$carName','$carRent','$carImg','$carEngine','$carMP','$carMT','$carBatteryCapacity','$carRange','$carSeating','$carWeight','$carDimensions')";

    if(mysqli_query($dbConnection, $updatePassword)){
        echo '<script>alert("Data Updated");
        window.location="./staff-index.php";</script>';

    }else{
        echo '<script>alert("Failed to update the data");window.location="./staff-index.php";</script>'; 
}
}