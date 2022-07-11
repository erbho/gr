<?php
include('database.php');

if($_GET['op']=='checkLogin'){
    checkLogin($_POST['username'],$_POST['password']);
}

if($_GET['op']=='logout'){
    logout();
}

if($_GET['op']=='resetPassword'){
    resetPassword();
}

if($_GET['op'=='addNewCar']){
    addNewCar();
}

if($_GET['op'=='deletCar']){
    deletCar();
}

if($_GET['op'=='createOrder']){
    createOrder();
}



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


function resetPassword(){
    global $dbConnection;

    $updatePassword = mysqli_query($dbConnection,"UPDATE `staff` SET `password`='[$_POST('newPassword')]' WHERE `staff_name`=$_POST('name')");

    if($_POST['newPassword']==$_POST['newPasswordConfirmation']){

        mysqli_query($dbConnection, $updatePassword);
        session_start();
        session_destroy();
        header("location: ./staff-login.php");
        
    }else header("location: ./staff-index.php");

}