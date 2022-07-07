<?php
include('database.php');

if($_GET['op']=='checkLogin'){
    checkLogin($_POST['username'],$_POST['password']);
}

if($_GET['op']=='logout'){
    logout();
}




function checkLogin($username,$password){

    global $dbConnection;

    $staffQ = mysqli_query($dbConnection,"SELECT * from `staff` where `username`='".$username."'");
    $staff = mysqli_fetch_assoc($staffQ);

    if($username == $staff['username'] && $password == $staff['password']){
        session_start();
        $_SESSION['name'] = $staff['name'];

        header("Location: ./staff-index.php");
    }else header("Location: ./staff-login.php");
}




function logout(){
    session_start();
    session_destroy();
    header('location: ./');
}