<?php

require('db.php');
session_start();
if(isset($_POST['user_id']) && $_POST['password']){
    
    $username = $_POST['user_id'];
    $password = $_POST['password'];    
    $query = "SELECT * FROM user WHERE user_id='$username' and password='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    if ($count == 1){
    $_SESSION['username'] = $username;
    
    header("location:index.php");
    }else{
    //If the login credentials doesn't match, he will be shown with an error message.
    $fmsg = "Invalid Login Credentials.";
    echo "login Faile";
    }
}

	 


require('head.php');

require('header.html');

require('loginform.php');
