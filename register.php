<?php
require('db.php');

if(isset($_POST['user_id']) && $_POST['password']){
    $username = $_POST['user_id'];
    $password = $_POST['password'];    
    $sql = "INSERT INTO user (user_id, password)
        VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        header('location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}


require('head.php');

require('header.html');

require('registerForm.php');

    ?>